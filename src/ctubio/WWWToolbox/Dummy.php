<?php namespace ctubio\WWWToolbox;

class Dummy {

  private $output;

  public function __construct($args) {
    $this->output = __FILE__ . print_r($args,true);
  }

  public function __toString() {
    return $this->output;
  }
}