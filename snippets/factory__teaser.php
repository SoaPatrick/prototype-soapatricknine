<?php
  $number = rand(1,2);
  $size;
  switch ($number) {
    case "1":
      $size = '500x500';
      $class = 'large';
      break;
    default:
      $size = '250x250';
      $class = 'default';
  }
?>  

<article class="<?php echo $class; ?>">
  <a href="../pages/factory_single.php"><img src="http://placehold.it/<?php echo $size; ?>?text=Factory+Item"></a>
</article>
