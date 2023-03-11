<?php

/** @var TYPE_NAME $theme_settings */

header("Content-type: text/css; charset: UTF-8"); //look carefully to this line

$primary_colour = $theme_settings['primary_colour'];
$text_colour = $theme_settings['text_colour'];
$support_colour = $theme_settings['support_colour'];
$navigation_primary_colour = $theme_settings['navigation_primary_colour'];
$navigation_secondary_colour = $theme_settings['navigation_secondary_colour'];
$footer_background_colour = $theme_settings['footer_background_colour'];

?>
<style>
    :root
    {
        --theme-primary-colour: <?php echo $primary_colour; ?>;
        --theme-text-colour: <?php echo $text_colour; ?>;
        --theme-support-colour: <?php echo $support_colour; ?>;
        --theme-navigation-primary-colour: <?php echo $navigation_primary_colour; ?>;
        --theme-navigation-secondary-colour: <?php echo $navigation_secondary_colour; ?>;
        --theme-footer-background-colour: <?php echo $footer_background_colour; ?>;
    }
</style>

