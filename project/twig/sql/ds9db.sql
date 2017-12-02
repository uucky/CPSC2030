-- CREATE DATABASE ds9db;
create table merchandise (
  issueId int,
  name VARCHAR(35) CHARACTER SET utf8,
  price int
);
INSERT INTO merchandise VALUES (01,'U.S.S. Enterprise NCC-1701-D',480);
INSERT INTO merchandise VALUES (02,'U.S.S. Enterprise NCC-1701 TMP',480);
INSERT INTO merchandise VALUES (03,'Klingon Bird-of-Prey',325);
INSERT INTO merchandise VALUES (04,'Enterprise NX-01',350);
INSERT INTO merchandise VALUES (05,'Romulan Warbird',355);
INSERT INTO merchandise VALUES (06,'U.S.S. Voyager NCC-74656',480);
INSERT INTO merchandise VALUES (07,'Klingon K''Tinga-class battlecruiser',520);
INSERT INTO merchandise VALUES (08,'U.S.S. Excelsior NCC-2000',480);
INSERT INTO merchandise VALUES (09,'U.S.S. Defiant NX-74205',490);
INSERT INTO merchandise VALUES (10,'Borg Sphere',1200);
INSERT INTO merchandise VALUES (11,'U.S.S. Reliant (Miranda class)',460);
INSERT INTO merchandise VALUES (12,'Akira class',350);
INSERT INTO merchandise VALUES (13,'Jem''hadar cruiser',510);
INSERT INTO merchandise VALUES (14,'Cardassian Galor class',620);
INSERT INTO merchandise VALUES (15,'U.S.S. Equinox NCC-72381',480);
INSERT INTO merchandise VALUES (16,'Ferengi Marauder',690);
INSERT INTO merchandise VALUES (17,'Dauntless',770);
INSERT INTO merchandise VALUES (18,'Bajoran Solar Sailor',855);
INSERT INTO merchandise VALUES (19,'U.S.S. Stargazer NCC-2893',480);
INSERT INTO merchandise VALUES (20,'Klingon V''orcha class',330);
INSERT INTO merchandise VALUES (21,'U.S.S. Enterprise NCC-1701-E',480);
INSERT INTO merchandise VALUES (22,'Krenim Temporal Weapon Ship',990);
INSERT INTO merchandise VALUES (23,'Nebula class',880);
INSERT INTO merchandise VALUES (24,'Xindi insectoid ship',780);
INSERT INTO merchandise VALUES (25,'U.S.S. Prometheus',490);
INSERT INTO merchandise VALUES (26,'Tholian ship',1060);
INSERT INTO merchandise VALUES (27,'Romulan Bird-of-Prey',650);
INSERT INTO merchandise VALUES (28,'Maquis Fighter',750);
INSERT INTO merchandise VALUES (29,'Jem''hadar fighter',755);
INSERT INTO merchandise VALUES (30,'Nausicaan fighter',625);
INSERT INTO merchandise VALUES (31,'The Valdore',655);
INSERT INTO merchandise VALUES (32,'Runabout',825);
INSERT INTO merchandise VALUES (33,'Hideki class',1100);
INSERT INTO merchandise VALUES (34,'Surok class',320);
INSERT INTO merchandise VALUES (35,'Klingon Bird of Prey 2152',665);
INSERT INTO merchandise VALUES (36,'Oberth Class',660);
INSERT INTO merchandise VALUES (37,'Andorian Cruiser',580);
INSERT INTO merchandise VALUES (38,'Delta Flyer',590);
INSERT INTO merchandise VALUES (39,'Romulan Drone',320);
INSERT INTO merchandise VALUES (40,'Enterprise NCC-1701-B',395);

CREATE TABLE login_info (
    user_name VARCHAR(32) NOT NULL,
    user_pass VARCHAR(32) NOT NULL,
    -- PRIMARY KEY (user_id)
)

INSERT INTO login_info VALUES ('admin', 'admin');

create table board (
  name text,
  model text,
  address text,
  comment text
)