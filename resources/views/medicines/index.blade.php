@extends('plantilla')


@section('title', 'Index Medicamentos')

@section('content')
    <h2 class="card-title">Medicinas</h2>
    <a class="btn btn-success" href="{{ route('medicines.create') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle"
            viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path
                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </svg>
        Añadir nuevo medicina</a>
    <p class="card-title-desc">
    </p>
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicines as $med)
                <tr>
                    <th scope="row">{{ $med->id }}</th>
                    <td>{{ $med->name }}</td>
                    <td>{{ $med->description }}</td>
                    <td>
                        <form action="{{ route('medicines.destroy',$med) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <a href="{{ route('medicines.show',$med) }}" class="btn btn-info">Details</a>
                            <a href="{{ route('medicines.edit',$med) }}" class="btn btn-warning">Edit</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
