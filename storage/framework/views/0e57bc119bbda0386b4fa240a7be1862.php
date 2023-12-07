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
    <h1>EL Mohan</h1>
    <figure>
        <img id="caquiona" src="<?php echo e(asset('local_storage/img/mohan.png')); ?>"  alt="">
    </figure>
    
    <p>Se dice que en este caserío vivían dos compadres brujos que, a primera oportunidad, trataron de competir en conocimientos. Uno se transformaba en gallina y otro en pavo; uno en tortuga y el otro en perro, y así sucesivamente. El escenario de sus alardes y demostraciones era el tramo de la carretera Quibdo – Tutunendo. 
        Una vez uno de los compadres se encontró, a mitad del camino, una curiosa tortuga; la recogió y se la echó al hombro, pero a medida que avanzaba observaba que aquella crecía en tamaño y, obviamente, en peso, hasta que no pudiendo soportarla más la arrojó al suelo. Cuál no sería su sorpresa al verla transformada en su compadre rival, quien socarronamente atinó a decirle: “Gracias, compadre por cargarme; hoy tenía pereza de caminar” y desapareció misteriosamente para esperarlo en Tutunendo, muerto de risa.
        Al compadre no le gustó el juego y juró vengarse de alguna manera. Fue así como otro día se fue de caza por las cercanías del Icho, cuando a pocos metros de distancia se encontró en frente a un tigre descomunal con apariencia humana. El animal se le plantó en actitud de ataque y se lanzó para devorarlo, pero el compadre se defendió con la misma habilidad del felino. “Este es mi compadre”, se dijo para sus adentros, y sin pérdida de tiempo rezó el credo al revés, oración apropiada para hacerlo inofensivo y para que no recuperará su estado antropomorfo. Y así fue. El compadre se quedó definitivamente transformado en tigre y se dedicó a arrasar porquerizas y gallineros, devorar vacas y acabar con cuanto animal doméstico encontraba a su paso.
        </p>
    
    
        <a href="<?php echo e(route('mohan2')); ?>"><img id="flecha" src="<?php echo e(asset('local_storage/img/derecha.png')); ?>"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="<?php echo e(asset('local_storage/img/ojo.gif')); ?>" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="<?php echo e(asset('local_storage/img/musicafondo.mp3')); ?>"  type="audio/mpeg">
    
</audio></div><?php /**PATH C:\xampp\htdocs\MagicaColombia\resources\views\HistoriasChoco\HistoriaMohan.blade.php ENDPATH**/ ?>