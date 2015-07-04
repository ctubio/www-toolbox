<?php  namespace ctubio\ItsToolTime\Controller;

use Lex\Parser;
use Pux\Controller;

class AbstractController extends Controller {
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
