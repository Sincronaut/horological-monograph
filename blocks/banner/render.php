<?php
/**
 * Banner Block Render Template
 * 
 * @var array    $attributes Block attributes.
 * @var string   $content    Block inner content.
 * @var WP_Block $block      Block instance.
 */

$subtitle = $attributes['subtitle'] ?? '';
$title = $attributes['title'] ?? '';
$buttonText = $attributes['buttonText'] ?? '';
$buttonUrl = $attributes['buttonUrl'] ?? '';
$background_image = $attributes['backgroundImage'] ?? '';

// Handle theme-relative paths (e.g., /assets/images/...)
if ( ! empty( $background_image ) && ! str_starts_with( $background_image, 'http' ) ) {
    // If it starts with /assets but should be in the theme folder
    if ( str_starts_with( $background_image, '/' ) ) {
        // Strip leading slash to make it relative to theme directory
        $background_image = ltrim( $background_image, '/' );
    }
    
    // Construct dynamic theme URL
    $background_image = get_stylesheet_directory_uri() . '/' . $background_image;
}

$style = '';
if ($background_image) {
    $style = ' style="background-image: url(' . esc_url($background_image) . ');"';
}
?>

<div class="hm-banner">
    <div class="hm-banner__background" <?php echo $style; ?>></div>
    <div class="hm-banner__overlay"></div>
    <div class="hm-banner__content">
        <?php if ($subtitle) : ?>
            <p class="hm-banner__subtitle"><?php echo esc_html($subtitle); ?></p>
        <?php endif; ?>

        <?php if ($title) : ?>
            <h1 class="hm-banner__title"><?php echo wp_kses_post(nl2br($title)); ?></h1>
        <?php endif; ?>

        <?php if ($buttonText) : ?>
            <div class="hm-banner__actions">
                <a href="<?php echo esc_url($buttonUrl); ?>" class="hm-banner__button wp-element-button">
                    <?php echo esc_html($buttonText); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>
