<?php get_header(); ?>

	<section class="artist-single">

		<?php get_template_part('views/single/sidebar'); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="archive-artist__return">
				<a href=" <?php echo BLOGURL ?>/exhibition">Exhibition</a>
			</div>
			<div class="artist-single__container">
				<div class="col-one">
					<div class="artist-single__title">
						<?php echo the_title(); ?>
					</div>
					<div class="artist-single__content">
						<?php the_content(); ?>
					</div>
					<div class="artist-single__list">

						<?php
                            // Query post type 'artist'
                            $args = array(
                                'post_type' 	=> 'artist',
                                'status'		=>	'publish',
                                'post_per_page'	=>	-1,
                            );
                            $loop = new WP_Query($args);
                            $postSingle = ($post);
                        ?>

						<ul>
							<?php while ($loop->have_posts()) : $loop->the_post(); ?>

								<?php if ($postSingle->ID != $loop->post->ID): ?>

									<li>
										<a href=" <?php the_permalink(); ?> " >
											<?php the_title(); ?>
										</a>
									</li>

								<?php endif; ?>

							<?php endwhile; ?>
						</ul>
					</div>
				</div>

				<!-- <div class="">
					<?php //$mailTo = get_field('mail_contact_pieces');?>

					<h2><?php // the_field('mail_contact_pieces');?></h2>

					<?php // echo $mailTo ;?>

					<?php // the_field('mail_contact_pieces');?>
				</div> -->

				<div class="col-two">
					<div class="galeria">
						<?php $gallery = get_field('galery_artist', $postSingle->ID); ?>

						<?php '<pre>'?>
							<?php // var_dump($postSingle);?>
							<?php // var_dump($postSingle->post_title);?>

						<?php '</pre>'?>

						<?php if ($gallery): ?>
							<div class="galeria-single__slider">
								<?php $previous="";$vert=0;?>
								<?php $i = 0; foreach ($gallery as $image): ?>

									<?php list($width, $height) = getimagesize($image['url']);

									if ($width > $height) {
										$vert=0;
										$class="horizontal";
									} else {
										$class="vertical";

									}
                                    if($previous==""){
                                        if($class=="vertical"){
                                            echo "<div class='vert_dad'>";
                                        }else{
                                            echo "<div>";
                                        }


									}else{
										if($class!=$previous){
                                            if($class=="vertical"){
                                                echo "</div><div class='vert_dad'>";
                                            }else{

                                                echo "</div><div>";
                                            }

                                        }else{

                                        if($class=="vertical" ){
                                            if($vert==2){
                                                $vert=0;
                                                echo "</div><div class='vert_dad'>";
                                            }

                                        }else{
                                            echo "</div><div>";
                                        }

                                    }
									}
									?>



									<div class="<?php echo $class;?>">
										<div class="box__aspect modalOpen" data-position= "<?php echo $i?>">
											<img class="box__aspect--imagen" src="<?php echo $image['url']; ?>" width="" alt="">
										</div>
										<div class="galeria__slider--creditos">

											<p>
												<?php echo esc_html($image['title']); ?>
											</p>
											<?php $caption = preg_split('/<br[^>]*>/i', wpautop($image['caption']));
                                                foreach ($caption as $key => $value) {
                                                	echo "<p>
													$value
													</p> ";
                                                }
											?>

											<p>
												<a href="mailto:sales@mmaassaa.com?subject=I'm Interested in finding out about the piece '<?php echo esc_html($image['title']); ?>' by <?php echo $postSingle->post_title; ?>">Contact<?php //echo $vert?></a>
											</p>
										</div>
									</div>

									<?php $previous = $class;if($class=="vertical") $vert++;  ?>
								<?php $i++; endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<div class="artist-single__list--mobile">

					<ul>
						<?php while ($loop->have_posts()) : $loop->the_post(); ?>

							<?php if ($postSingle->ID != $loop->post->ID): ?>

								<li>
									<a href=" <?php the_permalink(); ?> " >
										<?php the_title(); ?>
									</a>
								</li>

							<?php endif; ?>

						<?php endwhile; ?>
					</ul>
				</div>

			</div>

			<!-- The Modal Galery-->
			<div id="modal" class="modal">
				<span class="close">&times;</span>

				<div class="modal-content">
					<div class="modal-gallery">
						<?php $i = 0; foreach ($gallery as $image): ?>
							<div class="slide">
								<img class="box__aspect--imagen" src="<?php echo $image['url'] ; ?>" alt="">
								<div class="galeria__slider--creditos-modal">
                                    <p>
                                        <?php echo esc_html($image['title']); ?>
                                    </p>
                                    <p>
                                        <?php
                                            echo $image["caption"];
                                        ?>
                                    </p>


                                    <p>
                                        <a href="mailto:sales@mmaassaa.com?subject=I'm Interested in finding out about the piece '<?php echo esc_html($image['title']); ?>' by <?php echo $postSingle->post_title; ?>">Contact</a>
                                    </p>
								</div>
							</div>
						<?php $i++; endforeach; ?>
					</div>
					<div class="galeria-prev"></div>
					<div class="galeria-next"></div>
				</div>

			</div>

		<?php endwhile; endif;?>

	</section>

<?php get_footer();?>
