<?php
/**
 * UI Components Lab – Grid with Filters and Dark Mode
 */
$components = [
  ['title' => 'Primary Button', 'category' => 'buttons'],
  ['title' => 'Card Layout', 'category' => 'cards'],
  ['title' => 'Input Field', 'category' => 'forms'],
];
?>
<div class="mode-toggle">
  <button id="mode-toggle">Toggle Dark Mode</button>
</div>

<div class="controls">
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
  <?php endforEach; ?>
</div>

<div class="button-grid">
  <?php for ($i = 1; $i <= 17; $i++) :
    $class = "btn-style-$i"; ?>
    <div class="button-example" data-category="buttons">
      <button class="<?php echo $class; ?>">Button <?php echo $i; ?></button>
      <code class="copy-class">.<?php echo $class; ?></code>
    </div>
  <?php endfor; ?>
</div>

