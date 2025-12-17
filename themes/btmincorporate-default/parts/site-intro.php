 <div class="site-intro">
	<div class="si-slider">
		<?php 
		if( have_rows('hero_slide') ): 
			$count = 0;
			while ( have_rows('hero_slide') ) : the_row(); 
				$count++;
		?>
		<div class="si-item" <?php if (get_sub_field('hs_bg_img')): ?>style="background-image: url(<?php echo get_sub_field('hs_bg_img'); ?>);"<?php endif; ?>>
			<div class="si-overlay"></div>
			<div class="container">
				<div class="si-left wow fadeInLeft">
					<?php if( get_sub_field('hs_title')): ?>
						<?php if( $count == 1 ): ?>
							<h1 class="si-heading"><?php echo get_sub_field('hs_title'); ?></h1>
						<?php else: ?>
							<h2 class="si-heading"><?php echo get_sub_field('hs_title'); ?></h2>
						<?php endif; ?>
					<?php endif; ?>

					<?php if( get_sub_field('description')): ?>
						<div class="si-description"><?php echo get_sub_field('description'); ?></div>
					<?php endif; ?>

					<?php 
					$link = get_sub_field('hs_cta_1');
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
					?>
						<a class="btn btn-primary si-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>

					<?php 
					$link = get_sub_field('hs_cta_2');
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
					?>
						<a class="btn btn-primary si-btn-alt" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
				</div>

				<div class="si-right wow fadeInRight">
					<?php 
					$image = get_sub_field('hs_slide_image');
					if( !empty( $image ) ): ?>
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php 
			endwhile;
		endif; 
		?>
	</div>
	<a href="#who-we-are" class="smooth-scroll si-ssm"><img src="<?php echo get_template_directory_uri(); ?>/img/si-down-arrow.svg" alt="Scroll To Bottom" title="Scroll To Bottom"></a>
</div>

<div id="who-we-are" class="si-bottom-sec">
	<div class="hsb-overlay"></div>
	 <div class="container hero-slider-bottom">
			 <div class="hsb-title wow fadeInLeft">
			 	 <?php if (get_field('hs_bottom_left_title')): ?>
                    <h2 class="hs_bottom-left-title"><?php echo get_field('hs_bottom_left_title') ?></h2>
                <?php endif ?>
			 </div>
			  <div class="hsb-desc wow fadeInRight">
			 	 <?php if (get_field('hs_bottom_right_description')): ?>
                    <p class="hs-bottom-right-description"><?php echo get_field('hs_bottom_right_description') ?></p>
                <?php endif ?>
			 </div>
		</div>
</div>


