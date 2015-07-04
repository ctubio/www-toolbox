<?php  namespace ctubio\ItsToolTime\Controller;

class DummyController extends AbstractController {
  public function indexAction() {
    $content = 'dummy index';
    return $this->wrapLayout($content);
  }
}
