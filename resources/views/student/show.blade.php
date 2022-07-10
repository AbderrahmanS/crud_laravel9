@extends('components.layout')

@section('title')
    Etudiant
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
            /* padding-bottom: 10px; */
            /* padding-top: 10px; */
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
        h3{
            text-align: center;
        }
    </style>
@endsection


@section('content')
    <div class="container">
        <h3>Infos étudiant:</h3>
        <div class="infos">
            <table>
                <tr>
                    <th>Nom</th>
                    <td>:</td>
                    <td></td>
                    <td>{{$student->nom}}</td>
                </tr>
                <tr>
                    <th>Préom</th>
                    <td>:</td>
                    <td></td>
                    <td>{{$student->prénom}}</td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td>:</td>
                    <td></td>
                    <td>{{$student->age}}</td>
                </tr>
                <tr>
                    <th>Filière</th>
                    <td>:</td>
                    <td></td>
                    <td>{{$student->filière}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
