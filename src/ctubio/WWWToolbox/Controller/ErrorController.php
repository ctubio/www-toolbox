<?php  namespace ctubio\WWWToolbox\Controller;

use Pux\Controller;

class ErrorController extends Controller {
  public function error404Action() {
    return 'Error: 404';
  }
}
