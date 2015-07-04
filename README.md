## Install
### Single webserver setup:
just a virtual host as usual. Drop the files to a subpath if you like to keep your current DocumentRoot.

### Multiple webservers setup:
Config the main server (lets say 10.10.10.2 [may be your main webserver]) to proxy all request from ```/tools``` to the DocumentRoot of the secondary server (10.10.10.21 [may be a server dedicated only for serve the tools]):
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
in the secondary sever, just a virtual host as usual but named ```www-toolbox``` serving the tools.

### Very special thanks to:
- https://github.com/c9s/Pux
- https://github.com/pyrocms/lex
