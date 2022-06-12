run:
	docker-compose run --rm noofclientphp bash

build:
	docker-compose build

ssh:
	docker exec -it noofclientphp /bin/bash
