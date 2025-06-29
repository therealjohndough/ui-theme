<?php
/**
 * UI Components Lab
 */
$components = [
  ['title' => 'Primary Button', 'category' => 'buttons'],
  ['title' => 'Card Layout', 'category' => 'cards'],
  ['title' => 'Input Field', 'category' => 'forms'],
];
?>

<section class="button-examples">
  <h3>Buttons</h3>
  <button class="btn">Default Button</button>
  <button class="btn btn-primary">Primary Button</button>
</section>

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
  <?php endforeach; ?>
</div>

<div class="button-grid">
  <?php
  $colors = ['#007bff', '#6c757d', '#28a745', '#17a2b8', '#ffc107', '#dc3545', '#f8f9fa', '#343a40', '#e83e8c', '#20c997', '#6610f2', '#fd7e14', '#6f42c1', '#198754', '#0d6efd', '#d63384', '#0dcaf0'];
  for ($i = 1; $i <= 17; $i++) :
    $class = "btn-style-$i";
    $color = in_array($i, [5, 7, 12, 17]) ? '#212529' : '#fff';
    ?>
    <div class="button-example" data-category="buttons">
      <button class="<?php echo $class; ?>">Button <?php echo $i; ?></button>
      <code class="copy-class">.<?php echo $class; ?></code>
    </div>
  <?php endfor; ?>
</div>

