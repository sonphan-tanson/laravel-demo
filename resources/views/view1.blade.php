<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="{{ route('sum') }}" method="POST">
    {{csrf_field()}}
    <input type="number" name="so1" placeholder="so1">
    <input type="number" name="so2" placeholder="so2">
    <input type="number" name="so3" placeholder="so3">
    <button type="submit">submit</button>
  </form>
</body>
</html>