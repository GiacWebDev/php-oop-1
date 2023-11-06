<?php

require_once __DIR__ . '/models/Movie.php';
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
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Genre</th>
      <th scope="col">Vote</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($movies as $movie): ?>
    <tr>
      <td><?php echo $movie->name ?></td>
      <td><?php echo $movie->genre ?></td>
      <td><?php echo $movie->vote ?></td>
    </tr>
  <?php endforeach; ?>
</table>
</div>
  
</body>
</html>