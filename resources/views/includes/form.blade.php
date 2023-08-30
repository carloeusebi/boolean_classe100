<form method="POST" action="{{ route('students.store') }}">
  @csrf

  <label for="name">Nome: </label>
  <input type="text" id="name" name="name">

  <label for="surname">Cognome: </label>
  <input type="text" id="surname" name="surname">

  <button>Invia</button>

</form>
