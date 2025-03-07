<?php
    include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arabia</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .wrap{
            white-space: nowrap;
        }
        .botones{
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container col-md-3">
            <a class="navbar-brand text-white" href="#">
                Arabia Trip <i class="fa-brands  fa-xl"></i>
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    
                </ul>
                <span>
                   
                </span>
            </div>
        </div>
    </nav>

    <div class="container mt-3 col-md-3">
        <h2 class="text-center">Registro de gastos</h2>
        <form action="procesar.php" method="POST">
            <label class="form-label" for="Gasto">Gasto:</label>
            <input type="hidden" id="accion" name="accion" value="agregar">
            <input type="text" class="form-control" id="gasto" name="gasto" placeholder="Ingresa Gasto" required><br>
            <label for="Monto">Monto:</label>
            <input type="text" class="form-control" id="monto" name="monto" placeholder="Ingresa Monto" required><br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
<?php

        $query = "SELECT * FROM arabia";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
    ?>
            <div class="container mt-3 table-responsive">
                <table class="table table-hover text-center">
                    <thead class="table-success">
                        <tr>
                            <th>#</th>
                            <th>gasto</th>
                            <th>base</th>
                            <th>iva(21%)</th>
                            <th>monto</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php
                $counter = '';
                while ($row = $result->fetch_assoc()) {
                    $counter++;
    ?>
                        <tr>
                            <td class="wrap"><?php echo $counter; ?></td>
                            <td class="wrap"><?php echo $row['gasto']; ?></td>
                            <td class="wrap"><?php echo $row['monto']-($row['monto']*0.21); ?></td>
                            <td class="wrap"><?php echo $row['monto']*0.21; ?></td>
                            <td class="wrap"><?php echo $row['monto']; ?></td>
                        </tr>
    <?php
                }
    ?>
                    </tbody>
                </table>
            </div>
    <?php
        }
        else {
    ?>

            <div class="container col-md-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">No hay Datos</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Bo se han enc...</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="container mt-3">
                <img src="banner.jpg" class="img-fluid" alt="No Data">
            </div>
    <?php
        }
        $conn->close();
    ?>


    
    <!-- <footer class="text-center text-white mt-5">
        <div class="bg-primary p-3">
            Copyright - Carlos Ochoa 2025 -
            <a class="text-white" href="#">https://ochoa.es</a>
        </div>
    </footer> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
