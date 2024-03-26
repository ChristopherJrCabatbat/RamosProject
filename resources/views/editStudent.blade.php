@extends('layout.layout')

@section('title', 'Student')

@section('content')
<style>
    .center-content {
        text-align: center;
        /* margin-top: 5%; */
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #f0f0f0;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    h1 {
        color: #4CAF50;
        margin-bottom: 20px;
    }

    .form-container {
        display: flex;
        justify-content: center;
        align-content: center;
        margin-bottom: 30px;
    }

    form {
        display: flex;
        flex-direction: column;
        width: 40vw;
    }

    .input {
        display: flex;
        flex-direction: column;
        align-content: flex-start;
        justify-content: flex-start;
        margin-top: 10px;
    }

    input[type="submit"] {
        margin-top: 10px;
        background-color: #4CAF50;
        color: white;
        border-color: transparent;
    }
    input[type="submit"]:hover {
        background-color: rgb(72, 144, 73);
        cursor: pointer;
    }

    .input label {
        align-self: flex-start;
    }

    form input {
        padding: 5px;
    }
</style>

<div class="center-content">
    <h1>Edit Student Form</h1>
    
    <div class="form-container">
        <form action="/students/{{$students->id}}" method="POST">
            @csrf
            @method('PUT') 

            <div class="input">
                <label for="">Student ID</label>
                <input type="text" value="{{ old('studentId', $students->studentId)}}" required name="studentId">
            </div>

            <div class="input">
                <label for="">First Name</label>
                <input type="text" value="{{ $students->fname }}" required name="fname">
            </div>

            <div class="input">
                <label for="">Middle Name</label>
                <input type="text" value="{{ $students->mname }}" required name="mname">
            </div>

            <div class="input">
                <label for="">Last Name</label>
                <input type="text" value="{{ $students->lname }}" required name="lname">
            </div>

            <div class="input">
                <label for="">Email</label>
                <input type="email" value="{{ $students->email }}" required name="email">
            </div>

            <div class="input">
                <label for="">Contact Number</label>
                <input type="number" value="{{ $students->contactno }}" required name="contactno">
            </div>

            <div class="input">
                <label for="">Address</label>
                <input type="text" value="{{ $students->adress }}" required name="adress">
            </div>

            <input type="submit" value="Update Student">
        </form>
    </div>

</div>

@endsection
