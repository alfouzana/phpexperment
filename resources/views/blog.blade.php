@include('partials.header')

@foreach ($blog as $blog)

<div class="col">
            <div class="card">
              <div class="row g-0">
                <div class="col-md-4">
                <img src="{{$blog->imgurl}}" class="card-img-top" alt="">

                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">{{$blog->blogtitle}}</h5>
                    <p class="card-text">{{$blog->caption}}ً</p>
                    <p class="card-text"><small class="text-muted">{{$blog->updated_at}</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>


          @endforeach

@include('partials.footer')
