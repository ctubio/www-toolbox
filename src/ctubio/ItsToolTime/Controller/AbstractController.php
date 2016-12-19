<?php  namespace ctubio\ItsToolTime\Controller;

use ctubio\ItsToolTime\WWWToolbox;
use Lex\Parser;
use Pux\Controller;

class AbstractController extends Controller {
  public function indexAction() {
    $tools = array();
    foreach (WWWToolbox::ALL_TOOLS as $k => $v)
      array_push($tools, array(
        'name' => $v,
        'title' => constant(__NAMESPACE__.'\\'.ucfirst($v).'Controller::title'),
        'path' => constant('WWWToolboxPathPrefix').'/'.(is_numeric($k)?$v:$k)
      ));
    return $this->parseLayout('index', [
      'tools' => $tools,
      'path' => constant('WWWToolboxPathPrefix'),
    ]);
  }

  public function error404() {
    header("HTTP/1.0 404 Not Found");
    return $this->parseLayout('error', [
      'error' => '404 Not Found'
    ]);
  }

  protected function parseTool($template, $vars = array()) {
    return $this->parseLayout($template, array_merge($vars, [
      'title' => constant(get_class($this).'::title')
    ]));
  }

  protected function parseLayout($template, $vars = array()) {
    return $this->wrapLayout($this->parseLex($template, $vars), $template=='index');
  }

  private function wrapLayout($content, $isIndex) {
    return $this->parseLex('layout', [
      'content' => $content,
      'goback' => !$isIndex ? constant('WWWToolboxPathPrefix') : FALSE
    ]);
  }

  private function parseLex($template, $vars = array()) {
    $parser = new Parser();
    return $parser->parse(file_get_contents('../skin/'.$template.'.lex'.(
      file_exists('../skin/'.$template.'.lex') ? NULL : '.dist'
    )), $vars);
  }
}
