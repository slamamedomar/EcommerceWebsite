<section class="product spad">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">Best Sellers</li>
                    <li data-filter=".new-arrivals">New Arrivals</li>
                    <li data-filter=".hot-sales">Hot Sales</li>
                </ul>
            </div>
        </div>
        <div class="row product__filter">
            @foreach ($products->take(8) as $index => $p)
             @if ($index%2!=0)
             <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                @include('inc.guest.productItem')
            </div>


            @else
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                @include('inc.guest.productItem')

            </div>

            @endif
            @endforeach


        </div>
    </div>
</section>
