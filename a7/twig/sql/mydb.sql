CREATE DATABASE pokedex;
create table type_id (
  id int, PRIMARY KEY (id),
  type varchar(12)
);

INSERT INTO type_id VALUES
(1,"NORMAL"),
(2,"FIGHT"),
(3,"FLYING"),
(4,"POISON"),
(5,"GROUND"),
(6,"ROCK"),
(7,"BUG"),
(8,"GHOST"),
(9,"STEEl"),
(10,"FIRE"),
(11,"WATER"),
(12,"GRASS"),
(13,"ELECTR"),
(14,"PSYCHC"),
(15,"ICE"),
(16,"DRAGON"),
(17,"FAIRY");

CREATE TABLE pokemon (
    id int NOT NULL, PRIMARY KEY (id),
    name varchar(255), 
    type1 int, FOREIGN KEY (type1) REFERENCES type_id(id),
    type2 int, FOREIGN KEY (type2) REFERENCES type_id(id),
    hp int, 
    atk int,  
    def int, 
    sat int, 
    sdf int, 
    spd int, 
    bst int
);

INSERT INTO pokemon VALUES(1,"Bulbasaur",12,4,45,49,49,65,65,45,318),
(2,"Ivysaur",12,4,60,62,63,80,80,60,405),
(3,"Venusaur",12,4,80,82,83,100,100,80,525),
(4,"Charmander",10,NULL,39,52,43,60,50,65,309),
(5,"Charmeleon",10,NULL,58,64,58,80,65,80,405),
(6,"Charizard",10,3,78,84,78,109,85,100,534),
(7,"Squirtle",11,NULL,44,48,65,50,64,43,314),
(8,"Wartortle",11,NULL,59,63,80,65,80,58,405),
(9,"Blastoise",11,NULL,79,83,100,85,105,78,530),
(10,"Caterpie",7,NULL,45,30,35,20,20,45,195),
(11,"Metapod",7,NULL,50,20,55,25,25,30,205),
(12,"Butterfree",7,3,60,45,50,90,80,70,395),
(13,"Weedle",7,4,40,35,30,20,20,50,195),
(14,"Kakuna",7,4,45,25,50,25,25,35,205),
(15,"Beedrill",7,4,65,90,40,45,80,75,395),
(16,"Pidgey",1,3,40,45,40,35,35,56,251),
(17,"Pidgeotto",1,3,63,60,55,50,50,71,349),
(18,"Pidgeot",1,3,83,80,75,70,70,101,479),
(19,"Rattata",1,NULL,30,56,35,25,35,72,253),
(20,"Raticate",1,NULL,55,81,60,50,70,97,413),
(21,"Spearow",1,3,40,60,30,31,31,70,262),
(22,"Fearow",1,3,65,90,65,61,61,100,442),
(23,"Ekans",4,NULL,35,60,44,40,54,55,288),
(24,"Arbok",4,NULL,60,85,69,65,79,80,438),
(25,"Pikachu",13,NULL,35,55,40,50,50,90,320),
(26,"Raichu",13,NULL,60,90,55,90,80,110,485),
(27,"Sandshrew",5,NULL,50,75,85,20,30,40,300),
(28,"Sandslash",5,NULL,75,100,110,45,55,65,450),
(29,"Nidoran♀",4,NULL,55,47,52,40,40,41,275),
(30,"Nidorina",4,NULL,70,62,67,55,55,56,365),
(31,"Nidoqueen",4,5,90,92,87,75,85,76,505),
(32,"Nidoran♂",4,NULL,46,57,40,40,40,50,273),
(33,"Nidorino",4,NULL,61,72,57,55,55,65,365),
(34,"Nidoking",4,5,81,102,77,85,75,85,505),
(35,"Clefairy",17,NULL,70,45,48,60,65,35,323),
(36,"Clefable",17,NULL,95,70,73,95,90,60,483),
(37,"Vulpix",10,NULL,38,41,40,50,65,65,299),
(38,"Ninetales",10,NULL,73,76,75,81,100,100,505),
(39,"Jigglypuff",1,17,115,45,20,45,25,20,270),
(40,"Wigglytuff",1,17,140,70,45,85,50,45,435),
(41,"Zubat",4,3,40,45,35,30,40,55,245),
(42,"Golbat",4,3,75,80,70,65,75,90,455),
(43,"Oddish",12,4,45,50,55,75,65,30,320),
(44,"Gloom",12,4,60,65,70,85,75,40,395),
(45,"Vileplume",12,4,75,80,85,110,90,50,490),
(46,"Paras",7,12,35,70,55,45,55,25,285),
(47,"Parasect",7,12,60,95,80,60,80,30,405),
(48,"Venonat",7,4,60,55,50,40,55,45,305),
(49,"Venomoth",7,4,70,65,60,90,75,90,450),
(50,"Diglett",5,NULL,10,55,25,35,45,95,265),
(51,"Dugtrio",5,NULL,35,80,50,50,70,120,405),
(52,"Meowth",1,NULL,40,45,35,40,40,90,290),
(53,"Persian",1,NULL,65,70,60,65,65,115,440),
(54,"Psyduck",11,NULL,50,52,48,65,50,55,320),
(55,"Golduck",11,NULL,80,82,78,95,80,85,500),
(56,"Mankey",2,NULL,40,80,35,35,45,70,305),
(57,"Primeape",2,NULL,65,105,60,60,70,95,455),
(58,"Growlithe",10,NULL,55,70,45,70,50,60,350),
(59,"Arcanine",10,NULL,90,110,80,100,80,95,555),
(60,"Poliwag",11,NULL,40,50,40,40,40,90,300),
(61,"Poliwhirl",11,NULL,65,65,65,50,50,90,385),
(62,"Poliwrath",11,2,90,95,95,70,90,70,510),
(63,"Abra",14,NULL,25,20,15,105,55,90,310),
(64,"Kadabra",14,NULL,40,35,30,120,70,105,400),
(65,"Alakazam",14,NULL,55,50,45,135,95,120,500),
(66,"Machop",2,NULL,70,80,50,35,35,35,305),
(67,"Machoke",2,NULL,80,100,70,50,60,45,405),
(68,"Machamp",2,NULL,90,130,80,65,85,55,505),
(69,"Bellsprout",12,4,50,75,35,70,30,40,300),
(70,"Weepinbell",12,4,65,90,50,85,45,55,390),
(71,"Victreebel",12,4,80,105,65,100,70,70,490),
(72,"Tentacool",11,4,40,40,35,50,100,70,335),
(73,"Tentacruel",11,4,80,70,65,80,120,100,515),
(74,"Geodude",6,5,40,80,100,30,30,20,300),
(75,"Graveler",6,5,55,95,115,45,45,35,390),
(76,"Golem",6,5,80,120,130,55,65,45,495),
(77,"Ponyta",10,NULL,50,85,55,65,65,90,410),
(78,"Rapidash",10,NULL,65,100,70,80,80,105,500),
(79,"Slowpoke",11,14,90,65,65,40,40,15,315),
(80,"Slowbro",11,14,95,75,110,100,80,30,490),
(81,"Magnemite",13,9,25,35,70,95,55,45,325),
(82,"Magneton",13,9,50,60,95,120,70,70,465),
(83,"Farfetch",1,3,52,65,55,58,62,60,352),
(84,"Doduo",1,3,35,85,45,35,35,75,310),
(85,"Dodrio",1,3,60,110,70,60,60,100,460),
(86,"Seel",11,NULL,65,45,55,45,70,45,325),
(87,"Dewgong",11,15,90,70,80,70,95,70,475),
(88,"Grimer",4,NULL,80,80,50,40,50,25,325),
(89,"Muk",4,NULL,105,105,75,65,100,50,500),
(90,"Shellder",11,NULL,30,65,100,45,25,40,305),
(91,"Cloyster",11,15,50,95,180,85,45,70,525),
(92,"Gastly",8,4,30,35,30,100,35,80,310),
(93,"Haunter",8,4,45,50,45,115,55,95,405),
(94,"Gengar",8,4,60,65,60,130,75,110,500),
(95,"Onix",6,5,35,45,160,30,45,70,385),
(96,"Drowzee",14,NULL,60,48,45,43,90,42,328),
(97,"Hypno",14,NULL,85,73,70,73,115,67,483),
(98,"Krabby",11,NULL,30,105,90,25,25,50,325),
(99,"Kingler",11,NULL,55,130,115,50,50,75,475),
(100,"Voltorb",13,NULL,40,30,50,55,55,100,330),
(101,"Electrode",13,NULL,60,50,70,80,80,140,480),
(102,"Exeggcute",12,14,60,40,80,60,45,40,325),
(103,"Exeggutor",12,14,95,95,85,125,65,55,520),
(104,"Cubone",5,NULL,50,50,95,40,50,35,320),
(105,"Marowak",5,NULL,60,80,110,50,80,45,425),
(106,"Hitmonlee",2,NULL,50,120,53,35,110,87,455),
(107,"Hitmonchan",2,NULL,50,105,79,35,110,76,455),
(108,"Lickitung",1,NULL,90,55,75,60,75,30,385),
(109,"Koffing",4,NULL,40,65,95,60,45,35,340),
(110,"Weezing",4,NULL,65,90,120,85,70,60,490),
(111,"Rhyhorn",5,6,80,85,95,30,30,25,345),
(112,"Rhydon",5,6,105,130,120,45,45,40,485),
(113,"Chansey",1,NULL,250,5,5,35,105,50,450),
(114,"Tangela",12,NULL,65,55,115,100,40,60,435),
(115,"Kangaskhan",1,NULL,105,95,80,40,80,90,490),
(116,"Horsea",11,NULL,30,40,70,70,25,60,295),
(117,"Seadra",11,NULL,55,65,95,95,45,85,440),
(118,"Goldeen",11,NULL,45,67,60,35,50,63,320),
(119,"Seaking",11,NULL,80,92,65,65,80,68,450),
(120,"Staryu",11,NULL,30,45,55,70,55,85,340),
(121,"Starmie",11,14,60,75,85,100,85,115,520),
(122,"Mr.Mime",14,17,40,45,65,100,120,90,460),
(123,"Scyther",7,3,70,110,80,55,80,105,500),
(124,"Jynx",15,14,65,50,35,115,95,95,455),
(125,"Electabuzz",13,NULL,65,83,57,95,85,105,490),
(126,"Magmar",10,NULL,65,95,57,100,85,93,495),
(127,"Pinsir",7,NULL,65,125,100,55,70,85,500),
(128,"Tauros",1,NULL,75,100,95,40,70,110,490),
(129,"Magikarp",11,NULL,20,10,55,15,20,80,200),
(130,"Gyarados",11,3,95,125,79,60,100,81,540),
(131,"Lapras",11,15,130,85,80,85,95,60,535),
(132,"Ditto",1,NULL,48,48,48,48,48,48,288),
(133,"Eevee",1,NULL,55,55,50,45,65,55,325),
(134,"Vaporeon",11,NULL,130,65,60,110,95,65,525),
(135,"Jolteon",13,NULL,65,65,60,110,95,130,525),
(136,"Flareon",10,NULL,65,130,60,95,110,65,525),
(137,"Porygon",1,NULL,65,60,70,85,75,40,395),
(138,"Omanyte",6,11,35,40,100,90,55,35,355),
(139,"Omastar",6,11,70,60,125,115,70,55,495),
(140,"Kabuto",6,11,30,80,90,55,45,55,355),
(141,"Kabutops",6,11,60,115,105,65,70,80,495),
(142,"Aerodactyl",6,3,80,105,65,60,75,130,515),
(143,"Snorlax",1,NULL,160,110,65,65,110,30,540),
(144,"Articuno",15,3,90,85,100,95,125,85,580),
(145,"Zapdos",13,3,90,90,85,125,90,100,580),
(146,"Moltres",10,3,90,100,90,125,85,90,580),
(147,"Dratini",16,NULL,41,64,45,50,50,50,300),
(148,"Dragonair",16,NULL,61,84,65,70,70,70,420),
(149,"Dragonite",16,3,91,134,95,100,100,80,600),
(150,"Mewtwo",14,NULL,106,110,90,154,90,130,680),
(151,"Mew",14,NULL,100,100,100,100,100,100,600);

create table effectiveness (
  atk_type int,
  def_type int,
  multiplier double
);

INSERT INTO effectiveness VALUES
(1,1,1),
(1,2,1),
(1,3,1),
(1,4,1),
(1,5,1),
(1,6,0.8),
(1,7,1),
(1,8,0.8),
(1,9,0.8),
(1,10,1),
(1,11,1),
(1,12,1),
(1,13,1),
(1,14,1),
(1,15,1),
(1,16,1),
(1,17,1),
(2,1,1.25),
(2,2,1),
(2,3,0.8),
(2,4,0.8),
(2,5,1),
(2,6,1.25),
(2,7,0.8),
(2,8,0.8),
(2,9,1.25),
(2,10,1),
(2,11,1),
(2,12,1),
(2,13,1),
(2,14,0.8),
(2,15,1.25),
(2,16,1),
(2,17,0.8),
(3,1,1),
(3,2,1.25),
(3,3,1),
(3,4,1),
(3,5,1),
(3,6,0.8),
(3,7,1.25),
(3,8,1),
(3,9,0.8),
(3,10,1),
(3,11,1),
(3,12,1.25),
(3,13,0.8),
(3,14,1),
(3,15,1),
(3,16,1),
(3,17,1),
(4,1,1),
(4,2,1),
(4,3,1),
(4,4,0.8),
(4,5,0.8),
(4,6,0.8),
(4,7,1),
(4,8,0.8),
(4,9,0.8),
(4,10,1),
(4,11,1),
(4,12,1.25),
(4,13,1),
(4,14,1),
(4,15,1),
(4,16,1),
(4,17,1.25),
(5,1,1),
(5,2,1),
(5,3,0.8),
(5,4,1.25),
(5,5,1),
(5,6,1.25),
(5,7,0.8),
(5,8,1),
(5,9,1.25),
(5,10,1.25),
(5,11,1),
(5,12,0.8),
(5,13,1.25),
(5,14,1),
(5,15,1),
(5,16,1),
(5,17,1),
(6,1,1),
(6,2,0.8),
(6,3,1.25),
(6,4,1),
(6,5,0.8),
(6,6,1),
(6,7,1.25),
(6,8,1),
(6,9,0.8),
(6,10,1.25),
(6,11,1),
(6,12,1),
(6,13,1),
(6,14,1),
(6,15,1.25),
(6,16,1),
(6,17,1),
(7,1,1),
(7,2,0.8),
(7,3,0.8),
(7,4,0.8),
(7,5,1),
(7,6,1),
(7,7,1),
(7,8,0.8),
(7,9,0.8),
(7,10,0.8),
(7,11,1),
(7,12,1.25),
(7,13,1),
(7,14,1.25),
(7,15,1),
(7,16,1),
(7,17,0.8),
(8,1,0.8),
(8,2,1),
(8,3,1),
(8,4,1),
(8,5,1),
(8,6,1),
(8,7,1),
(8,8,1.25),
(8,9,1),
(8,10,1),
(8,11,1),
(8,12,1),
(8,13,1),
(8,14,1.25),
(8,15,1),
(8,16,1),
(8,17,1),
(9,1,1),
(9,2,1),
(9,3,1),
(9,4,1),
(9,5,1),
(9,6,1.25),
(9,7,1),
(9,8,1),
(9,9,0.8),
(9,10,0.8),
(9,11,0.8),
(9,12,1),
(9,13,0.8),
(9,14,1),
(9,15,1.25),
(9,16,1),
(9,17,1.25),
(10,1,1),
(10,2,1),
(10,3,1),
(10,4,1),
(10,5,1),
(10,6,0.8),
(10,7,1.25),
(10,8,1),
(10,9,1.25),
(10,10,0.8),
(10,11,0.8),
(10,12,1.25),
(10,13,1),
(10,14,1),
(10,15,1.25),
(10,16,0.8),
(10,17,1),
(11,1,1),
(11,2,1),
(11,3,1),
(11,4,1),
(11,5,1.25),
(11,6,1.25),
(11,7,1),
(11,8,1),
(11,9,1),
(11,10,1.25),
(11,11,0.8),
(11,12,0.8),
(11,13,1),
(11,14,1),
(11,15,1),
(11,16,0.8),
(11,17,1),
(12,1,1),
(12,2,1),
(12,3,0.8),
(12,4,0.8),
(12,5,1.25),
(12,6,1.25),
(12,7,0.8),
(12,8,1),
(12,9,0.8),
(12,10,0.8),
(12,11,1.25),
(12,12,0.8),
(12,13,1),
(12,14,1),
(12,15,1),
(12,16,0.8),
(12,17,1),
(13,1,1),
(13,2,1),
(13,3,1.25),
(13,4,1),
(13,5,0.8),
(13,6,1),
(13,7,1),
(13,8,1),
(13,9,1),
(13,10,1),
(13,11,1.25),
(13,12,0.8),
(13,13,0.8),
(13,14,1),
(13,15,1),
(13,16,0.8),
(13,17,1),
(14,1,1),
(14,2,1.25),
(14,3,1),
(14,4,1.25),
(14,5,1),
(14,6,1),
(14,7,1),
(14,8,1),
(14,9,0.8),
(14,10,1),
(14,11,1),
(14,12,1),
(14,13,1),
(14,14,0.8),
(14,15,1),
(14,16,1),
(14,17,1),
(15,1,1),
(15,2,1),
(15,3,1.25),
(15,4,1),
(15,5,1.25),
(15,6,1),
(15,7,1),
(15,8,1),
(15,9,0.8),
(15,10,0.8),
(15,11,0.8),
(15,12,1.25),
(15,13,1),
(15,14,1),
(15,15,0.8),
(15,16,1.25),
(15,17,1),
(16,1,1),
(16,2,1),
(16,3,1),
(16,4,1),
(16,5,1),
(16,6,1),
(16,7,1),
(16,8,1),
(16,9,0.8),
(16,10,1),
(16,11,1),
(16,12,1),
(16,13,1),
(16,14,1),
(16,15,1),
(16,16,1.25),
(16,17,0.8),
(17,1,1),
(17,2,1.25),
(17,3,1),
(17,4,0.8),
(17,5,1),
(17,6,1),
(17,7,1),
(17,8,1),
(17,9,0.8),
(17,10,0.8),
(17,11,1),
(17,12,1),
(17,13,1),
(17,14,1),
(17,15,1),
(17,16,1.25),
(17,17,1);

-- 0000 1234 0408 9548 0369 2580 2648 2640/