start:
	docker compose build
	docker compose up -d
	cp .env.example .env
	docker compose exec raid-backend composer i
	docker compose exec raid-backend php artisan key:generate
	docker compose exec raid-backend php artisan optimize:clear
	sh setUrl.sh
	make restart
restart: 
	docker compose restart
down:
	docker compose down