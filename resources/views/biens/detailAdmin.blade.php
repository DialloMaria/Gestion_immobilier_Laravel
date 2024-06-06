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
        <div class="navbar-nav ml-auto">
            <a href="{{ route('Accueil') }}"><button class="btn btn-primary" type="button">Retour</button></a> 
        </div>
        
    </div>
</nav>


<body>
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{$biens->image}}" class="card-img-top" alt="Image du bien" style="height: 75vh" style="width: 100%">                </div>
                {{-- <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="height: 80vh" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&w=600" style="height: 80vh" class="d-block w-100" alt="...">
                </div> --}}
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
            <div class="col-md-8 blog-main">
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
            </div>

            <aside class="col-md-4 blog-sidebar">
                <div class="p-3 mb-3 bg-light rounded">
                    <h4 class="font-italic">Commentaire</h4>
                    <br>
                    @foreach ($biens->commentaires as $commentaire)
                    <p class="mb-0"> <strong>{{$commentaire->auteur}}</strong> <br>
                        {{$commentaire->contenu}}
                        
                    </p>  
                    <div> <p>Posté le {{$commentaire->created_at}}</p></div>  
                    <hr>
                    <br>
                    @endforeach
                </div>
            </aside>
        </div>
    </main>
</body>
</html>