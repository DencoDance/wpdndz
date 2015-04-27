<?php global $admin_data; ?>
<!-- Popular News -->
                	<div class="column-one-third">
                    	<h5 class="line"><span><?php echo esc_html($admin_data['m1_column1_title']); ?></span></h5>
                        <span class="liner"></span>
                        <div class="outertight">
                        	<ul class="block">
                            	<?php $numberofposts = $admin_data['m1_numberofposts']; ?>
                                <?php mypassion_popular_posts_home($numberofposts); ?>
                            </ul>
                        </div>
                        
                    </div>
                    <!-- /Popular News -->
                    
                    
                    
                    
                    <!-- Hot News -->
                    <div class="column-one-third">
                    	<h5 class="line"><span><?php echo esc_html($admin_data['m1_column2_title']); ?></span></h5>
                        <span class="liner"></span>
                        <div class="outertight m-r-no">
                        	<ul class="block">
                                <?php mypassion_hot_posts($numberofposts); ?>
                            </ul>
                        </div>
                        
                    </div>
                    <!-- /Hot News -->