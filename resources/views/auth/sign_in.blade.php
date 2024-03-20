<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <h1 class="text-center">
        Sign In
    </h1>

    <form action="{{ route('sign_in') }}" method="POST">
        @csrf
        <div class="m-3 row">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="name">
            </div>
        </div>


        <div class="m-3 row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <input type="email" class="form-control" name="email">
            </div>
        </div>

        <div class="m-3 row">
            <label class="col-sm-2 col-form-label">Passwrod</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" name="password">
            </div>
        </div>

        <div class="m-3 row">
            <input type="submit" class="btn btn-success w-50" value="submit">
        </div>
    </form>

</body>

</html>
