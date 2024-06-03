<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details of {{ $biens->nom }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .biens-header {
            text-align: center;
        }
        .biens-image {
            text-align: center;
            margin: 20px 0;
        }
        .biens-image img {
            max-width: 100%;
            height: auto;
        }
        .biens-details {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="biens-header">
            <h1>{{ $biens->nom }}</h1>
            <h2>{{ $biens->categorie }}</h2>
        </div>
        <div class="biens-image">
            <img src="{{ $biens->image }}" alt="Image of {{ $biens->nom }}">
        </div>
        <div class="biens-details">
            <h3>Description</h3>
            <p>{{ $biens->description }}</p>
            <h3>Adresse</h3>
            <p>{{ $biens->adresse }}</p>
            <h3>Statut</h3>
            <p>{{ $biens->statut }}</p>
        </div>
    </div>

    <div class="comments-container">
        <h2>Commentaires</h2>
        @if($biens->commentaires->isEmpty())
            <p>Aucun commentaire pour ce bien.</p>
        @else
            @foreach($biens->commentaires as $commentaire)
                <div class="comment card">
                    <div class="card-body">
                        <p>{{ $commentaire->contenu }}</p>
                        @if($commentaire->created_at)
                            <small>Posté le {{ $commentaire->created_at->format('d/m/Y') }}</small>
                        @else
                            <small>Date de publication inconnue</small>
                        @endif
                        <hr>
                        <div class="d-flex gap-2">
                            {{-- <a href="{{ route('commentaires.edit', $commentaire->id) }}" class="btn btn-warning">Modifier</a> --}}
                            
                            {{-- <form method="POST" action="{{ route('commentaires.destroy', $commentaire->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form> --}}
                            
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</body>
</html>
