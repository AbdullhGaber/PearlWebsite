<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('products.store') }}" method="POST">
     @csrf
    <div class="m-3 row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control"  name="name">
        </div>
    </div>


    <div class="m-3 row">
        <label class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-5">
          <input type="text" class="form-control"  name="price">
        </div>
    </div>


    <div class="m-3 row">
        <label class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-5">
          <textarea type="text" class="form-control"  name="description"></textarea>
        </div>
    </div>


    <div class="m-3 row">
        <label class="col-sm-2 col-form-label">Effective material</label>
        <div class="col-sm-5">
          <input type="text" class="form-control"  name="effective_material">
        </div>
    </div>

    <div class="m-3 row">
        <label class="col-sm-2 col-form-label">Manufacturing country</label>
        <div class="col-sm-5">
          <input type="text" class="form-control"  name="manufacturing_country">
        </div>
    </div>


    <div class="m-3 row">
        <label class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-5">
          <input type="file" class="form-control-file"  name="image">
        </div>
    </div>


    <div class="m-3 row">
        <label class="col-sm-2 col-form-label">Skin type</label>
        <div class="col-md-5">
            <select  name="skin_types[]" class="form-control" id="">
                <option value="normal">normal</option>
                <option value="combintation">combintation</option>
                <option value="oily">oily</option>
                <option value="dry">dry</option>
           </select>
        </div>
    </div>

    <div class="m-3 row">
        <label class="col-sm-2 col-form-label">Brand</label>
        <div class="col-sm-5">
          <input type="text" class="form-control"  name="brand">
        </div>
    </div>


    <div class="m-3 row">
          <input type="submit" class="btn btn-success w-50" value="submit">
    </div>
    </form>

</body>
</html>
