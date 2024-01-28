<div class="container-fluid">
    <div class="w-25 mx-auto p-3 border border-dark-subtle rounded bg-light">
        <h2>Make your profile</h2>
        <form action="" method="post" autocomplete="off">
            <div class="mb-3">
                <label for="username" class="form-label"><span class="text-danger">*</span>Username: </label>
                <input wire:model="username" type="text" name="username" id="username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">Tell me about you: </label>
                <textarea wire:model="bio" name="bio" id="bio" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="profile" class="form-label">Profile picture: </label>
                <input wire:model="profile" accept="image/*" type="file" name="profile" id="profile" class="form-control">
            </div>

            <input wire:loading.remove wire:click.prevent="update" type="submit" value="Finish" class="btn btn-success">
            <button wire:loading class="btn btn-success"><span class="spinner-border spinner-border-sm"></span></button>
        </form>
    </div>
</div>