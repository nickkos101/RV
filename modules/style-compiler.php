<?php
$headerColor = get_field('header_color', 'option');
$footerColor = get_field('footer_color', 'option');
$buttonColor = get_field('button_color', 'option');
$linkColor = get_field('link_color', 'option');

$headerBackgroundImage = get_field('header_background_image_file', 'option');
$footerBackgroundImage = get_field('footer_background_image_file', 'option');
?>
<style>
header .navbar {
  <?php if (!empty($headerColor)) {
    echo 'background-color:'.$headerColor.';';
  } ?>
  <?php if (!empty($headerBackgroundImage)) {
    echo 'background-image:url('.$headerBackgroundImage.');';
  } ?>
}
footer {
  <?php if (!empty($footerColor)) {
    echo 'background-color:'.$footerColor.';';
  } ?>
  <?php if (!empty($footerBackgroundImage)) {
    echo 'background-image:url('.$footerBackgroundImage.');';
  } ?>
}

.btn, input[type=submit], button {
  <?php if (!empty($buttonColor)) {
    echo 'background-color:'.$buttonColor.';';
  } ?>
}

a {
  <?php if (!empty($linkColor)) {
    echo 'color:'.$linkColor.';';
  } ?>
}
</style>
