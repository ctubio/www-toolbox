<?php  namespace ctubio\ItsToolTime\Controller;

class ErrorController extends AbstractController {
  public function indexAction() {
    $content = 'Error²: man, no tools yet.';
    return $this->wrapLayout($content);
  }

  public function error404Action() {
    $content = 'Error: man, no tools yet.';
    return $this->wrapLayout($content);
  }
}
