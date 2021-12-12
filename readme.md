## BIK HUB API GATEWAY-AGGREGATOR

### About
This service is responsible for storing and retrieving flow charts for our expert system.
It is developed using [Swoole](www.swoole.co.uk) as a quick and modern PHP extension, with [Symfony](https://symfony.com/) as a framework. Beside collecting date, it also provides a cache layer using [Redis](https://redis.io/).

### Getting Started
With docker running this service is as simple as:
```
docker-compose up
```
Then all endpoints from openapi.yml file should be available on http://localhost:8001