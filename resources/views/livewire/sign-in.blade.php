<form action="/sign-in" method="post" autocomplete="off">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email: </label>
        <input type="text" name="email" id="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="pass" class="form-label">Password: </label>
        <input type="password" name="password" id="pass" class="form-control">
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirm your password: </label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
    </div>

    <div class="row justify-content-evenly">
        <input wire:loading.remove type="submit" value="Next" class="btn btn-success col-3">
        <button wire:loading class="btn btn-success"><span class="spinner-border spinner-border-sm col-3"></span></button>
        <a href="{{ route('home') }}" class="btn btn-danger col-3">Back</a>
    </div>
</form>