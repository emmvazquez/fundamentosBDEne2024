
<ul>


<?php foreach($productos as $p) : ?>
    <li>
            <a href="/productos/detalle/<?=$p->IdProducto;?> " ><?=$p->NombreProducto ?></a>    
<?php endforeach ?>
</ul>