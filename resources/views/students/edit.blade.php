@extends('layouts.main')



@section('main')
    <div class="container">
        <h1 class="text-center">Modifica Studente</h1>
        <a class="btn btn-secondary my-3" href="{{ route('students.index') }}">Torna Indietro</a>

        <form method="POST" action="{{ route('students.update', $student) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="surname" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="surname" name="surname" required>
                    </div>
                </div>
                <div class="col-1">
                    <button type="submit" class="btn btn-success">Salva</button>
                </div>
                <div class="col-1">
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
    </div>
@endsection
