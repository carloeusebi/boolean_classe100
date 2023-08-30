@extends('layouts.main')

@section('main')
    <div class="d-flex justify-content-between my-5">
        <a href="{{ route('home') }}">Torna alla home</a>
        <a href="{{ route('students.create') }}">Crea un nuovo studente</a>
    </div>

    <section id="students-list">
        <ul>
            @foreach ($students as $student)
                <a href="{{ route('students.show', $student) }}">
                    <li>{{ $student->name }} {{ $student->surname }}</li>
                </a>
            @endforeach
        </ul>
    </section>
@endsection
