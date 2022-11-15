<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aszaychik Blog</title>
</head>
<body>
  <main>
    <h1>Newest Article</h1>
    <?php
    foreach ($blogs as $key => $blog){?>
      <article class="blog">
        <h2><?= $blog['title'];?></h2>
        <p><?= $blog['content'];?></p>
      </article>
    <?php } ?>
  </main>
</body>
</html>