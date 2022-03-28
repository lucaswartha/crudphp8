<?php
include 'db.php';
include 'verificar_login.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>

<body style="min-width: 372px">
    <div class="d-flex flex-column wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom shadow-sm mb-3">
            <div class="container">
                <a class="navbar-brand" href="sistema.php"><b>CRUD</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav flex-grow-1">
                    </ul>
                    <div class="align-self-end">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a href="logout.php" class="btn btn-dark">Sair</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row g-3">
                <div class="col-auto">

                </div>
                <div class="col-auto">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#insertModal">Adicionar
                        item</button>
                </div>
            </div>

        </div>



        <hr>
            <?php
                $sql = "SELECT * from itens";
                $result = $conn->query($sql);
            ?>          
        <main class="flex-fill">
            <div class="container">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Item</th>
      <th scope="col">Valor</th>
      <th scope="col">Descrição</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  
                <?php
                    while($data = mysqli_fetch_assoc($result)){
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $data['itens'] ?> </td>
                                <td><?php echo $data['valor']?></td>
                                <td><?php echo $data['descricao']?></td>
                                <td>                                    

                                    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#editarModal">Editar</button>
                                </td>
                                <td>
                                <form action="delete.php" method="post">
                                    <input type="hidden" name="item" value="<?php echo $data['itens'] ?>">
                                    <button type="submit" name="delete" class="btn btn-danger mb-3" value="delete">Excluir</button>
                                </form>
                                </td>
                            </tr>
                            </tbody><?php
                    }
                    ?>
                    </table>
                    


    </div>
</main>




    </div>

    <!-- INSERT MODAL -->
    <div class="modal fade" id="insertModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertModal">Adicionar item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="insert.php" method="post">
                        <div class="mb-3">
                            <label for="nameItem" class="col-form-label"><b>Nome</b></label>
                            <input type="text" class="form-control" id="nameItem" name="nameItem">
                        </div>
                        <div class="mb-3">
                            <label for="priceItem" class="col-form-label"><b>Preço</b></label>
                            <input type="text" class="form-control" id="priceItem" name="priceItem">
                        </div>
                        <div class="mb-3">
                            <label for="descItem" class="col-form-label"><b>Descrição</b></label>
                            <textarea class="form-control" id="descItem" name="descItem" rows="3"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" name="insert" class="btn btn-success">Adicionar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- DELETE MODAL -->
    <div class="modal fade" id="deletarModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Você tem certeza que deseja excluir o item?</h5>
                </div>
                <form action="delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $data['itens']?>">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" name="delete" class="btn btn-danger">Sim, desejo excluir!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- EDIT MODAL -->
    <div class="modal fade" id="editarModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="edit.php">
                        <div class="mb-3">
                            <label for="nameItem" class="col-form-label"><b>Nome</b></label>
                            <input type="text" class="form-control" id="nameItem" name="nameItem">
                        </div>
                        <div class="mb-3">
                            <label for="priceItem" class="col-form-label"><b>Preço</b></label>
                            <input type="text" class="form-control" id="priceItem" name="priceItem">
                        </div>
                        <div class="mb-3">
                            <label for="descItem" class="col-form-label"><b>Descrição</b></label>
                            <textarea class="form-control" id="descItem" name="descItem" rows="3"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" name="edit" class="btn btn-success">Adicionar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous ">
    </script>
</body>

</html>