<?php
/* UI Components Lab */
?>
<div class="mode-toggle">
  <button id="mode-toggle">Toggle Dark Mode</button>
</div>
<div class="button-grid">
<?php
for ($i = 1; $i <= 17; $i++) {
    $class = "btn-style-$i";
    echo "  <div class=\"button-example\">\n";
    echo "    <button class=\"$class\">Button $i</button>\n";
    echo "    <code class=\"copy-class\">.$class</code>\n";
    echo "  </div>\n";
}
?>
</div>
