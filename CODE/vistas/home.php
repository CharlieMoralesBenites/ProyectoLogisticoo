<?php
require_once "./CODE/bdr/main.php";

$nom = limpiar_cadena($_SESSION['nombre']);
$ape = limpiar_cadena($_SESSION['apellido']);

$cargo = limpiar_cadena($_SESSION['puesto']);

?>
<div class="row">
    <div class="fondo">
        <div class="container is-fluid">
            <blockquote class="blockquote">
                <br>
                <form action="/index.php?=login">
                    <button type="submit" class="botton btn">cerrar sesion</button>
                </form>
                <br>
                <h2>Bienvenido Usuario <?php echo $nom . " " . $ape . " -> " . $cargo; ?></h2>
            </blockquote>
        </div>
    </div>

</div>