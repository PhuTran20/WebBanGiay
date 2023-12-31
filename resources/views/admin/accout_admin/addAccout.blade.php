@extends('admin.dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thêm Tài khoản Admin</h2>
        </div>
        <div class="panel-body">
            <form method="post" action="{{URL::to('/admin/accout/create')}}" enctype="multipart/form-data">
               @csrf
                <div class="form-group">
                    <label for="name">Họ Tên Admin:</label>

                    <input required="true" name="fullname" type="text" class="form-control" id="title" name="title"
                    class="@error('fullname') form-control is-invalid @enderror"   >
                </div>
                @error('fullname') 
                <div class="" style="color:red">{{$message}} </div>
                 @enderror
                <div class="form-group">
                    <label for="name">Số điện thoại:</label>
                    <input required="true" name="phone" type="text" class="form-control" id="title" name="title"
                    class="@error('phone') form-control is-invalid @enderror"    >
                </div>
                @error('phone') 
                <div class="" style="color:red">{{$message}} </div>
                @enderror
                <div class="form-group">
                    <label for="name">Tên tài khoản:</label>

                    <input required="true" name="username" type="text" class="form-control" id="title" name="title"
                    class="@error('username') form-control is-invalid @enderror"   >
                </div>
                @error('username') 
                <div class="" style="color:red">{{$message}} </div>
                @enderror
                <div class="form-group">
                    <label for="name">Mật khẩu:</label>

                    <input required="true" name="password" type="password" class="form-control" id="title" 
                    class="@error('password') form-control is-invalid @enderror">
                       
                </div>
                @error('password') 
                <div class="" style="color:red">{{$message}} </div>
                @enderror
                <button class="btn btn-success">Lưu</button>
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