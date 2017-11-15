.PHONY: all re clean fclean

BIN_NAME		=	101pong

all:
	cat $(BIN_NAME).php > $(BIN_NAME)
	chmod 711 $(BIN_NAME)

re: fclean all

clean:
	rm -f *.o

fclean:
	rm -f $(BIN_NAME)