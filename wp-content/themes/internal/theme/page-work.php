<?php
/*
	Template Name: Work
*/
get_header(); ?>

<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
      <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p>
    </div>
    <div class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
    <?php $the_query = new WP_Query( array('post_type' =>'work','posts_per_page' => '6',  'post__not_in'   => array( $id),) );?>
							     <?php if ( have_posts())   : while ( $the_query->have_posts() ) : $the_query->the_post();?>
							  
									   <?php
										$thumbnail_id = get_post_thumbnail_id(); 
										$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
										$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true); 

                    $categories = get_the_category();
										
										?>
      <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">

      <?php 
if ( has_post_thumbnail() ) {
    $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
    //echo '<link rel="preload" as="image" href="' . esc_attr( $attachment_image ) . '">';  
?>
        <img src="<?php echo $attachment_image; ?>" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
        <?php } ?> 

        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>

        <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
          <time datetime="2020-03-16" class="mr-8">Mar 16, 2020</time>
          <div class="-ml-4 flex items-center gap-x-4">
            <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
              <circle cx="1" cy="1" r="1" />
            </svg>
            <div class="flex gap-x-2.5">
              <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-6 w-6 flex-none rounded-full bg-white/10">
              Michael Foster
            </div>
          </div>
        </div>
        <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
          <a href="<?php the_permalink(); ?>">
            <span class="absolute inset-0"></span>
            <?php the_title(); ?>
          </a>
        </h3>
      </article>
      <?php endwhile; endif; ?>

      <!-- More posts... -->
    </div>
  </div>
</div>



<?php get_footer(); ?>