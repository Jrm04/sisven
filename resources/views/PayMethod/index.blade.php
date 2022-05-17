<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pay Methods List</title>
  </head>
  <body>
    <div class="container">
  <h1>Pay Methods List</h1>
  <a href="{{route('paymethod.create')}}" class="btn btn-success">Add</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Other Details</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pay_methods as $pay_method)
    <tr>
      <th scope="row">{{$pay_method -> id}}</th>
      <td>{{$pay_method -> name}}</td>
      <td>{{$pay_method -> other_details}}</td>
      <td>
        <a href="{{route('paymethod.edit', ['paymethod' => $pay_method->id]) }}"
        class="btn btn-info"> Edit</a></li>
        <form action="{{route('paymethod.destroy', ['paymethod' => $pay_method->id])}}" method="POST" style="display: inline-block"> 
        @method('delete') 
        @csrf
        <input class="btn btn-danger" type="submit" value="Detele">

      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</ul>
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