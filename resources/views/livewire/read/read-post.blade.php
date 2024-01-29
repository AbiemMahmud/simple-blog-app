<div class="container-fluid">
    <!-- Backgroud -->
    <div class="bg-primary z-n1" style="height: 450px;"></div>
    <div class="container mx-auto z-3 position-absolute top-0 start-50" style="transform: translateX(-50%);">
        <header class="py-3 d-flex justify-content-between">
            <a href="{{ url()->previous() }}">
                <svg class="icon icon-md f-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                </svg>
            </a>
            <a href="">
                <svg class="icon-md f-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                </svg>
            </a>
        </header>
        <section id="body">
            <div class="p-4 bg-light">
                <h2>{{ $post->title }}</h2>
                <i class="text-secondary">{{ $time }} </i> <br>
                <i class="">By <strong> {{ $post->users->name }} </strong></i>
                <hr class="mb-5 text-dark">


                <p>{!! $content !!}</p>
            </div>
        </section>

        <section id="comment">
            <h6>This will be the comment session</h6>
            <div class="bg-danger" style="width: 50px; height: 50px;"></div>
            <input type="text" name="" id="" class="form-control">
            <p>ivbvbjvfbsadvbamsndv sdv</p>
        </section>
    </div>
</div>