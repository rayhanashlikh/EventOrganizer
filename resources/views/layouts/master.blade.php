<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    @yield('title')

    @yield('css')


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/user">Beranda</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="about">Tentang</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="contact">Kontak</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Daftar</button> &nbsp 
        <button class="btn btn-primary my-2 my-sm-0" type="submit"><a href="">Masuk</a></button>
        </form>
    </div>
    </nav>
        
    @yield('header')
    @yield('content')
    <footer class="jumbotron bg-light"> 
        <div class="row"> 
            <div class="col-lg-6"> © Copyright SANTREN KODING 2018 </div> 
            <div class="col-lg-6 text-right"> 
                <a href="" class="btn btn-outline-primary"> back to top </a> 
            </div> 
        </div> 
    </footer>
    
    
    @yield('js')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>