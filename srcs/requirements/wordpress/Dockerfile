FROM debian:buster

RUN	apt-get update && \
	apt-get install -y php-fpm php-mysql curl && \
	rm -rf /var/lib/apt/lists/* 

COPY ./tools/script.sh /
COPY ./conf/wp-config.php /

RUN chmod +x /script.sh

CMD ["/script.sh"]
