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
            <livewire:components.post-feed :post="$post" />
            @endforeach
            @else
            <p class="mx-auto mb-0 w-75 text-center">No post to be found <br> Create your own <a href="">here...</a></p>
            @endif
        </div>
    </div>
</div>