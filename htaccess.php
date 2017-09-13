RewriteEngine on
RewriteRule !((.php)|(.html)|(.htm)|images\/(.*)|css\/(.*)|js\/(.*))$ index.php [NC]
Options -Indexes

php_value auto_prepend_file [path]config.php