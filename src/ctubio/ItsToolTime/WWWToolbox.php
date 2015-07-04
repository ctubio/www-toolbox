<?php namespace ctubio\ItsToolTime;

use Pux\Executor;
use Pux\Mux;

class WWWToolbox {

  const ALL_TOOLS = NULL;

  private $tools = array(
    'dummy'
  );

  private $mux;

  public function __construct($tools = array()) {
    $this->mux = new Mux();
    $this->mux->mount('/error', new Controller\ErrorController());

    if (!$tools) $tools = $this->tools;

    if (is_string($tools)) $tools = array($tools);

    foreach($tools as $k => $v)
      if (in_array($v, $this->tools))
        $this->mux->mount('/'.(is_numeric($k)?$v:$k), new Controller\DummyController());
      else throw new \Exception('Unknown tool: "'.$v.'".');
  }

  public function __toString() {
    return Executor::execute(
      $this->mux->dispatch(strtok($_SERVER['REQUEST_URI'], '?'))
        ?: $this->mux->dispatch('/error/error404')
    );
  }
}