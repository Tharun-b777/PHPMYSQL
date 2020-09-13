# PHPMYSQL

# MYSQL TABLES STRUCTURE


DATABASE: message


TABLE update


command:




TABLE user


command:


#SERVER


Created .htaccess to enable php to be detected in html file

Modified server config(apache2.conf) file to enable .htaccess

Modified part(lines:170-174):-

<Directory /var/www/html/>


    Options Indexes FollowSymLinks


    AllowOverride All


    Require all granted


</Directory>

Modified dir.conf file to serve the default files other than index.html

Modified 000-default.conf to display custom error page

HACKERMODE:
Modified ports.conf file to make server listen and serve contents on port 8600 and 8400

Modified 000-default.conf to display login on port 8600 and register on port 8400

Log.php to be run with command:-

sudo php log.php
