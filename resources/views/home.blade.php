@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h1>Hello {{ Auth::user()->name }}</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-md-12">
            
        </div>
    </div>
</div>
@endsection
