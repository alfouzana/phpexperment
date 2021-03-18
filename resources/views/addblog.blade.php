@include('partials.header')


<form action="submit" method="post">
<input type="hidden" name="method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@csrf

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">عنوان المدونة</label>
  <input class="form-control form-control-lg" name="blogtitle" type="text" placeholder="عنوان المدونة" aria-label=".form-control-lg example">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">صورة العرض</label>
  <input class="form-control form-control-lg" name="imgurl" type="text" placeholder="صورة العرض" aria-label=".form-control-lg example">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">مقدمة المدونة</label>
  <textarea class="form-control" id="exampleFormControlTextarea1"  name="caption" rows="3"></textarea>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">تفاصيل المدونة</label>
  <textarea id="summernote"  rows="6" name="blogpost"></textarea></div>
  <div class="mb-3">
  <button class="btn btn-primary" type="submit">إضافة مدونة</button>
  </div>
</form>



@include('partials.footer')
