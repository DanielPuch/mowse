<?php
/*
Template Name: Homepage 
*/
?>

<?php get_header(); ?>


<div id="slides">
    <div class="slides-container">
     <img src="<?php bloginfo('template_directory'); ?>/images/people.jpeg" alt="Cinelli"/>
      <img src="<?php bloginfo('template_directory'); ?>/images/surly.jpeg" width="1024" height="682" alt="Surly">
      <img src="<?php bloginfo('template_directory'); ?>/images/cinelli-front.jpeg" width="1024" height="683" alt="Cinelli">
      <img src="<?php bloginfo('template_directory'); ?>/images/affinity.jpeg" width="1024" height="685" alt="Affinity">
    </div>

    <nav class="slides-navigation">
      <a href="#" class="next">Next</a>
      <a href="#" class="prev">Previous</a>
    </nav>
  </div>


<?php get_footer(); ?>