@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                </div>
            </div>

            <div class="m-5 text-center">
                <h3>
                    <a href="{{route('admin.admin.index')}}">You managed to log, congratulations! <br> Check these 1992's records</a>
                </h3>
            </div>
        </div>
    </div>
</div>
@endsection
