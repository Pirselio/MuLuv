<-- PROGETTO MuLuv Jakoelio Leka, Alessio Piro , Lorenzo Silvestroni -->

TRADUZIONE A LIVELLO LOGICO
Utenti(IDutente,Username,Email,Password,Nome,Cognome,Sesso,Foto)
Hatraipreferiti(Kutente,Kcanzone)
Havotato(Kutente,Kcanzone,Voto)
Canzoni(IDcanzone,Durata,Genere,Titolo,DataProduzione)
Fattada(Kcanzone,Kautore)
Autori(IDautore,Nome,Cognome,Datadinascita,Foto)

CREATE TABLE Utenti(
	IDutente int(5) not null primary key auto_increment,
	User varchar(30) not null,
	Password varchar(30) not null,
	Nome varchar(30) not null,
	Cognome varchar(30) not null,
	Sesso varchar(1),
	Foto varchar(30)
);
CREATE TABLE Hatraipreferiti(
	Kutente int(5),
	Kcanzone int(5),
	foreign key (Kutente) references Utenti(IDutente),
	foreign key (Kcanzone) references Canzoni(IDcanzone),
	primary key (Kutente,Kcanzone)
);
CREATE TABLE Havotato(
	Kutente int(5),
	Kcanzone int(5),
	foreign key (Kutente) references Utenti(IDutente),
	foreign key (Kcanzone) references Canzoni(IDcanzone),
	primary key (Kutente,Kcanzone)
);
CREATE TABLE Canzoni(
	IDcanzone int(5) not null primary key auto_increment,
	Durata varchar(30) not null,
	Genere varchar(30) not null,
	Titolo varchar(30) not null,
	DataProduzione date not null
);
CREATE TABLE Fattada(
	Kcanzone int(5),
	Kautore int(5),
	foreign key (Kcanzone) references Canzoni(IDcanzone),
	foreign key (Kautore) references Autori(IDautore),
	primary key (Kcanzone,Kautore)
);
CREATE TABLE Autori(
	IDautore int(5) not null primary key auto_increment,
	Nome varchar(30) not null,
	Cognome varchar(30) not null,
	Datadinascita date not null,
	Foto varchar(30) not null
);

