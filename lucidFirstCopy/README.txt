for local development

Options +FollowSymLinks
RewriteEngine on
RewriteRule ^([a-zA-Z]*)/?([a-zA-Z]*)?/?([a-zA-Z]*)?/?([a-zA-Z0-9]*)?/?$ index.php?module=$1&controller=$2&action=$3&id=$4 [NC,L]



for live development

Options +FollowSymLinks
RewriteEngine on
RewriteRule ^([a-zA-Z]*)/?([a-zA-Z]*)?/?([a-zA-Z]*)?/?([a-zA-Z0-9]*)?/?$ /index.php?module=$1&controller=$2&action=$3&id=$4 [NC,L]

