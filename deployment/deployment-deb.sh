#!/bin/bash

#OS Pakete updaten
DISTRO=$(cat /etc/*-release | grep -w NAME | cut -d= -f2 | tr -d '"')
if echo [ $DISTRO=Fedora ] 
then
echo "Current OS: $DISTRO"  
apt -y update
#Install httpd
export DEBIAN_FRONTEND=noninteractive
ln -fs /usr/share/zoneinfo/Europe/Berlin /etc/localtime
apt-get install -y tzdata
dpkg-reconfigure --frontend noninteractive tzdata
apt -y install apache2 mariadb-server php php-mysqlnd wget curl 
#Dienste starten und für Autostart bereitstellen
/etc/init.d/apache2 start
/etc/init.d/mysql start 
sh /home/terminal/Doku/deployment/mysql_se-deb.sh
mysql -uroot < /home/terminal/Doku/deployment/create-database.sql
wget -nc https://de.wordpress.org/latest-de_DE.tar.gz -P /tmp/
tar xvzf /tmp/latest-de_DE.tar.gz -C /var/www/html/
echo $(pwd)
cp /home/terminal/Doku/config/wp-config.php /var/www/html/wordpress/
cp -r /home/terminal/Doku/wordpress /var/www/html/
chown -R www-data:www-data /var/www/html/
mysql --password=test123 --user=test123 wordpress < /home/terminal/Doku/Database/pigbenis.sql
else
echo "Wrong OS u tard"



fi
