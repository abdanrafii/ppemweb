@extends('layouts.app')

@section('title', 'Vehicle Manager - Dashboard')

@section('content')

    @if (Auth::user()->role == 'admin')
        <h1>Welcome to Vehicle Manager</h1>
        <p>This is a simple website for managing vehicle data.</p>
        <a href="{{ route('kendaraan.index') }}" class="btn btn-primary mb-2">Manage Vehicles</a>
        <br>
        <form action="{{ url('/logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-secondary">Logout</button>
        </form>
    @elseif (Auth::user()->role == 'user')
        <h1>Welcome to Vehicle Manager</h1>
        <p>This is a simple website for managing vehicle data.</p>
        <a href="{{ route('userindex') }}" class="btn btn-primary mb-2">Manage Vehicles</a>
        <br>
        <form action="{{ url('/logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-secondary">Logout</button>
        </form>
    @endif
@endsection
