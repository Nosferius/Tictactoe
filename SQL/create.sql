/* mysql -u root -p */

CREATE DATABASE tictactoe;

USE tictactoe;

CREATE TABLE game (
  id INT NOT NULL AUTO_INCREMENT,
  user1 VARCHAR(255),
  user2 VARCHAR(255),
  win VARCHAR(255),
  moves TINYINT,
  PRIMARY KEY (id)
);

/* leuk voor later

CREATE TABLE users (
  users_id INT NOT NULL AUTO_INCREMENT,
  user1 VARCHAR(255),
  user2 VARCHAR(255),
  PRIMARY KEY (users_id)
);

CREATE TABLE games (
  games_id INT NOT NULL AUTO_INCREMENT,
  users_id INT,
  FOREIGN KEY (users_id) REFERENCES users(users_id),
  win VARCHAR(255),
  PRIMARY KEY (games_id)
);

*/

/* ToDo: Make moves saver for replay + controller/posthandler/view accordingly */