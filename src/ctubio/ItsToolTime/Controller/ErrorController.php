<?php  namespace ctubio\ItsToolTime\Controller;

use Pux\Controller;

class ErrorController extends Controller {
  public function error404Action() {
    return 'Error: man, no tools yet.';
  }
}
