apt-get update -y
apt-get upgrade -y
apt-get install -y mariadb-server
apt-get install -y nginx
apt-get install -y php php-mbstring php-zip php-gd php-xml php-mysql php-common php-fpm php-pear php-cli php-cgi php-json
apt-get install -y openssl
apt-get install -y vim

mkdir -p /etc/nginx/ssl
mkdir -p var/www/localhost/phpmyadmin
mkdir var/www/localhost/wordpress
openssl req -newkey rsa:2048 -x509 -nodes -keyout /etc/nginx/ssl/localhost.key -out /etc/nginx/ssl/localhost.pem -subj "/C=BE/ST=bruxelles/L=bruxelles/O=19/OU=lchaineu/CN=localhost"

mv ./nginxconf /etc/nginx/sites-available
rm -f /etc/nginx/sites-enabled/default
ln -s /etc/nginx/sites-available/nginxconf /etc/nginx/sites-enabled

chown -R www-data:www-data /var/www/*
chmod -R 755 /var/www/*

service mysql start
echo "CREATE DATABASE wordpress;" | mysql -u root
echo "GRANT ALL ON wordpress.* TO 'admin'@'localhost' IDENTIFIED BY 'password';" | mysql -u root
mysql wordpress -u root < ./wordpress.sql

cp -a ./phpMyadmin/. var/www/localhost/phpmyadmin
chown -R www-data:www-data /var/www/localhost/phpmyadmin
service php7.3-fpm start
echo "GRANT ALL ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'password';" | mysql -u root

cp -a ./wordpress/. /var/www/localhost/wordpress

service nginx start
service mysql restart
service php7.3-fpm restart
sleep infinity