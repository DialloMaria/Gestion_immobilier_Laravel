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

</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <a class="navbar-brand" href="#">
            <img src="" alt="Damask Immobilier" style="height: 40px;">
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
                                <p>{{ $biens->statut }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 mb-3 bg-light rounded">
                        <h4 class="font-italic">Commentaire</h4>
                        <br>
                        @foreach ($biens->commentaires as $commentaire)
                        <p class="mb-0"> <strong>{{$commentaire->auteur}}</strong> <br>
                            {{$commentaire->contenu}}
                        </p>  
                        <div> <p> Posté le {{$commentaire->created_at}}</p></div>  
                                      
                        <div style="margin-left: 200px" >
                        <div class="d-flex justify-content-between">
                        
                            <a href="{{ route('commentaires.edit', $commentaire->id) }}" class="btn btn-warning">Modifier</a>
                            <form method="POST" action="{{ route('commentaires.destroy', $commentaire->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
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
                                <input type="text" class="form-control" id="auteur" name="auteur">
                            </div>
                            <div class="mb-3">
                                <label for="contenu" class="form-label">Contenu du commentaire</label>
                                <textarea class="form-control" id="contenu" name="contenu" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter Commentaire</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>