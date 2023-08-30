<form method="POST" action="{{ route('students.store') }}">
  @csrf

  <div>
    <label for="name">Nome: </label>
    <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name">
    @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mt-3">
    <label for="surname">Cognome: </label>
    <input class="form-control @error('surname') is-invalid @enderror" type="text" id="surname" name="surname">
    @error('surname')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <button class="mt-3 btn btn-primary">Invia</button>

</form>
