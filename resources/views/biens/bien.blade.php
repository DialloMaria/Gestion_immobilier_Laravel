<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Accueil - Gestion Immobilière</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
        background: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .sidebar {
        height: 100vh;
        background-color: #1a1a1a;
        position: fixed;
        width: 250px;
        top: 0;
        left: 0;
        padding-top: 60px;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    }

    .sidebar a {
        padding: 15px;
        text-align: center;
        display: block;
        color: #fff;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .sidebar a:hover {
        background-color: #0056b3;
    }

    .content {
        margin-left: 250px;
        padding: 20px;
    }

    .navbar {
        background-color: #0056b3 !important;
    }

    .navbar-brand img {
        filter: brightness(0) invert(1);
    }

    .navbar-nav .nav-link {
        color: #fff !important;
    }

    .carousel-inner img {
        object-fit: cover;
        height: 80vh;
    }

    .carousel-control-prev,
    .carousel-control-next {
        background-color: rgba(0, 0, 0, 0.5);
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        filter: invert(1);
    }

    .container h1 {
        color: #343a40;
        text-align: center;
        margin-bottom: 40px;
        font-size: 2.5rem;
        font-weight: bold;
    }

    .card {
        background-color: #fff;
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .card:hover {
        transform: translateY(-10px);
    }

    .card-title {
        color: #343a40;
        font-weight: bold;
    }

    .card-text {
        color: #6c757d;
    }

    .btn-primary,
    .btn-secondary,
    .btn-danger {
        background-color: #ff6137;
        border-color: #ff6137;
        border-radius: 50px;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-primary:hover,
    .btn-secondary:hover,
    .btn-danger:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>

</head>
<body>
  <div class="sidebar">
    <a href="#"><strong>Accueil</strong></

        <a href="#"><strong>Bien</strong></a>
        <a href="#"><strong>Blog</strong></a>
        <a href="Accueil/ajout"><button class="btn btn-primary w-100 mt-4">Ajouter</button></a>
      </div>
    
      <div class="content">
        {{-- section barre de navigation --}}
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <a class="navbar-brand" href="#">
              <img src="logo.png" alt="Logo" style="height: 40px;">
            </a>
          </div>
        </nav>
    
        {{-- section banniere --}}
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://images.pexels.com/photos/1571470/pexels-photo-1571470.jpeg?auto=compress&cs=tinysrgb&w=600" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&w=600" class="d-block w-100" alt="...">
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
                    <a href="/biens/details/{{$bien->id}}" class="btn btn-primary">Voir plus</a>
                    <a href="/update/{{$bien->id}}" class="btn btn-secondary">Modifier</a>
                  </div>
                  <form action="{{ route('biens.supprimer', $bien->id) }}" method="POST" class="mt-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger w-100">Supprimer</button>
                  </form>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>
    