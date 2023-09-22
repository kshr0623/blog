<?php get_header(); ?>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

                    <?php if(have_posts()): while(have_posts()): the_post(); ?>

                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                        </a>
                        <p class="post-meta">
                        <?php the_content(); ?>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />

                    <?php endwhile; else: ?>
                    <p>投稿はありません。</p>
                    <?php endif; ?>

                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
            <?php get_footer(); 
