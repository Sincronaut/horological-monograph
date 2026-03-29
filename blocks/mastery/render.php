<?php
$title = $attributes['sectionTitle'] ?? 'TECHNICAL MASTERY';
$it1 = [ 'label' => $attributes['it1_label'], 'val' => $attributes['it1_value'], 'sub' => $attributes['it1_sub'] ];
$it2 = [ 'label' => $attributes['it2_label'], 'val' => $attributes['it2_value'], 'sub' => $attributes['it2_sub'] ];
$it3 = [ 'label' => $attributes['it3_label'], 'val' => $attributes['it3_value'], 'sub' => $attributes['it3_sub'] ];
$it4 = [ 'label' => $attributes['it4_label'], 'val' => $attributes['it4_value'], 'sub' => $attributes['it4_sub'] ];
?>
<section class="chm-mastery">
    <div class="chm-mastery__container">
        <h2 class="chm-mastery__title" data-chm-animate="fade-in"><?php echo esc_html($title); ?></h2>

        <!-- The Stats Grid -->
        <div class="chm-mastery__grid">
            
            <!-- Labels Row -->
            <div class="chm-mastery__labels" data-chm-animate="slide-up">
                <span class="chm-mastery__label"><?php echo esc_html($it1['label']); ?></span>
                <span class="chm-mastery__label"><?php echo esc_html($it2['label']); ?></span>
                <span class="chm-mastery__label"><?php echo esc_html($it3['label']); ?></span>
                <span class="chm-mastery__label"><?php echo esc_html($it4['label']); ?></span>
            </div>

            <!-- Visual Ruler with Ticks and Glow -->
            <div class="chm-mastery__ruler-container anim-delay-200" aria-hidden="true" data-chm-animate="fade-in">
                <div class="chm-mastery__ruler">
                    <?php for($i=0; $i<15; $i++): ?>
                        <div class="chm-mastery__tick <?php echo ($i === 7) ? 'is-active' : ''; ?>"></div>
                    <?php endfor; ?>
                </div>
                <!-- Highlight Glow -->
                <div class="chm-mastery__glow"></div>
            </div>

            <!-- Values Row -->
            <div class="chm-mastery__values">
                <div class="chm-mastery__stat anim-delay-300" data-chm-animate="slide-up">
                    <span class="chm-mastery__val"><?php echo esc_html($it1['val']); ?></span>
                    <span class="chm-mastery__sub"><?php echo esc_html($it1['sub']); ?></span>
                </div>
                <div class="chm-mastery__stat anim-delay-400" data-chm-animate="slide-up">
                    <span class="chm-mastery__val"><?php echo esc_html($it2['val']); ?></span>
                    <span class="chm-mastery__sub"><?php echo esc_html($it2['sub']); ?></span>
                </div>
                <div class="chm-mastery__stat anim-delay-500" data-chm-animate="slide-up">
                    <span class="chm-mastery__val"><?php echo esc_html($it3['val']); ?></span>
                    <span class="chm-mastery__sub"><?php echo esc_html($it3['sub']); ?></span>
                </div>
                <div class="chm-mastery__stat anim-delay-600" data-chm-animate="slide-up">
                    <span class="chm-mastery__val"><?php echo esc_html($it4['val']); ?></span>
                    <span class="chm-mastery__sub"><?php echo esc_html($it4['sub']); ?></span>
                </div>
            </div>

        </div>
    </div>
</section>
