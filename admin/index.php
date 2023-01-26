<?php

require '../includes/app.php';
use App\Propiedad;
use App\Vendedor;

    //Revisar si el usuario está autenticado
    estaAutenticado();

    //Implementar un método para obtener todas las propiedades
    $propiedades =  Propiedad::all();
    $vendedores = Vendedor::all();
    
    
    //Muestra mensaje condicional
    $result = $_GET['result'] ?? null;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $id = $_POST['id'];
        $id = filter_var($id,FILTER_VALIDATE_INT);



        if($id){

            $tipo = $_POST['tipo'];
            if(validarTipoContenido($tipo)){
                
                if($tipo === 'vendedor'){
                    $vendedor = Vendedor::find($id);
                    $vendedor->eliminar();

                } else if($tipo === 'propiedad'){
                    $propiedad = Propiedad::find($id);           
                    $propiedad->eliminar();
                }
            }

        }
    }

    //Incluye un template
    incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>

    <!-- Inyecta mensaje condicional -->
    <?php if(intval($result)===1):?>
        <p class="alerta exito">Creado Correctamente</p>
    
    <?php elseif(intval($result)===2): ?>
        <p class="alerta exito">Actualizado Correctamente</p>
    
    <?php elseif(intval($result)===3): ?>
        <p class="alerta exito">Eliminado Correctamente</p>
    
    <?php endif;?>
    <!-- Fin de inyección de mensaje -->

    <a href="propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>
    <a href="vendedores/crear.php" class="boton boton-amarillo">Nuevo Vendedor</a>

    <h2>Propiedades</h2>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody> <!-- Mostrar los resultados -->
            <?php foreach($propiedades as $propiedad): ?>
            <tr>
                <td><?php echo $propiedad->id?></td>
                <td><?php echo $propiedad->titulo?></td>
                <td>
                    <img src="/bienesraices/imagenes/<?php echo $propiedad->imagen?>" alt="Imagen de la propiedad" class="imagen-tabla"> 
                </td>
                <td>$<?php echo $propiedad->precio?></td>
                <td>
                    <form method="POST" action="" class="w-100">
                        <input type="hidden" name="id" value="<?php echo $propiedad->id?>">
                        <input type="hidden" name="tipo" value="propiedad">
                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>
                    
                    <a href="/bienesraices/admin/propiedades/actualizar.php?id=<?php echo $propiedad->id; ?>" class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

    <h2>Vendedores</h2>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody> <!-- Mostrar los resultados -->
            <?php foreach($vendedores as $vendedor): ?>
            <tr>
                <td><?php echo $vendedor->id?></td>
                <td><?php echo $vendedor->nombre . ' ' . $vendedor->apellido?></td>
                <td><?php echo $vendedor->telefono?></td>
                <td>
                    <form method="POST" action="" class="w-100">
                        <input type="hidden" name="id" value="<?php echo $vendedor->id?>">
                        <input type="hidden" name="tipo" value="vendedor">
                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>
                    
                    <a href="/bienesraices/admin/vendedores/actualizar.php?id=<?php echo $vendedor->id; ?>" class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</main>

<?php 

    //Cerrar la conexión
    mysqli_close($db);

    incluirTemplate('footer');
?>