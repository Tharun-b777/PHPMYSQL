# PHPMYSQL

# MYSQL TABLES STRUCTURE


DATABASE: message


TABLE update

command:

create table updates (id int AUTO_INCREMENT primary key,receiver_id int,message varchar(200),date_time datetime default now(),FOREIGN KEY(receiver_id) REFERENCES user(id))

TABLE user

command:

create table user (id int AUTO_INCREMENT primary key,username varchar(150),password varchar(100))


# SERVER

Created .htaccess to enable php to be detected in html file

Modified server config(apache2.conf) file to enable .htaccess(lines 170-174)

Modified dir.conf file to serve the default files other than index.html

Modified 000-default.conf to display custom error page

# HACKERMODE:

Modified ports.conf file to make server serve contents on port 8600 and 8400

Modified 000-default.conf to display login on port 8600 and register on port 8400

Log.php to be run with command:-

sudo php log.php

Used prepared statements to prevent sql injection

# JWT:

Tried implement JWT on own without libraries

JWT token passed as query parameter to dashboard.html(in hackermode)

In normal mode used sessions to prevent user from directly accessing dashboard

# UPDATES

created update.php to display messages in the format:

USER_ID.USER_NAME:MESSAGE @DATE TIME 

# DASHBOARD

messages displayed in format

USER_ID:MESSAGE
