<!--Site Footer Start-->
<footer class="site-footer footer-style3" role="contentinfo">
    <div class="container">
        <div class="row sf-top-wrap">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="sf-logos-wrap">
        <?php $logo = get_field('global_company_logo','option');
        if( !empty($logo) ): ?>
            <a href="<?php bloginfo('url'); ?>" class="sf-logo">
                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['alt']; ?>">
            </a>
        <?php endif;?>
        <div class="social-icons">
                <?php
                if( have_rows('social_profiles', 'option') ): ?>
                    <?php
                    while ( have_rows('social_profiles', 'option') ) : the_row(); ?>
                        <?php
                        $sf_social_icon = get_sub_field('sp_social_icon');
                        $socialclass = str_replace(' ', '-', get_sub_field('sp_social_profile')); // Replaces all spaces with hyphens.
                        $socialclass = preg_replace('/[^A-Za-z0-9\-]/', '', $socialclass); // Removes special chars.
                        $socialclass = strtolower($socialclass); // Convert to lowercase
                        if (get_sub_field('sp_social_link')) :
                        ?>
                            <a class="<?php echo $socialclass; ?>" href="<?php echo esc_url(get_sub_field('sp_social_link')); ?>" target="_blank"  title="<?php echo get_sub_field('sp_social_profile'); ?>" rel="noreferrer noopener" aria-label="<?php echo get_sub_field('sp_social_profile'); ?>">
                        <?php endif ?>

                               <?php 
                                $image = get_sub_field('sp_icon');
                                if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>

                        <?php if (get_sub_field('sp_social_link')) : ?>
                            </a>
                        <?php endif ?>
                    <?php
                    endwhile; ?>
                <?php
                endif;  ?>
            </div>
        </div>
            </div>
        <div class="col-lg-3 col-md-6 col-12">
                <?php wp_nav_menu(array(
                    'menu'            => 'Footer Left Menu',
                    'container'       => 'ul',
                    'menu_class' => 'sf-links',
                )); ?>
            </div>
           
            <div class="col-lg-3 col-md-6 col-12">
                <ul class="sf-contact-info">
                    <?php if(get_field('global_address','option')):?>
                        <li class="sf-address"><span class="c-bold"><?php echo get_field('global_company_name','option');?></span><br> <?php echo get_field('global_address','option');?></li>
                    <?php endif;?>

                    <?php $string = get_field('global_phone_number','option');$string = preg_replace("/[^0-9]/", '', $string);?>
                    <?php if ($string): ?>
                        <li class="sf-ph"><span class="light">Phone:</span> <a href="tel:<?php echo $string;?>" aria-label="Phone Number"><?php echo get_field('global_phone_number','option');?></a></li>
                    <?php endif ?>                 

                    <?php if (get_field('global_fax','option')): ?>
                        <li class="sf-fax"><span class="light">Fax:</span> <a href="javascript:void(0)" class="nonlink fax" tabindex="-1" aria-label="Fax Number"><?php echo get_field('global_fax','option');?></a></li>
                    <?php endif;?>
                </ul>
        </div>

               
<div class="col-lg-2 col-md-6 col-12">
    <?php if( get_field('thomas_badge_code','option') ): ?>
        <div class="thomas-badge">
            <?php echo get_field('thomas_badge_code','option'); ?>
        </div>
    <?php endif; ?>

    <?php 
        $footer_image = get_field('footer_images','option');
        if( !empty( $footer_image ) ): ?>
            <div class="sf-logo-wrap">
                <div class="sflw-item">
                    <img src="<?php echo esc_url($footer_image['url']); ?>" alt="<?php echo esc_attr($footer_image['alt']); ?>" />
                </div>
            </div>
    <?php endif; ?>		

    <?php if( have_rows('footer_images_2', 'option') ): ?>
  <div class="footer-right-images">
    <?php while( have_rows('footer_images_2', 'option') ): the_row();
      $img = get_sub_field('sf_image_2');
      if( empty($img) ) continue;
    ?>
      <div class="footer-img">
        <img src="<?php echo esc_url( $img['url'] ); ?>"
             alt="<?php echo esc_attr( $img['alt'] ?: 'Footer badge' ); ?>"
             title="<?php echo esc_attr( $img['alt'] ?: 'Footer badge' ); ?>"
             loading="lazy">
      </div>
    <?php endwhile; ?>
  </div>
<?php endif; ?>

</div>

    </div>
                    </div>
    <div class="footer-bootom sf-small">
        <div class="container">
            <p class="copyright">Copyright &copy; <?php echo date("Y"); ?> | <a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a>, All Rights Reserved  |  Site created by <a href="https://business.thomasnet.com/marketing-services" target="_blank" rel="noreferrer noopener">Thomas Marketing Services</a></p>

            
        </div>
    </div>
</footer>
<!--Site Footer End-->

