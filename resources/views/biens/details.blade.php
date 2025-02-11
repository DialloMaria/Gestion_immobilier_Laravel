<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <title>Détail de : {{ $biens->nom}}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
</head>

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
      {{-- <div class="navbar-nav ml-auto">
        <a href="login"><button class="btn btn-primary" type="button">Se connecter</button></a> 
      </div> --}}
    </div>
  </nav>

<body>
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/south-sun-house03.jpg" class="d-block w-100" style="height: 80vh" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="height: 80vh" class="d-block w-100" alt="...">
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
        <br><br>
        <main role="main" class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="pb-3 mb-4 font-italic border-bottom">
                        {{ $biens->nom }} <br>
                        <h5> {{ $biens->categorie }}</h5>
                    </h3>

                    <div class="blog-post">
                        <p class="blog-post-meta">Publié <a href="#"> {{ $biens->created_at }}</a></p>

                        <p> {{ $biens->description }} </p>
                        <div class="container">
                            <div class="biens-header">
                            </div>

                            <div class="biens-details">
                                <h5>Adresse</h5>
                                <p>{{ $biens->adresse }}</p>
                                <h5>Statut</h5>
                                <strong>@if ($biens->statut == 1)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="disponible{{ $biens->id }}" id="disponible{{ $biens->id }}" value="1" checked>
                                        <label class="form-check-label" for="disponible{{ $biens->id }}">Disponible</label>
                                    </div>
                                @else
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="disponible{{ $biens->id }}" id="indisponible{{ $biens->id }}" value="0" checked>
                                        <label class="form-check-label" for="indisponible{{ $biens->id }}">Indisponible</label>
                                    </div>
                                @endif</strong>
                            </div>
                        </div>
                    </div>
<hr>
                    <div class="p-3 mb-3 bg-light rounded">
                        <h4 class="font-italic">Commentaires</h4>
                        <br>
                        @foreach ($biens->commentaires as $commentaire)
                        <p class="mb-0"> <strong>{{$commentaire->auteur}}</strong> <br>
                            {{$commentaire->contenu}}
                        </p>  
                        <div> <p> Posté le {{$commentaire->created_at}}</p></div>  
                                      
                        <div class="d-flex gap-2 align-items-center">
                            <!-- Bouton pour éditer -->
                            <a href="{{ route('commentaires.edit', $commentaire->id) }}" class="btn btn-primary mr-2">
                                <i class="fas fa-edit"></i> <!-- Icone de modification pour illustrer l'édition -->
                            </a>
                            <!-- Bouton pour supprimer -->
                            <form method="POST" action="{{ route('commentaires.destroy', $commentaire->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i> <!-- Icone de la corbeille pour la suppression -->
                                </button>
                            </form>
                        </div>
                        
                        <hr>
                        <br>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="container">
                        <form action="commentaires/store" method="POST">
                            @csrf
                            <input type="hidden" name="bien_id" value="{{ $biens->id }}">
                            <div class="form-group">
                                <label for="auteur">Nom</label>
                                <input type="text" class="form-control  @error('auteur') is-invalid @enderror" id="auteur" name="auteur">
                                @error('auteur')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="contenu" class="form-label">Contenu du commentaire</label>
                                <textarea class="form-control   @error('contenu') is-invalid @enderror"  id="contenu" name="contenu" required></textarea>
                                @error('contenu')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter Commentaire</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>


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
   
</body>
</html>