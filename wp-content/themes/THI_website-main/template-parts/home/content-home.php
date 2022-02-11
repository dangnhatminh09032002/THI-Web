<?php
global $THIWebsite_options;

$THIWebsite_opt_blog_sidebar_archive = $THIWebsite_options['THIWebsite_opt_blog_sidebar_archive'] ?? 'right';
$THIWebsite_class_col_content = THIWebsite_col_use_sidebar($THIWebsite_opt_blog_sidebar_archive, 'sidebar-main');
$THIWebsite_opt_blog_per_row = $THIWebsite_options['THIWebsite_opt_blog_per_row'] ?? 3;
?>

<header class="masthead-home">
    <div class="masthead-home-background"></div>
    <div class="slanted-edge"></div>
    <div class="clear"></div>
    <div class="container">
    <div class="masthead-home-left container">
        <div class="masthead-home-left-sub">
            <div class="container-title-left">
                <div class="title color-blue pb-0">
                    <h1 class="title color-blue">Unleash the full potential, Accelerate the growth.</h1>
                    <p class="text-intro">
                        THI invests and engages in business to drive posotive and lasting impact for companies, employees, communities and the environment.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <a href="#" class="div-right">
        <div class="div-right-sub">
            <h3 class="title-news">Lastest News</h3>
            <div class="news">
                <h2 class="content-news">Silicon Valley Learns Washington's Language (and Vice Versa)</h2>
                <p class="text-white">December 23, 2021</p>
            </div>
        </div>
    </a>
</header>

<!-- Information -->
<section class="information">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-7 col-md-12">
                <h3 class="title-info">
                    THI backs businesses which transform industries and
                    <a href="" class="create-new-info">create new ones</a>
                    .
                </h3>
            </div>
            <div class="col-lg-5 d-md-none d-lg-block">
                <div class="div-line-container">
                    <div class="div-line">
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row mb-5 mt-5">
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <h3>
                    <span class="detail">65K+</span>
                    sqm
                </h3>
                <p>Developed in China</p>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <h3>
                    USD
                    <span class="detail">500M+</span>
                </h3>
                <p>Under development</p>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <h3>
                    <span class="detail">12</span>
                </h3>
                <p>Industrial & Logistics <br> under management</p>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <h3>
                    <span class="detail">6</span>
                </h3>
                <p>Build-To-Suit <br> customized facility</p>
            </div>
        </div>
    
        <div class="row">
            <p>
                We have developed real estate investment businesses
                <br>and drives operational improvements to accelerate clients income growth.
            </p>
            <div class="row link-arrow">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php
                    if ( has_post_thumbnail() ) :
                        the_post_thumbnail('large');
                    else:
                    ?>
                        VIEW OUR PORTFOLIO (REAL ESTATE)
                        <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/arrow-link.png' ) ) ?>" alt="<?php the_title(); ?>" />
                    <?php endif; ?>
                </a>
            </div>
        </div>
    </div>
</section>


 <!-- Porfolio -->
<section class="porfolio">
    <div class="container text-center d-md-block d-lg-none pb-4">
        <h2 class="text-black">Venture Spirit is in our DNA</h2>
    </div>
    <div class="porfolio-background"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 porfolio-left-content">
                <div class="d-md-none d-lg-block">
                    <div class="row mb-3">
                        <div class="col-lg-8">
                            <h2>Venture Spirit is in our DNA</h2>
                        </div>
                        <div class="col-lg-2 mx-auto title-line"></div>
                        <div class="col-lg-1"></div>
                    </div>
                    <div class="row mb-5">
                        <p id="left-content-text">
                            Our team work side by side with portfolio companies
                            <br>to solve problems and continue to grow.
                        </p>
                    </div>
                </div>
    
                <div class="row mb-5">
                    <div class="col-md-5 ml-auto text-center mb-5">
                        <h3>
                            USD
                            <span class="detail">200M</span>
                        </h3>
                        <p>Fund raised for VC</p>
                    </div>
        
                    <div class="col-md-3 mx-auto text-center mb-5">
                        <h3 class="detail">
                            <span class="detail">2020</span>
                        </h3>
                        <p>VC started from</p>
                    </div>
        
                    <div class="col-md-2 mx-auto text-center mb-5">
                        <h3 class="detail">
                            <span class="detail">3</span>
                        </h3>
                        <p>Portfolio <br> Companies</p>
                    </div>
                </div>
    
                <div class="row link-arrow">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php
                        if ( has_post_thumbnail() ) :
                            the_post_thumbnail('large');
                        else:
                        ?>
                            VIEW OUR BUSSINESS (VC)
                            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/arrow-link.png' ) ) ?>" alt="<?php the_title(); ?>" />
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Timeline -->
<section class="timeline">
    <div class="container">
		<div class="grid-container-4">
			<div class="grid-container-4-content">
				<h2>THI founded in Singapore in 2017
					<div class="div-line div-line-3 d-md-none d-lg-block"></div>
				</h2>
				<p>Since our founding in 2017, we've applied our insight and experience to<br>organically expand into
					serveral
					asset classes including properties,<br>industrial/logistics real estate, education and venture
					capital.</p>
			</div>
			<div id="horizontal-timeline">
                <div id="btn-timeline-next"></div>
                <div id="btn-timeline-prev" class="d-none"></div>

				<div id="horizontal-timeline-items">
					<article class="timeline-item">
						<h2 class="timeline-item-period">2017</h2>
						<div class="timeline-item-content">
							Founded as THI in Singapore<br><br>Partnered with SC
							Capital<br><br><b>Investment:</b><br>Nantong,
							Yangcheng
						</div>
					</article>
					<article class="timeline-item">
						<h2 class="timeline-item-period">2018</h2>
						<div class="timeline-item-content">
							<b>Investment:</b><br>Nantong, Yangcheng
						</div>
					</article>
					<article class="timeline-item">
						<h2 class="timeline-item-period">2019</h2>
						<div class="timeline-item-content">
							Partnered with<br>Morgan Stanley<br><br><b>Investment:</b><br>Nantong, Yangcheng
						</div>
					</article>
					<article class="timeline-item">
						<h2 class="timeline-item-period">2020</h2>
						<div class="timeline-item-content">
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <div class="site-container site-blog">
    <div class="container">
        <div class="row">
            <div class="<?php echo esc_attr($THIWebsite_class_col_content); ?>">
                <div class="site-post-content">
                    <?php if (have_posts()) : ?>
                        <div class="row">

                            <?php while (have_posts()) : the_post(); ?>

                                <div id="post-<?php the_ID(); ?>"
                                     class="site-post-item col-12 col-md-6 col-lg-<?php echo esc_attr(12 / $THIWebsite_opt_blog_per_row); ?>">
                                    <div class="site-post-content">
                                        <h2 class="site-post-title">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <?php if (is_sticky() && is_home()) : ?>
                                                    <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                <?php
                                                endif;

                                                the_title();
                                                ?>
                                            </a>
                                        </h2>

                                        <?php
                                        get_template_part('template-parts/post/content', 'image');

                                        THIWebsite_post_meta();
                                        ?>

                                        <div class="site-post-excerpt">
                                            <p>
                                                <?php
                                                if (has_excerpt()) :
                                                    echo esc_html(get_the_excerpt());
                                                else:
                                                    echo wp_trim_words(get_the_content(), 30, '...');
                                                endif;
                                                ?>
                                            </p>

                                            <a href="<?php the_permalink(); ?>" class="text-read-more">
                                                <?php esc_html_e('Read more', 'THIWebsite'); ?>
                                            </a>

                                            <?php THIWebsite_link_page(); ?>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </div>

                        <?php
                        THIWebsite_pagination();

                    else:

                        if (is_search()) :
                            get_template_part('template-parts/search/content', 'no-data');
                        endif;

                    endif;
                    ?>
                </div>
            </div>

            <?php
            if ($THIWebsite_opt_blog_sidebar_archive !== 'hide') :
                get_sidebar();
            endif;
            ?>
        </div>
    </div>
</div> -->