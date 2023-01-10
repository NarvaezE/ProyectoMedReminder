
@extends('plantilla_login')

@section('title','Iniciar Sesión')


@section('content')

<div class="account-pages pt-5 bg-primary">

    <div class="container ">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Bienvenido a DevStore! </h5>
                                    <p>Inicia sesión para seguir con nosotros</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{asset('images/profile-img.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="auth-logo">
                            <a href="index.html" class="auth-logo-light">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="{{asset('images/logo-light.svg')}}" alt="" class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>

                            <a href="index.html" class="auth-logo-dark">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="{{asset('images/logo.svg')}}" alt="" class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">

                            <form method="post" action="{{url('login')}}" class="form-horizontal" >
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Ingresar correo">
                                    @error('email')<div>{{$message}}</div>@enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Ingresar contraseña" aria-label="Password" aria-describedby="password-addon">
                                        @error('password')<div>{{$message}}</div>@enderror
                                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                    </div>
                                </div>


                                <div class="mt-3 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit" >Iniciar sesión</button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>
                        <p>No tienes una cuenta? <a href="{{route('auth.register')}}" class="fw-medium text-white"> Registrate ahora </a> </p>
                        <p>© <script>document.write(new Date().getFullYear())</script> Creado by DevStore <i class="mdi mdi-heart text-danger"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end account-pages -->
@endsection
