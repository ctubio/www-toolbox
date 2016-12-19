<?php  namespace ctubio\ItsToolTime\Controller;

class PortscanController extends AbstractController {

  const title = 'TCP/UDP Port Scan';

  public function indexAction() {
    if (isset($_GET['host']) and isset($_GET['port']) and isset($_GET['protocol'])) {
      if (is_string($_GET['host'])
        and is_numeric($_GET['port'])
        and $_GET['port']>0
        and in_array($_GET['protocol'], array('tcp', 'udp'))
      ) {
        sleep(1);
        $connection = @fsockopen($_GET['protocol'].'://'.$_GET['host'], $_GET['port'], $errno, $errstr, 1);
        if (is_resource($connection)) stream_set_timeout($connection, 1);
        if (is_resource($connection) and ($_GET['protocol']=='tcp' or (fwrite($connection, "\n") and fread($connection, 1)!=__FILE__ and $data = stream_get_meta_data($connection) and isset($data['timed_out']) and $data['timed_out']==TRUE))) {
          $service = getservbyport($_GET['port'], $_GET['protocol']);
          if (!$service) $service= '<span style="cursor:help;" title="or unknown">hidden</span>';
          else $service = '<span style="cursor:help;" title="possibly maybe, or not">'.$service.'</span>';
          die('<h3 style="font-weight:normal;display:none;"><b>' . $_GET['protocol'] . '</b>://<b>' . $_GET['host'] . '</b>:<b>' . $_GET['port'] . '</b> is <span style="color:green;"><u><b>opened</b></u></span> (service:' . $service . ')</h3>');
          fclose($connection);
        } else {
          die('<h3 style="font-weight:normal;display:none;"><b>' . $_GET['protocol'] . '</b>://<b>' . $_GET['host'] . '</b>:<b>' . $_GET['port'] . '</b> is <span style="color:red;"><u><b>closed</b></u></span> (errno:<span style="cursor:help;" title="'.utf8_encode($errstr?preg_replace('/^.*: +/',NULL, $errstr):'no error, no connection, nada').'">'.$errno.'</span>)</h3>');
        }
      }
      exit;
    }
    return $this->parseTool('portscan');
  }
}
