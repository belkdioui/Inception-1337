

all:
	@mkdir -p /home/inception/data/wordpress
	@mkdir -p /home/inception/data/mariadb
	@docker-compose -f ./srcs/docker-compose.yml up -d

clean:
	@docker-compose -f ./srcs/docker-compose.yml down -v
	@[ "$$(docker images -q --filter "dangling=true" --filter "label=application=wordpress")" ] && docker rmi $$(docker images -q --filter "dangling=true" --filter "label=application=wordpress") || true
	@sudo rm -rf /home/inception/data

stop : 
	@docker-compose -f ./srcs/docker-compose.yml stop

start : 
	@docker-compose -f ./srcs/docker-compose.yml start

status : 
	@docker ps
