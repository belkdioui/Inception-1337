FROM debian:buster

RUN apt-get update && apt-get -y install nginx openssl

COPY ./tools/index.html /usr/share/nginx/html/


RUN mkdir -p /etc/nginx/ssl

RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/bel-kdio.42.fr.pem -keyout /etc/nginx/ssl/bel-kdio.42.fr.key -subj "/C=MR/ST=Tetouan-Mdiq/L=Tetouan/O=Organization/CN=bel-kdio.42.fr"

COPY ./conf/nginx.conf /etc/nginx/conf.d

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
