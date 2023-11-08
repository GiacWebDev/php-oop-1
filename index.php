<?php

require_once __DIR__ . '/models/Production.php';
require_once __DIR__ . '/models/TvSerie.php';
require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/models/Media.php';
require_once __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <title>OOP - Movie</title>
</head>
<body>

<div class="container mt-5">
  <div class="row">

    <?php foreach ($productions as $production): ?>

      <div class="col-md-4">
        <div class="card">

          <div class="card-body">
            <img src="img/<?php echo $production->image?->file_name ?? "movie_placeholder.jpg" ?>" class="card-img-top" alt="<?php echo $production->image?->name ?? " " ?>">
            <h5 class="card-title"><?php echo $production->name ?></h5>
            <h6 class="mb-2"><?php echo $production->genre ?></h6>
            <p class="card-text">Vote: <?php echo $production->vote ?></p>

            <?php if (property_exists($production, 'published_year')): ?>
              <p class="card-text">Anno Pubblicazione: <?php echo $production->published_year ?></p>
            <?php endif; ?>
            <?php if (property_exists($production, 'running_time')): ?>
              <p class="card-text">Durata: <?php echo $production->running_time ?> min</p>
            <?php endif; ?>
            <?php if (property_exists($production, 'aired_from_year')): ?>
              <p class="card-text">Anno primo ep.: <?php echo $production->aired_from_year ?></p>
            <?php endif; ?>
            <?php if (property_exists($production, 'aired_to_year')): ?>
              <p class="card-text">Anno secondo ep.: <?php echo $production->aired_to_year ?></p>
            <?php endif; ?>
            <?php if (property_exists($production, 'number_of_episodes')): ?>
              <p class="card-text">n° episodi: <?php echo $production->number_of_episodes ?></p>
            <?php endif; ?>
            <?php if (property_exists($production, 'number_of_seasons')): ?>
              <p class="card-text">n° stagioni: <?php echo $production->number_of_seasons ?></p>
            <?php endif; ?>

          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
  
</body>
</html>
