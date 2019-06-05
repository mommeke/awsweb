sudo yum -y update &&
sudo yum -y install httpd php &&
sudo chkconfig httpd on &&
cd /var/www/html/ &&
sudo wget https://raw.githubusercontent.com/mommeke/awsweb/master/index.php &&
sudo sed -i 's/index.html/index.php/g' /etc/httpd/conf/httpd.conf &&
sudo apachectl start >>/home/ec2-user/userdata.log
