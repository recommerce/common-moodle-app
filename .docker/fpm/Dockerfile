FROM 131826866465.dkr.ecr.eu-west-1.amazonaws.com/docker-images:php8.2-fpm-alpine

WORKDIR /var/www/public/
ENV MOODLE_RELEASE_VERSION=v4.3.2

# Cron
COPY .docker/fpm/var/spool/cron/crontabs/www-data /var/spool/cron/crontabs/www-data
COPY .docker/fpm/usr/local/share/env.sh /usr/local/share/

COPY . .
RUN echo  'max_input_vars = 5000' >> /etc/php/php.ini

RUN mkdir /var/moodledata  && chown www-data:www-data /var/moodledata

VOLUME /var/www/public/