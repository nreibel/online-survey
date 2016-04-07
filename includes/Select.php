<?php

require_once('Option.php');
      
class Select {
  
  static private $nextId = 1;

  private $items = array();
  private $cssClass = "";
  
  public function Select($cssClass = null, $firstEmpty = false) {
    $this->cssClass = $cssClass;
    if ($firstEmpty) $this->add_option("", "empty");
  }
  
  public function add_option($text, $value) {
    $rb = new Option($text, $value);
     $this->items[] = $rb;
  }
  
  public function print_html() {
    $id = self::$nextId++;
  
    $classStr = ($this->cssClass != null ? " class=\"$this->cssClass\"" : "");
    
    print "<select name=\"sel_$id\" $classStr>";
    foreach ($this->items as $el) {
      print "\n  " . $el->to_html();
    }
    print "\n</select>";
  }
}

?>