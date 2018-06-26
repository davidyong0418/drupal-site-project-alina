<?php

/**
 * @file
 * Contains RawValueFormatter Class.
 */

namespace Drupal\raw_formatter\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'raw_value' formatter.
 *
 * @FieldFormatter(
 *   id = "raw",
 *   label = @Translation("Raw Value"),
 *   field_types = {
 *    "metatag",
 *   }
 * )
 */
class RawValueFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = array();
    foreach ($items as $delta => $item) {
      $value = $item->getValue();
      $elements[$delta] = [
        '#theme' => 'raw_formatter',
        '#raw_value' => json_encode(unserialize($value['value'])),
      ];
    }
    return $elements;
  }

}
