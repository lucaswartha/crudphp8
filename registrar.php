<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Registrar</title>
</head>

<body>

    <div class="container centered">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark">
                    <div class="card-header bg-light">Registrar-se</div>

                    <div class="card-body">
                        <form action="register.php" method="POST">


                            <div class="row mb-3">
                                <label for="username" class="col-md-4 col-form-label text-md-end light-color">
                                    Nome
                                </label>

                                <div class="col-md-6">
                                    <input id="username" type="username" class="form-control" name="username" autofocus>
                                    <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end light-color">
                                    E-mail
                                </label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" autofocus>
                                    <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end light-color">Senha</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">

                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <a href="index.php" class="btn btn-light">Entrar</a>
                                    <button type="submit" class="btn btn-primary" id="registrar" name="registrar">Registrar-se</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous ">
    </script>
</body>

</html>

</html>