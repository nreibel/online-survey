<?php

$id = 0;

function checkbox($text = null, $class = null) {
  $currentId = $GLOBALS['id']++;
  $format = '<input name="cb_%d" type="hidden" value="off" /><label%s><input name="cb_%d" type="checkbox" />%s</label>';  
  printf($format,
    $currentId,
    ($class != null ? " class=\"$class\"" : ''),
    $currentId,
    ($text != null ? "<span>$text</span>" : "")
  );
}

function text() {
  $currentId = $GLOBALS['id']++;
  printf('<input name="tf_%d" type="text"/>', $currentId);
}

function text_area($rows = 4, $cols = 50) {
  $currentId = $GLOBALS['id']++;
  printf('<textarea rows="%d" cols="%d" name="ta_%d"></textarea>', $rows, $cols, $currentId);
}

?>