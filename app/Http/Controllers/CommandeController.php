<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\LigneCommande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    public function addCom(Request $request)
    {
        $commande = Commande::where('client_id', Auth::user()->id)->where('etat', 'encours')->first();
        //COMMANDE EXIST
        if ($commande) {
            $lc = new LigneCommande();
            $lc->qte = $request->qte;
            $lc->product_id = $request->product_id;
            $lc->commande_id = $commande->id;
            $lc->save();
            return redirect('/client/cart');
        } else {
            //ADD COMMANDE
            $commande = new Commande();
            $commande->client_id = Auth::user()->id;
            if ($commande->save()) {
                $lc = new LigneCommande();
                $lc->qte = $request->qte;
                $lc->product_id = $request->product_id;
                $lc->commande_id = $commande->id;
                $lc->save();
                return redirect('/client/cart');
            } else {
                return redirect()->back()->with('error', 'commande not passed');
            }
        }
    }
}
