<?php

/**
 * @file
 * Post update functions for march.
 */

/**
 * Sets the default `base_primary_color` value of march's theme settings.
 */
function march_post_update_add_march_primary_color() {
  \Drupal::configFactory()->getEditable('march.settings')
    ->set('base_primary_color', '#1b9ae4')
    ->save();
}
