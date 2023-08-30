@extends('layouts.main')

@section('main')
    <div class="d-flex justify-content-between my-5 align-items-center">
        <a class="btn btn-outline-primary" href="{{ route('home') }}">Torna alla home</a>
        <nav class="navbar bg-light">

            <form class="d-flex" role="search">
                @csrf
                <input class="form-control me-2" type="text" name="filter" placeholder="A chi sei interessato?...">
                <button class="btn btn-outline-success" type="submit">A chi sei interessato?...</button>
            </form>

        </nav>

        <a class="btn btn-outline-primary "href="{{ route('students.create') }}">Crea un nuovo
            studente</a>


    </div>

    <section id="students-list">
        <h1 class="mb-4">i prossimi geni del XXI secolo</h1>
        <ul class="ps-0">
            @foreach ($students as $student)
                <a class="nav-link" href="{{ route('students.show', $student) }}">
                    <li class="text-dark list-group-item mb-1">{{ $student->name }} {{ $student->surname }}</li>
                </a>
            @endforeach
        </ul>
    </section>
@endsection
