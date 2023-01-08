@extends('plantilla')


@section('title', 'Crear Medicamento')

@section('content')

    <form action="{{ route('medicines.store') }}" method="POST">
        @csrf
        <div class="row text-center">

            <div class="form-group row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" />
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="description">Descripcion</label>
                        <input type="text" name="description" id="lastname" class="form-control" />
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="stock">Stock</label>
                        <input type="number" name="stock" id="stock" class="form-control" />
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">cat</label>
                        {{-- <input type="text" name="cat_id" id="cat_id" class="form-control" /> --}}
                        <select class="form-select" name="catalogue_id" id="">
                            @foreach ($catalogues as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block mb-4">Crear</button>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

@endsection
