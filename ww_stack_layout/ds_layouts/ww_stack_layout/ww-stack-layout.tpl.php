<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

<!-- Needed to activate contextual links -->
<?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
<?php endif; ?>

<<?php print $header_wrapper; ?> class="ds-header<?php print $header_classes; ?>">
<?php print $header; ?>
</<?php print $header_wrapper; ?>>

<<?php print $footer_wrapper; ?> class="ds-footer<?php print $footer_classes; ?>">
<?php print $footer; ?>
</<?php print $footer_wrapper; ?>>

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>