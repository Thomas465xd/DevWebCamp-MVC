<h2 class="dashboad__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/ponentes">
        <i class="fa-solid fa-circle-arrow-left"></i>
        Volver
    </a>
</div>


<div class="dashboard__formulario">
    <?php
        /* include_once __DIR__ . './../../templates/alertas.php'; FIXME: Warning: include_once Failed to open stream: Permission denied */
            foreach($alertas as $key => $alerta) {
            foreach($alerta as $mensaje) {
      ?>
        <div class="alerta alerta__<?php echo $key; ?>"><?php echo $mensaje; ?></div>
    <?php
         }
        }
    ?>  
    <form method="POST" action="/admin/ponentes/crear" enctype="multipart/form-data" class="formulario">

    <?php
        include_once __DIR__ . '/formulario.php';
    ?>

        <input class="formulario__submit formulario__submit--registrar" type="submit" value="Registrar Ponente">
    </form>
</div>