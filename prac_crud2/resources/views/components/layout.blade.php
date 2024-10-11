<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>CRUD 2</title>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </head>

<body>
   <nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-3">
       <div class="container-fluid">
{{--       <a class="navbar-brand" href="{{ route('note.index') }}">CRUD2</a>--}}
           <a class="navbar-brand" href="{{ route('note.index') }}">CRUD2</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
           <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="collapsibleNavbar">
           <ul class="navbar-nav">
               <li class="nav-item">
                   <a href="{{ route('note.insert') }}" class="nav-link is('note.insert')?active:">Insert</a>
               </li>

               <li class="nav-item">
                   <a href="{{ route('note.show') }}" class="nav-link">Show</a>
               </li>

               <li class="nav-item dropdown">
                   <a href="" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Dropdown</a>
                       <ul class="dropdown-menu">
                           <li><a href="" class="dropdown-item">Link</a></li>
                           <li><a href="" class="dropdown-item">Another Link</a></li>
                           <li><a href="" class="dropdown-item">Third Link</a></li>
                       </ul>
               </li>
           </ul>
       </div>
       </div>
   </nav>

  <div>{{ $slot }}</div>
</body>
</html>
