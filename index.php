<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear html desde servidor PHP</title>
</head>
<body>
                <div class="row">
                    <div class="col-sm-6">
                        <form action="<?php echo $link; ?>" method="POST">
                            <label for="tarea">Escribe la tarea</label>
                            <textarea 
                                name="tarea" 
                                id="tarea" 
                                cols="30" 
                                rows="3"
                                required 
                                class="form-control"></textarea>
                            <br>
                            <button class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="tablaTareas"></div>
                    </div>
                </div>
            </p>
        </div>
    </div>
</div>
    <?php include "servidor.php" ?> 
</body>
</html>