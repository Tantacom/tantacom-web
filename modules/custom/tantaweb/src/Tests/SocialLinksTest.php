<?php

namespace Drupal\tantaweb\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Tests for tantaweb.module.
 *
 * @group tantaweb
 */
class SocialLinksTest extends WebTestBase {

  protected $user;

  public static $modules = array('social_media_links', 'block', 'node', 'tantaweb');

  /**
   * Perform any initial set up tasks that run before every test method
   */
  protected function setUp() {
    parent::setUp();
  }

  /**
   * Tests that the 'front' path has links to social networks
   */
  public function testAddSocialLinks() {
    $user = $this->drupalCreateUser(array('access content', 'administer blocks'));
    $this->drupalLogin($user);

    $block = array();
    $block['id'] = 'social_media_links_block';
    $block['settings[label]'] = $this->randomMachineName(8);
    $block['theme'] = $this->config('system.theme')->get('default');
    $block['region'] = 'header';
    $edit = array(
      'settings[label]' => $block['settings[label]'],
      'id' => $block['id'],
      'region' => $block['region']
    );
    $this->drupalPostForm('admin/structure/block/add/' . $block['id'] . '/' . $block['theme'], $edit, t('Save block'));
    $this->assertText(t('The block configuration has been saved.'), 'Demo block created.');

    $edit = array(
      'settings[platforms][twitter][value]' => 'https://www.twitter.com/tantacom',
      'settings[platforms][googleplus][value]' => 'https://alinktogoogleplus.com',
      'settings[platforms][feedburner][value]' => 'https://feedburner/de/tanta'
    );
    $this->drupalPostForm('admin/structure/block/manage/' . $block['id'], $edit, t('Save block'));
    $this->assertText(t('The block configuration has been saved.'), 'Demo block saved.');

    $this->drupalGet('');
    $this->assertLinkByHref('https://www.twitter.com/tantacom');
    $this->assertLinkByHref('https://alinktogoogleplus.com');
    $this->assertLinkByHref('https://feedburner/de/tanta');
  }

}
