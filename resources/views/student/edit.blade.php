@extends('components.layout')

@section('title')
    Modifier
@endsection

@section('style')
<style>
    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .container{
        width: 30%;
        padding-bottom: 10px;
        padding-top: 10px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
</style>
@endsection

@section('content')
    <div class="container">
        <form action="{{url('/student/'.$student->id)}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="mb-3">
            <input type="text" class="form-control" id="nom" name="nom" value="{{$student->nom}}">
            </div>
            <div class="mb-3">
            <input type="text" class="form-control" id="prénom" name="prénom" value="{{$student->prénom}}">
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" id="age" name="age" value="{{$student->age}}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="filière" name="filière" value="{{$student->filière}}">
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
@endsection
