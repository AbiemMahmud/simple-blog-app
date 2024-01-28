<div class="p-3 my-2 border-start border-4 border-primary rounded-2 bg-primary-subtle">
    <p class="m-0 p-0 col-10 fs-5 fw-semibold">{{ $post->title }} </p>
    <p>
        <small class="col-2">Post at {{ $post->created_at->format('d-m-Y H:i:s') }}</small>
        <small class="mb-3">by {{ $post->users->name }}</small>
    </p>
    <p class="fs-6">{{ substr($post->contents->content_text, 0, 700) }}... <a href="#" class="text-primary">Read more...</a> </p>
</div>