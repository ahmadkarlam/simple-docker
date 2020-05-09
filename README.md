# Simple docker

## Using Dockerfile
How to build image:
```
docker build -t simple-docker:v1 .
```

Run image as container:
```
docker run --publish 8080:8080 [--detach] --name app simple-docker:v1
```
use `--detach` for run container on background

## Using docker-compose.yml
Run docker-compose.yml:
```
docker-compose up [-d]
```
use `-d` for run docker-compose on background

Stop docker-compose:
```
docker-compose stop
```

Remove container (removing containers, network, image and volume):
```
docker-compose down
```
