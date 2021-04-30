@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard AdminUser') }}</div>

                    <div class="card-body">
                        @role('superadmin|komda|adminuser')
                        <a href="{{ route('adminusers.create') }}" class="btn btn-secondary font-weight-bold">Add
                            Admin User</a>
                        @endrole
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">KOMDA</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($administator as $adminuser)
                                    <tr>
                                        <td>{{ $adminuser->id }}</td>
                                        <td>{{ $adminuser->name }}</td>
                                        <td>{{ $adminuser->komda->username }}</td>
                                        <td>{{ $adminuser->description }}</td>
                                        <td>
                                            @role('superadmin|adminuser|komda')
                                            <form class="d-inline-block" method="POST"
                                                onsubmit="return confirm('Are you sure?');"
                                                action="{{ route('adminusers.destroy', $adminuser->id) }}">
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
