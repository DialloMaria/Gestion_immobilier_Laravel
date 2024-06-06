<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - Gestion des Biens Immobiliers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

        {{-- section barre de navigation --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
    
                <a class="navbar-brand" href="#">Damask Immobilier
                    {{-- <img src="logo.png" alt="Damask Immobilier" style="height: 40px;"> --}}
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
                            <a class="nav-link" href="contact"><strong>Contact</strong></a>
                        </li>
                    
                    </ul>
                </div>
            </div>
        </nav>
    


<div class="container">
    <h1>Nous contacter</h1>
    <form action="send_email.php" method="post">
        <label for="name">Nom :</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="message">Message :</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>
        <input type="submit" value="Envoyer">
    </form>
</div>

</body>
</html>
