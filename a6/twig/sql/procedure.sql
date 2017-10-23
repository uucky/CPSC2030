DELIMITER $$
CREATE PROCEDURE `getAllDex`()
    NO SQL
SELECT
(SELECT type_id.type FROM type_id WHERE id = type1) AS typename1, (SELECT type_id.type FROM type_id WHERE id = type2) AS typename2, Pokemon.id, Pokemon.name FROM Pokemon$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE `getDexByID`(IN `qid` INT(255))
    NO SQL
SELECT 
        Pokemon.id, Pokemon.name, 
        (SELECT type_id.type FROM type_id WHERE id = type1) AS typename1, 
        (SELECT type_id.type FROM type_id WHERE id = type2) AS typename2, 
        Pokemon.HP, Pokemon.ATK, Pokemon.DEF, Pokemon.SAT, Pokemon.SDF, Pokemon.SPD, Pokemon.BST 
        FROM Pokemon 
        WHERE Pokemon.id = qid$$
DELIMITER ;