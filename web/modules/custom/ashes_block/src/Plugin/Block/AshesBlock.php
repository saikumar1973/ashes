<?php

namespace Drupal\ashes_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Ashes' Block.
 *
 * @Block(
 *   id = "ashes_block",
 *   admin_label = @Translation("Ashes block"),
 *   category = @Translation("Ashes World"),
 * )
 */
class AshesBlock extends BlockBase {

  	/**
   	* {@inheritdoc}
   	*/
  public function build() {
    return [
      '#markup' => $this->t('Hello, World!'),
    ];
  }

}