<form action="/login" method="post">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email: </label>
        <input type="text" name="email" id="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="pass" class="form-label">Password: </label>
        <input type="password" name="password" id="pass" class="form-control">
    </div>

    <div class="row justify-content-evenly">
        <input type="submit" value="Login" class="btn btn-success col-3" wire:loading.remove>
        <button class="btn btn-success col-3" wire:loading>
            <span class="spinner-border spinner-border-sm"></span> Loading
        </button>
        @if (!$modal)
        <a href="{{ route('home') }}" class="btn btn-danger col-3">Back</a>
        @endif
    </div>
</form>