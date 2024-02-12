<form action="/sign-in/profile" method="post" enctype="multipart/form-data" autocomplete="off" id="my-form">
    @csrf
    <div class="d-flex justify-content-center gap-3">
        <div class="col">
            <div class="mb-3">
                <label for="username" class="form-label"><span class="text-danger">*</span>Username: </label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">Tell me about you: </label>
                <textarea name="bio" id="bio" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="image" class="form-label">Profile picture: </label>
                <input accept="image/*" type="file" name="input-profile" id="image" class="form-control">
            </div>
            <div class="" style="height: 400px">
                <div id="basic" class="w-100 mx-auto"></div>
            </div>
        </div>
    </div>

    <input type="submit" value="Finish" id="submit" class="btn btn-success">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
            }
        });

        var basic = $('#basic').croppie({
            enableExif: true,
            enableOrientation: true,
            viewport: {
                width: 300,
                height: 300,
                type: 'circle'
            },
            boundary: {
                width: 300,
                height: 300
            }
        });
        $("#image").on('change', function () {
            var reader = new FileReader();
            reader.onload = (e) => {
                basic.croppie('bind', {
                    url: e.target.result
                }).then(() => {
                    console.log("ss1");
                });
            }
            reader.readAsDataURL(this.files[0]);
        });
        $("#submit").on('click', function (ev) {
            if (!$('#image').val()) {
                console.log('no image selected');
                return 0;
            }
            basic.croppie('result', {
                type: 'blob',
                size: 'viewport',
                format: 'png',
                circle: false
            }).then(function (blob) {
                var formData = new FormData();
                formData.append('image', blob);

                $.ajax({
                    url: '/set-pp',
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"').attr('value')
                    }
                }).then(response => { });
            });
        });

    </script>
</form>