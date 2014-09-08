echo "RUN AS ROOT(sudo su).\nUpdating the code !"
git pull
rm -r /var/www/* && cp -a . /var/www/ && service apache2 restart 
