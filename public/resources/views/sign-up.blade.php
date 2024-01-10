
        <div class="login-register">        
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
