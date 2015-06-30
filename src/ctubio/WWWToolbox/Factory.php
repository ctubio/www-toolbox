<?php namespace ctubio\WWWToolbox;

class Factory {

  private $output;

  public function __construct($tool, $args) {
    $tool = ucfirst(strtolower($tool));
    $this->output = (string)new Dummy($args);
  }

  public function __toString() {
    return $this->output;
  }
}