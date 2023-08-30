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
        <h1 class="mb-4 text-center">I Prossimi Geni del XXI secolo</h1>
        <div class="row">
            @foreach ($students as $student)
                <div class="col-md-3">
                    <div class="card mb-4 bg-secondary text-white">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $student->name }} {{ $student->surname }}</h5>
                            <a href="{{ route('students.show', $student) }}" class="btn btn-success">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
