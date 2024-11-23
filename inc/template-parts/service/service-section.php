<?php

$lm_srv_section_title = carbon_get_post_meta( 33, 'lm_srv_section_title' );
$lm_srv_section_description = carbon_get_post_meta( 33, 'lm_srv_section_description' );
$lm_srv_items = carbon_get_post_meta( 33, 'lm_srv_items' );

?>

<section class="services custom-section pattern-decoration">
    <div class="container">
        <h2 class="section-title dark-color">
            <?php echo esc_html( $lm_srv_section_title ); ?>
        </h2>
        <p class="section-description">
            <?php echo esc_html( $lm_srv_section_description ); ?>
        </p>
        <div class="services-block">
            <?php if ( ! empty( $lm_srv_items ) ) : ?>
                <?php foreach ( $lm_srv_items as $item ) : ?>
                    <?php
                    $service_image_id = $item['image'];
                    $service_image_url = wp_get_attachment_url( $service_image_id );
                    $service_image_alt = get_post_meta( $service_image_id, '_wp_attachment_image_alt', true );
                    $service_title = $item['title'];
                    $service_description = $item['description'];
                    ?>
                    <div class="services-block__item">
                        <?php if ( $service_image_url ) : ?>
                            <img src="<?php echo esc_url( $service_image_url ); ?>" alt="<?php echo esc_attr( $service_image_alt ); ?>" class="services-block__img">
                        <?php endif; ?>
                        <h3 class="services-block__title"><?php echo esc_html( $service_title ); ?></h3>
                        <div class="services-block__desc">
                            <?php echo esc_html( $service_description ); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
