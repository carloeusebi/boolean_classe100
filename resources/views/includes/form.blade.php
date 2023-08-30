    @csrf

    <div class="row">
      <div class="col-12">
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
            value="{{ $student->name ?? old('name') }}">
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
      </div>
      <div class="col-12">
        <div class="mb-3">
          <label for="surname" class="form-label">Cognome</label>
          <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname"
            name="surname" value="{{ $student->surname ?? old('surname') }}">
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
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
