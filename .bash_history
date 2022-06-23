sudo yum update
sudo yum update -y
sudo amazon-linux-extras install -y lamp-mariadb10.2-php7.2 php7.2
cat /etc/system-release
sudo yum install -y httpd mariadb-server
sudo systemctl start httpd
sudo systemctl status httpd
sudo systemctl is-enabled httpd
sudo systemctl enable httpd
sudo usermod -a -G apache ec2-user
groups
sudo chown -R ec2-user:apache /var/www
sudo chmod 2775 /var/www && find /var/www -type d -exec sudo chmod 2775 {} \;
find /var/www -type f -exec sudo chmod 0664 {} \;
echo "<?php phpinfo(); ?>" > /var/www/html/phpinfo.php
sudo yum list installed httpd mariadb-server php-mysqlnd
sudo systemctl start mariadb
sudo systemctl status mariadb
sudo mysql_secure_installation
sudo systemctl enable mariadb
wget https://wordpress.org/latest.tar.gz
tar -xzf latest.tar.gz
ls
sudo systemctl start mariadb
mysql -u root -p

mysql -u root -p
cp wordpress/wp-config-sample.php wordpress/wp-config.php
nano wordpress/wp-config.php
cp -r wordpress/* /var/www/html/
mkdir /var/www/html/blog
cp -r wordpress/* /var/www/html/blog/
sudo nano /etc/httpd/conf/httpd.conf
sudo yum install php-gd
php80-php-gd.x86_64                     8.0.17-1.el7.remi                     remi
sudo yum install php-gd

sudo yum install php-gd
sudo chown -R apache /var/www
sudo chgrp -R apache /var/www
sudo chmod 2775 /var/www
find /var/www -type d -exec sudo chmod 2775 {} \;
find /var/www -type f -exec sudo chmod 0644 {} \;
sudo systemctl restart httpd
sudo systemctl enable httpd && sudo systemctl enable mariadb
sudo systemctl status mariadb
sudo systemctl status httpd
sudo systemctl restart httpd
cd var/www/html
ls
cd wordpress
ls
cd wp-config.php
nano wp-config.php
sudo systemctl restart httpd
nano wp-config.php
sudo systemctl restart httpd
cd /var/www/html
sudo nano wp-config.php
sudo systemctl restart httpd
sudo yum -y install gcc make # install GCC compiler
cd /usr/local/src
sudo wget http://download.redis.io/redis-stable.tar.gz
sudo tar xvzf redis-stable.tar.gz
sudo rm -f redis-stable.tar.gz
cd redis-stable
sudo yum groupinstall "Development Tools"
sudo makesudo make
sudo make
sudo yum install -y tcl
ls -l
cd src
./redis-server --daemonize yes
./redis-cli flushall
sudo systemctl restart php-fpm
sudo yum install php-xml
sudo systemctl restart php-fpm
ll
php -v
ll
tar -zxvf AmazonElasticacheClusterClient-PHP72-64bit-libmemcached-1.0.18.tar.gz
sudo mv amazon-elasticache-cluster-client.so /usr/lib64/php/modules/
ll
cd /etc/php.ini
cd /usr/lib64/php/modules/
ls
cd /etc/
ls
nano php.ini
sudo nano php.ini
sudo yum install -y make gcc perl-core pcre-devel wget zlib-devel
sudo reboot
