<?php

namespace Drupal\perspective_webform\Plugin\WebformHandler;

use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Serialization\Yaml;
use Drupal\Core\Form\FormStateInterface;
use Drupal\webform\Plugin\WebformHandlerBase;
use Drupal\webform\webformSubmissionInterface;

/**
 * Form submission handler.
 *
 * @WebformHandler(
 *   id = "perspective_webform",
 *   label = @Translation("Perspective Webform"),
 *   category = @Translation("Content moderation"),
 *   description = @Translation("Moderates form submissions toxicity."),
 *   cardinality = \Drupal\webform\Plugin\WebformHandlerInterface::CARDINALITY_SINGLE,
 *   results = \Drupal\webform\Plugin\WebformHandlerInterface::RESULTS_PROCESSED,
 * )
 */
class WebformPerspectiveHandler extends WebformHandlerBase {

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state, WebformSubmissionInterface $webform_submission) {

    $values = $webform_submission->getData();

    $message = "MyHandler got form data:".print_r($values,1);
    \Drupal::logger('perspective_webform')->error($message);

    return true;

  }

}
