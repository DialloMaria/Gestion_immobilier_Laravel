<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
    max-width: 600px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

form {
    margin-top: 20px;
}

label {
    font-weight: bold;
}

textarea {
    width: 100%;
    min-height: 150px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    resize: vertical;
}

button[type="submit"] {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    
<div class="container">
    <h1>Modifier le commentaire</h1>

    <form action="{{ route('commentaires.update', $commentaire->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="contenu">Commentaire:</label>
            <textarea class="form-control" id="contenu" name="contenu" rows="3" required>{{ $commentaire->contenu }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>

</body>
</html>