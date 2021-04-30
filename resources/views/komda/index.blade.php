@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('List KOMDA') }}</div>

                    <div class="card-body">
                        @role('superadmin')
                        <a href="{{ route('komdas.create') }}" class="btn btn-secondary font-weight-bold">Add
                            KOMDA</a>
                        @endrole
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Regional</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($komdas as $komda)
                                    <tr>
                                        <td>{{ $komda->id }}</td>
                                        <td>{{ $komda->name }}</td>
                                        <td>{{ $komda->username }}</td>
                                        <td>{{ $komda->regional }}</td>
                                        <td>{{ $komda->description }}</td>
                                        <td>
                                            <a href="{{ route('komdas.show', $komda->id) }}"
                                                class="btn btn-primary font-weight-bold btn-sm">View</a>
                                            @role('superadmin|adminuser|komda')
                                            <a href="{{ route('komdas.edit', $komda->id) }}"
                                                class="btn btn-success font-weight-bold btn-sm">Edit</a>
                                            <form class="d-inline-block" method="POST"
                                                onsubmit="return confirm('Are you sure?');"
                                                action="{{ route('komdas.destroy', $komda->id) }}">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="btn btn-danger font-weight-bold btn-sm"
                                                    value="Delete">
                                            </form>
                                            @endrole

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
