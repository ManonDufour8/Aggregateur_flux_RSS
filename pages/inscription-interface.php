<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscription</title>

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
  </head>

  <body class="bg-light">
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-6">
          <div class="card shadow">
            <div class="card-body">
              <h1 class="text-center mb-4">Inscription</h1>
              <!-- on envoie les données dans le php du mail -->
              <form method="post" action="mail_inscription.php">
                <!-- Email -->
                <div class="form-group">
                  <label for="email">Entrez votre email :</label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    class="form-control"
                    placeholder="exemple@exemple.com"
                    required
                  />
                </div>

                <!-- Mot de passe -->
                <div class="form-group" action="">
                  <label for="pass">Mot de passe (8 caractères minimum)</label>
                  <input
                    type="password"
                    id="pass"
                    name="password"
                    class="form-control"
                    minlength="8"
                    required
                  />
                </div>
                <h3>Choisissez vos centres d’intérêt :</h3>

                <!-- Préférences RSS -->
                <div class="form-group">
                  <label>Choisissez vos centres d’intérêt :</label>

                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      name="interests[]"
                      value="une"
                      id="une"
                    />
                    <label class="form-check-label" for="une">À la Une</label>
                  </div>

                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      name="interests[]"
                      value="ameriques"
                      id="ameriques"
                    />
                    <label class="form-check-label" for="ameriques"
                      >Amériques</label
                    >
                  </div>

                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      name="interests[]"
                      value="politique"
                      id="politique"
                    />
                    <label class="form-check-label" for="politique"
                      >Politique</label
                    >
                  </div>

                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      name="interests[]"
                      value="economie"
                      id="economie"
                    />
                    <label class="form-check-label" for="economie"
                      >Économie</label
                    >
                  </div>

                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      name="interests[]"
                      value="musiques"
                      id="musiques"
                    />
                    <label class="form-check-label" for="musiques"
                      >Musiques</label
                    >
                  </div>

                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      name="interests[]"
                      value="football"
                      id="football"
                    />
                    <label class="form-check-label" for="football"
                      >Football</label
                    >
                  </div>

                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      name="interests[]"
                      value="medecine"
                      id="medecine"
                    />
                    <label class="form-check-label" for="medecine"
                      >Médecine</label
                    >
                  </div>
                </div>

                <!-- Bouton -->
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block">
                    S'inscrire
                  </button>
                  <button type="" class="btn btn-success btn-block">
                    J'ai déjà un compte tonton
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