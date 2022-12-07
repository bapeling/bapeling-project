<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Form Registrasi</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
        <style>
            body{
                background-image:url("https://img2.pngdownload.id/20180421/bdw/kisspng-recycling-waste-management-reuse-plastic-environmental-background-5adabcb4b7d947.0501888515242845967531.jpg")
            }
        </style>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-4">
                                    {{-- Error Alert --}}
                                    @if(session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{session('error')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    <div class="card-header">
                                    <img src="assets/img/favicon1.png" style="display:block; margin:auto" alt="" width="80">
                                        <h2 class="text-center font-weight-light my-10">Registrasi</h2>
                                    </div>
                                    <div class="card-body">
                                        <form action="/register" method="POST" id="logRegister">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                @error('login_gagal')
                                                    {{-- <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span> --}}
                                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                        {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                                                        <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    @enderror
                                                <label class="small mb-1" for="inputUsername">Username</label>
                                                <input
                                                    class="form-control py-4"
                                                    id="inputUsername"
                                                    name="username"
                                                    type="text"
                                                    placeholder="Masukkan Username"/>
                                                @if($errors->has('username'))
                                                <span class="error">{{ $errors->first('username') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputname">Nama</label>
                                                <input
                                                    class="form-control py-4"
                                                    id="inputname"
                                                    type="name"
                                                    name="name"
                                                    placeholder="Masukkan name"/>
                                                @if($errors->has('Nama'))
                                                <span class="error">{{ $errors->first('Nama') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmail">Email</label>
                                                <input
                                                    class="form-control py-4"
                                                    id="inputEmail"
                                                    type="email"
                                                    name="email"
                                                    placeholder="Masukkan Email"/>
                                                @if($errors->has('email'))
                                                <span class="error">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputLevel">Level</label>
                                                <input
                                                    class="form-control py-4"
                                                    id="inputLevel"
                                                    type="level"
                                                    name="level"
                                                    placeholder="Masukkan level"/>
                                                @if($errors->has('level'))
                                                <span class="error">{{ $errors->first('level') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input
                                                    class="form-control py-4"
                                                    id="inputPassword"
                                                    type="password"
                                                    name="password"
                                                    placeholder="Masukkan Password"/>
                                                @if($errors->has('password'))
                                                <span class="error">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox"/>
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div
                                                class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary btn-block" type="submit">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                             <a href="/login">Sudah Punya Akun? Silahkan Masuk!</a>
                                        </div>
                                        <div class="small">
                                             <a href="/">Kembali ke Beranda</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
 
        </div>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="{{url('assets/js/scripts.js')}}"></script>
    </body>
</html>