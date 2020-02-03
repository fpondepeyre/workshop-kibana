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
cd public && php -S localhost:8000
# go to
http://localhost:8000/grumpy/chef
```

## Profit

-  Open http://127.0.0.1:5601/app/kibana#/management/kibana/index_pattern;
-  Hit you application at least one time to generate some logs;
-  Use monolog* as index pattern;
-  Click on Next step;
-  Use @timestamp as Time Filter field name;
-  Click on Create index pattern;
- Return on the discover view the discover view and 
