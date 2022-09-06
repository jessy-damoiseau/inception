FROM alpine:3.13

RUN apk update && apk add --no-cachee -y nginx openssl vim

RUN     openssl req -x509 -nodes -out /etc/nginx/ssl/jdamoise.42.fr.ctf -keyout /etc/nginx/ssl/jdamoise.42.fr.key \
        -subj "/C=FR/ST=IDF/L=Paris/O=42/OU=42/CN=jdamoise.42.fr/UID=jdamoise"

COPY conf/nginx.conf /etc/nginx/conf.d/default.conf

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]