<?php
/**
 * Created by PhpStorm.
 * User: carlosrevillo
 * Date: 27/05/16
 * Time: 14:38
 */

namespace Drupal\tantaweb\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides un bloque con la dirección de tanta.
 *
 * @Block(
 *   id = "address",
 *   admin_label = @Translation("Dirección de Tanta"),
 *   category = @Translation("Blocks")
 * )
 */
class Address extends BlockBase {
  /**
   * @inheritdoc
   */
  public function build() {
    return [
      '#theme' => 'tantaweb_address'
    ];
  }
}
