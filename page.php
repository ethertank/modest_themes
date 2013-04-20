<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ad960d41581d12f97d63efbfcde954c2c64f3373
=======
>>>>>>> ad960d41581d12f97d63efbfcde954c2c64f3373
<?php
/**
 * @package WordPress
 * @subpackage modest3
 */
get_header();
?>

<article id="content"
         role="main">

  <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
  ?>

  <header class="entry-header">
<<<<<<< HEAD
<<<<<<< HEAD

    <h1 class="post-title"><?php the_title(); ?></h1>

=======
    <h1 class="post-title"><?php the_title(); ?></h1>
>>>>>>> ad960d41581d12f97d63efbfcde954c2c64f3373
=======
    <h1 class="post-title"><?php the_title(); ?></h1>
>>>>>>> ad960d41581d12f97d63efbfcde954c2c64f3373
  </header>


  <div class="entry-body">
<<<<<<< HEAD
<<<<<<< HEAD
    <?php
      the_content('続きを読む');
    ?>
  </div>


=======
    <?php the_content('続きを読む'); ?>
  </div>

>>>>>>> ad960d41581d12f97d63efbfcde954c2c64f3373
=======
    <?php the_content('続きを読む'); ?>
  </div>

>>>>>>> ad960d41581d12f97d63efbfcde954c2c64f3373
<?php
    endwhile;
  else:
    echo '<p>Sorry, no posts matched your criteria</p>';
  endif;
?>

</article>

<<<<<<< HEAD
<<<<<<< HEAD
<?php get_footer(); ?>
=======
<?php
/**
 * @package WordPress
 * @subpackage modest3
 */
get_header();
?>

<article id="content"
         role="main">

  <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
  ?>

  <header class="entry-header">
    <h1 class="post-title"><?php the_title(); ?></h1>
  </header>


  <div class="entry-body">
    <?php the_content('������ǂ�'); ?>
  </div>

<?php
    endwhile;
  else:
    echo '<p>Sorry, no posts matched your criteria</p>';
  endif;
?>

</article>

<?php get_footer(); ?>
>>>>>>> コードフォーマット
=======
<?php get_footer(); ?>
>>>>>>> ad960d41581d12f97d63efbfcde954c2c64f3373
=======
<?php get_footer(); ?>
>>>>>>> ad960d41581d12f97d63efbfcde954c2c64f3373
