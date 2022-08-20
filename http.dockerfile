FROM httpd:2.4-alpine

WORKDIR /var/www/html

RUN sed -i 's/#LoadModule proxy_module/LoadModule proxy_module/g' /usr/local/apache2/conf/httpd.conf
RUN sed -i 's/#LoadModule proxy_fcgi_module/LoadModule proxy_fcgi_module/g' /usr/local/apache2/conf/httpd.conf
RUN echo "Include conf/extra/apache.conf" >> "/usr/local/apache2/conf/httpd.conf"