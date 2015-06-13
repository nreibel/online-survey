<?php

$id = 0;

function checkbox($text, $class = null) {

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
  
function radiobutton($name, $value, $text, $class = null) {
  
  print <<<EOS

<label>
  <div class="$class">
    <input type="radio" name="$name" value="$value">$text</input>
  </div>
</label>

EOS;

}

function rating($max, $name, $class = null) {
  for($i = 1 ; $i <= $max ; $i++) {
    print <<<EOS

<label>
  <input type="radio" class="$class" value="$i" name="$name">$i</input>
</label>

EOS;
  }
}
  
function text($placeholder = null) {

  $currentId = $GLOBALS['id'];
  
  print <<<EOS
<input name="tf_$currentId" type="text" placeholder="$placeholder"/>
EOS;

  $GLOBALS['id']++;
}
?>
