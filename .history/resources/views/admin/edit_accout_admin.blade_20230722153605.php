@extends('admin.dashboard')
@section('admin')
<?php 
    $data_admin=Session::get('data');
   
?>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Sửa thông tin tài khoản</h2>
        </div>
        <div class="panel-body">git p
          
            <form method="post" action="/admin/edit-acc-admin/{{$data_admin->id}}" enctype="multipart/form-data">
                @csrf
                <div  class="form-group">
                <input type="hidden" name="_method" value="put">
                 </div>
                 <div class="form-group">
                 <label for="name">Họ và tên admin:</label>

                 <input required="true" name="fullname" type="text" class="form-control" id="title" name="title"
                 value="{{$data_admin->fullname}}" >
             </div>
             <div class="form-group">
                 <label for="name">Số điện thoại:</label>

                 <input required="true" name="phone" type="text" class="form-control" id="title" name="title"
                 value="{{$data_admin->phone}}">
             </div>
             <div class="form-group">
                <label for="name">Tên tài khoản:</label>

                <input required="true" name="username" type="text" class="form-control" id="title" name="title"
                value="{{$data_admin->username}}" disabled>
            </div>
            <div class="form-group">
                <label for="name">Mật khẩu cũ:</label>
                <input required="true" name="password_cu" type="password" class="form-control" id="password_cu">
                @error('error')
                <a style="color: red">{{ $error }}</a>
                @enderror
            </div>
            
             <div class="form-group">
                 <label for="name">Mật khẩu mới:</label>

                 <input required="true" name="password" type="text" class="form-control" id="title" name="title"
                 >
             </div>
                <button type="submit" class="btn btn-success">Sửa</button>
            </form>
        </div>
    </div>
</div>
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
