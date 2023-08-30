@extends('layouts.main')


@section('main')
    <div class="container">
        <div class="d-flex justify-content-center my-5 gap-3">
            <a href="{{ route('students.index') }}">Visualizza studenti</a>
        </div>
    </div>
@endsection
