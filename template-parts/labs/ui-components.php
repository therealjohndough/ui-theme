<?php
/**
 * UI Components listing with dark mode and category filtering.
 */

$components = [
    ['title' => 'Primary Button', 'category' => 'buttons'],
    ['title' => 'Card Layout', 'category' => 'cards'],
    ['title' => 'Input Field', 'category' => 'forms'],
];
?>
<div class="controls">
    <button id="dark-mode-toggle">Toggle Dark Mode</button>
    <button data-filter="">All</button>
    <button data-filter="buttons">Buttons</button>
    <button data-filter="cards">Cards</button>
    <button data-filter="forms">Forms</button>
</div>
<div class="components">
<?php foreach ($components as $component) : ?>
    <div class="ui-component" data-category="<?php echo esc_attr($component['category']); ?>">
        <?php echo esc_html($component['title']); ?>
    </div>
<?php endforeach; ?>
</div>
