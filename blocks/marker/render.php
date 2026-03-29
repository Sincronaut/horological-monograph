<?php
$est = $attributes['estText'] ?? 'EST. 1884';
$title = $attributes['title'] ?? 'Heritage Reimagined for the Infinite.';
$desc = $attributes['description'] ?? '';
$quote = $attributes['quote'] ?? '';
$linkText = $attributes['linkText'] ?? 'THE MONOGRAPH STORY';
$linkUrl = $attributes['linkUrl'] ?? '#';
$image = $attributes['mainImage'] ?? '';
$bgImage = $attributes['backgroundImage'] ?? '';
?>
<section class="chm-marker">
    <?php if ($bgImage): ?>
        <img src="<?php echo esc_url($bgImage); ?>" class="chm-marker__bg" aria-hidden="true" alt="Background Texture" />
    <?php endif; ?>
    <div class="chm-marker__container">

        <div class="chm-marker__content-grid">
            <!-- Left Side: Image with Floating Quote -->
            <div class="chm-marker__visual">
                <div class="chm-marker__image-wrap">
                    <?php if ($image): ?>
                        <img src="<?php echo esc_url($image); ?>" alt="Heritage Illustration" />
                    <?php else: ?>
                        <div class="chm-marker__placeholder"></div>
                    <?php endif; ?>
                </div>
                <div class="chm-marker__quote-box anim-delay-500" data-chm-animate="slide-left">
                    <p class="chm-marker__quote-text"><?php echo esc_html($quote); ?></p>
                </div>
            </div>

            <!-- Right Side: Textual Content -->
            <div class="chm-marker__text">
                <span class="chm-marker__est" data-chm-animate="fade-in"><?php echo esc_html($est); ?></span>
                <h2 class="chm-marker__title anim-delay-200" data-chm-animate="slide-up"><?php echo nl2br(esc_html($title)); ?></h2>
                <p class="chm-marker__description anim-delay-400" data-chm-animate="slide-up"><?php echo esc_html($desc); ?></p>
                <div class="chm-marker__link-wrap anim-delay-500" data-chm-animate="fade-in">
                    <a href="<?php echo esc_url($linkUrl); ?>" class="chm-marker__link">
                        <?php echo esc_html($linkText); ?>
                        <span class="chm-marker__arrow">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
