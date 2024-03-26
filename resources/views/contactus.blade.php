@extends('layout.layout')

@section('title', 'Contact Us')

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
        margin-bottom: 15px;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        font-size: 16px;
        color: #444;
        margin-bottom: 10px;
    }
</style>

<div class="container">
    <h1>Contact Us</h1>
    
    <p>If you have any questions or would like to book a session, please feel free to contact us:</p>
    <ul>
        <li>Email: <a href="mailto:sherlockstudio@gmail.com">sherlockstudio@gmail.com</a></li>
        <li>Phone: <a href="tel:09914553406">123-456-7890</a></li>
        <li>Address: San Carlos City Pang. </li>
    </ul>
</div>
@endsection
