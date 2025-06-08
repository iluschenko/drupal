<?php

namespace Drupal\Tests\custom_block\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\custom_block\CustomBlockService;

/**
 * Unit tests for the Custom Block module.
 *
 * @group custom_block
 */
class CustomBlockTest extends UnitTestCase {

  /**
   * Tests the greeting message.
   */
  public function testGreetingMessage() {
    $message = 'Welcome to our custom Drupal site!';
    $this->assertEquals('Welcome to our custom Drupal site!', $message);
  }

  /**
   * Tests the block info.
   */
  public function testBlockInfo() {
    $blocks = custom_block_block_info();
    $this->assertArrayHasKey('greeting_block', $blocks);
    $this->assertEquals('Greeting Block', $blocks['greeting_block']['info']);
  }

} 