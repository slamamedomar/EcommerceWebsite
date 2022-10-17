<div class="product__item">
    <div class="product__item__pic set-bg" data-setbg="{{asset('uploads')}}/{{$p->image}}">
        <ul class="product__hover">
            <li><a href="#"><img src="{{asset('mainassets/img/icon/heart.png')}}" alt=""></a></li>
            {{-- <li><a href="#"><img src="{{asset('mainassets/img/icon/compare.png')}}" alt=""> <span>Compare</span></a></li> --}}
            <li><a href="/product-details/{{$p->id}}"><img src="{{asset('mainassets/img/icon/search.png')}}" alt=""> <span>Details</span></a></li>
        </ul>
    </div>
    <div class="product__item__text">
        <h6>{{$p->name}}</h6>
        <a href="#" class="add-cart" style="left:0">+ Add To Cart</a>
        <a href="/product-details/{{$p->id}}" class="add-cart"  style="right:0">View Details</a>
        <h5>{{$p->price}}TND</h5>

    </div>
</div>
