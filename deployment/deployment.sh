#!/bin/bash

#OS Pakete updaten
DISTRO=$(cat /etc/*-release | grep -w NAME | cut -d= -f2 | tr -d '"')
if echo [ $DISTRO=Fedora ] 
then
echo "Current OS: $DISTRO"  
sudo dnf -y update
#Install httpd
sudo dnf -y install httpd mariadb-server mariadb php php-mysqlnd wget
#Dienste starten und für Autostart bereitstellen
systemctl start httpd
systemctl enable httpd
systemctl start mariadb
systemctl enable mariadb
sh mysql_se.sh 
mysql --user=root < create-database.sql
wget -nc https://de.wordpress.org/latest-de_DE.tar.gz -P /tmp/
tar xvzf /tmp/latest-de_DE.tar.gz -C /var/www/html/
cp ../config/wp-config.php /var/www/html/wordpress/
cp -r ../wordpress /var/www/html/
sudo chown -R apache:apache /var/www/html/
mysql --password=test123 --user=test123 wordpress < ../Database/pigbenis.sql
else
echo "Wrong OS u tard"



fi
