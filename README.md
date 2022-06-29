# Vin checker

Raw PHP application that features vehicle report based on VIN number

## Getting Started

### Prerequisities


In order to run this container you'll need docker installed.

* [Windows](https://docs.docker.com/windows/started)
* [OS X](https://docs.docker.com/mac/started/)
* [Linux](https://docs.docker.com/linux/started/)

### Usage

```shell
docker-compose up
```
#### Test admin account
```shell
email: admin@gmail.com
password: kamil123
```
#### Test user account
```shell
email: user@gmail.com
password: nowak123
```
#### Environment Variables

* `DATABASE_USERNAME`
* `DATABASE_PASSWORD`
* `DATABASE_HOST`
* `DATABASE_NAME`
* `DATABASE_PORT`

## Built With

* nginx 1.17.8
* php 7.4.3
* postgres 14
* bootstrap 4.4.1

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.



