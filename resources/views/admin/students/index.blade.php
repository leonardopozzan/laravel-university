@extends('layouts.admin')
@section('content')

    <div class="list">
        <div class="table-container">
            @if(session()->has('message'))
            <div class="alert alert-success mb-3 mt-3 w-75 m-auto">
                {{ session()->get('message') }}
            </div>
            @endif
            <a href="{{route('admin.students.create')}}" class="text-white"><button class="btn btn-primary mb-2"><i class="fa-solid fa-plus"></i></button></a>
            <table>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <th scope="row">{{$student->id}}</th>
                            <td><a href="{{route('admin.students.show', $student->registration_number)}}" title="View student">{{$student->name}}</a></td>
                            <td>{{$student->surname}}</td>
                            <td>{{$student->email}}</td>
                            <td><a class="link-secondary" href="{{route('admin.students.edit', $student->registration_number)}}" title="Edit student"><i class="fa-solid fa-pen"></i></a></td>
                            <td>
                                <form action="{{route('admin.students.destroy', $student->registration_number)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button btn btn-danger ms-3" data-item-title="{{$student->name}}"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection