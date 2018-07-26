<?php

namespace Drupal\d8profile\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Recent Blog Post' block.
 *
 * @Block(
 *   id = "recent_blog_post_block",
 *   admin_label = @Translation("Recent Blog Post")
 * )
 */
class RecentBlogPostBlock extends BlockBase {

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
    return ['#markup' => '<span>' . $this->t('Please Find All the Recent Blog Posts of the Site <a href=":here">Here</a>', [':here' => '/recent-blogs']) . '</span>'];
  }

}
