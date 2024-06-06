<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Accueil - Gestion Immobilière</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    .navbar-custom {
      height: 90px;
    }
    .navbar-custom .nav-link {
      font-size: 1.25rem;
    }
    .navbar-custom .navbar-brand {
      font-size: 1.6rem;
    }
    .btn-primary {
      font-size: 1rem;
    }
    .about-section {
      padding: 60px 0;
      background-color: #f8f9fa;
      text-align: center;
    }
    .about-section h2 {
      font-size: 2.5rem;
      margin-bottom: 30px;
      color: #343a40;
      position: relative;
    }
    .about-section h2::after {
      content: '';
      display: block;
      width: 60px;
      height: 4px;
      background-color: #0056b3;
      margin: 20px auto;
      border-radius: 2px;
    }
    .about-section p {
      font-size: 1.125rem;
      color: #6c757d;
    }
    .about-image {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .fade-in {
      animation: fadeIn 2s ease-in-out;
    }
    .slide-in {
      animation: slideIn 2s ease-in-out;
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
</head>
<body>

  {{-- section barre de navigation --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
    <div class="container">
      <a class="navbar-brand" href="#">Damask Immobilier</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/"><strong>Accueil</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><strong>A Propos</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact"><strong>Contact</strong></a>
          </li>
        </ul>
      </div>
      <a href="login" class="btn btn-primary" type="button">Se connecter</a>
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
            <p class="card-text" style="color: white;">
              <h3>Sur DAMASK immobilier.</h3>
            </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card text-bg-dark">
          <img src="https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="height: 80vh" class="d-block w-100" alt="...">
          <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
            <h2 class="card-title" style="color: white;">BIENVENUE</h2>
            <p class="card-text" style="color: white;">
              <h3>Sur DAMASK immobilier.</h3>
            </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card text-bg-dark">
          <img src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&w=600" style="height: 80vh" class="d-block w-100" alt="...">
          <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
            <h2 class="card-title" style="color: white;">BIENVENUE</h2>
            <p class="card-text" style="color: black;">
              <h3>Sur DAMASK immobilier.</h3>
            </p>
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

  <!-- Section "À propos" -->
  <section class="about-section">
    <div class="container">
      <h2>À propos de nous</h2>
      <div class="row align-items-center">
        <div class="col-md-6 fade-in">
          <p>
            Damask Immobilier est une entreprise leader dans le secteur de l'immobilier.
            Nous nous engageons à offrir à nos clients un service de qualité supérieure,
            des conseils d'experts et des solutions innovantes pour toutes leurs
            transactions immobilières. Que vous cherchiez à acheter, vendre ou louer
            une propriété, notre équipe dédiée est là pour vous accompagner à chaque étape.
          </p>
          <p>
            Nous croyons en la transparence, l'intégrité et la satisfaction de nos clients.
            Notre mission est de rendre le processus immobilier aussi simple et agréable que
            possible pour vous. Avec des années d'expérience et une connaissance approfondie
            du marché, Damask Immobilier est votre partenaire de confiance pour toutes vos
            transactions immobilières.
          </p>
        </div>
        <div class="col-md-6 text-center slide-in">
          <img src="https://images.pexels.com/photos/259098/pexels-photo-259098.jpeg?auto=compress&cs=tinysrgb&w=600" class="about-image" alt="Image à propos de nous">
        </div>
      </div>
    </div>
  </section>

  <div class="container mt-5">
    <h2 style="text-align: center; font-size: 2.5rem; color: #343a40;">Nos Biens Immobiliers</h2>
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
                            <strong>@if ($bien->statut == 1)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="disponible{{ $bien->id }}" id="disponible{{ $bien->id }}" value="1" checked>
                                    <label class="form-check-label" for="disponible{{ $bien->id }}">Disponible</label>
                                </div>
                            @else
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="disponible{{ $bien->id }}" id="indisponible{{ $bien->id }}" value="0" checked>
                                    <label class="form-check-label" for="indisponible{{ $bien->id }}">Indisponible</label>
                                </div>
                            @endif</strong>
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

    <!-- Section "Footer" -->
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