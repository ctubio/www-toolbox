<?php namespace ctubio\ItsToolTime;

use ctubio\ItsToolTime\Controller\AbstractController;
use Pux\Executor;
use Pux\Mux;

class WWWToolbox {

  const ALL_TOOLS = array(
    'portscan'
  );

  private $mux;

  public function __construct($tools = array()) {
    $this->mux = new Mux();
    $this->mux->mount('/', new AbstractController());
    $this->mux->add('/error404', __NAMESPACE__.'\\Controller\\AbstractController:error404');

    if (!$tools) $tools = self::ALL_TOOLS;

    if (is_string($tools)) $tools = array($tools);

    foreach($tools as $k => $v)
      if (in_array($v, self::ALL_TOOLS)) {
        $class = __NAMESPACE__.'\\Controller\\'.ucfirst($v).'Controller';
        $this->mux->mount('/'.(is_numeric($k)?$v:$k), new $class());
      } else throw new \Exception('Unknown tool: "'.$v.'".');
  }

  public function __toString() {
    return Executor::execute(
      $this->mux->dispatch(strtok($_SERVER['REQUEST_URI'], '?'))
        ?: $this->mux->dispatch('/error404')
    );
  }
}