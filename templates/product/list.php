<!doctype html>
<html lang="en">
<?php

$title = "Add product";

require_once "../templates/_head.php";

?>
<body>
<div class="container">
    <?php
    require_once "../templates/_menu.php";
    ?>
    <h1>Liste des produits</h1>

    <?php
    if ($products) {
        echo '<ul>';

        /**
         * @var \App\entity\Product $product
         */
        foreach ($products as $product) {
            echo '<li>';
            echo '<div>' . $product->getName() . ' : '. $product->getPrice() . '€ </div>';
            echo '<div>' . $product->getDescription() . '</div>';
            echo '</li>';
        }
        echo '</ul>';
    }
    ?>

</div>
</body>
</html>
