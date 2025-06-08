<?php

namespace Drupal\Tests\custom_block\Unit;

use Drupal\Tests\UnitTestCase;

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

}
