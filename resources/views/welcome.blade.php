@extends('layouts.app')

@section('title', 'Vehicle Manager - Dashboard')

@section('content')
    <h1>Welcome to Vehicle Manager</h1>
    <p>This is a simple website for managing vehicle data.</p>
    {{-- //button login  --}}
    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
    {{-- //button register --}}
    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
@endsection
