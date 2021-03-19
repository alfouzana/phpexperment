@include('partials.header')

@foreach ($blogs as $blog)

<div class="col">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{$blog->blogtitle}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">عبدالله الفوزان</h6>
    {{$blog->blogpost}}
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>


          @endforeach

@include('partials.footer')
