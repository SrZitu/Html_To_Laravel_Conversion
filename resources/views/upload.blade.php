<!doctype html>
<html lang="en">

<head>
    <title>Upload</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form action="{{url("/upload")}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="mt-4 mb-2">
                <label for="formFile" class="form-label">Upload File</label>
                <input class="form-control" type="file" name="image" id="formFile">
              </div>
              <button class="btn btn-primary">Upload</button>
        </div>

    </form>



</body>

</html>
