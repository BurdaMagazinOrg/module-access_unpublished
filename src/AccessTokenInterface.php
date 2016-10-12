<?php

/**
 * @file
 * Contains \Drupal\access_unpublished\AccessTokenInterface.
 */

namespace Drupal\access_unpublished;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Access token entities.
 *
 * @ingroup access_unpublished
 */
interface AccessTokenInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Access token creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Access token.
   */
  public function getCreatedTime();

  /**
   * Sets the Access token creation timestamp.
   *
   * @param int $timestamp
   *   The Access token creation timestamp.
   *
   * @return \Drupal\access_unpublished\AccessTokenInterface
   *   The called Access token entity.
   */
  public function setCreatedTime($timestamp);

  public function isExpired();

}
