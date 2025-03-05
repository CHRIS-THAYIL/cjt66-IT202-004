-- Active: 1738161775813@@sql1.njit.edu@3306@cjt66
CREATE TABLE golfers

  (golferid int primary key,

  name varchar(100),

  address varchar(200),

  phone varchar(20));

  INSERT INTO golfers VALUES

  (100, 'Rich', '123 Main St.', '555-1234');

INSERT INTO golfers VALUES

  (101, 'Barbara', '123 Main St.', '555-5678');

INSERT INTO golfers VALUES

  (102, 'Leon', '456 Main St.', '555-9876');

INSERT INTO golfers VALUES

  (103, 'Rich', '314 Main St.', '314-1592');

CREATE TABLE games

  (gameid int auto_increment primary key,

  golferid int,

  score int);

INSERT INTO games (golferid, score) VALUES (100, 110);

INSERT INTO games (golferid, score) VALUES (100, 115);

INSERT INTO games (golferid, score) VALUES (100, 105);

INSERT INTO games (golferid, score) VALUES (101, 110);

INSERT INTO games (golferid, score) VALUES (101, 112);

INSERT INTO games (golferid, score) VALUES (101, 130);
INSERT INTO games (golferid, score) VALUES (101, 130);

SELECT * FROM golfers

SELECT * FROM games

INSERT INTO games (golferid, score) VALUES (105, 120);

INSERT INTO games (golferid, score) VALUES (99, 114);
INSERT INTO games (golferid, score) VALUES (111, 111);
INSERT INTO games (golferid, score) VALUES (112, 134);
INSERT INTO games (golferid, score) VALUES (99, 130);
INSERT INTO games (golferid, score) VALUES (107, 129);

SELECT * FROM games

SELECT golferid, name FROM golfers ORDER BY name

SELECT COUNT(score) AS games, AVG(score) AS average FROM games WHERE golferid = 102

SELECT COUNT(score) AS games, AVG(score) AS average FROM games WHERE golferid = 103
