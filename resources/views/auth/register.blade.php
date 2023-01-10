@extends('plantilla_login')

@section('title', 'Registrar usuario')


@section('content')

    <div class="account-pages pt-sm-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Registrate </h5>
                                        <p>Obten una cuenta DevStore ahora</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{ asset('images/profile-img.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div>
                                <a href="index.html">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{ asset('images/logo.svg') }}" alt="" class="rounded-circle"
                                                height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form action="{{ route('users.save') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">

                                        <div class="form-group row mb-4">
                                            <label for="name" class="col-form-label ">Nombre</label>
                                            <div class="">
                                                <input id="taskname" name="name" type="text"
                                                    class=" inner form-control" placeholder="Ingresar nombre" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label for="lastname" class="col-form-label ">Apellido</label>
                                            <div class="">
                                                <input id="lastname" name="lastname" type="text"
                                                    class="inner form-control" placeholder="Ingresar apellido" required>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row mb-4">
                                            <label for="rol" class="col-form-label ">Rol</label>
                                            <div class="">
                                                <select name="rol" class="form-select"
                                                    aria-label="Default select example" required>
                                                    <option selected>Selecciona un rol</option>
                                                    <option value="0">Gerente</option>
                                                    <option value="1">Administrador</option>
                                                    <option value="2">Usuario</option>
                                                </select>
                                            </div>
                                        </div> --}}

                                        <div class="form-group row mb-4">
                                            <label for="phone_number" class="col-form-label ">Teléfono</label>
                                            <div class="">
                                                <input id="phone_number" name="phone_number" type="number"
                                                    class=" inner form-control" placeholder="Ingresar teléfono" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label for="email" class="col-form-label ">Correo</label>
                                            <div class="">
                                                <input id="email" name="email" type="email"
                                                    class=" inner form-control" placeholder="Ingresar correo" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label for="password" class="col-form-label">Contraseña</label>
                                            <div class="">
                                                <input id="password" name="password" type="password" class=" inner form-control" placeholder="Ingresar contraseña" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="avatar" class="col-form-label ">Foto</label>
                                            <input type="file" name="avatar" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Añadir usuario</>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="pt-5 mt-5 text-center">

                        <div>
                            <p>Ya tienes una cuenta? <a href="{{ route('auth.login') }}"
                                    class="fw-medium text-primary">Iniciar Sesión</a> </p>
                            <p>©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Creado by DevStore <i class="mdi mdi-heart text-danger"></i>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
