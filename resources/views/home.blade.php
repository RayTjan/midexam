@extends('layouts.app')

@section('content')
<div class="headFlag ">
    <h1 class="nunito centerAlign">Welcome Admin</h1>
</div>
<div class="container">
    <br>
    <div class="row justify-content-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            {{ __('You are logged in!') }}

    </div>
    <br>
    <div class="row justify-content-center">
        <a  href="{{ url('/') }}">
            <button href="{{ url('/') }}"class="btn nunito greenButton">Create, Edit, Update & Delete some data!</button>
        </a>
    </div>
</div>
@endsection
