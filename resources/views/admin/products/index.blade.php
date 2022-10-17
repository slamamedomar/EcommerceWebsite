<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Products</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset ('Dashassets/img/favicons/apple-touch-icon.png')}} ">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset ('Dashassets/img/favicons/favicon-32x32.png')}} ">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset ('Dashassets/img/favicons/favicon-16x16.png')}} ">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset ('Dashassets/img/favicons/favicon.ico ')}}">
    <link rel="manifest" href="{{asset ('Dashassets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset ('Dashassets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{asset ('Dashassets/css/phoenix.min.css')}}" rel="stylesheet" id="style-default">
    <link href="{{asset ('Dashassets/css/user.min.css')}}" rel="stylesheet" id="user-style-default">
    <style>
      body {
        opacity: 0;
      }
    </style>

  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">
         @include('inc.admin.sidebar')
         @include('inc.admin.navbar')


        <div class="content">
          <div class="pb-5">
            <div class="row g-5">
              <div class="col-12 col-xxl-6">
                  <h2 class="mb-2">Products</h2>
                <a>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                        Add product
                    </button>
                </a>
                 <div class="mt-3">

                <h4>List of products</h4>
                    <div class="table-responsive table-reponsive-sm">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name product</th>
                              <th scope="col">Description</th>
                              <th scope="col">Price</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Image</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($products as $index => $p)


                            <tr>
                              <th scope="row">{{$index+1}}</th>
                              <td>{{$p->name}} </td>
                              <td>{{$p->description}}</td>
                              <td>{{$p->price}}</td>
                              <td>{{$p->quantity}}</td>
                              <td> <img   src="{{asset('uploads')}}/{{$p->image}}" width="100" height="auto"></td>

                              <td>
                                <a  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editProduct{{$p->id}}">Modifier</a>
                                <a onclick="return confirm ('Voulez vous vraiment supprimer ce produit ?');" href="/admin/products/{{$p->id}}/delete" class="btn btn-danger">Supprimer</a>
                            </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>



            </div>
                 </div>

      </div>
    </main>
    {{-- modal ajout --}}
                      <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="addModalLabel">Add Product</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-times fa-w-11 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg=""><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg> </button>
                            </div>
                            <form action="/admin/products/add" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput1">Category of Product</label>
                                        <select name="cat" class="form-control" >
                                            @foreach ($categories as $c)
                                            <option value="{{$c->id}}">{{$c->name}}</option>

                                            @endforeach

                                        </select>
                                        @error('cat')
                                        <div class="alert alert-danger">
                                            {{$message}}
                                        </div>

                                        @enderror
                                    </div>


                                            <div class="mb-3">
                                                <label class="form-label" for="exampleFormControlInput1">Name of Product</label>
                                                <input name="name" class="form-control" id="exampleFormControlInput1" type="text" placeholder="Name" required="">
                                            @error('name')
                                            <div class="text-danger">
                                                {{$message}}
                                            </div>

                                            @enderror
                                            </div>
                                            <div class="mb-0">
                                                <label class="form-label" for="exampleTextarea">Description</label>
                                                <textarea name="description"  class="form-control" id="exampleTextarea" rows="3" required=""> </textarea>
                                                @error('description')
                                                <div class="text-danger">
                                                    {{$message}}
                                                </div>

                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleFormControlInput1">Price</label>
                                                <input name="price" class="form-control" id="exampleFormControlInput1" type="number" placeholder="$" required="">
                                            @error('price')
                                            <div class="text-danger">
                                                {{$message}}
                                            </div>

                                            @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleFormControlInput1">Quantity</label>
                                                <input name="quantity" class="form-control" id="exampleFormControlInput1" type="number" placeholder="0" required="">
                                            @error('quantity')
                                            <div class="alert alert-danger">
                                                {{$message}}
                                            </div>

                                            @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleFormControlInput1">Image</label>
                                                <input name="image" class="form-control" id="exampleFormControlInput1" type="file" placeholder="Name" required="">
                                            @error('image')
                                            <div class="alert alert-danger">
                                                {{$message}}
                                            </div>

                                            @enderror
                                            </div>

                                </div>
                            <div class="modal-footer"><button class="btn btn-primary" type="submit">Add</button><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
                          </div>
                        </form>
                        </div>
                      </div>

                    @foreach($products as $index => $p)
                      <div class="modal fade" id="editProduct{{$p->id}}" tabindex="-1" aria-labelledby="editProductLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="editProductLabel">Edit Product:  <span class="text-primary">{{$p->name}}</span></h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-times fa-w-11 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg=""><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
                            </div>
                            <form action="/admin/products/update" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">

                                    <label class="form-label" for="exampleFormControlInput1">Category of Product</label>
                                        <select name="cat" class="form-control" >
                                            @foreach ($categories as $c)
                                            <option value="{{$c->id}}">{{$c->name}}</option>

                                            @endforeach

                                        </select>
                                    @error('cat')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>

                                    @enderror

                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput1">Name of Product</label>
                                        <input name="name" class="form-control" id="exampleFormControlInput1" type="text" value="{{$p->name}}" required="">
                                    @error('name')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>

                                    @enderror
                                    </div>
                                    <div class="mb-0">
                                        <label class="form-label" for="exampleTextarea">Description</label>
                                        <textarea name="description"  class="form-control" id="exampleTextarea" rows="3"  >{{$p->description}} </textarea>
                                        @error('description')
                                        <div class="alert alert-danger">
                                            {{$message}}
                                        </div>

                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput1">Price</label>
                                        <input name="price" class="form-control" id="exampleFormControlInput1" type="number"  value="{{$p->price}}" required="">
                                    @error('price')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>

                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput1">Quantity</label>
                                        <input name="quantity" class="form-control" id="exampleFormControlInput1" type="number" value="{{$p->quantity}}" required="">
                                    @error('quantity')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>

                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput1">Image</label>
                                        <input name="image" class="form-control" id="exampleFormControlInput1" type="file" placeholder="Name" required="">
                                    @error('image')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>

                                    @enderror
                                    </div>
                                            <input type="hidden" value="{{$p->id}}" name="id_prod">

                                </div>
                            <div class="modal-footer"><button class="btn btn-primary" type="submit">Edit</button><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
                          </div>
                        </form>
                        </div>
                      </div>
                      @endforeach

    <script src="{{asset ('Dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset ('Dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>
