@extends('layouts.main')

@section('main')
    <div class="d-flex justify-content-between my-5">
        <a href="{{ route('home') }}">Torna alla home</a>
        <a href="{{ route('students.create') }}">Crea un nuovo paziente</a>
    </div>
@endsection
