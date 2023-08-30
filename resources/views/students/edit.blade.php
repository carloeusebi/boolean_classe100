@extends('layouts.main')



@section('main')
    <div class="container">
        <h1 class="text-center">Modifica Studente</h1>
        <a class="btn btn-secondary my-3" href="{{ route('students.index') }}">Torna Indietro</a>

        <form method="POST" action="{{ route('students.update', $student) }}">
            @method('PUT')
            @include('includes.form')
        </form>
    </div>
@endsection
