<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css_index/EThistoria.css')); ?>">

</head>
<body>

<header>
<a href="<?php echo e(route('inicio')); ?>" class="logo">
    <img src="<?php echo e(asset('local_storage/img/logo.png')); ?>"   alt="">
    <h2>La Mágica Colombia</h2>
</a>


<nav>
    <a href="<?php echo e(route('subirhistoria')); ?>" class="link">¿Quieres subir tú historia?</a>
    <a href="<?php echo e(route('info')); ?>" class="link">¿Quienes Somos?</a>
    <a href="<?php echo e(route('contac')); ?>" class="link">Contacto</a>
    <a href="<?php echo e(route('registro')); ?>" class="link">Registráte</a>
</nav>
</header>

<div class="titulo">
   <h1>DEPARTAMENTO SUCRE</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="<?php echo e(asset('local_storage/img/corcovao.png')); ?>" >
        </figure>
        <div class="contenido">
            <h3>Corcovao De Tofeme</h3>
            <p>Desde la orilla del río San Jorge se alcanza a ver por las mañanas despejadas o después de fuertes lluvias la sombra azul del cerro del Corcovao.</p>
            <a href="<?php echo e(route('corco')); ?>">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="<?php echo e(asset('local_storage/img/juanlara.png')); ?>" >
        </figure>
        <div class="contenido">
            <h3>El Fantasma De Juan Lara</h3>
            <p>Es un espíritu burlón que aparece de vereda en vereda y de pueblo en pueblo, enamorado de alguna muchacha a quien asedia hasta enloquecerla </p>
            <a href="<?php echo e(route('lara')); ?>">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="<?php echo e(asset('local_storage/img/cauca/Caquiona/imagen 2.jpeg')); ?>" >
        </figure>
        <div class="contenido">
            <h3>La virgen de Caquiona</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla asperiores nam repellendus dolor itaque, delectus fuga debitis corporis facilis veritatis.</p>
            <a href="<?php echo e(route('leyenda')); ?>">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="<?php echo e(asset('local_storage/img/cauca/Caquiona/imagen 3.jpg')); ?>" >
        </figure>
        <div class="contenido">
            <h3>La virgen de Caquiona</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla asperiores nam repellendus dolor itaque, delectus fuga debitis corporis facilis veritatis.</p>
            <a href="<?php echo e(route('leyenda')); ?>">Leer más</a>

        </div>

    </div>

</div>





<?php /**PATH C:\xampp\htdocs\MagicaColombia\resources\views\Departamentos\tarjetaSucre.blade.php ENDPATH**/ ?>