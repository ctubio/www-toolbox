<?php  namespace ctubio\ItsToolTime\Controller;

use ctubio\ItsToolTime\DNSBL;

class DnscheckController extends AbstractController {

  const title = 'DNSBL and RBL Check';

  public function indexAction() {
    $dnsbls = new DNSBL();
    if (isset($_GET['host']) and isset($_GET['n'])) {
      $dnsbls = $dnsbls->getDNSBLs();
      if (is_string($_GET['host']) and is_numeric($_GET['n'])) {
        if (!isset($dnsbls[$_GET['n']])) die();
        sleep(1);
        if (!preg_match('/(?:\d{1,3}\.){3}\d{1,3}/', $_GET['host']))
          $_GET['host'] = gethostbyname($_GET['host']);
        $rip=implode(".",array_reverse(explode(".",$_GET['host'])));
        if (checkdnsrr($rip.".".$dnsbls[$_GET['n']]['zone'].".","A")) {
          die('<script type="text/javascript">jQuery("div#dnsblcheck-results-ko").prepend(\'<h3 style="font-weight:normal;display:none;"><span style="color:red;"><u><b>listed</b></u></span> in <b>'.$dnsbls[$_GET['n']]['zone'].'</b><br />(should visit for removal: <a target="_blank" href="'.$dnsbls[$_GET['n']]['page'].'">'.$dnsbls[$_GET['n']]['name'].'</a>)</h3>\').find("h3").fadeIn();jQuery("b#dnsblcheck-pending-no").html(parseInt(jQuery("b#dnsblcheck-pending-no").html())-1);jQuery("b#dnsblcheck-pending-ko").html(parseInt(jQuery("b#dnsblcheck-pending-ko").html())+1);</script>');
        }
        die('<script type="text/javascript">jQuery("div#dnsblcheck-results-ok").prepend(\'<h3 style="font-weight:normal;display:none;"><span style="color:green;"><u><b>not listed</b></u></span> in <b>'.$dnsbls[$_GET['n']]['zone'].'</b></h3>\').find("h3").fadeIn();jQuery("b#dnsblcheck-pending-no").html(parseInt(jQuery("b#dnsblcheck-pending-no").html())-1);jQuery("b#dnsblcheck-pending-ok").html(parseInt(jQuery("b#dnsblcheck-pending-ok").html())+1);</script>');
      }
      exit;
    }
    return $this->parseTool('dnscheck', array(
      'dnsbl_count' => $dnsbls->getCount()
    ));
  }
}
