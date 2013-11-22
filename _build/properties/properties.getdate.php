<?php
/*
 * @package getdate
 * @subpackage build
 */
 
$properties = array(
  array(
    'name' => 'offset',
    'desc' => 'The period of time to add or subtract from the current timestamp. Use relative date/time formats that the strtotime() parser understands.',
    'type' => 'textfield',
    'options' => '',
    'value' => 'now',
  ),
);
return $properties;