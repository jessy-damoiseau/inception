FROM debian:buster

RUN apt-get -qq update && apt-get -qq -y install nginx openssl vim

RUN openssl req -newkey rsa:2048 -nodes -keyout /etc/ssl/jdamoise.42.fr.key -x509 -days 365 -out /etc/ssl/jdamoise.42.fr.ctf;

COPY conf/nginx.conf /etc/nginx/conf.d

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]