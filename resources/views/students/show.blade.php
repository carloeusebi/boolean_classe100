@extends('layouts.main')

@section('main')
  <p>io sono il grandissimo {{ $student->surname }} {{ $student->name }}</p>
  <a class="btn btn-warning" href="{{ route('students.edit', $student) }}">Modifica</a>
  <a class="btn btn-danger" href="{{ route('students.destroy', $student) }}">Elimina</a>
@endsection
