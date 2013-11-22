<?php
/*
 * @package getdate
 * @subpackage build
 */

function getSnippetContent($filename) {
  $o = file_get_contents($filename);
  $o = trim(str_replace(array('<?php','?>'),'',$o));
  return $o;
}

$snippets = array();

$snippets[0]= $modx->newObject('modSnippet');
$snippets[0]->fromArray(array(
  'id' => 0,
  'name' => 'getDate',
  'description' => 'A simple timestamp retrieval Snippet for MODX Revolution.',
  'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.getdate.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.getdate.php';
$snippets[0]->setProperties($properties);
unset($properties);

return $snippets;