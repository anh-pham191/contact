@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <h1>{{$user->name}}</h1>
                    <h1>{{$user->address}}</h1>
                    <h1>{{$user->dob}}</h1>
                    <h1>{{$user->tel}}</h1>
                </div>
                <div id="example"></div>
            </div>
        </div>
    </div>
</div>
@endsection
