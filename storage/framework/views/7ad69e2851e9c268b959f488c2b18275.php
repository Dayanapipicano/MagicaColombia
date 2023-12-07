
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
    <h1>Juan Machete</h1>
    <figure>
        <img id="caquiona" src="<?php echo e(asset('local_storage/img/juanmachete.png')); ?>"  alt="">
    </figure>
    
    <p> Pensó "será de algún vecino". Al otro día lo despertó el alboroto causado por los animales, se imaginó que la causa podía ser el toro negro. Trató de sacarlo de su territorio, pero esto no fue posible porque ningún rejo aguanto.
        Cansado y preocupado con el extraño incidente se acostó, pero a las doce de la noche fue despertado por un imponente bramido. Al llegar al potrero se dió cuenta que miles de reces pastaban de un lado a otro. Su riqueza aumentó cada vez más. Dice la leyenda durante muchos años fue el hombre más rico de la región.
        Hasta que un día misteriosamente empezó a desaparecer el ganado y a disminuir su fortuna hasta quedar en la miseria. Se dice que Juan Machete después de cumplir su pacto con el diablo, arrepentido enterró la pata que le quedaba y desapareció en las entrañas de la selva.
        Cuenta la leyenda que en las tierras de la marraneras deambula un hombre vomitando fuego e impidiendo que se desentierre el dinero de Juan Machete. </p>
    
    
        <a href="<?php echo e(route('leyenda')); ?>"><img id="flecha" src="<?php echo e(asset('local_storage/img/izquierda.png')); ?>"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="<?php echo e(asset('local_storage/img/ojo.gif')); ?>" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="<?php echo e(asset('local_storage/img/musicafondo.mp3')); ?>"  type="audio/mpeg">
    
</audio></div><?php /**PATH C:\xampp\htdocs\MagicaColombia\resources\views\HistoriasMeta\HistoriaJuanMachete2.blade.php ENDPATH**/ ?>