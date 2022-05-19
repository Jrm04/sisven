<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CREATE Product</title>
  </head>
  <body>
      <div class="container">
          <h1>CREATE Product</h1>
          <form method="POST" action="{{route('products.store')}}">
              @csrf
              <div class="mb-3">
                  <label for="id" class="form-label">ID</label>
                  <input type="text" class="form-control" name="id" id="id" aria-describedby="idHelp">
                  <div id="idHelp" class="form-text">Product Id</div>
              </div>
              <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name">
                  <div id="nameHelp" class="form-text">Product Name</div>
              </div>
              <div class="mb-3">
                  <label for="description" class="form-label">Product Price</label>
                  <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelp">
                  <div id="priceHelp" class="form-text">Products Price</div>
              </div>
              <div class="mb-3">
                  <label for="description" class="form-label">Product Stock</label>
                  <input type="text" class="form-control" name="stock" id="stock" aria-describedby="StockHelp">
                  <div id="other_detailsHelp" class="form-text">Products Stock</div>
              </div>

              <div class="mb-3">
              <select class="from-select" aria-label="Default select example" name="id_categories" id="">
                  <option selected disabled value="">Select ...</option>
                  @foreach($categories as $categorie)
                  <option value="{{ $categorie -> id}}">{{ $categorie -> name}}</option>
                  @endforeach
              </select>
              </div>
              <div class="mb-3">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a href="{{ route('products.index')}}" class="btn btn-warning">Cancel</a>
              </div>
          </form>

      </div>  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>