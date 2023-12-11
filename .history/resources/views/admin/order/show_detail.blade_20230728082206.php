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
                                <strong class="card-title">Bảng Chi tiết đơn hàng</strong>
                            </div>
                            <div class="card-body">
                              
                                <table class="table table-striped table-bordered"> 
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>ID Đơn Hàng</th>
                                            <th>Hình ảnh</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Giá</th>
                                            <th>Màu</th>
                                            <th>Size</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $n=0 ?>
                                  @foreach($order as $item)
                                       <?php $n++ ?>
                                       <td>{{$n}}</td>
                                       <td>{{$item->id_order}}</td>
                                       <td><img style="max-width: 200px; height 200px;" src="{{ URL::to('/frontend/img/'.$item->image)}}"></td>
                                       <td>{{$item->name_product}}</td>
                                        <td>{{$item->quantity}}</td>
                                        <td>{{number_format($item->price,0,'.','.')}} VNĐ</td>
                                        <td>{{$item->color}}</td>
                                        <td>{{$item->size}}</td>
                                    </tbody>
                                    
                               @endforeach
                                </table>
                               <div>
                                @foreach($order as $item)
                                  <td>Tổng giá: {{number_format($item->quantity,0,'.','.')}} VNĐ</td>  
                                  @endforeach
                                </div>
                                <div>
                                <button class="btn btn-outline-success" style="margin-bottom: 15px;"><a href="{{URL::to('admin/order/')}}"> Trở về Đơn Hàng </a></button>
                                </div>
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
