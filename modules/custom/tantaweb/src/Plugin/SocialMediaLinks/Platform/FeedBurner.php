<?php

/**
 * Created by PhpStorm.
 * User: carlosrevillo
 * Date: 30/05/16
 * Time: 16:32
 */

namespace Drupal\tantaweb\Plugin\SocialMediaLinks\Platform;

use Drupal\social_media_links\PlatformBase;

/**
 * Provides 'feedburner' platform.
 *
 * @Platform(
 *   id = "feedburner",
 *   name = @Translation("Feed Burner"),
 *   urlPrefix = "https://feeds.feedburner.com/",
 * )
 */
class FeedBurner extends PlatformBase{}
