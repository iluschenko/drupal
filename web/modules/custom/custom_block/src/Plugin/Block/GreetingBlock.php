<?php

namespace Drupal\custom_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a greeting block.
 *
 * @Block(
 *   id = "greeting_block",
 *   admin_label = @Translation("Greeting Block"),
 *   category = @Translation("Custom")
 * )
 */
class GreetingBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'greeting_message' => $this->t('Welcome to our custom Drupal site!'),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['greeting_message'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Greeting Message'),
      '#description' => $this->t('Enter the greeting message to display in the block.'),
      '#default_value' => $this->configuration['greeting_message'],
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['greeting_message'] = $form_state->getValue('greeting_message');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'custom_block_greeting',
      '#message' => $this->configuration['greeting_message'],
      '#attached' => [
        'library' => [
          'custom_block/custom_block',
        ],
      ],
    ];
  }

} 