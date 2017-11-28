DELIMITER $$

CREATE DEFINER='root'@'localhost' PROCEDURE 'checkUser' (IN _user text, IN _user text) NO SQL
BEGIN
SELECT user_id FROM login_info WHERE _user = user_name AND _pass = user_pass;

END$$

DELIMITER ;