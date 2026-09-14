<?php
$services = [
    [
        'icon' => '★',
        'title' => 'Juego Libre',
        'text' => 'Ven a jugar y disfruta de nuestras instalaciones sin necesidad de reserva.',
        'detail' => 'Viernes, sábado y domingo: 17:00 - 20:30',
        'price' => 'Desde 5€',
    ],
    [
        'icon' => '✦',
        'title' => 'Cumpleaños Exclusivos',
        'text' => 'Todo el parque en exclusiva para tu cumpleaños y tus invitados.',
        'detail' => 'Duración: 2 horas y media',
        'price' => '18,90€ / niño',
    ],
    [
        'icon' => '◆',
        'title' => 'Cumpleaños NO Exclusivos',
        'text' => 'El parque estará abierto para tu cumpleaños y juego libre.',
        'detail' => 'Previa reserva · Sin mínimo de niños',
        'price' => '18,90€ / niño',
    ],
];

$rules = [
    'Uso obligatorio de calcetines.',
    'Los niños siempre deben estar acompañados por un adulto.',
    'Los menores de 3 años usarán la zona correspondiente y estarán supervisados.',
    'Está prohibido llevar comida y bebida al parque.',
    'No se puede trepar por las redes ni colocar decoraciones en las paredes.',
    'Los niños alérgicos deberán ser supervisados durante la merienda.',
];
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parque Infantil Kangaroos | Juegos y cumpleaños</title>
    <meta name="description" content="Parque infantil Kangaroos en Madrid. Cumpleaños, juego libre y celebraciones desde 1997.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700;800&family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="principal.css">
</head>
<body>
    <header class="site-header">
        <div class="topbar">
            <a class="brand" href="#inicio" aria-label="Parque Infantil Kangaroos, inicio">
                <span class="brand-mark">✦</span>
                <span><strong>Kangaroos</strong><small>PARQUE INFANTIL</small></span>
            </a>
            <nav class="main-nav" aria-label="Navegación principal">
                <a href="#inicio">Inicio</a>
                <a href="#servicios">Qué hacemos</a>
                <a href="#normas">Normas</a>
                <a href="#contacto">Contacto</a>
            </nav>
            <a class="header-phone" href="tel:915101042">91 510 10 42</a>
        </div>
    </header>

    <main>
        <section class="hero" id="inicio">
            <div class="hero-content">
                <p class="eyebrow">Juegos y cumpleaños desde <b>1997</b></p>
                <h1>Ven a jugar<br><em>al Kangaroos</em></h1>
                <p class="hero-copy">Un espacio pensado para que los peques disfruten, salten, rían y celebren a lo grande.</p>
                <div class="hero-actions">
                    <a class="button button-yellow" href="#contacto">Reserva tu fiesta <span>→</span></a>
                    <a class="text-link" href="#servicios">Descubre el parque <span>↓</span></a>
                </div>
            </div>
            <div class="hero-note"><span>500 m²</span><br>de diversión</div>
            <div class="hero-shape hero-shape-one"></div>
            <div class="hero-shape hero-shape-two"></div>
        </section>

        <section class="intro section-pad">
            <div class="section-heading">
                <p class="eyebrow blue">Un parque para todos</p>
                <h2>Todo lo que necesitas<br><span>para pasarlo en grande.</span></h2>
            </div>
            <div class="intro-copy">
                <p>En Kangaroos encontrarás un parque infantil cubierto, seguro y lleno de aventuras para disfrutar en familia.</p>
                <div class="feature-list"><span>✓ Aire acondicionado</span><span>✓ Instalaciones seguras</span><span>✓ Diversión asegurada</span></div>
            </div>
        </section>

        <section class="services section-pad" id="servicios">
            <div class="section-heading centered">
                <p class="eyebrow coral">Elige tu aventura</p>
                <h2>Qué hacemos</h2>
                <p>Momentos especiales que se quedan para siempre.</p>
            </div>
            <div class="service-grid">
                <?php foreach ($services as $service): ?>
                    <article class="service-card">
                        <div class="service-icon"><?= htmlspecialchars($service['icon']) ?></div>
                        <h3><?= htmlspecialchars($service['title']) ?></h3>
                        <p><?= htmlspecialchars($service['text']) ?></p>
                        <div class="service-detail"><?= htmlspecialchars($service['detail']) ?></div>
                        <strong class="service-price"><?= htmlspecialchars($service['price']) ?></strong>
                        <a href="#contacto" class="card-link">Me interesa <span>→</span></a>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="gallery-band">
            <div class="gallery-copy">
                <p class="eyebrow yellow">Aquí empieza la diversión</p>
                <h2>Corre, salta,<br><em>descubre.</em></h2>
                <p>Tirolina, toboganes, piscina de bolas y mucho más en un espacio preparado para jugar sin parar.</p>
                <a class="button button-coral" href="#contacto">Ven a conocernos <span>→</span></a>
            </div>
            <div class="gallery-photo photo-two"></div>
            <div class="gallery-photo photo-three"></div>
        </section>

        <section class="rules section-pad" id="normas">
            <div class="rules-photo"></div>
            <div class="rules-copy">
                <p class="eyebrow blue">Jugar con tranquilidad</p>
                <h2>Las normas<br><span>del parque.</span></h2>
                <p>Solo pedimos que se cumplan algunas normas para que todos podamos disfrutar con la máxima seguridad.</p>
                <ul>
                    <?php foreach ($rules as $rule): ?>
                        <li><span>✓</span><?= htmlspecialchars($rule) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <section class="contact" id="contacto">
            <div class="contact-inner">
                <div>
                    <p class="eyebrow yellow">¿Hablamos?</p>
                    <h2>Prepara una fiesta<br><em>inolvidable.</em></h2>
                    <p>¿Necesitas información sobre cumpleaños, eventos, horarios o menús? Estamos aquí para ayudarte.</p>
                </div>
                <div class="contact-details">
                    <div><span class="contact-icon">⌖</span><div><b>Donde estamos</b><p>Calle de Eugenio Salazar 45<br>28002 Madrid</p></div></div>
                    <div><span class="contact-icon">☎</span><div><b>Llámanos</b><p><a href="tel:915101042">91 510 10 42</a> · <a href="tel:666450593">666 450 593</a></p></div></div>
                    <div><span class="contact-icon">✉</span><div><b>Escríbenos</b><p><a href="mailto:info@parqueinfantilkangaroos.com">info@parqueinfantilkangaroos.com</a></p></div></div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <a class="brand footer-brand" href="#inicio"><span class="brand-mark">✦</span><span><strong>Kangaroos</strong><small>PARQUE INFANTIL</small></span></a>
        <p>Lunes a viernes: 17:00 a 20:30 · Sábado y domingo: 11:00 a 20:30</p>
        <p>© <?= date('Y') ?> Parque Infantil Kangaroos</p>
    </footer>
</body>
</html>