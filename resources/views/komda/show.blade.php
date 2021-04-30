@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Member') }}</div>

                    <div class="card-body">
                        <a href="{{ route('komdas.index') }}" class="btn btn-secondary font-weight-bold">Back</a>

                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $komda->id }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $komda->name }}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $komda->username }}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $komda->regional }}</h6>
                                <p class="card-text">{{ $komda->description }}</p>
                            </div>
                        </div>
                    </div>
                @endsection
