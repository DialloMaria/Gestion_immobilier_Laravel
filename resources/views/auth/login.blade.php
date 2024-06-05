<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
             background: linear-gradient( #71b7e6, #ff6137); */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            background: #ffffff;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.3);
        }
        .card h1 {
            font-size: 1.75rem;
            margin-bottom: 1.5rem;
            color: #333333;
            text-align: center;
        }
        .form-group label {
            font-weight: bold;
            color: #555555;
        }
        .form-control {
            border-radius: 10px;
            border: 1px solid #ced4da;
            padding: 0.75rem;
            transition: all 0.3s;
        }
        .form-control:focus {
            border-color: #9b59b6;
            box-shadow: 0 0 10px rgba(155, 89, 182, 0.25);
        }
        .btn-primary {
            width: 100%;
            border-radius: 10px;
            background: linear-gradient(135deg, #ff6137, #71b7e6);
            border: none;
            padding: 0.75rem;
            font-size: 1rem;
            transition: background 0.3s;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        .text-danger {
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Se connecter</h1>
        <form action="{{ route('auth.login') }}" method="post" class="vstack gap-3">
            @csrf
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div class="form-group mb-3">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
                @error('password')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <hr>
            <button class="btn btn-primary">Se connecter</button>
        </form>
         <br>
        <!-- Bouton de retour -->
        <a href="/" class="btn btn-link mt-3">Retour</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
