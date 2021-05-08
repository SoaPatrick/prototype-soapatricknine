<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">

  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item breadcrumbs__item--last">What’s in store for 2021 dsfdf dsfsdf dsf </span>
    <span class="breadcrumbs__item"><a href="box_archive__list.php">2020 December</a></span>
    <span class="breadcrumbs__item"><a href="box_archive__home.php">Storage</a></span>
    <span class="breadcrumbs__item"><a href="box_home.php">Box</a></span>
    <span class="breadcrumbs__item"><a href="home.php">SoaPatrick</a></span>
  </nav>
  
  <?php include '../snippets/blog-post__full.php'; ?>
  <?php include '../snippets/navigation_box__single.php'; ?>
</div>

<aside class="post">
  <header>
    <h1>Related Posts</h1>
  </header>
  <?php
    for ($posts = 1; $posts <= 3; $posts++) {
      include '../snippets/blog-post__list.php';
    }
  ?>
</aside>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
