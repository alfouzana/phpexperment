@include('partials.header')

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach ($products as $product)
        <div class="col">
          <div class="card shadow-sm">
          <img src="{{$product->imagelink}}" alt="Girl in a jacket">

            <div class="card-body">
              <p class="card-text">{{$product->name}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <a href="{{$product->productlink}}" class="btn btn-sm btn-outline-secondary">إشتريه من علي إكسبريس</a> 
                </div>
                <small class="text-muted">{{$product->price}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      @include('partials.footer')


