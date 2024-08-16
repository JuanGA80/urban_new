<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Urban Sonrie</title>
    <link rel="icon" href="imagenes/icono.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="aos/aos.css">
    
</head>
<body>
  <header>
    <nav>
      <img src="imagenes/urba-sonrie.png" alt="Logo Principal de Orthodentic" class="logo_ortho" />
      <img src="imagenes/logo-mobil.png" alt="Logo Principal de Orthodentic" class="logo_blanco" />

      <ul class="menu">
        <li>
          <a href="index.html" data-section="home" data-value="ancla_uno"
            >Inicio</a
          >
        </li>
        <li>
          <a href="nosotros.html" data-section="home" data-value="ancla_dos"
            >Nosotros
          </a>
        </li>
        
        <li>
          <a href="servicios.html" data-section="home" data-value="ancla_tres"
            >Servicios</a
          >
        </li>
       
        <li>
          <a href="contacto.php" data-section="home" data-value="ancla_cinco"
            >Contacto</a
          >
        </li>
        <li class="unico">
            <a
            class="seguro"
            href="red-urbansonrie.html"
            class="icono_dos"
            target="_blank"
            rel="noopener noreferrer"
            >Red UrbanSonrie</a>
          </li>
           <li>
            <a href="https://www.facebook.com/urbansonrie?mibextid=ZbWKwL" target="_blank" aria-label="Ir a la página de Facebook de Urabn Sonrie" class="redes-header"
              ><img src="imagenes/icon_facebook.png" alt="Logo de Facebook"
            /></a>
          </li>
          <li>
            <a
              href="https://www.instagram.com/clinicadentalurbansonrie?igsh=MXc3NzFxZmYzcGJwMQ==" aria-label="Ir a la página de instagram de Urabn Sonrie" class="redes-header"
              target="_blank"
              ><img src="imagenes/icon_instagram.png" alt="Logo de instagram"
            /></a>
          </li>
    
      </ul>
   
      <i class="fa-solid fa-bars-staggered abrirmenu"></i>
      
    </nav>
  </header>
    <section class="testimonios_dos">
        <div class="item_testimonios" data-aos="fade-down" data-aos-duration="1000">
            <h2>¿Cómo te podemos ayudar?</h2>
            <form id="Formulario" action="correo.php" method="post">
                <input type="text" 
                       id="nombre" 
                       name="nombre" 
                       placeholder="Nombre Completo"  
                       maxlength="50"
                       
                       >

                <input type="email" 
                       id="email"   
                       name="email" 
                       placeholder="Correo Electrónico"                            
                       maxlength="60"  
                       >

                <input type="tel" 
                       id="tel" 
                       name="tel" 
                       placeholder="Teléfono"                                            
                       maxlength="10"  
                       > 

                <input type="text"  
                       id="direccion" 
                       name="direccion" 
                       placeholder="Dirección"                                       
                       maxlength="50"  
                       >
                <textarea
                       name="textarea" 
                       id="textarea" 
                       cols="30" 
                       rows="10" 
                       placeholder="Cuéntanos acerca de tu problema dental" 
                       maxlength="100" >
                       </textarea>

                <button  id="submit" type="submit">Enviar</button>
            </form>
        </div>
        <div class=" datos_contacto" data-aos="fade-down" data-aos-duration="1000">
        
            <h2>Contacto</h2>

            <h3>¡Llámanos para agendar una cita!</h3>

            <p><img src="imagenes/whats.png" alt=""> &nbsp <span>+525549713883</span> </p>

            <h5>¿Cómo llego?</h3>

            <a href="https://api.whatsapp.com/send?phone=525549713883" target="_blank" >Da clic aquí</a>

        </div>
    </section>
    <section class="parallax_uno_contacto">
        <p data-aos="fade-down" data-aos-duration="1000">El primer paso para mejorar tu sonrisa
          ¿Tienes dudas sobre algún tratamiento dental o deseas agendar una cita?
          Haznos llegar tu mensaje y te responderemos lo más pronto posible. <br>
          </p>
        
    </section>
 
    <section class="embed-container" data-aos="fade-down" data-aos-duration="1000">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.066968694713!2d-99.20850202405623!3d19.5387382372813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21d4428177979%3A0xa44947018699e6b8!2sAv%20Sor%20Juana%20In%C3%A9s%20de%20La%20Cruz%20280%2C%20San%20Lorenzo%2C%2054033%20Tlalnepantla%2C%20M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1718230513208!5m2!1ses-419!2smx" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
      
    <div class="redes_flotantes">
      <img src="imagenes/icono_principal.png" alt="Icono contacto" class="icono_principal" />
    

      <div class="contactos">
        <a
          onclick="return gtag_report_conversion('https://api.whatsapp.com/send?phone=525549713883');"
          href="https://api.whatsapp.com/send?phone=525549713883"
          class="icono_dos"
          target="_blank"
          rel="noopener noreferrer"
          ><img src="imagenes/whats.png" alt="Logo de WhatsApp"
        /></a>
       
        <a
          onclick="return gtag_report_conversion('tel:5549713883');"
          href="tel:5549713883 "
          class="icono_dos"
          target="_blank"
          ><img src="imagenes/phone.png" alt="Icono de teléfono"
        /></a>
       
       
      </div>
    </div>
     

  
      <footer>
        <div class="item_footer">
          <div class="sub_item_footer">
            <div class="efecto uno">
              <h3>Ubicación</h3>
            </div>
            <ul>
              <li>Dr. Guillermo Urban</li>
              <li>
                <a href="https://maps.app.goo.gl/AtwKdGy9kn22F6JRA" aria-label="Ir a la Ubicación de Orthodentic"
                  >Av Sor Juana Inés de La Cruz 280, San Lorenzo, 54033 Tlalnepantla, Méx Local I02 piso 1 enfrente de el gimnasio Sports World.</a
                >
              </li>
              <li><a href="tel:5529484701">Teléfono: 5529484701 </a></li>
              <li>
                <a href="mailto:urban.sonrie08@gmail.com">
                  Email: urban.sonrie08@gmail.com
                </a>
              </li>
              <li>
                <a href="download/Aviso de privacidad_orthodentic.pdf">
                  Aviso de Privacidad</a
                >
              </li>
            </ul>
          </div>
          <div class="sub_item_footer">
            <div class="efecto dos">
              <h3>Horario</h3>
            </div>
            <ul>
              <li>Lunes-Viernes: 10:00AM-14:00PM y 16:00PM-8:00PM </li>
              <li>Sábado: 10:00AM-15:00PM</li>
              <li> Pagos con Tarjeta </li>
              <li>
                <img src="imagenes/pagos_tarjeta.png" alt="Tarjetas que aceptamos" />
              </li>
            </ul>
          </div>
          <div class="sub_item_footer">
            <div class="efecto tres">
              <h3>Redes Sociales</h3>
            </div>
            <ul class="menu_redes">
              <li>
                <a href="https://www.facebook.com/urbansonrie?mibextid=ZbWKwL" target="_blank" aria-label="Ir a la página de Facebook de OrthoDentic"
                  ><img src="imagenes/icon_facebook.png" alt="Logo de Facebook"
                /></a>
              </li>
              <li>
                <a
                  href="https://www.instagram.com/clinicadentalurbansonrie?igsh=MXc3NzFxZmYzcGJwMQ==" aria-label="Ir a la página de instagram de OrthoDentic"
                  target="_blank"
                  ><img src="imagenes/icon_instagram.png" alt="Logo de instagram"
                /></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="item_footer">
          <p>
            Urban Sonrie <span id="anio">2021</span> © | Página Desarrollada por
            <a href="https://dentarios.com.mx/programacion.php"
              >Agencia de Marketing Dentarios ©
            </a>
          </p>
        </div>
      </footer>
    <script src="js/validacion.js"></script>
    <script src="js/idiomas.js"></script>
      <script src="js/slider.js"></script>
      <script src="js/menu.js"></script>
      <script src="js/year.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.customer-logos').slick({
              slidesToShow: 6,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 1000,
              arrows: false,
              dots: false,
              pauseOnHover: false,
              responsive: [{
              breakpoint: 991,
              settings: {
                    slidesToShow: 5
              }
              }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3
                }
        
                 
              }]
           });
        });
     </script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
       <script>
        AOS.init();
      </script>
     
        
</body>
</html>