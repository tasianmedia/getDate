<?php
/**
 * A simple timestamp retrieval Snippet for MODX Revolution.
 *
 * @author David Pede <dev@tasianmedia.com> <https://twitter.com/davepede>
 * @version 1.0.0-pl
 * @released November 22, 2013
 * @since November 22, 2013
 * @package getdate
 *
 *getDate is free software; you can redistribute it and/or modify it under the
 *terms of the GNU General Public License as published by the Free Software
 *Foundation; either version 3 of the License, or any later version.

 *getDate is distributed in the hope that it will be useful, but WITHOUT ANY
 *WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 *A PARTICULAR PURPOSE. See the GNU General Public License for more details.

 *You should have received a copy of the GNU General Public License along with
 *getDate; if not, write to the Free Software Foundation, Inc., 59 Temple
 *Place, Suite 330, Boston, MA 02111-1307 USA
 */

/* set default properties */
$offset = !empty($offset) ? $offset : 'now';

$output = '';

$output = strtotime("$offset");

return (string) $output;