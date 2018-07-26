<?php

namespace Drupal\d8profile\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Welcome Block' block.
 *
 * @Block(
 *   id = "welcome_block",
 *   admin_label = @Translation("Welcome Block")
 * )
 */
class WelcomeBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return ['label_display' => FALSE];
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    return ['#markup' => '<span>' . $this->t('Welcome to Our Site') . '</span>'];
  }

}
