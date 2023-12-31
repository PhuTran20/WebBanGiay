 
 

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Login </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
    
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/main.css')}}">
    <!--===============================================================================================-->
    </head>
    <body>
        
        <div class="limiter">
            <div class="container-login100" style="background-image: url('frontend/img/bg-01.jpg');">
                <div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-54">
                    <form class="login100-form validate-form" action="{{URL::to('/')}}" id="formlogin" method="post">
                        @csrf
                        <span class="login100-form-title p-b-35">
                            ĐĂNG NHẬP
                        </span>
    
                        <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                            <span class="label-input100">Tài khoản</span>
                            <input class="input100" type="text" name="username" placeholder="Nhập tên tài khoản">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>
    
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <span class="label-input100">Mật khẩu</span>
                            <input class="input100" type="password" name="password" placeholder="Nhập mật khẩu">
                            <span class="focus-input100" data-symbol="&#xf190;"></span>
                        </div>
                        
                        <div class="text-right p-t-8 p-b-31">
                            <a href="#">
                                Quên mật khẩu?
                            </a>
                        </div>
                        <div class="text-right p-t-8 p-b-31" style="color:red; text-align: center;">
                        <?php
                        $message = Session::get('message');
                        if($message){
                            echo $message;
                            Session::put('message',null);
                        }
                        ?>
                         </div>
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" type="submit">
                                    ĐĂNG NHẬP
                                </button>
                            </div>
                        </div>
    
                        <div class="txt1 text-center p-t-40 p-b-20">
                            <span>
                                Hoặc đăng nhập bẳng
                            </span>
                        </div>
    
                        <div class="flex-c-m" >
                            <a href="/login/login-google" class="login100-social-item bg3">
                                <i class="fa fa-google"></i>
                            </a>
                        </div>
    
                        <div class="flex-col-c p-t-50">
                         
    
                            
                             <p>Bạn chưa có tài khoản, <a href="{{URL::to('/register') }}" class="txt2"  style="text-decoration: none">
                                ĐĂNG KÍ NGAY
                            </a></p>
                        </div>
                        <div class="flex-col-c p-t-20">
                         
    
                            
                              <p>
                                Quay lại <a href="{{URL::to('') }}" class="txt2"  style="text-decoration: none">
                                    TRANG Chủ
                              </a>
                              </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    
        <div id="dropDownSelect1"></div>
        
    <!--===============================================================================================-->
        <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
        <script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('frontend/js/main.js')}}"></script>
    
    </body>
    </html>
     
  

 