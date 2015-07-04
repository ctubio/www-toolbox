This tools are happy working at http://ca.rles-tub.io/tools.
## Install
Login to your desired machine, mkdir something under ```/var/www``` and compose the tools with the following commands ([Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx]) is required):
```
$ git clone ssh://git@github.com/ctubio/www-toolbox .
$ composer install
```
### Single webserver setup:
just a virtual host as usual. Drop the files to a subpath if you like to keep your current DocumentRoot, or make use of ```/pub``` as your DocumentRoot.

### Multiple webservers setup:
if you dont like to use a load balancer, config the main server (lets say 10.10.10.2 [may be your main webserver]) to reverse proxy all request from ```/tools``` (or any other path that you like) to the DocumentRoot of the secondary server (10.10.10.21 [may be a server dedicated only for serve the tools]):
#### at 10.10.10.2:
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
#### at 10.10.10.21:
in the secondary sever, just a virtual host as usual but named ```www-toolbox``` (or any other name that you like) with the DocumentRoot at ```/pub```.

### Very special thanks to:
- https://github.com/c9s/Pux
- https://github.com/pyrocms/lex
