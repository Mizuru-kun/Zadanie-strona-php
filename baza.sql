CREATE DATABASE baza;
use baza;

CREATE TABLE mangi (
  id int(10) UNSIGNED NOT NULL,
  tytul text DEFAULT NULL,
  wyswietlenia text DEFAULT NULL
);

INSERT INTO mangi (id, tytul, wyswietlenia) VALUES
(1, 'Another', 282389796),
(2, 'Dar trzech króli', 232456677),
(3, 'Zapiski zielarki', 128473552),
(4, 'Kuroko no basket', 11373552),
(5, 'Requiem króla róż', 113732322),
(6, 'Children', 11345662),
(7, 'Łowcy smoków', 1373342),
(8, 'Gangsta',1972394),
(9, 'Dogs', 1137234),
(10, 'Black lagoon', 18883732),
(11, 'Acid town', 11342355),
(12, 'NO.06', 1322342),
(13, 'Ballad x Opera', 1134222),
(14, 'Sekret Madoki', 113435),
(15, 'Olimpos', 1135342),
(16, 'Eden', 113753),
(17, 'Dobranoc Punpunie', 113322),
(18,'Parasyte', 113732),
(19, 'Killer in my head', 1145452),
(20, 'Hrabia Monte Christo', 1345352),
(21, 'Are you Alice?', 1145352),
(22, 'Petshop of horrors', 115552),
(23, 'Kuroshitsuji', 1137552),
(24, 'Atak tytanów', 1352);

CREATE TABLE wishlist (
  id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  tytul text DEFAULT NULL,
  PRIMARY KEY (id)
);
INSERT INTO wishlist (id, tytul) VALUES
(1, 'Samuraj Champloo'),
(2, 'Bez żalu'),
(3, 'Overlord');

