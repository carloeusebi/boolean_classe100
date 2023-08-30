@extends('layouts.main')

@section('main')
  <p>io sono il grandissimo {{ $student->surname }} {{ $student->name }}</p>
  <a class="btn btn-warning" href="{{ route('students.edit', $student) }}">Modifica</a>
  <form class="d-inline" method="POST" action="{{ route('students.destroy', $student) }}">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger">Elimina</button>
  </form>
@endsection
