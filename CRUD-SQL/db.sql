-- Active: 1733846332193@@127.0.0.1@3306
show DATABASES;
CREATE DATABASE user_management;
use user_management;
CREATE TABLE Users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname varchar(50),
    lastname varchar(50),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);
update `Users` SET 