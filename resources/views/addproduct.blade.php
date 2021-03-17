@include('partials.header')

<div class="row">

<form action="submit" method="post">

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">إسم المنتج</label>
  <input class="form-control" id="exampleFormControlInput1"name="productname" placeholder="إسم المنتج">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">سعر المنتج</label>
  <input class="form-control" id="exampleFormControlInput1" name="price" placeholder="سعر المنتج">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">رابط المنتج</label>
  <input class="form-control" id="exampleFormControlInput1" name="link" placeholder="الرابط">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">رابط الصورة</label>
  <input class="form-control" id="exampleFormControlInput1" name="imgurl" placeholder="الرابط">
</div>

<div class="mb-3">
<label for="exampleDataList" class="form-label">القسم</label>
<input class="form-control" list="datalistOptions" id="exampleDataList" name="cat" placeholder="Type to search...">
<datalist id="datalistOptions">
  <option value="الإلكترونيات">
  <option value="الملابس">
  <option value="الإنارة">
  <option value="مستلزمات المنزل">
  <option value="تحف">
</datalist>
</div>

<div class="mb-3">
<button type="submit" class="btn btn-primary btn-lg">إضافة المنتج</button>
</div>
</form>

</div>
@include('partials.footer')
