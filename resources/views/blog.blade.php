@include('partials.header')

@foreach ($blogs as $blog)

<div class="col">
            <div class="card">
              <div class="row g-0">
                <div class="col-md-4">
                <img src="{{$blog->imgurl}}" class="card-img-top" style="width: 200px; height: 300px" alt="">

                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <a href="/article/{{$blog->blogtitle}}"><h5 class="card-title">{{$blog->blogtitle}}</h5></a>
                    <p class="card-text">{{$blog->caption}}ً</p>
                    <p class="card-text"><small class="text-muted">{{$blog->updated_at}}</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
</br>

          @endforeach

@include('partials.footer')
