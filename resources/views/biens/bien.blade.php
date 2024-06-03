<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil - Gestion Immobilière</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="mb-4">Biens Immobiliers</h1>
      <div class="row">
        <div class="col-md-4 mb-4">
            @foreach ($biens as $bien )
          <div class="card">
            <img src="{{$bien->image}}" class="card-img-top" alt="Image du bien">
            <div class="card-body">
              <h5 class="card-title">{{$bien->nom}}</h5>
              <p class="card-text">
                <strong>Catégorie :</strong> {{$bien->categorie}}<br>
                <strong>Description :</strong> {{$bien->description}}.<br>
                <strong>Adresse :</strong> {{$bien->adresse}}.<br>
                <strong>Statut :</strong> {{$bien->statut}}<br>
                <strong>Date :</strong> {{$bien->created_at}}
              </p>
              <a href="#" class="btn btn-primary" >Voir plus</a>
              {{-- <a href="/delete/{{$bien->id}}" class="btn btn-primary">Supprimer</a> --}}
              {{-- <a href="#" class="btn btn-primary">Voir plus</a>
            </div> --}}
            {{-- <form method="POST" action="/delete/{{$bien->id}}">
                @csrf
                @method('DELETE')
                <Button type="button" class="btn btn-sm btn-outline-secondary">Supprimer</Button>
            </form> --}}

            <form action="{{ route('biens.supprimer', $bien->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
              </form>
            {{-- <a href="/delete/{{$bien->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">Supprimer</button></a> --}}
          </div>
          @endforeach
        </div>
  
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>