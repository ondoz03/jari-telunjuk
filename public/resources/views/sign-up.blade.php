<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/monster-admin')}}/assets/images/favicon.png">
    <title>Monster Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/assets/monster-admin')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('/assets/monster-admin')}}/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('/assets/monster-admin')}}/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url({{ asset('/assets/monster-admin')}}/assets/images/background/login-register.jpg);">        
            <div class="login-box card">
            <div class="card-body">
                <form method="POST" class="form-horizontal form-material" id="loginform" action="{{route('sign-in.sign-up.create')}}" enctype="multipart/form-data">
                @csrf
                    <h3 class="box-title mb-3">Sign Up</h3>
                    <input type="hidden" id="category_book" name="category_book" value="">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="name" required="" placeholder="Nama"> </div>
                        @error('name')
                            <code>{{ $message }}</code>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" name="email" required="" placeholder="Email"> </div>
                        @error('email')
                            <code>{{ $message }}</code>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required="" placeholder="Password"> </div>
                        @error('password')
                            <code>{{ $message }}</code>
                        @enderror
                    </div>
                    <div class="form-group text-center mt-3">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" name="submit">Create Account</button>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="col-sm-12 text-center">
                            <p>Or</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-center">
                            <div class="social">
                                <a href="{{route('auth.google')}}" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus"></i> </a>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal" id="recoverform" action="index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email"> </div>
                    </div>
                    <div class="form-group text-center mt-3">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
        
    </section>
    </main>
    <script src="{{ asset('/assets/monster-admin')}}/assets/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript">
            $( document ).ready(function() {
                $("#category_book").val(localStorage.getItem("selected-category-book"));

                $.ajax({
                     url: "{{ route('ajax.set-session') }}",
                     type: "POST",
                     data: { 
                            "_token": "{{ csrf_token() }}",
                            category_session: localStorage.getItem("selected-category-book")},
                     success: function(data) {
                        console.log('set_session_ok');
                        console.log(data);
                    },
                });   
            });
        </script> 

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('/assets/monster-admin')}}/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{ asset('/assets/monster-admin')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('/assets/monster-admin')}}/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="{{ asset('/assets/monster-admin')}}/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('/assets/monster-admin')}}/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="{{ asset('/assets/monster-admin')}}/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('/assets/monster-admin')}}/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('/assets/monster-admin')}}/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>