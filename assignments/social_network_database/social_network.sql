CREATE DATABASE social_network;

USE social_network;

CREATE TABLE `social_network`.`users` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(255) NOT NULL,
  `last_name` VARCHAR(255) NOT NULL,
  `birth_date` DATETIME NOT NULL,
  `birth_place` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `username` VARCHAR(255) NOT NULL,
  `cv` LONGTEXT NOT NULL,
  `photo` BLOB NULL,
  PRIMARY KEY (`user_id`));
  
CREATE TABLE `social_network`.`posts` (
  `post_id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `content` VARCHAR(255) NOT NULL,
  `date_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`),
  CONSTRAINT `fk_user_id`
    FOREIGN KEY (`post_id`)
    REFERENCES `social_network`.`users` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
    
CREATE TABLE `social_network`.`friendship` (
  `friendship_id` INT NOT NULL AUTO_INCREMENT,
  `status` VARCHAR(255) NOT NULL DEFAULT 'pending',
  `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user1_id` INT NOT NULL,
  `user2_id` INT NOT NULL,
  PRIMARY KEY (`friendship_id`),
  INDEX `fk_user_id_idx` (`user1_id` ASC) VISIBLE,
  INDEX `fk_user2_id_idx` (`user2_id` ASC) VISIBLE,
  CONSTRAINT `fk_user1_id`
    FOREIGN KEY (`user1_id`)
    REFERENCES `social_network`.`users` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user2_id`
    FOREIGN KEY (`user2_id`)
    REFERENCES `social_network`.`users` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

