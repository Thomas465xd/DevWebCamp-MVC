<h2 class="dashboad__heading"><?php echo $titulo; ?></h2>

<main class="bloques">
    <div class="bloques__grid">
        <div class="bloque">
            <h3 class="bloque__heading"><i class="fa-brands fa-the-red-yeti"></i> Últimos Registros</h3>

            <?php foreach($registros as $registro)  { ?>
                <div class="bloque__contenido">
                    <p class="bloque__texto">
                        <i class="fa-solid fa-user-check"></i>
                        <?php echo $registro->usuario->nombre . " " . $registro->usuario->apellido; ?>
                    </p>
                </div>
            <?php } ?>
        </div>

        <div class="bloque">
            <h3 class="bloque__heading">Ingresos <i class="fa-solid fa-chart-line"> <i class="fa-solid fa-rocket"></i></i></h3>
            <p class="bloque__texto--cantidad"><i class="fa-sharp fa-solid fa-dollar-sign"></i> <?php echo $ingresos;?></p>
        </div>

        <div class="bloque">
            <h3 class="bloque__heading">Eventos Con Menos Lugares Disponibles</h3>
            <?php foreach($menos_disponibles as $evento) { ?>
                <div class="bloque__contenido">
                    <p class="bloque__texto">
                        <i class="fa-sharp fa-solid fa-calendar-minus"></i>
                        <?php echo $evento->nombre . " - " . $evento->disponibles . ' Disponibles'; ?>
                    </p>
                </div>
            <?php } ?>    
        </div>

        <div class="bloque">
            <h3 class="bloque__heading">Eventos Con Más Lugares Disponibles</h3>
            <?php foreach($mas_disponibles as $evento) { ?>
                <div class="bloque__contenido">
                    <p class="bloque__texto">
                        <i class="fa-regular fa-calendar-plus"></i>
                        <?php echo $evento->nombre . " - " . $evento->disponibles . ' Disponibles'; ?>
                    </p>
                </div>
            <?php } ?>    
        </div>
    </div>
</main>