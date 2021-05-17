FROM ubuntu:latest

LABEL maintainer=" Adam Sage "
 
RUN apt -y update
RUN export DEBIAN_FRONTEND=noninteractive
RUN ln -fs /usr/share/zoneinfo/Europe/Berlin /etc/localtime
RUN apt-get install -y tzdata
RUN dpkg-reconfigure --frontend noninteractive tzdata
RUN apt -y install apache2 mariadb-server php php-mysqlnd wget curl 
ADD scripts /tmp/scripts
RUN /etc/init.d/mysql start && sh /tmp/scripts/mysql_se-deb.sh && mysql -uroot < /tmp/scripts/create-database.sql
RUN wget -nc https://de.wordpress.org/latest-de_DE.tar.gz -P /tmp/ && tar xvzf /tmp/latest-de_DE.tar.gz -C /var/www/html/
RUN chown -R www-data:www-data /var/www/html/
RUN touch /var/www/html/wordpress/wp-config.php
EXPOSE 80 3306 443
CMD /etc/init.d/mysql start &&  /usr/sbin/apache2ctl -D FOREGROUND

