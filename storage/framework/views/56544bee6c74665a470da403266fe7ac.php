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
    <h1>La Pata Sola</h1>
    <figure>
        <img id="caquiona" src="<?php echo e(asset('local_storage/img/pata.png')); ?>"  alt="">
    </figure>
    
    <p>pero el enfurecido marido le cortó una de sus piernas ocasionándole la muerte. Las personas aseguran haberla visto saltando en una sola pata, por sierras, cañadas y caminos, destilando sangre y lanzando gritos lastimeros.
        En cada subregión del río Magdalena, las historias y las músicas, al igual que los acentos suenan en las más variadas formas, por eso, es importante mantener viva la esencia de la palabra en cada una de las poblaciones que construyen su historia a través de ella
         Precisamente, el director de Comic Lab, comenta que “me parece importante mencionar que, por su importancia geográfica, socioeconómica y cultural, debería existir una política cultural nacional centrada en el río Magdalena, que estimule la producción de vehículos culturales sobre el río y sus historias en todos los frentes: música, literatura (tradicional y gráfica) y artes plásticas
        </p>
    
    
        <a href="<?php echo e(route('pata')); ?>"><img id="flecha" src="<?php echo e(asset('local_storage/img/izquierda.png')); ?>"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="<?php echo e(asset('local_storage/img/ojo.gif')); ?>" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="<?php echo e(asset('local_storage/img/musicafondo.mp3')); ?>"  type="audio/mpeg">
    
</audio></div><?php /**PATH C:\xampp\htdocs\MagicaColombia\resources\views\HistoriasMagdalena\HistoriaPata2.blade.php ENDPATH**/ ?>