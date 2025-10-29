<?php
/*
Template Name: Products Page
*/
get_header();
?>

<!-- ABOUT -->
<section class="py-5 bg-white text-left">
  <div class="container">
    <?php 
    $products_h2 = get_field('products_h2');
    echo '<h2 class="mb-3 text-success ">' . ($products_h2 ? esc_html($products_h2) : 'Our Products') . '</h2>';
    ?>
  </div>
</section>

<!-- PRODUCTS -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row text-center">
            <?php 
    $products_h3 = get_field('products_h3');
    echo '<h3 class="mb-4 text-center text-success">' . ($products_h3 ? esc_html($products_h3) : 'Plants') . '</h3>';
    ?>
      <?php 
      for ($i = 1; $i <= 8; $i++): 
        $image = get_field('product' . $i . '_image');
        $name  = get_field('product' . $i . '_name');
        if ($image && $name):
      ?>
        <div class="col-6 col-md-3 mb-4">
          <div class="card h-100">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($name); ?>" class="card-img-top" style="height:200px; object-fit:cover;">
            <div class="card-body">
              <h5><?php echo esc_html($name); ?></h5>
            </div>
          </div>
        </div>
      <?php endif; endfor; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
