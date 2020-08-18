Shippings
==============

[![Build Status](https://secure.travis-ci.org/alexrmsouza/shippings.png?branch=master)](https://travis-ci.com/github/alexrmsouza/shippings)


This is a project created to facilitate the integration between applications and freight gateways, created in Symfony and adapted for use in Docker.

# Installation

First, clone this repository:

```bash
$ git clone https://github.com/alexrmsouza/shippings.git
```

Then, run:

```bash
$ cd shippings
$ docker-compose up -d --build
```

Go to the container bash and run:

```bash
$ composer install
```

You are done, you can visit your Symfony application on the following URL: `http://localhost`

_Note :_ you can rebuild all Docker images by running:

```bash
$ docker-compose down
$ docker-compose up -d --build
```

# How it works?

Here are the `docker-compose` built images:

* `php`: This is the PHP-FPM container including the application volume mounted on,
* `nginx`: This is the Nginx webserver container in which php volumes are mounted too,

# Read logs

You can access Nginx and Symfony application logs in the following directories on your host machine:

* `logs/*`

# Use xdebug!

Configure your IDE to use port 5902 for XDebug.
Docker versions below 18.03.1 don't support the Docker variable `host.docker.internal`.  
In that case you'd have to swap out `host.docker.internal` with your machine IP address in php-fpm/xdebug.ini.

# Code license

You are free to use the code in this repository under the terms of the 0-clause BSD license. LICENSE contains a copy of this license.