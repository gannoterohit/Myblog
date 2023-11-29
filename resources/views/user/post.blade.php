<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Form</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 
</head>

<body>
    <div class="container mt-4">
        <h2>Post Form</h2>
        <form action="{{ route('store-post') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="taskTitle">post Title</label>
                <input type="text" class="form-control" id="taskTitle" placeholder="Enter post title" name="title"
                    required>
            </div>
            <div class="form-group">
                <label for="taskDescription">post Description</label>
                <textarea class="form-control" id="editor" placeholder="Enter post description" rows="4" name="description"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">save</button>
        </form>

    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: '{{ route('imgupload') . '?_token=' . csrf_token() }}'
                }
            })
            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
