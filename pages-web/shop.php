<?php
include __DIR__ . '/../layout/header.php'

?>

<main id="site_main">
    <h2>Cibo per Animali</h2>
    <div class="container">
        <div class="row">
            <?php foreach ($foods as $food) : ?>
            <div class="col">
                <div class="card">
                    <p><?= $fod->price; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<!-- /#site_main -->

<?php
include __DIR__ . '/../layout/footer.php'

?>