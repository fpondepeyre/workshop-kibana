# Workshop kibana

## install

```
git clone https://github.com/fpondepeyre/workshop-kibana.git
cd workshop-kibana && composer install
```

```
#run docker
docker network create sf-es-k
docker-compose up -d
```

```
php -S 127.0.0.1:8000 -t public
# go to
http://localhost:8000/
http://localhost:8000/batch
```

## Profit

- Open http://127.0.0.1:5601/app/kibana#/management/kibana/index_pattern
- Hit you application at least one time to generate some logs
- Use monolog* as index pattern
- Click on Next step
- Use @timestamp as Time Filter field name
- Click on Create index pattern
- Return on the discover view the discover view 
