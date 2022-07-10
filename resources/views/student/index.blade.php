@extends('components.layout')

@section('style')
<style>
    .title{
        display: flex;
        justify-content: center;
        align-content: center;
        margin-bottom: 1rem;
        background-color: #efeeee;
    }
    button {
        border: none;
        background: white;
    }
    .fa-trash-alt:before, .fa-trash-can:before {
    content: "\f2ed";
    color: red;
    }
    .fa-edit:before, .fa-pen-to-square:before {
    content: "\f044";
    color: blue;
    }
    .fa-arrows-to-eye:before {
    content: "\e4bf";
    color: green;
    }
</style>
@endsection

@section('content')
    <div class="title">
        <h1>CRUD laravel9</h1>
    </div>
    <div class="container">
        <a href="{{url('/student/create')}}"><button type="button" class="btn btn-success mb-5">Nouveau étudiant</button></a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col" >Actions</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->nom}}</td>
                    <td>{{$student->prénom}}</td>
                    <td>
                        <a href="{{url('/student/'.$student->id)}}"><button><i class="fa-solid fa-arrows-to-eye"></i></button></a>
                        <a href="{{url('/student/'.$student->id.'/edit')}}"><button><i class="fa-solid fa-pen-to-square"></i></button></a>
                        <form action="{{url('/student/'.$student->id)}}" method="post" style="display: inline">
                            {{ method_field('DELETE') }}
                            @csrf
                            <button><i class="fa-solid fa-trash-can"></i></button>
                        </form>

                    </td>
                </tr>
            @endforeach


            </tbody>
          </table>
    </div>

@endsection
