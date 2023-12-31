@extends('user.dashboard')
@section('user')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    h1 {
        text-align: center;
    }

    #comment-form {
        margin-bottom: 20px;
    }

    #comment-form input,
    #comment-form textarea,
    #comment-form select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
    }

    #comment-form button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }

    #comments {
        border-top: 1px solid #ccc;
        padding-top: 20px;
    }

    .comment {
        margin-bottom: 10px;
    }

    .comment .username {
        font-weight: bold;
    }

    .comment .rating {
        font-weight: bold;
        color: #FFD700;
    }

    .comment .content {
        margin-top: 5px;
    }
</style>
<!-- Page Header Start -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Shop Detail</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a style="text-decoration: none" href="{{url('/')}}">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0"> <a style="text-decoration: none" href="">Shop Detail</a></p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Shop Detail Start -->
<div class="container-fluid py-5">

    <div class="row px-xl-5">

        <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    <div class="carousel-item active">
                        <img class="w-100 h-100" src="/frontend/img/{{$detail['image']}}" alt="Image">
                    </div>

                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>


        

        

    </div>
    <style>
        .style_comment {
            border: 1px solid #ddd;
            border-radius: 10px;
            background: #ccc;
        }

        .rating {
            display: inline-block;
            vertical-align: middle;
            font-size: 30px;

            cursor: pointer;
        }
    </style>
    <div>
        <p><b>Đánh giá sao</b></p>
        <ul class="list-inline" title="Averge Rating">
            @for($count=1;$count<=5;$count++) @php if($count<=$rating){ $color='color:rgb(209,156,151)' ; } else{
                $color='color:#ccc' ; } @endphp <li title="star_rating" id="{{$detail['id']}}-{{$count}}"
                data-index="{{$count}}" data-id_product="{{$detail['id']}}" data-rating="{{$rating}}" class="rating"
                style="{{$color}}">
                &#9733;
                </li>
                @endfor
        </ul>
    </div>

    <div>
        <p><b>Hiển thị đánh giá</b></p>

        <div class="style_comment" id="scrollableDiv"
            style="max-height: 200px; overflow-y: scroll;background-color:white">
            <?php $n=0 ?>
            @foreach($comment as $item)
            @if($item->status==1)
            <?php $n++ ?>
            <div>{{$n}}: {{$item->comment_name}}. Ngày: {{$item->comment_date}}</div>
            <div>Bình luận: {{$item->comment}}</div>
            @endif
            @endforeach
        </div>

    </div>

    <div>
        <p><b>Viết đánh giá của bạn</b></p>
        <form id="comment-form" method="post" action="{{URL::to('/detail/'.$detail['id'])}}">
            @csrf
            <input type="hidden" name="product_id" value="{{ $detail['id'] }}">
            <input type="text" name="comment_name" id="username" placeholder="Tên người dùng" required>
            <textarea id="content" name="comment" placeholder="Nội dung bình luận" required></textarea>
            <button type="submit">Gửi bình luận</button>
        </form>
    </div>


    <!-- Products Start -->



    <!-- Footer Start -->

    @section('footter')




    @endsection
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    <!-- Template Javascript -->

    {{-- Code phần đánh giá --}}

    <script src="{{url('frontend')}}/js/main.js"></script>
    <script>
        function AddCart(id) {
            // console.log(id);
            let id_color = $("input[name=color]:checked");
            let id_size = $("input[name=size]:checked");
            if (id_color.length > 0 && id_size.length > 0) {
                $.ajax({
                    type: "GET",
                    data: {
                        id_color: id_color.val(),
                        id_size: id_size.val()
                    },
                    url: "/Add-Cart/" + id,
                }).done(function (response) {

                    RenderCart(response);
                    alertify.success('Thêm sản phẩm vào giỏ hàng thành công');


                });
            } else if (id_color.length == 0 && id_size.length > 0) {
                alertify.error('Vui lòng chọn màu');
            } else if (id_color.length > 0 && id_size.length == 0) {
                alertify.error('Vui lòng chọn size');
            } else {
                alertify.error('Vui lòng chọn màu và size');
            }
        }
        function MuaNgay(id) {
            // console.log(id);
            let id_color = $("input[name=color]:checked");
            let id_size = $("input[name=size]:checked");
            if (id_color.length > 0 && id_size.length > 0) {

            $.ajax({
                type: "GET",
                data:{
                    id_color:id_color.val(),
                    id_size:id_size.val()
                },
                url:"/Add-Cart/"+id,
            }).done(function(response){
     
                    RenderCart(response);   

               
                             
            }).fail(function (xhr, status, error) {
            alertify.error('Có lỗi xảy ra. Vui lòng thử lại sau.');
            // console.log(xhr.responseText);
        });
        } else if(id_color.length == 0  && id_size.length > 0 ) {
            alertify.error('Vui lòng chọn màu');
        }else if(id_color.length >  0  && id_size.length ==0 ) {
            alertify.error('Vui lòng chọn size');
        }else{
            alertify.error('Vui lòng chọn màu và size');

                $.ajax({
                    type: "GET",
                    data: {
                        id_color: id_color.val(),
                        id_size: id_size.val()
                    },
                    url: "/Add-Cart/" + id,
                }).done(function (response) {

                    RenderCart(response);



                });
            } else if (id_color.length == 0 && id_size.length > 0) {
                alertify.error('Vui lòng chọn màu');
            } else if (id_color.length > 0 && id_size.length == 0) {
                alertify.error('Vui lòng chọn size');
            } else {
                alertify.error('Vui lòng chọn màu và size');
            }
 
        }
        $('#change-item-cart').on('click', '.btn-xoa-cart', function () {
            //console.log($(this).data('id'));
            $.ajax({
                type: "GET",
                data: {
                    id_color_size: $(this).val()
                },
                url: "/Delete-Item-Cart/" + $(this).attr('data'),

            }).done(function (response) {

                RenderCart(response);
                alertify.success('Xóa sản phẩm trong giỏ hàng thành công');

            });
        });
        function RenderCart(response) {


            $('#change-item-cart').empty();
            $('#change-item-cart').html(response);
            if ($('#total-quanty-cart').val() != undefined) {

                $('#total-quanty-show').text($('#total-quanty-cart').val());
            }
            else {
                $('#total-quanty-show').text('0');
            }
            // console.log( $('#total-quanty-cart').val());
        }
        //đánh giá sao
        function remove_background(id_product) {
            for (var count = 1; count <= 5; count++) {
                $('#' + id_product + '-' + count).css('color', '#ccc');
            }
        }
        //hower chuột đánh giá sao 
        $(document).on('mouseenter', '.rating', function () {
            var index = $(this).data("index");
            var id_product = $(this).data("id_product");
            remove_background(id_product);
            for (var count = 1; count <= index; count++) {
                $('#' + id_product + '-' + count).css('color', 'rgb(209,156,151)');
            }
        });
        //nhả chuột đánh giá sao
        $(document).on('mouseleave', '.rating', function () {
            var index = $(this).data("index");
            var id_product = $(this).data("id_product");
            var rating = $(this).data("rating");
            remove_background(id_product);
            for (var count = 1; count <= rating; count++) {
                $('#' + id_product + '-' + count).css('color', 'rgb(209,156,151)');
            }
        });
        //click đánh giá sao 
        $(document).on('click', '.rating', function () {
            var index = $(this).data("index");
            var id_product = $(this).data("id_product");
            console.log($(this))
            // var _token=$('input[name="_token"]').val();
            $.ajax({
                url: "{{url('insert-rating')}}",
                method: "POST",
                data: {
                    index: index,
                    id_product: id_product
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {

                    if (data == 'done') {
                        alert("Bạn đã đánh giá " + index + "trên 5");
                    }
                    else {
                        ("Lỗi đánh giá");
                    }
                }
            })
        });
    </script>
    @endsection