<?php

namespace Drupal\test\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "default_block",
 *  admin_label = @Translation("Default block"),
 * )
 */
class DefaultBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    //$build = [];
    //$build['default_block']['#markup'] = 'Implement DefaultBlock.';

    //return $build;
  return array(
       '#type' => 'markup',
       '#markup' => 'This block list the default items.',
     );
	}

}
