CREATE DATABASE IF NOT EXISTS `info`;

USE `info`;

CREATE TABLE questbook (
    text text, 
    name varchar(50)
);

INSERT INTO
    `questbook`
VALUES
    ('Привет', 'test');

INSERT INTO
    `questbook`
VALUES
    ('Hi', 'Vasya');