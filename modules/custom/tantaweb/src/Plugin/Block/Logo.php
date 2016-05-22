<?php
/**
 * Created by PhpStorm.
 * User: carlosrevillo
 * Date: 21/05/16
 * Time: 19:43
 */

/**
 * @file
 * Contains \Drupal\tantaweb\Plugin\Block\Logo.
 */

namespace Drupal\tantaweb\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Render\Element\RenderElement;
use Drupal\Core\Url;
use Drupal\Core\Link;

/**
 * Provides un bloque con el logo.
 *
 * @Block(
 *   id = "logo",
 *   admin_label = @Translation("Logo de Tanta"),
 *   category = @Translation("Blocks")
 * )
 */
class Logo extends BlockBase {

  /**
   * @inheritdoc
   */
  public function build() {
    $url = Url::fromRoute('<front>');

    $site_logo = [
      '#theme' => 'image',
      '#uri' => theme_get_setting('logo.url'),
      '#alt' => $this->t('Home'),
      '#access' => true
    ];

    $link = [
      '#title' => $site_logo,
      '#type' => 'link',
      '#url' => $url
    ];

    return [
      '#link' => $link,
      '#theme' => 'tantaweb_logo'
    ];
  }
}
