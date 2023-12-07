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
    <h1>El Hombre Caiman</h1>
    <figure>
        <img id="caquiona" src="<?php echo e(asset('local_storage/img/caiman.png')); ?>"  alt="">
    </figure>
    
    <p>Hace mucho tiempo existió un pescador muy mujeriego que tenía por afición espiar a las mujeres plateñas desnudas que se bañaban en las aguas del río Magdalena. Previendo que podría ser descubierto entre los arbustos, se desplazó a la Alta Guajira para que un brujo le preparara una pócima que lo convirtiera temporalmente en caimán para que no sospecharan las bañistas y poderlas admirar a placer. El brujo le preparó dos pócimas, una roja que lo convertía en caimán, y otra blanca que lo volvía hombre de nuevo.
        Montenegro disfrutó por algún tiempo de su ingenio, pero en una ocasión el amigo que le echaba la pócima blanca no pudo acompañarlo y en su lugar fue otra persona que al ver el caimán se asustó al creer que era verdadero y dejó caer la botella blanca con el líquido que lo convertía en hombre de nuevo. Antes de derramarse completamente algunas gotas del líquido salpicaron únicamente la cabeza de Saúl, por lo que el resto su cuerpo quedó convertido en caimán. Desde entonces, se convirtió en el terror de las mujeres, quienes no volvieron a bañarse en el río, por miedo que les pasara algo.
        </p>
    
    
        <a href="<?php echo e(route('caiman2')); ?>"><img id="flecha" src="<?php echo e(asset('local_storage/img/derecha.png')); ?>"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="<?php echo e(asset('local_storage/img/ojo.gif')); ?>" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="<?php echo e(asset('local_storage/img/musicafondo.mp3')); ?>"  type="audio/mpeg">
    
</audio></div><?php /**PATH C:\xampp\htdocs\MagicaColombia\resources\views\HistoriasMagdalena\HistoriaCaiman.blade.php ENDPATH**/ ?>