[![Release](https://img.shields.io/packagist/vpre/ctubio/www-toolbox.svg?label=release)](https://packagist.org/packages/ctubio/www-toolbox)
[![Platform License](https://img.shields.io/badge/platform-unix--like-lightgray.svg)](https://www.gnu.org/)
[![Software License](https://img.shields.io/badge/license-MIT-111111.svg)](LICENSE)

These tools are happy working at http://ca.rles-tub.io/tools.

[![Build Status](https://img.shields.io/travis/ctubio/www-toolbox/master.svg?label=test%20suite)](https://travis-ci.org/ctubio/www-toolbox)
[![Coverage Status](https://img.shields.io/coveralls/ctubio/www-toolbox/master.svg?label=code%20coverage)](https://coveralls.io/r/ctubio/www-toolbox?branch=master)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/8d716efb-1ffc-401e-83c5-d1a643e0fa97.svg)](https://insight.sensiolabs.com/projects/8d716efb-1ffc-401e-83c5-d1a643e0fa97)
[![Dependency Status](https://www.versioneye.com/user/projects/559752a8616634002100001b/badge.svg?style=flat)](https://www.versioneye.com/user/projects/559752a8616634002100001b)
[![Open Issues](https://img.shields.io/github/issues/ctubio/www-toolbox.svg)](https://github.com/ctubio/www-toolbox/issues)
## Steal the toolbox! (or just one tool)
Login to your desired machine, mkdir something under ```/var/www``` and compose the tools with the following commands ([Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx]) is required):
```
$ git clone ssh://git@github.com/ctubio/www-toolbox .
$ composer install
```
### Single webserver setup
just define a virtual host as usual. Drop the files to a subpath if you like to keep your current DocumentRoot, or make use of ```/pub``` as your DocumentRoot.

### Multiple webservers setup
if you dont like to use a load balancer, configure the main server (lets say 10.10.10.2 [may be your main webserver]) to reverse proxy all request from ```/tools``` (or any other path that you like) to the DocumentRoot of the secondary server (10.10.10.21 [may be a server dedicated only* for serve the tools]):
#### at 10.10.10.2 (main webserver):
setup the reverse proxy editing the following configuration files:
##### /etc/hosts
```
  10.10.10.21 www-toolbox
```
##### /etc/apache2/sites-available/your.domain.name
```
  ProxyVia On
  ProxyPass         /tools     http://www-toolbox
  ProxyPassReverse  /tools     http://www-toolbox
  ProxyPassMatch    /tools(.*) http://www-toolbox$1
```
#### at 10.10.10.21 (secondary webserver):
just define a virtual host as usual but named ```www-toolbox``` (or any other name that you defined previously) with the DocumentRoot at ```/pub```.

### Deploy all tools or just a few of them
in ```pub/www-toolbox.php```instead of:
```
echo new WWWToolbox(
  WWWToolbox::$ALL_TOOLS
);
```
add your list of enabled tools:
```
echo new WWWToolbox(array(
  'dnscheck',
  'sslcheck',
  'portscan'
));
```
This will enable only the urls ```/dnscheck```, ```/sslcheck``` and ```/portscan```.
(or depending your configs may result in ```/tools/dnscheck```, ```/tools/sslcheck``` and ```/tools/portscan```, or may result in any other prefix that you make use instead of ```/tools``` as your subpath/reverse proxy).

Alternatively, you may customize the urls:
```
echo new WWWToolbox(array(
  'custom_dnscheck' => 'dnscheck'
  'custom_sslcheck' => 'sslcheck',
  'custom_portscan' => 'portscan'
));
```
This will enable only the urls ```/custom_dnscheck``` for the tool ```dnscheck``` and so on.
### Customize the layout
Please copy the distributed file and feel free to modify ```/skin/abstractLayout.lex``` because this file is ignored by git:
```
$ cd skin
$ cp abstractLayout.lex.dist abstractLayout.lex
$ vim abstractLayout.lex
```
### Very special thanks to:
- https://github.com/c9s/Pux
- https://github.com/pyrocms/lex

\* may be also dedicated to run some other totally useful secondary apps, ofcourse.
