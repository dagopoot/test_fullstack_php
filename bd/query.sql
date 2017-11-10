CREATE DATABASE Testing_fullstack;
USE Testing_fullstack;
CREATE TABLE Users (
    ID int NOT NULL AUTO_INCREMENT,
    FirstName varchar(255) NOT NULL,
    LastName varchar(255),
    Email varchar(100),
    Password varchar(255),
    PRIMARY KEY (ID)
);
INSERT INTO Users (FirstName,LastName, Email, Password) VALUES ('Nathan', 'Smith', 'pcom@gmail.com', '3dd14afc9f2da6c03c4f6599553a4597'); 