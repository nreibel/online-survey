<?php

$id = 0;

function checkbox($text, $class) {

  $currentId = $GLOBALS['id'];

  print <<<EOS

<input name="cb_$currentId" type="hidden" value="off" />
<label>
  <div class="$class">
    <input name="cb_$currentId" type="checkbox">$text</input>
  </div>
</label>

EOS;

  $GLOBALS['id']++;

}
  
function radiobutton($name, $value, $text, $class) {
  
  print <<<EOS

<label>
  <div class="$class">
    <input type="radio" name="$name" value="$value">$text</input>
  </div>
</label>

EOS;

}
  
function text($placeholder) {

  $currentId = $GLOBALS['id'];
  
  print <<<EOS
<input name="tf_$currentId" type="text" placeholder="$placeholder"/>
EOS;

  $GLOBALS['id']++;
}
?>
