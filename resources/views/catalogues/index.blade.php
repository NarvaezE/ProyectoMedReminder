<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($catalogues as $cat)
          <tr>
            <th scope="row">{{$cat->id}}</th>
            <td>{{$cat->name}}</td>
            <td>{{$cat->description}}</td>
            <td>si</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
