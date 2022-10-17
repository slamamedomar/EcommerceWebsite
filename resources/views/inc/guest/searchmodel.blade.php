<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form" action="/product/search" method="POST" >
            @csrf
            <input type="text"  placeholder="Search for products..." name="keywords">
        </form>
    </div>
</div>
<!-- Search End -->
