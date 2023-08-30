<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crud PHP com MVC
    </title>
</head>

<body>
    <nav class="navbar navbar-light bg-light menu">
        <a class="navbar-brand" href="#">
            CRUD PHP
        </a>
    </nav>
    <div class="container">
        <form>
            <div class="row">
                <div class="col mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" autofocus value="" require />
                </div>
                <div class="mb-3 col">
                    <label for="" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome" value="" require />
                </div>
                <div class="col-md-2">
                    <label for="" class="form-label">Idade</label>
                    <input type="number" class="form-control" name="idade" require />
                </div>
                <div class=" col-md-2">
                    <label for="" class="form-label">Sexo</label>
                    <select class="form-select" name="sexo">
                        <option selected>selecione</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary" name="cadastrar">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>