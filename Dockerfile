FROM php:7-buster
RUN mkdir -p /usr/CalculadoraDocker
COPY . /usr/CalculadoraDocker
WORKDIR /usr/CalculadoraDocker
EXPOSE 50000
CMD ["php","index.php"]
