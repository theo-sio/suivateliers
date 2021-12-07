drop database if exists sbateliers;
create database sbateliers;
use sbateliers;

CREATE TABLE Atelier
(
  numero               int         NULL    ,
  date_enregistrement  date        NULL    ,
  date_et_heure_prevue datetime    NULL    ,
  duree                time        NULL    ,
  nb_places            int         NULL    ,
  theme                varchar(70) NULL    ,
  PRIMARY KEY (numero)
);

CREATE TABLE Client
(
  numero            int         NULL     AUTO_INCREMENT,
  civilite          varchar(8)  NULL    ,
  nom               varchar(30) NULL    ,
  prenom            varchar(30) NULL    ,
  date_de_naissance date        NULL    ,
  email             varchar(50) NULL    ,
  mdp               varchar(30) NULL    ,
  adresse           varchar(50) NULL    ,
  code_postal       int         NULL    ,
  ville             varchar(20) NULL    ,
  numero_tel        int         NULL    ,
  PRIMARY KEY (numero)
);

ALTER TABLE Client
  ADD CONSTRAINT UQ_email UNIQUE (email);

CREATE TABLE Participation
(
  numero_atelier   int  NOT NULL,
  date_inscription date NOT NULL,
  numero_client    int  NOT NULL,
  PRIMARY KEY (numero_atelier, numero_client)
);

CREATE TABLE Responsable_Atelier
(
  numero           int         NULL    ,
  nom_de_connexion varchar(40) NULL    ,
  nom              varchar(30) NULL    ,
  prenom           varchar(30) NULL    ,
  mdp              varchar(40) NULL    
);

ALTER TABLE Participation
  ADD CONSTRAINT FK_Atelier_TO_Participation
    FOREIGN KEY (numero_atelier)
    REFERENCES Atelier (numero);

ALTER TABLE Participation
  ADD CONSTRAINT FK_Client_TO_Participation
    FOREIGN KEY (numero_client)
    REFERENCES Client (numero);
