<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<?php
if (!isset($_SESSION['username'])) {
    header('location: /login.php');
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <ul>
            <?php
            foreach ($_SESSION['products'] as $productId => $qantity) : ?>
            <li> <?= $catalog[$productId]['name'] ?> : <?=  $qantity ?>. <br>
                Prix Total = <?= $catalog[$productId]['price'] * $qantity ?> €</li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
