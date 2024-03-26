@extends('layout.layout')

@section('title', 'Student')

@section('content')
    <style>
        main {
            margin-top: 0;
        }

        .center-content {
            text-align: center;
            margin-top: 10%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
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
        }

        .div-top {
            display: flex;
            justify-content: center;
            align-content: center;
            margin-bottom: 20px;
            gap: 20px;
        }

        .div-top a {
            align-self: center;
            text-align: center;
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            padding: 5px;
            border-radius: 5px;
        }

        .actions {
            display: flex;
            gap: 5px;
        }
        
        .actions a, .actions input[type="submit"] {
            /* background-color: white; */
            text-decoration: none;
            color: white;
            padding: 5px;
            font-size: 1rem;

        }
        .actions a, .actions input[type="submit"]:hover {
            cursor: pointer;
        }

        .view {
            background-color: blue;
        }
        .view:hover {
            background-color: rgb(0, 0, 119);
        }
        .edit {
            background-color: green;
        }
        .edit:hover {
            background-color: rgba(0, 79, 0);
        }
        .delete {
            background-color: red;
            border-color: transparent;
        }
        .delete:hover {
            background-color: rgb(150, 0, 0);
        }
    </style>

    <div class="center-content">
        <div class="div-top">
            <h1>Student Information</h1>
            <a href="students/create">Add Student</a>
        </div>

        @isset($error)
            <p>{{ $error }}</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($student as $stud)
                        <tr>
                            <td>{{ $stud->studentId }}</td>
                            <td>{{ $stud->fname }}</td>
                            <td>{{ $stud->mname }}</td>
                            <td>{{ $stud->lname }}</td>
                            <td>{{ $stud->email }}</td>
                            <td>{{ $stud->contactno }}</td>
                            <td>{{ $stud->adress }}</td>
                            <td class="actions">
                                <a class="view" href="students/{{$stud->id}}">View</a>
                                <a class="edit" href="students/{{$stud->id}}/edit">Edit</a>
                              
                                <form action="{{ route('students.destroy', $stud->id) }}" method="POST" >
                                  @csrf 
                                  @method('DELETE')
                                  <input class="delete" type="submit" name="submit" value="Delete" /> </form>
                              </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @endisset
    </div>

@endsection
