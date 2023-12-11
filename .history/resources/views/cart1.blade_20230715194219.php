
@if(Session::has('Cart') != null)
  
<div class="select-items" style="margin-left: 20px;  ">
    <table>
        <thead>
            <tr>
                <th>Ảnh</th>
                <th>Tên</th>
                <th>Giá </th>
                <th>Size</th>
                <th>Màu</th>
                <th>Nút</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach(Session::get('Cart')->products as $item)
            <tr>
                <td class="si-pic"><img style="height: 50px;"
                        src="/frontend/img/{{$item['productInfo']->image}}"
                        alt="" /></td>
                <td class="si-text">
                    <div class="product-selected">
                        <p>{{$item['productInfo']->name_product}} </p>

                    </div>
                </td>
                <td class="si-text">
                    <div class="product-selected">
                        <p>{{$item['productInfo']->price}} x {{$item['quanty']}}
                        </p>

                    </div>
                </td>
                <td class="si-text">
                    <div class="product-selected">
                        
                        <p  >{{$item['productInfo']->number_size}}  </p>
                     
                    </div>
                </td>
                <td class="si-text">
                    <div class="product-selected">
                        <p>{{$item['productInfo']->name_color}}  </p>
                         
                    </div>
                </td>
                <td class="si-text delete ">
                    <button class="btn-xoa-cart" data="{{$item['productInfo']->id}}" value="{{$item['productInfo']->id_size.$item['productInfo']->id_color}}">Xoa</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="select-total">
    <span>total:</span>
    <h5>{{(number_format(Session::get('Cart')->totalPrice))}}VNĐ</h5>
    <input hidden type="number" name="" value="{{Session::get('Cart')->totalQuanty}}" id="total-quanty-cart">
</div>
<div class="select-button">
    <a  href="{{url('/List-Cart')}}" class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i>Xem giỏ hàng</a>
    <a href="" class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Mua
        Ngay</a>
</div>

@else 
<p>khong có sản phẩm nào trong giỏ hàng </p>
@endif
