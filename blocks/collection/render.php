<?php
$title = $attributes['sectionTitle'] ?? 'Curated Collections';
$desc = $attributes['sectionDesc'] ?? '';
$viewAllText = $attributes['viewAllText'] ?? 'VIEW ALL PIECES';
$viewAllUrl = $attributes['viewAllUrl'] ?? '#';

$items = [
    [
        'img' => $attributes['it1_img'] ?? '',
        'title' => $attributes['it1_title'] ?? '',
        'sub' => $attributes['it1_sub'] ?? '',
        'badge' => $attributes['it1_badge'] ?? '',
        'class' => 'item-1'
    ],
    [
        'img' => $attributes['it2_img'] ?? '',
        'title' => $attributes['it2_title'] ?? '',
        'sub' => $attributes['it2_sub'] ?? '',
        'class' => 'item-2'
    ],
    [
        'img' => $attributes['it3_img'] ?? '',
        'title' => $attributes['it3_title'] ?? '',
        'sub' => $attributes['it3_sub'] ?? '',
        'class' => 'item-3'
    ],
    [
        'img' => $attributes['it4_img'] ?? '',
        'title' => $attributes['it4_title'] ?? '',
        'sub' => $attributes['it4_sub'] ?? '',
        'class' => 'item-4'
    ],
];
?>
<section class="chm-collection">
    <div class="chm-collection__header">
        <div class="chm-collection__title-group">
            <h2 class="chm-collection__title"><?php echo esc_html($title); ?></h2>
            <p class="chm-collection__description"><?php echo nl2br(esc_html($desc)); ?></p>
        </div>
        <a href="<?php echo esc_url($viewAllUrl); ?>" class="chm-collection__view-all"><?php echo esc_html($viewAllText); ?></a>
    </div>

    <div class="chm-collection__grid">
        <?php foreach ($items as $item): ?>
            <article class="chm-collection-item <?php echo esc_attr($item['class']); ?>">
                <div class="chm-collection-item__image-wrap">
                    <?php if ($item['img']): ?>
                        <img src="<?php echo esc_url($item['img']); ?>" alt="<?php echo esc_attr($item['title']); ?>">
                    <?php else: ?>
                        <div class="chm-collection-item__placeholder"></div>
                    <?php endif; ?>
                    
                    <?php if (!empty($item['badge'])): ?>
                        <span class="chm-collection-item__badge"><?php echo esc_html($item['badge']); ?></span>
                    <?php endif; ?>
                </div>
                <div class="chm-collection-item__content">
                    <h3 class="chm-collection-item__title"><?php echo esc_html($item['title']); ?></h3>
                    <p class="chm-collection-item__subtitle"><?php echo esc_html($item['sub']); ?></p>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
