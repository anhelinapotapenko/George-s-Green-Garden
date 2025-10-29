<?php get_header(); ?>

<!-- ============================= -->
<!--       CAROUSEL SECTION        -->
<!-- ============================= -->
<section class="carousel-section">
  <div id="gardenCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      <?php 
      // Get up to 3 carousel images from ACF fields
      $images = [];
      for ($i = 1; $i <= 3; $i++) {
        $img = get_field('carousel_image' . $i);
        if ($img) {
          $images[] = $img;
        }
      }

      // Display carousel images if available
      if (!empty($images)):
        foreach ($images as $index => $image): ?>
          <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
            <img src="<?php echo esc_url($image['url']); ?>" 
                 class="d-block w-100" 
                 alt="<?php echo esc_attr($image['alt']); ?>">
          </div>
        <?php endforeach; 
      endif;
      ?>

      <!-- Carousel caption (title and subtitle) -->
      <div class="carousel-caption">
        <?php 
        $carousel_title = get_field('carousel_title');
        $carousel_subtitle = get_field('carousel_subtitle');

        if ($carousel_title): ?>
          <h1 class="display-4"><?php echo esc_html($carousel_title); ?></h1>
        <?php endif; ?>

        <?php if ($carousel_subtitle): ?>
          <p class="lead-carousel"><?php echo esc_html($carousel_subtitle); ?></p>
        <?php endif; ?>
      </div>
    </div>

    <!-- Carousel controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#gardenCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#gardenCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</section>


<!-- ============================= -->
<!--         ABOUT SECTION         -->
<!-- ============================= -->
<section class="py-5 bg-white text-center">
  <div class="container">
    <?php 
    // Get text values from ACF
    $goal_h1 = get_field('goal-h1');
    $goal_p  = get_field('goal-p');
    ?>

    <?php if ($goal_h1): ?>
      <h2 class="mb-3 text-success">
        <?php echo esc_html($goal_h1); ?>
      </h2>
    <?php endif; ?>

    <?php if ($goal_p): ?>
      <p class="lead">
        <?php echo esc_html($goal_p); ?>
      </p>
    <?php endif; ?>
  </div>
</section>


<!-- ============================= -->
<!--         INTRO SECTION         -->
<!-- ============================= -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">

      <!-- Left column: image -->
      <div class="col-md-6 mb-4 mb-md-0">
        <?php 
        $image = get_field('hero_image');
        if ($image): ?>
          <img src="<?php echo esc_url($image['url']); ?>" 
               alt="<?php echo esc_attr($image['alt']); ?>">
        <?php endif; ?>
      </div>

      <!-- Right column: heading and text -->
      <div class="col-md-6">
        <?php 
        $hero_title = get_field('hero_title');
        if ($hero_title) {
          echo '<h2 class="section-title text-success mb-3">' . esc_html($hero_title) . '</h2>';
        }

        $about_text = get_field('about_text');
        if ($about_text) {
          echo '<p class="lead">' . esc_html($about_text) . '</p>';
        }
        ?>
      </div>
    </div>
  </div>
</section>


<!-- ============================= -->
<!--       CATEGORIES SECTION      -->
<!-- ============================= -->
<section class="py-5 bg-write">
  <div class="container">
    <?php 
    // Get section title from ACF
    $category_h1 = get_field('category-h1');
    ?>
    <h3 class="mb-4 text-center text-success">
      <?php 
      echo $category_h1 ? esc_html($category_h1) : 'Shop by Category';
      ?>
    </h3>

    <!-- Display 4 categories -->
    <div class="row text-center">
      <?php 
      for ($i = 1; $i <= 4; $i++): 
        $image = get_field('category_image' . $i);
        $name  = get_field('category_name' . $i);
        if ($image && $name):
      ?>
        <div class="col-6 col-md-3 mb-4">
          <div class="card h-100">
            <img src="<?php echo esc_url($image['url']); ?>" 
                 alt="<?php echo esc_attr($name); ?>" 
                 class="card-img-top">
            <div class="card-body">
              <h5><?php echo esc_html($name); ?></h5>
            </div>
          </div>
        </div>
      <?php endif; endfor; ?>
    </div>
  </div>
</section>


<!-- ============================= -->
<!--          VIDEOS SECTION       -->
<!-- ============================= -->
<section class="py-5 bg-write">
  <div class="container text-center">
    <?php 
    $videos_h1 = get_field('videos-h1');
    ?>
    <h3 class="mb-4 text-success">
      <?php echo $videos_h1 ? esc_html($videos_h1) : 'Gardening Tips & Tutorials'; ?>
    </h3>

    <div class="row">
      <?php 
      // Video 1
      $video_1 = get_field('video_1_url');
      if ($video_1): ?>
        <div class="col-md-6 mb-4">
          <div class="ratio ratio-16x9">
            <iframe src="<?php echo esc_url($video_1); ?>" title="YouTube video"></iframe>
          </div>
        </div>
      <?php endif; ?>

      <?php 
      // Video 2
      $video_2 = get_field('video_2_url');
      if ($video_2): ?>
        <div class="col-md-6 mb-4">
          <div class="ratio ratio-16x9">
            <iframe src="<?php echo esc_url($video_2); ?>" title="YouTube video"></iframe>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>


<!-- ============================= -->
<!--        CONTACT SECTION        -->
<!-- ============================= -->
<section class="py-5 bg-light">
  <div class="container">
    <h3 class="mb-4 text-center text-success">Contact Us</h3>

    <!-- Contact form (not functional, front-end only) -->
    <form class="row g-3">
      <div class="col-md-6">
        <input type="text" class="form-control" placeholder="Your Name" required>
      </div>
      <div class="col-md-6">
        <input type="email" class="form-control" placeholder="Your Email" required>
      </div>
      <div class="col-12">
        <select class="form-select" required>
          <option value="">Interested in...</option>
          <option value="plants">Plants</option>
          <option value="pots">Pots</option>
          <option value="tools">Garden Tools</option>
          <option value="fertiliser">Fertiliser</option>
          <option value="gifts">Gifts</option>
        </select>
      </div>
      <div class="col-12">
        <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
      </div>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-success">Send Message</button>
      </div>
    </form>
  </div>
</section>

<?php get_footer(); ?>
