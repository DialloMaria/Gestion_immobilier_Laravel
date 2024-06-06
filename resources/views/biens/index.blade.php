<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil - Gestion Immobilière</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <style>
    .navbar-custom {
      height: 90px; /* Hauteur normale pour la barre de navigation */
    }
    .navbar-custom .nav-link {
      font-size: 1.25rem; /* Taille moyenne pour les écritures */
    }
    .navbar-custom .navbar-brand {
      font-size: 1.6rem; /* Taille un peu plus grande pour le logo/marque */
    }
    .btn-primary {
      font-size: 1rem; /* Taille moyenne pour le bouton */
    }
    footer {
      background-color: #343a40;
      color: #ffffff;
      padding: 40px 0;
    }
    footer .footer-link {
      color: #ffffff;
      text-decoration: none;
      transition: color 0.3s;
    }
    footer .footer-link:hover {
      color: #ff6137;
    }
    footer .social-icons a {
      color: #ffffff;
      font-size: 1.5rem;
      margin: 0 10px;
      transition: color 0.3s;
    }
    footer .social-icons a:hover {
      color: #ff6137;
    }   

  </style>
  <body>

    {{-- section barre de navigation --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
        <div class="container">
          <a class="navbar-brand" href="#">Damask Immobilier</a>
          <div class="collapse navbar-collapse justify-content-center CENTRE" id="navbarNav">
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
                <div class="card text-bg-dark">
                    <img src="https://images.pexels.com/photos/1571470/pexels-photo-1571470.jpeg?auto=compress&cs=tinysrgb&w=600" class="d-block w-100" style="height: 80vh" alt="...">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
                        <h2 class="card-title" style="color: white;">BIENVENUE</h2>
                        <p class="card-text" style="color: white;"> <h3>Sur DAMASK immobilier.</h3></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-bg-dark">
                    <img src="https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  style="height: 80vh" class="d-block w-100" alt="...">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
                        <h2 class="card-title" style="color: white;">BIENVENUE</h2>
                        <p class="card-text" style="color: white;"> <h3>Sur DAMASK immobilier.</h3></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-bg-dark">
                    <img src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&w=600" style="height: 80vh" class="d-block w-100" alt="...">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
                        <h2 class="card-title" style="color: white;">BIENVENUE</h2>
                        <p class="card-text" style="color: black;"> <h3>Sur DAMASK immobilier.</h3></p>
                    </div>
                </div>
            </div>
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
                            {{-- <strong>Adresse :</strong> {{$bien->adresse}}<br>
                            <strong>Statut :</strong> {{$bien->statut}}<br>
                            <strong>Date :</strong> {{$bien->created_at}} --}}
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

    <footer class="mt-5">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h5>Damask Immobilier</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
            </div>
            <div class="col-md-4">
              <h5>Liens rapides</h5>
              <ul class="list-unstyled">
                <li><a href="#" class="footer-link">Accueil</a></li>
                <li><a href="#" class="footer-link">A Propos</a></li>
                <li><a href="#" class="footer-link">Contact</a></li>
                <li><a href="#" class="footer-link">Services</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Suivez-nous</h5>
              <div class="social-icons">
                <a href="#" class="footer-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="footer-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="footer-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="footer-link"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col text-center">
              <p>&copy; 2024 Damask Immobilier. Tous droits réservés.</p>
            </div>
          </div>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>