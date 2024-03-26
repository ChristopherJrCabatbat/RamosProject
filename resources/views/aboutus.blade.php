@extends('layout.layout')

@section('title', 'About Us')

@section('content')
<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        font-size: 36px;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }

    p {
        font-size: 18px;
        line-height: 1.6;
        color: #666;
    }
</style>

<div class="container">
    <h1>About Us</h1>
    <p>Sherlock Studio is a premiere photography and videography studio dedicated to capturing your special moments with creativity and precision. Our team of experienced professionals is committed to providing exceptional service and delivering stunning results.</p>
</div>
@endsection
