
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>App Name - @yield('title')</title>
  
  <style>
    *{
      padding:0;
      margin : 0;
      box-sizing : border-box;    
    }
    header{
      height : 50px;
      width:100%;
      background-color : orange;
    }
    footer{
      width:100%;
      height: 50px;
    }
  </style>
</head>
<body>
  <header>

  </header>
  <nav class="bg-primary">
    <ul class="list-inline">
      <li class="list-inline-item border border-primary">
      1
      </li> 
      <li class="list-inline-item border border-primary">
      1
      </li> 
      <li class="list-inline-item border border-primary">
      1
      </li> 
      <li class="list-inline-item border border-primary">
      1
      </li> 
    </ul>
  </nav>
  <table class="table">
    @yield('table')
  </table>
  <footer class="bg-dark">
    
  </footer>
  @yield('custom')
</body>
</html>
</body>
</html>