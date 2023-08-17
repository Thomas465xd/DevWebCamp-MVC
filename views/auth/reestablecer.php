<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Coloca tu nuevo password</p>

    <?php
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

<?php if($token_valido) { ?>
    <form method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Nuevo Password</label>
            <input 
            type="password"
            class="formulario__input"
            placeholder="Tu Nuevo Password"
            id="password"
            name="password"
            />
        </div>

        <input type="submit" class="formulario__submit" value="Guardar Password">
    </form>
<?php } ?>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">Iniciar Sesión</a>
    </div>
</main>