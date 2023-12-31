<?php
/*
	Template Name: Blog
*/
get_header(); ?>

<?php

$blog_page_title = get_field('blog_page_title');
$blog_page_title_bottom_line = get_field('blog_page_title_bottom_line');

?>


<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo $blog_page_title; ?></h2>
      <p class="mt-2 text-lg leading-8 text-gray-600"><?php echo $blog_page_title_bottom_line; ?></p>
    </div>
    <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">

	<?php $the_query = new WP_Query( array('post_type' =>'post','posts_per_page' => '6',  'post__not_in'   => array( $id),) );?>
							     <?php if ( have_posts())   : while ( $the_query->have_posts() ) : $the_query->the_post();?>
							  
									   <?php
										$thumbnail_id = get_post_thumbnail_id(); 
										$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
										$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true); 

                    $categories = get_the_category();
										
										?>
      <article class="flex flex-col items-start justify-between">
        <div class="relative w-full">
			
			<?php 
if ( has_post_thumbnail() ) {
    $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
    //echo '<link rel="preload" as="image" href="' . esc_attr( $attachment_image ) . '">';  
?>
          <img src="<?php echo $attachment_image; ?>" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
		  <?php } ?> 

		  <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
        </div>
        <div class="max-w-xl">
          <div class="mt-8 flex items-center gap-x-4 text-xs">
            <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
            <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="<?php the_permalink(); ?>">
                <span class="absolute inset-0"></span>
                <?php the_title(); ?>
              </a>
            </h3>
            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600"><?php the_excerpt(); ?></p>
          </div>
          <div class="relative mt-8 flex items-center gap-x-4">
			
            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-100">
            <div class="text-sm leading-6">
              <p class="font-semibold text-gray-900">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Michael Foster
                </a>
              </p>
              <p class="text-gray-600">Co-Founder / CTO</p>
            </div>
          </div>
        </div>
      </article>
	  <?php endwhile; endif; ?>

      <!-- More posts... -->
    </div>
  </div>
</div>


<?php get_footer(); ?>
