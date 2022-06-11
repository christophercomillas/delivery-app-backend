@extends('layouts.main')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cities</h1>
    </div>

    <div class="row">
        <div class="card mx-auto">

            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                    {{ session('message') }}
                    </div>
                @endif
            </div>

            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form method="GET" action="{{ route('cities.index') }}">
                            <div class="form-row align-items-center">
                                <div class="col">
                                    <input type="text" class="form-control mb-2" name="search" id="inlineFormInput">
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div>
                        <a href="{{ route('cities.create') }}" class="btn btn-primary mb-2">Create</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">State Name</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cities as $city)
                        <tr scopre="row">
                            <td>{{ $city->id }}</td>
                            <td>{{ $city->state->name }}</td>
                            <td>{{ $city->name }}</td>
                            <td><a href="{{ route('cities.edit', $city->id) }}" class="btn btn-success">Edit</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection