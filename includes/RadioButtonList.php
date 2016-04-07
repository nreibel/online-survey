<?php

require_once('RadioButton.php');

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
    print "\n";
    foreach ($this->items as $el) {
      print $el->to_html() . "\n";
    }
    print $this->generate_dummy()->to_html();
    print "\n\n";
  }
  
  public function print_td() {
    print "\n";
    foreach ($this->items as $el) {
      print '<td>' . $el->to_html() . "</td>\n";
    }
    print '<td class="hidden">' . $this->generate_dummy()->to_html() . '</td>';
    print "\n\n";
  }
}

?>