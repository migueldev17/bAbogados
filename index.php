<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTA Legal</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Enlazar CSS Floating WhatsApp -->
    <link rel="stylesheet" href="https://rawcdn.githack.com/jerfeson/floating-whatsapp/0310b4cd88e9e55dc637d1466670da26b645ae49/floating-wpp.min.css">
    <!-- Enlazar JS Floating WhatsApp -->
    <script type="text/javascript" src="https://rawcdn.githack.com/jerfeson/floating-whatsapp/0310b4cd88e9e55dc637d1466670da26b645ae49/floating-wpp.min.js"></script>
</head>
<body>
    <header>
        <nav>
            <div class="menu-toggle" id="mobile-menu">
                <span class="material-icons">menu</span>
            </div>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#contacto">Sectores</a></li>
            </ul>
            <button id="theme-toggle" class="material-icons">wb_sunny</button>
        </nav>
    </header>

    <section id="inicio">
    <div class="hero">
        <h1>SINUVALOREM</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi error rerum repellendus temporibus, eum officia dolore maiores nemo vitae voluptates nihil facilis, molestias dolor, quia alias illum exercitationem veniam velit!</p>
        <a href="#servicios" class="btn-primary">Saber Más</a>
        <div class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="image/J1.jpg" alt="Description of image 1">
                    <div class="carousel-caption">
                        <h3>Web Design</h3>
                        <p>Working Spaces for Startups Freelancer</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/J2.jpg" alt="Description of image 2">
                    <div class="carousel-caption">
                        <h3>Web Design</h3>
                        <p>Working Spaces for Startups Freelancer</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/J3.jpg" alt="Description of image 3">
                    <div class="carousel-caption">
                        <h3>Web Design</h3>
                        <p>Working Spaces for Startups Freelancer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <section id="servicios">
        <div class="content">
            <h2>Un equipo multidisciplinar</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis eius eos molestias aspernatur, iste illum iure magnam error eveniet qui laborum consectetur deleniti unde, repellendus quidem nisi? Ut, aliquid temporibus?</p>
            <img src="team.jpg" alt="Equipo">
        </div>
    </section>

    <section id="contacto">
        <div class="content">
            <h2>Contacto</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil sed libero doloremque! Omnis sapiente perspiciatis quos exercitationem nostrum nihil nemo eum, facilis ut asperiores repellat odio accusamus deleniti velit ratione!</p>
            <img src="team.jpg" alt="Equipo">
            
            <div class="social-buttons">
                <a href="https://www.facebook.com" target="_blank" class="social-button" aria-label="Facebook">
                    <img src="facebook-button.png" alt="Facebook">
                </a>
                <a href="https://x.com/" target="_blank" class="social-button" aria-label="Twitter">
                    <img src="twitter-button.png" alt="Twitter">
                </a>
                <a href="https://www.linkedin.com" target="_blank" class="social-button" aria-label="LinkedIn">
                    <img src="linkedin-button.png" alt="LinkedIn">
                </a>
                <div id="WABoton"></div>
            </div>
        </div>
    </section>                

    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509225!2d144.9537363153168!3d-37.8172099797517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5776b6f0b120c0!2sEnvato!5e0!3m2!1sen!2sus!4v1615795940066!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="contact-form">
        <form action="send_email.php" method="post">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Asunto:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>

    <script src="js/index.js"></script>
</body>
</html>
