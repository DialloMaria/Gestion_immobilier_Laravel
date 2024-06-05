<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter un Bien Immobilier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
           background: linear-gradient(to right, #ff6137, #71b7e6); */
          font-family:  sans-serif;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          margin: 0;
        }
        .container {
          background-color: #ffffff;
          padding: 30px;
          border-radius: 15px;
          box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
          max-width: 600px;
          width: 100%;
        }
        h2 {
          text-align: center;
          margin-bottom: 20px;
          color: #333333;
        }
        .form-label {
          font-weight: bold;
          color: #555555;
        }
        .form-control {
          border-radius: 10px;
          border: 1px solid #ced4da;
          padding: 10px;
          transition: all 0.3s;
        }
        .form-control:focus {
          border-color: #71b7e6;
          box-shadow: 0 0 10px rgba(113, 183, 230, 0.25);
        }
        .btn-primary {
          width: 100%;
          border-radius: 10px;
          background: linear-gradient(135deg, #71b7e6, #ff6137);
          border: none;
          padding: 10px;
          font-size: 1rem;
          transition: background 0.3s;
        }
        .btn-primary:hover {
          background: linear-gradient(135deg, #ff6137, #71b7e6);
        }
      </style>
</head>
<body>
    
    <div class="container">
        <h2>Ajouter un Bien Immobilier</h2>
        <form action="/ajout/traitement" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                </div>
                <div class="col-md-6">
                    <label for="categorie" class="form-label">Catégorie</label>
                    <select class="form-control" id="categorie" name="categorie">
                        <option value="">Sélectionner une catégorie</option>
                        <option value="duplex">Duplex</option>
                        <option value="appartement">Appartement</option>
                        <option value="chambre">Chambre</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" name="image" id="image">
                </div>
                <div class="col-md-6">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="status" class="form-label">Statut</label>
                    <select class="form-control" id="status" name="statut">
                        <option value="">Sélectionner un statut</option>
                        <option value="1">Disponible</option>
                        <option value="0">Indisponible</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
        <a href="{{ route('Accueil') }}" class="btn btn-link mt-3">Retour</a>

    </div>
<!-- Bouton de retour -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
