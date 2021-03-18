@include('partials.header')


<form action="submit" method="post">
<input type="hidden" name="method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">"
@csrf

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">عنوان المدونة</label>
  <input class="form-control form-control-lg" name="blogtitle" type="text" placeholder="عنوان المدونة" aria-label=".form-control-lg example">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">تفاصيل المدونة</label>
  <textarea id="summernote" name="blogpost"></textarea></div>
  <div class="mb-3">
  <button class="btn btn-primary" type="submit">إضافة مدونة</button>
  </div>
</form>



@include('partials.footer')
