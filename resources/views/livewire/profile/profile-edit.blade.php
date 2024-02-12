<div class="container-fluid pb-4 bg-info">
    <header class="py-3 d-flex justify-content-between">
        <a href="{{ url()->previous() }}">
            <svg class="icon icon-md f-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
        </a>
        <a href="">
            <svg class="icon-md f-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
            </svg>
        </a>
    </header>

    <div class="container p-3 bg-light">
        <img src="{{ $img }}" alt="" class="profile-lg d-block mt-4 mb-3 rounded-circle mx-auto">
        <h1 class="my-4 text-center">{{ $user->name }} </h1>

        <div class="w-75 mx-auto">
            <h2>About the Author</h2>
            <p>{!! nl2br($user->bio) !!} </p>
            <h2>Join since</h2>
            <p>{{ nl2br($user->created_at->format('d-m-Y H:i:s')) }} </p>
        </div>

        <div class="d-flex justify-content-center gap-4">
            <a href="{{ route('edit-profile')}}" class="btn btn-info">Edit Profile</a>
            <button class="btn btn-danger">Change Password</button>
        </div>

    </div>
</div>