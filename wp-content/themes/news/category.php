<?php get_header();?>

        <!-- Content -->
        <section id="content">
            <div class="container">
            	<!-- Main Content -->
                
                <div class="breadcrumbs column">
                	<?php mypassion_breadcrumbs(); ?>
                </div>
                
                <div class="main-content <?php if($admin_data['cat_style'] == "cat_leftsidebar"){?> left-sidebar <?php } ?>">

                    
                    <?php

						$cat_name = single_cat_title( '', false );
						$tente = get_cat_ID( $cat_name );

						 $querydetails = "
						   SELECT wposts.*
						   FROM $wpdb->posts wposts
						   LEFT JOIN $wpdb->postmeta wpostmeta ON wposts.ID = wpostmeta.post_id
						   LEFT JOIN $wpdb->term_relationships ON (wposts.ID = $wpdb->term_relationships.object_id)
						   LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
						   
						   WHERE wposts.ID = wpostmeta.post_id
						   AND wpostmeta.meta_key = 'mypassion_featured_post'
						   AND wpostmeta.meta_value = '1'
						   AND wposts.post_status = 'publish'
						   AND wposts.post_type = 'post'
						   AND (
									(	$wpdb->term_taxonomy.taxonomy = 'category')
									and $wpdb->term_taxonomy.term_id IN($tente)
								)
						   ORDER BY wposts.post_date DESC
						 ";
		
						 $pageposts = $wpdb->get_results($querydetails, OBJECT)
								
					?>
                    
                    <!-- Popular News -->
                	<div class="column-two-third">
                    	<div class="outerwide">

                            
								<?php

								$i = 0;
								
                                if ($pageposts):
                                foreach ($pageposts as $post):
								
                                setup_postdata($post); 
                                  
                                $i++;
                                $format = get_post_format();
                                if ($i <3) {
                                ?>
                                <div class="outertight m-t-no">
                                
                                    <?php if($admin_data['ribbons_switcher2'] == 1){ ?>
                                    <div class="badg">
                                        <p><span><?php echo esc_html($admin_data['cat_ribbon']); ?></span></p>
                                    </div>
                                    <?php }?>
                                    
                                    <?php $format = get_post_meta(get_the_ID(), 'mypassion_postformat', true); ?>
                                    <?php get_template_part( 'framework/inc/post-format-mini/format', $format ); ?>

                                    
                                    <h6 class="regular"><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
                                    <span class="meta"><?php the_time(get_option('date_format')); ?>  &nbsp; //  &nbsp;  <?php the_category(', '); ?>  &nbsp;  //  &nbsp; <?php comments_popup_link(__( 'No Comment', 'framework' ),__( '1 comment', 'framework' ),__( '% Comments', 'framework' ),'',__( 'Comments are off', 'framework' )); ?></span>
                                    
                                    <p><?php
                                        $strpost = iconv('UTF-8','windows-1251',get_the_excerpt() );
                                        $strpost = substr($strpost, 0, 150);
                                        $strpost = iconv('windows-1251','UTF-8',$strpost );
                                        echo $strpost;
                                        ?>... </p>
    
                                </div>	
                                <?php } 
                                    endforeach; 	
                                endif; 
                                wp_reset_query();?>	

                        </div>

                        
                        <div class="outerwide">

                        	<ul class="block2">
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                                
                                <li>
                                	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('main-small-thumb'); ?></a>
                                        <p>
                                            <span><?php the_time(get_option('date_format')); ?>.</span>
                                            <a href="<?php the_permalink(); ?>"><?php
                                                $strpost = iconv('UTF-8','windows-1251',get_the_title() );
                                                $strpost = substr($strpost, 0, 40);
                                                $strpost = iconv('windows-1251','UTF-8',$strpost );
                                                echo $strpost;
                                                ?>...</a>
                                        </p>
                                        <?php
											$mypassion_review_enable =  get_post_meta(get_the_ID(), 'mypassion_review_enable', true);
											$mypassion_review_type =  get_post_meta(get_the_ID(), 'mypassion_review_type', true);
											$mypassion_final_score =  get_post_meta(get_the_ID(), 'mypassion_final_score', true);
											$mypassion_final_percentage = $mypassion_final_score * 20 ;
										?>
                                        <?php if($admin_data['review_switcher'] == true){ ?>
                                        <?php if($mypassion_review_enable == 'enable'){ ?><span class="mypassion-rating mypassion-rating-<?php echo esc_html($mypassion_review_type); ?>"><span style="width:<?php echo esc_html($mypassion_final_percentage); ?>%;"></span></span>
										<?php }}else{ ?>
                                        	<?php if($admin_data['postview_box'] == true){ ?>
                                            <span class="meta2"><?php echo getPostViews(get_the_ID()); ?> </span>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </li>
                                
								<?php endwhile; endif;?>
                            </ul>
                        </div>
                        
                        <?php mypassion_pagination();  wp_reset_query(); ?>
                        
                    	
                    </div>
                    <!-- /Popular News -->
                    
                </div>
                <!-- /Main Content -->
                
                <?php get_sidebar(); ?>
                
            </div>    
        </section>
        <!-- / Content -->
        
       <?php get_footer(); ?>