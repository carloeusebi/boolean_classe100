@extends('layouts.main')

@section('main')
    <div class="flex my-5">
        <a href="{{ route('students.index') }}">Indietro</a>
    </div>
    <form method="POST" action="{{ route('students.store') }}">
        @include('includes.form')
    </form>
@endsection
