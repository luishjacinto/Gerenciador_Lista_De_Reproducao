--TABELAS
--CREATE DATABASE "gerenciadorListaDeReproducao";

CREATE TABLE "usuario" (
    "idUsuario" int NOT NULL,
    "nome" varchar(40) NOT NULL,
    "nickname" varchar(40) NOT NULL,
    "email" varchar(40) NOT NULL,
    "senha" varchar(20) NOT NULL,
    CONSTRAINT "usuarioPK" PRIMARY KEY ("idUsuario")
);

CREATE TABLE "listaDeReproducao" (
    "idLista" int NOT NULL,
    "nomeLista" varchar(40) NOT NULL,
    CONSTRAINT "listaPK" PRIMARY KEY ("idLista")
);

CREATE TABLE "musica" (
    "idMusica" int NOT NULL,
    "nome" varchar(40) NOT NULL,
    "duracao" int NOT NULL,
    "autor" varchar(40) NOT NULL,
    "link" varchar(100) NOT NULL,
    CONSTRAINT "musicaPK" PRIMARY KEY ("idMusica")
);

CREATE TABLE "criaLista" (
    "idUsuario" int NOT NULL,
    "idLista" int NOT NULL,
    CONSTRAINT "criaListaPK" PRIMARY KEY ("idUsuario","idLista"),
    CONSTRAINT "usuarioFK" FOREIGN KEY ("idUsuario")
    REFERENCES "usuario" ("idUsuario")
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    CONSTRAINT "listaFK" FOREIGN KEY ("idLista")
    REFERENCES "listaDeReproducao" ("idLista")
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

CREATE TABLE "assinaLista" (
    "idUsuario" int NOT NULL,
    "idLista" int NOT NULL,
    CONSTRAINT "assinaListaPK" PRIMARY KEY ("idUsuario","idLista"),
    CONSTRAINT "usuarioFK" FOREIGN KEY ("idUsuario")
    REFERENCES "usuario" ("idUsuario")
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    CONSTRAINT "listaFK" FOREIGN KEY ("idLista")
    REFERENCES "listaDeReproducao" ("idLista")
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

CREATE TABLE "musicaLista" (
    "idLista" int NOT NULL,
    "idMusica" int NOT NULL,
    CONSTRAINT "musicaListaPK" PRIMARY KEY ("idLista","idMusica"),
    CONSTRAINT "listaFK" FOREIGN KEY ("idLista")
    REFERENCES "listaDeReproducao" ("idLista")
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    CONSTRAINT "musicaFK" FOREIGN KEY ("idMusica")
    REFERENCES "musica" ("idMusica")
    ON DELETE CASCADE
    ON UPDATE CASCADE
);