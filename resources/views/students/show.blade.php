@extends('layouts.main')

@section('main')
    <div class="mt-5 text-center">
        <h1>io sono il grandissimo <strong>{{ $student->surname }}
                {{ $student->name }}</strong></h1>
        <p>se vuoi contattarmi per fare affidamento sui miei {{ $student->age }} anni
            di esperienza sei autorizzato a
            contattarmi a questa email: <a href="#">{{ $student->email }}</a></p>
        <a class="btn btn-warning" href="{{ route('students.edit', $student) }}">Modifica</a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elimina {{ $student->surname }} {{ $student->name }}
        </button>

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
                    <form class="d-inline" method="POST" action="{{ route('students.destroy', $student) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
