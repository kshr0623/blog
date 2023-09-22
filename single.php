<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">

                        <h2 class="section-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
                        
                        <blockquote class="blockquote">The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>

                        <h2 class="section-heading">Reaching for the Stars</h2>
                        
                        <a href="#!"><img class="img-fluid" src="assets/img/post-sample-image.jpg" alt="..." /></a>
                        <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </article>

<?php endwhile; else: ?>

<?php endif; ?>

<?php get_footer(); 
