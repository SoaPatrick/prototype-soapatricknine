<?php
  $theme = 'default';
  include '../templates/head.php';
  include '../templates/header.php';
?>

<main class="global-main site">

  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item"><a href="home.php">Home</a></span>
    <span class="breadcrumbs__item"><a href="factory_home.php">Factory</a></span>
    <span class="breadcrumbs__item breadcrumbs__item--last">Tag Name</span>
  </nav>
  
  <header>
    <h1>Tag Name</h1>
  </header>
  <div class="site__content">
    <nav class="tags">
      <?php
        for ($posts = 1; $posts <= 8; $posts++) { ?>
          <a href="factory_tags__list.php" class="<?php if ($posts == 3) { ?> active<?php } ?>">Tag Name</a>
        <?php }
      ?>
    </nav>
    <div class="tiles-grid">
      <?php
        for ($posts = 1; $posts <= 5; $posts++) {
          include '../snippets/factory__teaser.php';
        }
      ?>
    </div>
  </div>  
</main>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
