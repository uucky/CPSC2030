CREATE DATABASE IF NOT EXIST user_db;
CREATE TABLE IF NOT EXIST login_info (
    user_id int(10) NOT NULL AUTO_INCREMENT,
    user_name VARCHAR(26) NOT NULL,
    user_pwd VARCHAR(26) NOT NULL,
    PRIMARY KEY (user_id)
);

INSERT INTO login_info (
    user text NOT NULL,
    password text NOT NULL
)

DELIMITER $$

CREATE DEFINER='root'@'localhost' PROCEDURE 'checkuser' (IN _user text, IN _user text) NO SQL
BEGIN
SELECT user FROM login_info WHERE _user = user AND _pass = pass;

END$$

DELIMITER;