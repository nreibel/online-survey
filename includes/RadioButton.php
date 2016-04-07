<?php

class RadioButton {
  
  private $name;
  private $value;
  private $text;
  private $clazz;
  private $checked;

  public function RadioButton($name, $value, $text = null, $class = null, $checked = false) {
    $this->name  = $name;
    $this->value = $value;
    $this->text  = $text;
    $this->clazz = $class;
    $this->checked = $checked;
  }
  
  public function to_html() {
    $classStr = ($this->clazz != null ? " class=\"$this->clazz\"" : "");
    
    $str = "<label$classStr>";
    $str .= '<input type="radio" name="' . $this->name . '" value="' . $this->value . '"';
    if ($this->checked) $str .= ' checked="checked"';
    $str .= '/>';
    
    if ($this->text != null) $str .= '<span>' . $this->text . '</span>';
    
    $str .= "</label>";
    
    return $str;
  }
}

?>