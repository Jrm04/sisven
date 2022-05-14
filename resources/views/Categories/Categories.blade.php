<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories List</title>
</head>
<body>
  <div class="container">
  <h1>Categories List</h1>
  <a href="{{route('client.create')}}" class="btn btn-success">Add</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $categorie)
    <tr>
      <th scope="row">{{categorie -> id}}</th>
      <td>{{categorie -> name}}</td>
      <td>{{categorie -> descrption}}</td>
      <td>
        <a href="{{route('categories.edit', ['categorie' => $categorie->id])}}"
        class="btn btn-info"> Edit</a></li>
        <form action="{{route('categories.destroy', ['categorie' => $categorie->id])}}" method="POST" style="display: inline-block">
        @method('delete')
        @csrf
        <input class="btn btn-danger" type="submit" value="Detele">
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>