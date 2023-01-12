<?php
    declare(strict_types=1);
    require 'includes/funciones.php';
    incluirTemplate('header',$inicio = true);
?>

    <main class="contenedor seccion">

        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="/bienesraices/build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias recusandae sed quidem molestiae ad! Distinctio libero unde quia.</p>
            </div>
            <div class="icono">
                                <img src="/bienesraices/build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias recusandae sed quidem molestiae ad! Distinctio libero unde quia.</p>
            </div>
            <div class="icono">
                                <img src="/bienesraices/build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias recusandae sed quidem molestiae ad! Distinctio libero unde quia.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="/bienesraices/build/img/anuncio1.webp" type="image/webp">
                    <img loading="lazy"  src="/bienesraices/build/img/anuncio1.jpg" alt="">
                </picture>

                <div class="contenido-auncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="/bienesraices/build/img/icono_wc.svg" alt="Icono wc" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="/bienesraices/build/img/icono_estacionamiento.svg" alt="Icono estacionamiento" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="/bienesraices/build/img/icono_dormitorio.svg" alt="Icono habitaciones" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.php" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div> <!--contenido anuncio-->
            </div><!--anuncio-->          
            
            <div class="anuncio">
                <picture>
                    <source srcset="/bienesraices/build/img/anuncio2.webp" type="image/webp">
                    <img loading="lazy"  src="/bienesraices/build/img/anuncio2.jpg" alt="">
                </picture>

                <div class="contenido-auncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="/bienesraices/build/img/icono_wc.svg" alt="Icono wc" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="/bienesraices/build/img/icono_estacionamiento.svg" alt="Icono estacionamiento" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="/bienesraices/build/img/icono_dormitorio.svg" alt="Icono habitaciones" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.php" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div> <!--contenido anuncio-->
            </div><!--anuncio-->
            
            <div class="anuncio">
                <picture>
                    <source srcset="/bienesraices/build/img/anuncio3.webp" type="image/webp">
                    <img loading="lazy"  src="/bienesraices/build/img/anuncio3.jpg" alt="">
                </picture>

                <div class="contenido-auncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="/bienesraices/build/img/icono_wc.svg" alt="Icono wc" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="/bienesraices/build/img/icono_estacionamiento.svg" alt="Icono estacionamiento" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="/bienesraices/build/img/icono_dormitorio.svg" alt="Icono habitaciones" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.php" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div> <!--contenido anuncio-->
            </div><!--anuncio-->
        </div><!--Contenedor anuncio-->

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="/bienesraices/build/img/blog1.webp" type="image/webp">
                        <img loading="lazy" src="/bienesraices/build/img/blog1.jpg" alt="Texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>
                            Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="/bienesraices/build/img/blog2.webp" type="image/webp">
                        <img loading="lazy" src="/bienesraices/build/img/blog2.jpg" alt="Texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la reparación de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>
                            Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- Juan Sebastian</p>
            </div>
        </section>
    </div>
    
<?php 
    incluirTemplate('footer');
?>