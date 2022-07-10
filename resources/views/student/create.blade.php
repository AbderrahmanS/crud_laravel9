@extends('components.layout')

@section('title')
    Ajouter
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
        <form action="{{url('/student')}}" method="POST">
            @csrf
            <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" >
            </div>
            <div class="mb-3">
            <label for="prénom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prénom" name="prénom">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age">
            </div>
            <div class="mb-3">
                <label for="prénom" class="form-label">Filière</label>
                <input type="text" class="form-control" id="filière" name="filière">
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

@endsection
