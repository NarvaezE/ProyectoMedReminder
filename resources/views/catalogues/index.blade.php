@extends('plantilla')


@section('title', 'Index Cupones')

@section('content')

    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($catalogues as $cat)
                <tr>
                    <th scope="row">{{ $cat->id }}</th>
                    <td>{{ $cat->name }}</td>
                    <td>{{ $cat->description }}</td>
                    <td>si</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
