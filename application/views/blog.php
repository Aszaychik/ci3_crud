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
    <a href="<?php echo site_url('blog/createArticle');?>"> + Create Article</a>

    <form action="" method="get">
      <input type="text" name="search">
      <button type="submit">Search</button>
    </form>

    <?php
    foreach ($blogs as $key => $blog){?>
      <article class="blog">
        <h2>
          <a href="<?= site_url("blog/detail/{$blog['url']}")?>"><?= $blog['title'];?></a>
        </h2>
        <a href="<?php echo site_url('blog/updateArticle/'.$blog['id']);?>"> Edit</a>
        <a href="<?php echo site_url('blog/deleteArticle/'.$blog['id']);?>"> Delete</a>
        <p><?= $blog['content'];?></p>
      </article>
    <?php } ?>
  </main>
</body>
</html>