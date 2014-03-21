<?php
/**
 * @package getdate
 *
 * Copyright (C) 2013 David Pede. All rights reserved. <dev@tasianmedia.com>
 *
 * getDate is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or any later version.
 *
 * getDate is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getDate; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */
/**
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