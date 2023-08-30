@extends('layouts.main')

@section('main')
    <div class="mt-5">

        <p>io sono il grandissimo {{ $student->surname }} {{ $student->name }}</p>
        <a class="btn btn-warning" href="{{ route('students.edit', $student) }}">Modifica</a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elimina {{ $student->surname }} {{ $student->name }}
        </button>
        <form class="d-inline" method="POST" action="{{ route('students.destroy', $student) }}">
            @csrf
            @method('DELETE')
        </form>

    </div>

    <!-- Button trigger modal -->
    {{-- DELETE MODAL --}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina studente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sei sicuro di voler eliminare {{ $student->surname }} {{ $student->name }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chudi</button>
                    <button type="button" class="btn btn-danger">Elimina</button>
                </div>
            </div>
        </div>
    </div>
@endsection
