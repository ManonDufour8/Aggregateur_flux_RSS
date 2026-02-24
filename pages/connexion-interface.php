<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body class="bg-light">

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-body">

                    <h1 class="text-center mb-4">Connexion</h1>

                    <form method="post">

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Entrez votre email :</label>
                            <input 
                                type="email" 
                                name="name"
                                id="email" 
                                class="form-control"
                                pattern=".+@exemple\.com" 
                                placeholder="exemple@exemple.com"
                                required
                            >
                        </div>

                        <!-- Mot de passe -->
                        <div class="form-group">
                            <label for="pass">Mot de passe</label>
                            <input 
                                name="password"
                                type="password" 
                                id="pass" 
                                name="password" 
                                class="form-control"
                                minlength="8" 
                                required
                            >
                        </div>

                        <!-- Bouton -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block">
                                Se connecter
                            </button>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="mt-5 btn btn-link">
                                Mot de passe oublié
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>