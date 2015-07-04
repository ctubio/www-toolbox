<?php  namespace ctubio\ItsToolTime\Controller;

use ctubio\ItsToolTime\WWWToolbox;
use Lex\Parser;
use Pux\Controller;

class AbstractController extends Controller {
  public function indexAction() {
    $parser = new Parser();
    $tools = array();
    foreach (WWWToolbox::$ALL_TOOLS as $k => $v)
      array_push($tools, array(
        'name'=>$v,
        'url'=>is_numeric($k)?$v:$k
      ));
    return $this->wrapLayout($parser->parse(
      file_get_contents('../skin/index.lex'), [
        'tools' => $tools
      ]
    ));
  }

  public function error404() {
    header("HTTP/1.0 404 Not Found");
    $parser = new Parser();
    return $this->wrapLayout($parser->parse(
      file_get_contents('../skin/error.lex'), [
        'error' => '404 Not Found'
      ]
    ));
  }

  protected function wrapLayout($content) {
    $parser = new Parser();
    return $parser->parse(
      file_get_contents('../skin/layout.lex'.(
        file_exists('../skin/layout.lex') ? NULL : '.dist'
      )), [
        'content' => $content
      ]
    );
  }
}
