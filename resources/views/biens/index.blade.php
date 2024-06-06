<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil - Gestion Immobilière</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    {{-- section barre de navigation --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <a class="navbar-brand" href="#">Damask Immobilier
                {{-- <img src="logo.png" alt="Damask Immobilier" style="height: 40px;"> --}}
            </a>
            
 
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"><strong>Accueil</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><strong>A Propos</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><strong>Contact</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true"></a>
                    </li>
                </ul>
            </div>
            
    
            <div class="navbar-nav ml-auto">
               <a href="login"><button class="btn btn-primary" type="button">Se connecter</button></a> 
            </div>
        </div>
    </nav>

    {{-- section banniere --}}
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/1571470/pexels-photo-1571470.jpeg?auto=compress&cs=tinysrgb&w=600" class="d-block w-100" style="height: 80vh" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  style="height: 80vh" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&w=600" style="height: 80vh" class="d-block w-100" alt="...">

            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-5">
        <h1 class="mb-4">Nos Biens Immobiliers</h1>
        <div class="row">
            @foreach ($biens as $bien)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{$bien->image}}" class="card-img-top" alt="Image du bien">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{$bien->nom}}</h5>
                        <p class="card-text flex-grow-1">
                            <strong>Catégorie :</strong> {{$bien->categorie}}<br>
                            <strong>Description :</strong> {{ Str::limit($bien->description , 100);}}<br>
                            <strong>Adresse :</strong> {{$bien->adresse}}<br>
                            <strong>Statut :</strong> {{$bien->statut}}<br>
                            <strong>Date :</strong> {{$bien->created_at}}
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="/biens/details/{{$bien->id}}" class="btn btn-primary">En savoir +</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>