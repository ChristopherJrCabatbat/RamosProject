@extends('layout.layout')

@section('title', 'Student Grade')

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

    .grade-output {
        font-size: 20px;
        color: #444;
        margin-bottom: 15px;
    }

    .nested-loop {
        font-size: 16px;
        color: #777;
    }
</style>

<div class="container">
    <h1>Student Grade</h1>

    {{-- Conditional --}}
    <div class="grade-output">
        @if($grade>=97 && $grade<=100)
            <p>{{$grade}} is 1.00</p>
        @elseif($grade>=94 && $grade<=96)
            <p>{{$grade}} is 1.25.</p>
        @elseif($grade>=91 && $grade<=93)
            <p>{{$grade}} is 1.50</p>
        @elseif($grade>=88 && $grade<=90)
            <p>{{$grade}} is 1.75</p>
        @elseif($grade>=85 && $grade<=87)
            <p>{{$grade}} is 2.00</p>
        @elseif($grade>=82 && $grade<=84)
            <p>{{$grade}} is 2.25</p>
        @elseif($grade>=79 && $grade<=81)
            <p>{{$grade}} is 2.50</p>
        @elseif($grade>=76 && $grade<=78)
            <p>{{$grade}} is 2.75.</p>
        @elseif($grade==75)
            <p>{{$grade}} is 3.00</p>
        @elseif($grade>=0 && $grade<=74)
            <p>{{$grade}} is 5.00</p>
        @else
            <p>{{$grade}} is invalid</p>
        @endif
    </div>

    {{-- Loop --}}
    <div class="nested-loop">
        @for($i=5; $i >= 1; $i--)
            @for($j=5; $j>=$i; $j--)
                {{$i}}
            @endfor
            <br>
        @endfor
    </div>
</div>
@endsection
