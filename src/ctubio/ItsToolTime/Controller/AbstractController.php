<?php  namespace ctubio\ItsToolTime\Controller;

use ctubio\ItsToolTime\WWWToolbox;
use Lex\Parser;
use Pux\Controller;

class AbstractController extends Controller {
  public function indexAction() {
    $content = '<h1>Index of tools:</h1><u>';
    foreach(WWWToolbox::$ALL_TOOLS as $k => $v)
      $content .= '<li><a href="/tools/'.$k.'">'.$k.'</a</li>';
    $content .= '</ul>';
    return $this->wrapLayout($content);
  }

  public function error404() {
    header("HTTP/1.0 404 Not Found");
    $content = 'Error: 404.';
    return $this->wrapLayout($content);
  }

  protected function wrapLayout($content) {
    $parser = new Parser();
    return $parser->parse(
      file_get_contents('../skin/abstractLayout.lex'.(
        file_exists('../skin/abstractLayout.lex')
          ? NULL : '.dist'
      )), [
        'content' => $content
      ]
    );
  }
}
