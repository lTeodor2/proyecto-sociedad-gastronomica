create table usuarios (
	id_user		int 	not null,
    username	text 	not null,
    pass		text	not null,
    nombre		text	not null,
    ap1			text	not null,
    ap2			text,
    telefono	int		not null,
    tipo		text	not null,
    PRIMARY KEY (id_user)
);

create table noticias (
	id_noticia		int 	not null,
    tipo        	text 	not null,
    titulo  		text	not null,
    entrada 		text,
    create_at 	    date	not null,
    id_user			int     not null,
    PRIMARY KEY (id_noticia)
);

create table reserva (
	id_reserva		int 	not null,
    id_user        	int 	not null,
    num_comensal  	int 	not null,
    PRIMARY KEY (id_reserva)
);

create table stock (
	id_stock		int 	not null,
    nombre        	text 	not null,
    cantidad  		int 	not null,
    precio   		int     not null,
    PRIMARY KEY (id_stock)
);

create table gastos (
	id_gastos		int 	not null,
    id_user        	int 	not null,
    gastos   		int	    not null,
    PRIMARY KEY (id_gastos)
);

--alter table 