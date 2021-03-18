<ul class="list-unstyled">
            <li><a href="/addproduct" class="text-white">اضف منتج</a></li>
            @foreach ($uniqueCollection as $product)
            <li><a href="/{{$product['category']}}" class="text-white">{{$product['category']}}</a></li>
            @endforeach
          </ul>