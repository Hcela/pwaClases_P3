<?php
$productos = array(
    array("id" => 1, "Nombre" => "Producto 1", "imagen" => "images/img1.png", "descripcion" => "Descripcion del producto 1", "precio" => 100),
    array("id" => 2, "Nombre" => "Producto 2", "imagen" => "images/img2.png", "descripcion" => "Descripcion del producto 2", "precio" => 200),
    array("id" => 3, "Nombre" => "Producto 3", "imagen" => "images/img3.png", "descripcion" => "Descripcion del producto 3", "precio" => 100),
    array("id" => 4, "Nombre" => "Producto 4", "imagen" => "images/img4.png", "descripcion" => "Descripcion del producto 4", "precio" => 100),
    array("id" => 5, "Nombre" => "Producto 5", "imagen" => "images/img5.png", "descripcion" => "Descripcion del producto 5", "precio" => 200),

);
?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mi tienda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div id="listaProductos">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < count($productos); $i++) { ?>
                <tr>
                    <td><img src="<?php echo $productos[$i]["imagen"];?>" alt="<?php echo $productos[$i]["descripcion"];?>" style="width: 100px; height: 100px;"></td>
                    <td><?php echo $productos[$i]["Nombre"];?></td>
                    <td><?php echo $productos[$i]["Descripcion"];?></td>
                    <td>$<?php echo $productos[$i]["Precio Unitario"];?></td>
                    <td><button class="btn btn-primary" onclick="agregarAlCarrito(<?php echo $productos[$i]['id']; ?>)">Agregar al carrito</button></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="mt-5">
        <h3>Carrito:</h3>
        <div id="carritoItems"></div>
    </div>

<script type="text/javascript">
    let productos = <?php echo json_encode($productos, JSON_PRETTY_PRINT); ?>;
</script>
<script src="script.js"></script>
</body>
</html>