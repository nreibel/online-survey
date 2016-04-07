<?php

class Option {
  
  private $value;
  private $text;

  public function Option($text = "", $value = null) {
    $this->value = $value;
    $this->text  = $text;
  }
  
  public function to_html() {
    return "<option value=\"$this->value\">$this->text</option>";
  }
}

?>