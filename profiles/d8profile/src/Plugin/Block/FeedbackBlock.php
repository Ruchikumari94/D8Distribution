<?php

namespace Drupal\d8profile\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Feedback Block' block.
 *
 * @Block(
 *   id = "feedback_block",
 *   admin_label = @Translation("Feedback Block")
 * )
 */
class FeedbackBlock extends BlockBase {

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
    $form = \Drupal::formBuilder()->getForm('Drupal\d8profile\Form\TechxFeedbackForm');

    return $form;
  }

}
