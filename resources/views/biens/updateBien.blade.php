<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter un Bien Immobilier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background-color: #f8f9fa;
      }
      .container {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      .form-label {
        font-weight: bold;
      }
      .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
      }
      .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <h2 class="mb-4">Ajouter un Bien Immobilier</h2>
      <form action="/update/traitement" method="POST" >
        @csrf
        <input type="hidden" name="id" value="{{$bien->id}}">

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{$bien->nom}}" >
          </div>
          <div class="col-md-6">
            <label for="categorie" class="form-label">Catégorie</label>
            <select class="form-control" id="categorie" name="categorie" value="{{$bien->categorie}}" >
              <option value="">Sélectionner une catégorie</option>
              <option value="duplex">Duplex</option>
              <option value="appartement">Appartement</option>
              <option value="champ">Chambre</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image" value="{{$bien->image}}"  >
          </div>
          <div class="col-md-6">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" value="{{$bien->adresse}}"  >
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="status" class="form-label">Statut</label>
            <select class="form-control" id="status" name="statut" value="{{$bien->statut}}"  >
              <option value="">Sélectionner un statut</option>
              <option value="1">Disponible</option>
              <option value="0">Indisponible</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" >{{$bien->description}}" </textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>