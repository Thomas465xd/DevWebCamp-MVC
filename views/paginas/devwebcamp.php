<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia más importante de Latinoamérica</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animation();?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen Devwebcamp">
            </picture>
        </div>

        <div class="devwebcamp__contenido">
            <p <?php aos_animation();?> class="devwebcamp__texto">Nunc felis velit, volutpat quis libero sit amet, viverra suscipit mi. Integer posuere mattis purus, eu maximus turpis dapibus in. Etiam maximus nec leo sed posuere. Aenean nec odio iaculis, dictum leo nec, elementum mi. Phasellus laoreet justo vitae nibh ultrices, vitae ullamcorper ex congue. Nunc vel luctus lorem. Maecenas finibus orci auctor pellentesque commodo.</p>

            <p <?php aos_animation();?> class="devwebcamp__texto">In sit amet ligula eu massa pretium egestas quis nec magna. Mauris eget venenatis nulla, vel suscipit magna. Praesent tincidunt vel turpis vel consequat. Vivamus tempor erat viverra massa condimentum molestie. Donec tempor tincidunt nisl ut blandit. Donec sed tincidunt tellus. Nulla gravida dignissim placerat. Nam eget ante sapien. Aliquam fermentum sodales magna, ac pellentesque sapien vestibulum laoreet.</p>
        </div>
    </div>


</main>