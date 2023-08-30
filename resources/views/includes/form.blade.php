    @csrf

    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" required
                    value="{{ $student->name }}">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="surname" class="form-label">Cognome</label>
                <input type="text" class="form-control" id="surname" name="surname" required
                    value="{{ $student->surname }}">
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
