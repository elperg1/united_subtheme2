<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>

<table class="two-col">
  <tbody>
    <tr>
      <td class="first-col"><h4><?php print $fields['field_fleet_count']->label_html; ?></h4></td>
      <td class="second-col"><?php print $fields['field_fleet_count']->content; ?></td>
      <td class="third-col"><h4><?php print $fields['field_wing_span']->label_html; ?></h4></td>
      <td class="fourth-col"><?php print $fields['field_wing_span']->content; ?></td>
    </tr>
    <tr>
      <td class="first-col"><h4><?php print $fields['field_first_delivery']->label_html; ?></h4></td>
      <td class="second-col"><?php print $fields['field_first_delivery']->content; ?></td>
      <td><h4></h4></td>
      <td></td>
    </tr>
    <tr>
      <td class="first-col"><h4><?php print $fields['field_max_range']->label_html; ?></h4></td>
      <td class="second-col"><?php print $fields['field_max_range']->content; ?></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="first-col"><h4><?php print $fields['field_cruise_speed']->label_html; ?></h4></td>
      <td class="second-col" colspan="2"><?php print $fields['field_cruise_speed']->content; ?></td>
      <td></td>
    </tr>
    <tr>
      <td class="first-col"><h4><?php print $fields['field_propulsion']->label_html; ?></h4></td>
      <td class="second-col" colspan="2"><?php print $fields['field_propulsion']->content; ?></td>
      <td></td>
    </tr>
  </tbody>
</table>


<?php //drupal_set_message('<pre>'. print_r($row, TRUE) .'</pre>'); ?>
<?php //dpm($fields); ?>