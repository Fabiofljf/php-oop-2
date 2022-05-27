<?php
include __DIR__ . '/../layout/header.php';

include __DIR__ . '/../db.php';
?>

<main id="site_main" class="p-5">
  <h2 class="p-5">Cibo per Animali</h2>
  <div class="container">
    <div class="row row-cols-4">
      <?php foreach ($foods as $food) : ?>
        <div class="col">
          <div class="card text-start|center|end">
            <img class="card-img-top" src="https://picsum.photos/id/1/200/300" alt="">
            <div class="card-body">
              <h4 class="card-title">Tipologia: <?= $food->typefood; ?></h4>
              <p class="card-text">Specie: <?= $food->kind; ?></p>
              <p class="card-text">Quantità nel sacco: <?= $food->weight; ?></p>
              <p class="card-text">Prezzo: <?= $food->getDiscount(); ?>&euro;</p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <h2 class="p-5">Giochi per Animali</h2>
  <div class="container">
    <div class="row row-cols-4">
      <?php foreach ($toys as $toy) : ?>
        <div class="col">
          <div class="card text-start|center|end">
            <img class="card-img-top" src="https://picsum.photos/id/1/200/300" alt="">
            <div class="card-body">
              <h4 class="card-title">Tipologia: <?= $toy->type; ?></h4>
              <p class="card-text">Materiale: <?= $toy->typetoys; ?></p>
              <p class="card-text">Tempo di spedizione: <?= $toy->timeshipping; ?></p>
              <p class="card-text">Prezzo: <?= $toy->price; ?>&euro;</p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <h2 class="p-5">Cucce per Animali</h2>
  <div class="container">
    <div class="row row-cols-4">
      <?php foreach ($kennels as $kennel) : ?>
        <div class="col">
          <div class="card text-start|center|end">
            <img class="card-img-top" src="https://picsum.photos/id/1/200/300" alt="">
            <div class="card-body">
              <h4 class="card-title">Tipologia: <?= $kennel->typekennels; ?></h4>
              <p class="card-text">Materiale: <?= $kennel->material; ?></p>
              <p class="card-text">Tempo di spedizione: <?= $kennel->timeshipping; ?></p>
              <p class="card-text">Prezzo: <?= $kennel->price; ?>&euro;</p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</main>
<!-- /#site_main -->

<?php
include __DIR__ . '/../layout/footer.php';

?>