@extends('admin.dashboard')
@section('admin')
<?php
     $data=Session::get('data');
    $role=Session::get('role');
?>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Bảng Coupon</strong>
                                <br>
                                <strong style="color: red" class="card-title">{{session('mess')}}</strong>
                            </div>
                            <div class="col-lg-6 col-6 text-left">
                                <form action="/admin/size/" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="kw" placeholder="Tìm kiếm id sản phẩm">
                                        <div class="input-group-append">
                                            <input type="submit" class="input-group-text bg-transparent text-primary" value="Tìm Kiếm">
                                                
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                @foreach ($role as $k=>$v)
                                @if($v->role_module=="role_create_coupon")
                                <a href="{{URL::to('/admin/coupon/create') }}">
                                    <button class="btn btn-outline-primary" style="margin-bottom: 15px;"><i class="fa fa-star"></i>Thêm Coupon</button>
                                </a>
                                @endif
                                @endforeach
                                <table class="table table-striped table-bordered"> 
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên Mã Giảm Giá</th>
                                            <th>Code giảm giá</th>
                                            <th>Số lượng mã</th>
                                            <th>Điều kiện giảm giá</th>
                                            <th>Số giảm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $n=0 ?>
                                       @foreach ($coupon as $item)
                                       

                                       <?php $n++ ?>
                                       <td>{{$n}}</td>
                                    
                                       <td>{{$item->coupon_name}}</td>
                                     
                                        <td>{{$item->coupon_code}}</td>
                                        <td>{{$item->coupon_quanti}}</td>
                                        <td>@</td>
                                        <td>{{$item->coupon_number}}</td>
                                        {{-- @foreach ($role as $k=>$v) --}}
                                        {{-- @if($v->role_module=="role_edit_size")
                                            <td>
                                                
                                                <a href="size/edit/{{$item->id_size}}">
                                                <button  class="btn btn-outline-secondary">
                                                <i class="fa fa-edit"></i>Sửa</button>
                                                </a>
                                            </td>
                                            @endif
                                            @if($v->role_module=="role_delete_size")
                                            <td>
                                                
                                                <form action="size/delete/{{$item->id_size}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button onclick="return confirm('Bạn chắc chắn muốn xóa?')" class="btn btn-outline-danger" style="margin-bottom: 15px;"><i class="ti-trash"></i> Xóa</button>
                                                </form>
                                            </td>
                                            @endif --}}
                                            {{-- @endforeach --}}
                                            
                                    </tbody>
                                    @endforeach
                                </table>
                                {{$coupon->links()}}
                           
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

     

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{url('backend')}}/js/main.js"></script>


    <script src="{{url('backend')}}/js/lib/data-table/datatables.min.js"></script>
    <script src="{{url('backend')}}/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="{{url('backend')}}/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="{{url('backend')}}/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="{{url('backend')}}/js/lib/data-table/jszip.min.js"></script>
    <script src="{{url('backend')}}/js/lib/data-table/vfs_fonts.js"></script>
    <script src="{{url('backend')}}/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="{{url('backend')}}/js/lib/data-table/buttons.print.min.js"></script>
    <script src="{{url('backend')}}/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="{{url('backend')}}/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
@endsection
