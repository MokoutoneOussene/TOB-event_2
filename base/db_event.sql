
/*==============================================================*/
/* Table : Commentaires                                         */
/*==============================================================*/
create table commentaires
(
   id_comment           int not null AUTO_INCREMENT,
   id_event             int not null,
   sujet                varchar(254),
   nom_v                varchar(50),
   email_v              varchar(50),
   primary key (id_comment)
);

/*==============================================================*/
/* Table : Evenements                                           */
/*==============================================================*/
create table evenements
(
   id_event             int not null AUTO_INCREMENT,
   nom_event            varchar(50),
   d_debut              date,
   d_fin                date,
   organisateur         varchar(50),
   descript             varchar(254),
   photo                varchar(50),
   primary key (id_event)
);

/*==============================================================*/
/* Table : Users                                                */
/*==============================================================*/
create table users
(
   id_users             int not null AUTO_INCREMENT,
   nom_user             varchar(50),
   login                varchar(50),
   pwd                  varchar(50),
   role                 varchar(50),
   primary key (id_users)
);

alter table Commentaires add constraint FK_Association_1 foreign key (id_event)
      references Evenements (id_event) on delete restrict on update restrict;
