up:
	docker compose up -d
down:
	docker compose down
phpunit:
	docker container exec -it phpunit bash
test:
	vendor/bin/phpunit src/tests --testdox
