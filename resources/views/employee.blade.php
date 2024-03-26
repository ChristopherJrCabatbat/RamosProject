@extends('layout.layout')

@section('title', 'Employee')

@section('content')
<style>
    .center-content {
        text-align: center;
        margin-top: 10%;
    }
</style>

<div class="center-content">
    <h1>Employee Information</h1>
    <p>Name: {{ $name }}</p>
    <p>Age: {{ $age }}</p>
    <p>Department: {{ $department }}</p>
</div>

@endsection