<?php

namespace Drupal\d8profile\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Powered By D8Profile' block.
 *
 * @Block(
 *   id = "d8_profile_powered_by_block",
 *   admin_label = @Translation("Powered by D8Profile")
 * )
 */
class D8ProfilePoweredByBlock extends BlockBase {

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
    return ['#markup' => '<span>' . $this->t('Powered by <a href="#">D8Profile</a>') . '</span>'];
  }

}