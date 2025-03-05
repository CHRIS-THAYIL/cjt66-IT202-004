-- Active: 1738161775813@@sql1.njit.edu@3306
-- Active: 1738161775813@@sql1.njit.edu@3306@cjt66-- Active: 1738161775813@@sql1.njit.edu@3306@cjt66-- Active: 1738161466719@@127.0.0.1@3306

USE cjt66; 


SHOW DATABASES; 

CREATE TABLE admins (
 adminID      INT(11)      NOT NULL   AUTO_INCREMENT,
 emailAddress VARCHAR(255) NOT NULL   UNIQUE,
 password     CHAR(64)     NOT NULL,
 firstName    VARCHAR(60)  NOT NULL,
 lastName     VARCHAR(60)  NOT NULL,
  PRIMARY KEY (adminID)
);

SHOW TABLES;

SHOW CREATE TABLE admins;

DESCRIBE admins;

INSERT INTO admins
(emailAddress, password, firstName, lastName)
VALUES
('cjt66@njit.edu',
SHA2('cj#NJIT20@5', 256), 'Taylor', 'Swift');

