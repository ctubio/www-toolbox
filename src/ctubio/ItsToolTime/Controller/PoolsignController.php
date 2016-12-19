<?php  namespace ctubio\ItsToolTime\Controller;

class PoolsignController extends AbstractController {

  const title = 'Coinbase Signature Verificator';

  public function indexAction() {
    if (isset($_GET['host']) and isset($_GET['port']) and isset($_GET['user']) and isset($_GET['pass'])) {
      if (is_string($_GET['host'])
        and is_numeric($_GET['port'])
        and $_GET['port']>0
        and is_string($_GET['user'])
        and is_string($_GET['pass'])
      ) {
        sleep(1);
        $conn = @fsockopen('tcp://'.$_GET['host'], $_GET['port'], $errno, $errstr, 5);
        if (is_resource($conn)) stream_set_timeout($conn, 1);
        if (is_resource($conn)) {
          @fwrite($conn, $out[]['m'] = '{"id": 1, "method": "mining.subscribe", "params": ["cgminer/0.6.9", "1"]}'."\n");
          $out[count($out)-1]['s'] = 'Miner';
          $out[] = array('s'=>'Pool','m'=>@fgets($conn, 2048));
          $out[] = array('s'=>'Pool','m'=>@fgets($conn, 2048));
          $out[] = array('s'=>'Pool','m'=>@fgets($conn, 2048));
          @fwrite($conn, $out[]['m'] = '{"id": 2, "method": "mining.authorize", "params": ["'.$_GET['user'].'", "'.$_GET['pass'].'"]}'."\n");
          $out[count($out)-1]['s'] = 'Miner';
          $out[] = array('s'=>'Pool','m'=>@fgets($conn, 2048));
          $out[] = array('s'=>'Pool','m'=>@fgets($conn, 2048));
          $out[] = array('s'=>'Pool','m'=>@fgets($conn, 2048));
          $out[] = array('s'=>'Pool','m'=>@fgets($conn, 2048));
          $out[] = array('s'=>'Pool','m'=>@fgets($conn, 2048));
          @fclose($conn);
        } else
          die('<h3 style="font-weight:normal;display:none;"><b>stratum+tcp</b>://<b>' . $_GET['host'] . '</b>:<b>' . $_GET['port'] . '</b> is <span style="color:red;"><u><b>unreachable</b></u></span> (errno:<span style="cursor:help;" title="'.utf8_encode($errstr?preg_replace('/^.*: +/',NULL, $errstr):'no error, no connection, nada').'">'.$errno.'</span>)</h3>');
        $diff = 0;
        $welcome = NULL;
        $state = NULL;
        $auth = FALSE;
        $_out = array();
        foreach($out as $o) {
          if (!$o['m']=@json_decode($o['m'], TRUE)) continue;
          if (isset($o['m']['method']) and $o['m']['method']=='mining.set_difficulty') {
            $state .= '<h3 style="text-align:left;font-weight:normal;display:none;">Miner received: <span style="color:green;"><u><b>mining.set_difficulty</b></u></span> (value=<span style="color:green;"><u><b>'.$o['m']['params'][0].'</b></u></span>)</h3>';
          }
          if (isset($o['m']['method']) and $o['m']['method']=='client.show_message') {
            $welcome = $o['m']['params'][0];
            $state .= '<h3 style="text-align:left;font-weight:normal;display:none;">Miner received: <span style="color:green;"><u><b>client.show_message</b></u></span> (welcome message?)</h3>';
          }
          if (isset($o['m']['method']) and $o['m']['method']=='mining.notify') {
            $state .= '<h3 style="text-align:left;font-weight:normal;display:none;">Miner received: <span style="color:green;"><u><b>mining.notify</b></u></span> (new mining work)</h3>';
          }
          if (isset($o['m']['result']) and $o['m']['result']==true and isset($o['m']['id']) and $o['m']['id']==2) {
            $auth = TRUE;
            $state .= '<h3 style="text-align:left;font-weight:normal;display:none;">Miner received: <span style="color:green;"><u><b>authorization result</b></u></span> (for '.$_GET['user'].')</h3>';
          }
          if (isset($o['m']['result']) and isset($o['m']['result'][0]) and isset($o['m']['result'][0][0]) and isset($o['m']['result'][0][0][0]) and $o['m']['result'][0][0][0]=='mining.notify') {
            $state .= '<h3 style="text-align:left;font-weight:normal;display:none;">Miner received: <span style="color:green;"><u><b>mining.notify</b></u></span> (authorized subscription)</h3>';
          }
          if ($o['s']=='Miner') {
            $state .= '<h3 style="text-align:left;font-weight:normal;display:none;">Miner send: <span style="color:green;"><u><b>'.$o['m']['method'].'</b></u></span></h3>';
          }
        }
        if (!$auth) $state .= '<h3 style="text-align:left;font-weight:normal;display:none;">Miner failed to receive: <span style="color:red;"><u><b>authorization result</b></u></span> (for <b><u>'.$_GET['user'].'</b></u>)</h3>';
        if (!$welcome) $welcome = '<span style="cursor:help;" title="or unknown">hidden</span>';
        else $welcome = '<span style="cursor:help;" title="service welcome message">'.$welcome.'</span>';
        $service = '<h3 style="font-weight:normal;display:none;"><b>stratum+tcp</b>://<b>' . $_GET['host'] . '</b>:<b>' . $_GET['port'] . '</b> is <span style="color:green;"><u><b>opened</b></u></span><br/>(service: ' . $welcome . ')</h3>';
        $table = NULL;
        foreach($out as $o) {
          if (!$json = @json_encode(@json_decode($o['m']), JSON_PRETTY_PRINT) or $json=='null') continue;
          $table .= '<tr title="Data send by '.$o['s'].'"><td>'.$o['s'].' said:</td><td><pre>'.$json.'</pre></td></tr>';
        }
        $table = '<h3 style="text-align:left;font-weight:normal;display:none;">Communication log:<table style="font-family: monospace;font-size:14px;" border="0">'.$table.'</table></h3>';
        die($service.$state.$table);
      }
      exit;
    }
    return $this->parseTool('poolsign');
  }
}
