@include('partials.header')

<form action="create" method="post">
@csrf
<div class="mb-3">
    <label class="form-label">إسمك</label>
    <input class="form-control" type="text" name="name" placeholder="إسمك" aria-label="default input example" value="{{ old('name')}}">
    <span class="text-danger">@error('name'){{ $message}}@enderror</span>
  </div>

<

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email')}}">
    <span class="text-danger">@error('email'){{ $message}}@enderror</span>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">الباسورد</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" value="{{ old('password')}}>
    <span class="text-danger">@error('password'){{ $message}}@enderror</span>

  </div>
 
  <button type="submit" class="btn btn-primary">سجل الأن</button>
</form>

@include('partials.footer')
