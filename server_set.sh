echo "RUN AS ROOT(sudo su).\nUpdating the code !"
git pull
touch /var/cache/mod_pagespeed/cache.flush
rm -r /var/www/* && cp -a . /var/www/ && service apache2 restart 
