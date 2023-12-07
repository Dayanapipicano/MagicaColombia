<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css_index/Eleyenda.css')); ?>">

</head>
<body>

<header>
<a href="<?php echo e(route('inicio')); ?>" class="logo">
    <img src="<?php echo e(asset('local_storage/img/logo.png')); ?>"  alt="">
    <h2>La Mágica Colombia</h2>
</a>


<nav>
    <a href="<?php echo e(route('subirhistoria')); ?>" class="link">¿Quieres subir tú historia?</a>
    <a href="<?php echo e(route('info')); ?>" class="link">¿Quienes Somos?</a>
    <a href="<?php echo e(route('contac')); ?>" class="link">Contacto</a>
    <a href="<?php echo e(route('registro')); ?>" class="link">Registráte</a>
</nav>
</header>

<div class="audioo">
    <h2>Música de ambiente</h2>
    <div class="ojoo">
        <img src="<?php echo e(asset('local_storage/img/ojo.gif')); ?>" >
    </div>
<audio  controls autoplay >
    <source src="<?php echo e(asset('local_storage/img/musicafondo.mp3')); ?>"  type="audio/mpeg">
    
</audio></div>

<div class="leyenda">
    <div id="fondoo">

    </div>
    <h1>El Sombreron</h1>
    <figure>
        <img id="caquiona" src="<?php echo e(asset('local_storage/img/sombreron.jpg')); ?>"  alt="">
    </figure>
        <p>Siempre persigue a los borrachos, a los peleadores, a los trasnochadores, los jugadores y a los tramposos. Aprovecha los sitios solitarios. Cuentan que en noches de luna llena es fácil confundirlo con las sombras que proyectan las ramas y los arbustos. Llega siempre de noche a todo galope, acompañado de un fuerte viento helado y desaparece rápidamente.
            El Sombrerón fue famoso en el departamento de Antioquia, en la época de 1.837, cuando recorría todas las calles. Aparecía cuatro o cinco viernes seguidos, volvía a aparecer uno o dos meses después. "Parece que fuera el Sombrerón, el espanto propio de Medellín". 
            También hay historias de sus andanzas en otras regiones colombianas como el Tolima, el Huila y al oriente del Valle del Cauca. Se le denomina como El Jinete Negro y se le describe en forma muy similar a como se ha descrito aquí.
            </p>

    
</div>
<div class="ojo">
    <img src="<?php echo e(asset('local_storage/img/ojo.gif')); ?>" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="<?php echo e(asset('local_storage/img/musicafondo.mp3')); ?>"  type="audio/mpeg">
    
</audio></div>


<?php /**PATH C:\xampp\htdocs\MagicaColombia\resources\views\HistoriasHuila\HistoriaSombreron2.blade.php ENDPATH**/ ?>