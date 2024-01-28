<div>
    <livewire:components.header />
    <livewire:components.side-menu :user="$user" :active_id="2" />

    <div class="container p-3 main-panel">
        <form action="/post/create" method="post">
            @csrf
            <div class="mb-3 row justify-content-center align-items-center gap-4">
                <label for="title" class="m-0 form-label col-1 d-inline fs-5 fw-semibold col-2">Title: </label>
                <input type="text" name="title" id="title" class="form-control d-inline w-50 col-8">

                <input type="submit" value="Post" class="btn btn-primary col-2" tabindex="-1">
            </div>
            <div class="mb-3">
                <textarea name="content" id="content" cols="300" rows="25" class="form-control"></textarea>
            </div>
        </form>
    </div>
</div>