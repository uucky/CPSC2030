CREATE DATABASE IF NOT EXIST user_db;
CREATE TABLE IF NOT EXIST login_info (
    user_id int(10) NOT NULL AUTO_INCREMENT,
    user_name VARCHAR(32) NOT NULL,
    user_pass VARCHAR(32) NOT NULL,
    -- PRIMARY KEY (user_id)
);

DELIMITER $$

CREATE DEFINER='root'@'localhost' PROCEDURE 'checkUser' (IN _user text, IN _user text) NO SQL
BEGIN
SELECT user_id FROM login_info WHERE _user = user_name AND _pass = user_pass;

END$$

DELIMITER;

INSERT INTO login_info VALUES (1, 'foobar', 'password');
