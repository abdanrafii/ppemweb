@extends('layouts.app')

@section('title', 'Vehicle Manager - Home')

@section('content')
    <h1>Welcome to Vehicle Manager</h1>
    <p>This is a simple website for managing vehicle data.</p>
    <a href="{{ route('kendaraan.index') }}" class="btn btn-primary">Manage Vehicles</a>
@endsection
