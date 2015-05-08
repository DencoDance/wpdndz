<?php global $admin_data; ?>
<!-- Life Style -->
					
                    <?php
						$cat_name = $admin_data['m2_category'];
						$tente = get_cat_ID( $cat_name );
//						 query_posts('category_name='.$cat_name);
						 query_posts('category_name='.get_category($tente)->slug);
//						 query_posts(get_category($tente)->slug);

					?>
                    
                    <div class="column-two-third">
                    	<h5 class="line">
                        	<span><?php echo esc_html($cat_name); ?></span>
                            <div class="navbar">
                                <a id="prev1" class="prev" href="#"><span></span></a>
                                <a id="next1" class="next" href="#"><span></span></a>
                            </div>
                        </h5>
                        <span class="liner"></span>
                        
                        
                        <?php
							$i = 0;
							while (have_posts()) : the_post();

							$i++;
							if ($i <= 1) {
						?>
                        <div class="outertight">
                        	<?php the_post_thumbnail('main-medium-thumb'); ?>
                            <h6 class="regular"><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
							<span class="meta"><?php the_time(get_option('date_format')); ?>  &nbsp; // &nbsp;  <?php the_category(', '); ?>  &nbsp;  //  &nbsp; <?php comments_popup_link(__( 'No Comment', 'framework' ),__( '1 comment', 'framework' ),__( '% Comments', 'framework' ),'',__( 'Comments are off', 'framework' )); ?> </span>
                            <p><?php
                                $strpost = iconv('UTF-8','windows-1251',get_the_excerpt() );
                                $strpost = substr($strpost, 0, 250);
                                $strpost = iconv('windows-1251','UTF-8',$strpost );
                                echo $strpost;
                                ?>...
                            </p>
                        </div>
                        <?php } 
								endwhile;
							wp_reset_query();?>	
                        
                        
<!--                        --><?php //query_posts('offset=1&category_name='.$cat_name); ?>
                        <?php query_posts('offset=1&category_name='.get_category($tente)->slug); ?>

                        <div class="outertight m-r-no">
                        	
                        	<ul class="block" id="carousel">
                            
                            	<?php

									$i = 0;
									
									while (have_posts()) : the_post();
									  
									$i++;
									if ($i <= 15) {
								?>
                                <li>
                                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('main-small-thumb'); ?></a>
                                    <p>
                                        <span><?php the_time(get_option('date_format')); ?>.</span>
                                        <a href="<?php the_permalink();?>"><?php
                                            $strpost = iconv('UTF-8','windows-1251',get_the_title() );
                                            $strpost = substr($strpost, 0, 50);
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
									<?php } ?>
									<?php } ?>
                                </li>
								<?php } 
                                    endwhile;
                                wp_reset_query();?>	

                            
                            </ul>
                        </div>
                    </div>
                    <!-- /Life Style -->