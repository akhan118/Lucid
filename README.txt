
this application need php 5.3 or higher.


To install, place lucid in a public directory,

install the database in the file sql.txt

update the database connection,  at app-config-config.php

change the htacess base on evn.


for local development, chance the htaccess to this

Options +FollowSymLinks
RewriteEngine on
RewriteRule ^([a-zA-Z]*)/?([a-zA-Z]*)?/?([a-zA-Z]*)?/?([a-zA-Z0-9]*)?/?$ index.php?module=$1&controller=$2&action=$3&id=$4 [NC,L]



for live development change

Options +FollowSymLinks
RewriteEngine on
RewriteRule ^([a-zA-Z]*)/?([a-zA-Z]*)?/?([a-zA-Z]*)?/?([a-zA-Z0-9]*)?/?$ /index.php?module=$1&controller=$2&action=$3&id=$4 [NC,L]



DB connection is define in the the app/config folder