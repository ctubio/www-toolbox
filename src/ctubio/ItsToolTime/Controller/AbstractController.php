<?php  namespace ctubio\ItsToolTime\Controller;

use ctubio\ItsToolTime\WWWToolbox;
use Lex\Parser;
use Pux\Controller;

class AbstractController extends Controller {
  public function indexAction() {
    $tools = array();
    foreach (WWWToolbox::$ALL_TOOLS as $k => $v)
      array_push($tools, array(
        'name' => $v,
        'path' => constant('WWWToolboxPathPrefix').'/'.(is_numeric($k)?$v:$k)
      ));
    return $this->wrapLayout($this->parseLex('index', [
      'tools' => $tools,
    ]));
  }

  public function error404() {
    header("HTTP/1.0 404 Not Found");
    return $this->wrapLayout($this->parseLex('error', [
      'error' => '404 Not Found'
    ]));
  }

  protected function wrapLayout($content) {
    return $this->parseLex('layout', [
      'content' => $content
    ]);
  }

  private function parseLex($file, $vars) {
    $parser = new Parser();
    return $parser->parse(file_get_contents('../skin/'.$file.'.lex'.(
      file_exists('../skin/'.$file.'.lex') ? NULL : '.dist'
    )), $vars);
  }
}
