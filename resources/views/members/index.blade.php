@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard Member') }}</div>

                    <div class="card-body">
                        @role('superadmin|komda|adminuser')
                        <a href="{{ route('members.create') }}" class="btn btn-secondary font-weight-bold">Add
                            Member</a>
                        @endrole
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $member)
                                    <tr>
                                        <td>{{ $member->id }}</td>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->description }}</td>
                                        <td>
                                            <a href="{{ route('members.show', $member->id) }}"
                                                class="btn btn-primary font-weight-bold btn-sm">View</a>
                                            @role('superadmin|adminuser|komda')
                                            <a href="{{ route('members.edit', $member->id) }}"
                                                class="btn btn-success font-weight-bold btn-sm">Edit</a>
                                            <form class="d-inline-block" method="POST"
                                                onsubmit="return confirm('Are you sure?');"
                                                action="{{ route('members.destroy', $member->id) }}">
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
