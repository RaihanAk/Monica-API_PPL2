CREATE TABLE `user` (
  `id` integer UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` varchar(255),
  `username` varchar(255),
  `email` varchar(255),
  `password` varchar(255),
  `profilePicURL` varchar(255),
  `profileBio` varchar(255),
  `createdAt` datetime,
  `updatedAt` datetime
);

CREATE TABLE `committee` (
  `id` integer UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` varchar(255),
  `committeePicURL` varchar(255),
  `committeeTagline` varchar(255),
  `createdAt` datetime,
  `updatedAt` datetime
);

CREATE TABLE `division` (
  `id` integer UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` varchar(255),
  `createdAt` datetime,
  `updatedAt` datetime
);

CREATE TABLE `commembers` (
  `id` integer UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `idUser` integer,
  `idCommittee` integer,
  `position` varchar(255),
  `createdAt` datetime,
  `updatedAt` datetime
);

CREATE TABLE `comdivisions` (
  `id` integer UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `idCommittee` integer,
  `idDivision` integer,
  `createdAt` datetime,
  `updatedAt` datetime
);

CREATE TABLE `divmembers` (
  `id` integer UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `idUser` integer,
  `idDivision` integer,
  `createdAt` datetime,
  `updatedAt` datetime
);

CREATE TABLE `todolist` (
  `id` integer UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `idUser` integer,
  `idDivision` integer,
  `idToDoContent` integer,
  `createdAt` datetime,
  `updatedAt` datetime
);

CREATE TABLE `itemlist` (
  `id` integer UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `idUser` integer,
  `idDivision` integer,
  `idItemContent` integer,
  `createdAt` datetime,
  `updatedAt` datetime
);

CREATE TABLE `chat` (
  `id` integer UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `idUser` integer,
  `idDivision` integer,
  `idChatMessage` integer,
  `createdAt` datetime,
  `updatedAt` datetime
);

CREATE TABLE `todocontent` (
  `id` integer UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `content` varchar(255),
  `status` boolean,
  `dueDate` datetime,
  `idToDo` integer,
  `createdAt` datetime,
  `updatedAt` datetime
);

CREATE TABLE `itemcontent` (
  `id` integer UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `content` varchar(255),
  `status` boolean,
  `dueDate` datetime,
  `idItem` integer,
  `createdAt` datetime,
  `updatedAt` datetime
);

CREATE TABLE `chatmessage` (
  `id` integer UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `content` varchar(255),
  `idChat` integer,
  `sentDate` datetime,
  `status` boolean,
  `createdAt` datetime,
  `updatedAt` datetime
);

CREATE TABLE `file` (
  `id` integer UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `idUser` integer,
  `idCommittee` integer,
  `tokenDrive` varchar(255),
  `createdAt` datetime,
  `updatedAt` datetime
);

ALTER TABLE `commembers` ADD FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);

ALTER TABLE `commembers` ADD FOREIGN KEY (`idCommittee`) REFERENCES `committee` (`id`);

ALTER TABLE `comdivisions` ADD FOREIGN KEY (`idCommittee`) REFERENCES `committee` (`id`);

ALTER TABLE `comdivisions` ADD FOREIGN KEY (`idDivision`) REFERENCES `division` (`id`);

ALTER TABLE `divmembers` ADD FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);

ALTER TABLE `divmembers` ADD FOREIGN KEY (`idDivision`) REFERENCES `division` (`id`);

ALTER TABLE `todolist` ADD FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);

ALTER TABLE `todolist` ADD FOREIGN KEY (`idDivision`) REFERENCES `division` (`id`);

ALTER TABLE `todocontent` ADD FOREIGN KEY (`idToDo`) REFERENCES `todolist` (`id`);

ALTER TABLE `todocontent` ADD FOREIGN KEY (`id`) REFERENCES `todolist` (`idToDoContent`);

ALTER TABLE `itemcontent` ADD FOREIGN KEY (`idItem`) REFERENCES `itemlist` (`id`);

ALTER TABLE `itemcontent` ADD FOREIGN KEY (`id`) REFERENCES `itemlist` (`idItemContent`);

ALTER TABLE `itemlist` ADD FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);

ALTER TABLE `itemlist` ADD FOREIGN KEY (`idDivision`) REFERENCES `division` (`id`);

ALTER TABLE `chatmessage` ADD FOREIGN KEY (`idChat`) REFERENCES `chat` (`id`);

ALTER TABLE `chatmessage` ADD FOREIGN KEY (`id`) REFERENCES `chat` (`idChatMessage`);

ALTER TABLE `chat` ADD FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);

ALTER TABLE `chat` ADD FOREIGN KEY (`idDivision`) REFERENCES `division` (`id`);

ALTER TABLE `file` ADD FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);

ALTER TABLE `file` ADD FOREIGN KEY (`idCommittee`) REFERENCES `committee` (`id`);
