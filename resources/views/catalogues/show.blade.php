@extends('plantilla')


@section('title', 'Index Cupones')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-3">
                                    <h4 class="text-primary">Detalles Catalogo</h4>

                                </div>
                            </div>
                            <div class="col-5 align-self-end">

                                <img src="{{ asset('img/avatars/' . $catalogue->avatar) }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-sm-6">
                                {{-- <div class="avatar-md profile-catalogue-wid mb-4">
                                    <img src="{{ asset('img/avatars/' . $catalogue->avatar) }}" alt=""
                                        class="img-thumbnail">
                                </div> --}}
                                <h4 class="font-size-20 text-truncate">{{ $catalogue->name}}</h4>

                            </div>

                        </div>
                    </div>
                    <div class="col-sm-3 end-start">
                        <form action="{{ route('catalogues.destroy', $catalogue) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <a href="{{ route('catalogues.edit', $catalogue) }}" class="btn btn-warning">Edit</a>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-12">Información</h4>


                            <div class="table">
                                <table class="table table-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row">ID:</th>
                                            <td>{{ $catalogue->id }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nombre:</th>
                                            <td>{{ $catalogue->name }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Descripcion:</th>
                                            <td>{{ $catalogue->description }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>

                <!-- end card -->


            </div>
        </div>
    </div>
@endsection
