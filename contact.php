<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<!-- HEADER SECTION -->
<section class="py-5 bg-white text-left">
  <div class="container">
    <?php 
    $contact_h2 = get_field('contact_h2');
    echo '<h2 class="mb-3 text-success ">' . ($contact_h2 ? esc_html($contact_h2) : 'Contact Us') . '</h2>';
    ?>
  </div>
</section>

<!-- CONTACT FORM -->
<section class="py-5 bg-light">
  <div class="container">
    <?php 
    $contact_intro = get_field('contact_intro');
    if ($contact_intro) {
      echo '<p class="text-center lead mb-4">' . esc_html($contact_intro) . '</p>';
    }
    ?>
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

<!-- IMAGE SECTION -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 d-flex justify-content-center">
        <?php 
        $contact_image = get_field('contact_image');
        if ($contact_image) {
          echo '<img src="' . esc_url($contact_image['url']) . '" 
     alt="' . esc_attr($contact_image['alt']) . '" 
     class="img-fluid rounded shadow-sm" 
     style="width:100%;max-width:700px;height:250px;object-fit:cover;">
';
        }
        ?>
      </div>
    </div>
  </div>
</section>

<!-- QUOTE -->
<section class="py-5 bg-white text-center">
  <div class="container">
    <?php 
    $contact_quote = get_field('contact_quote');
    if ($contact_quote) {
      echo '<h2 class="mb-3 text-success fst-italic">"' . esc_html($contact_quote) . '"</h2>';
    }
    ?>
  </div>
</section>



<?php get_footer(); ?>
