<div>
    <livewire:components.header />
    <livewire:components.side-menu :user="$user" :active_id="0" />

    <div class="container p-3 main-panel">
        <div class="mb-3 dashboard-panel">
            <div class="p-4 mb-3 bg-warning">
                <span class="fs-4 fw-bold">My Post : {{ $post_count }}</span>
            </div>
            <div class="row px-2 gap-3">
                <div class="p-4 bg-warning col">
                    <span class="fs-4 fw-bold">My Comments : {{ $comment_count }} </span>
                </div>
                <div class="p-4 bg-warning col">
                    <span class="fs-4 fw-bold">Total Comments : {{ $comment_count }} </span>
                </div>
            </div>
        </div>

        <div class="mb-3 p-4 post-panel bg-light">
            <p class="fs-5 fw-bold pb-2 border-bottom border-warning border-3">See other's posts</p>
            @if (!$posts->isEmpty())
            <!-- This will be populate with posts -->
            @foreach ($posts as $post)
            <div class="p-3 mb-2 border-start border-4 border-primary rounded-2 bg-primary-subtle">
                <div class="row m-0 justify-content-between">
                    <p class="m-0 fs-5 fw-semibold">{{ $post->title }} </p>
                    <small class="d-block">{{ $post->create_at }}</small>
                </div>
                <small class="mb-3">{{ $post->users->name }}</small>
                <p class="fs-6">{{ $post->contents->content_text }} </p>
            </div>
            @endforeach
            @else
            <p class="mx-auto mb-0 w-75 text-center">No post to be found <br> Create your own <a href="">here...</a></p>
            @endif
        </div>
    </div>
</div>