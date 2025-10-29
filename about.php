<?php
/*
Template Name: About Page
*/
get_header();
?>
<!-- About Our Family -->
<section class="py-5 bg-white about-family">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-1">
        <?php 
        $about_family_h1 = get_field('about_family_h1');
        $about_family_p  = get_field('about_family_p');
        if ($about_family_h1) {
          echo '<h2 class="section-title">' . esc_html($about_family_h1) . '</h2>';
        }
        if ($about_family_p) {
          echo '<p>' . esc_html($about_family_p) . '</p>';
        }
        ?>
      </div>
      <div class="col-md-6 mb-4 mb-md-0 order-md-2">
        <?php 
        $about_family_image = get_field('about_family_image');
        if ($about_family_image) {
          echo '<img src="' . esc_url($about_family_image['url']) . '" alt="' . esc_attr($about_family_image['alt']) . 
          '" class="img-fluid rounded shadow-sm section-img" style="height:250px; object-fit:cover; width:100%;">';
        }
        ?>
      </div>
    </div>
  </div>
</section>

<!-- About Our Shop -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <?php 
        $about_shop_image = get_field('about_shop_image');
        if ($about_shop_image) {
          echo '<img src="' . esc_url($about_shop_image['url']) . '" alt="' . esc_attr($about_shop_image['alt']) .
           '" class="img-fluid rounded shadow-sm section-img" style="height:250px; object-fit:cover; width:100%;">';
        }
        ?>
      </div>
      <div class="col-md-6">
        <?php 
        $about_shop_h1 = get_field('about_shop_h1');
        $about_shop_p  = get_field('about_shop_p');
        if ($about_shop_h1) {
          echo '<h2 class="section-title">' . esc_html($about_shop_h1) . '</h2>';
        }
        if ($about_shop_p) {
          echo '<p>' . esc_html($about_shop_p) . '</p>';
        }
        ?>
      </div>
    </div>
  </div>
</section>

<!-- Our Goals & Plans -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-1">
        <?php 
        $goals_h1 = get_field('goals_h1');
        $goals_p  = get_field('goals_p');
        if ($goals_h1) {
          echo '<h2 class="section-title">' . esc_html($goals_h1) . '</h2>';
        }
        if ($goals_p) {
          echo '<p>' . esc_html($goals_p) . '</p>';
        }
        ?>
      </div>
      <div class="col-md-6 mb-4 mb-md-0 order-md-2">
        <?php 
        $goals_image = get_field('goals_image');
        if ($goals_image) {
          echo '<img src="' . esc_url($goals_image['url']) . '" alt="' . esc_attr($goals_image['alt']) . 
          '" class="img-fluid rounded shadow-sm section-img" style="height:250px; object-fit:cover; width:100%;">';
        }
        ?>
      </div>
    </div>
  </div>
</section>

<!-- Quote -->
<section class="py-5 bg-white text-center">
  <div class="container">
    <?php 
    $about_quote = get_field('about_quote');
    if ($about_quote) {
      echo '<h2 class="mb-3 text-success fst-italic">"' . esc_html($about_quote) . '"</h2>';
    }
    ?>
  </div>
</section>

<?php get_footer(); ?>
