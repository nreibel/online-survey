<?php

class RadioButtonList {
  
  static private $nextId = 1;

  private $items = array();
  private $id    = -1;
  
  public function RadioButtonList() {
    $this->id = self::$nextId++;
  }
  
  public function add_radiobutton($value, $text = null, $class = null) {
    $rb = new RadioButton("rb" . $this->id, $value, $text, $class);
     $this->items[] = $rb;
  }
  
  public function generate_dummy() {
    return new RadioButton("rb" . $this->id, "null", null, "hidden", true);
  }
  
  public function print_html() {
    foreach ($this->items as $el) {
      print $el->to_html() . "\n";
    }
    print $this->generate_dummy()->to_html() . "\n";
  }
  
  public function print_td() {
    foreach ($this->items as $el) {
      print "<td>" . $el->to_html() . "</td>\n";
    }
    print "<td class=\"hidden\">" . $this->generate_dummy()->to_html() . "</td>\n";
  }
}

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
    $str .= "<div$classStr>";
    $str .= "<input type=\"radio\" name=\"$this->name\" value=\"$this->value\"";
    if ($this->checked) $str .= " checked=\"checked\"";
    
    if ($this->text != null) $str .= ">$this->text</input>";
    else $str .= "/>";
    
    $str .= "</div>";
    $str .= "</label>";
    
    return $str;
  }
}

?>