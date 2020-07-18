-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Jul 2020 um 06:54
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_manuel_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(128) NOT NULL,
  `book_author` varchar(64) NOT NULL,
  `book_publisher` varchar(32) DEFAULT NULL,
  `book_isbn` varchar(64) DEFAULT NULL,
  `book_description` varchar(256) DEFAULT NULL,
  `book_date` varchar(16) NOT NULL,
  `book_price` float NOT NULL,
  `book_image` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `books`
--

INSERT INTO `books` (`id`, `book_name`, `book_author`, `book_publisher`, `book_isbn`, `book_description`, `book_date`, `book_price`, `book_image`) VALUES
(1, 'People I Want To Punch In The Throat', 'Jen Mann', 'Columbia', '#3456-2345-4657', 'The title says it all.', '2020', 12.99, 'Images/book1.jpg'),
(2, 'Lesbian Prison Stories Vol.9', 'Torri Tumbles', 'Createspace', '#2356-2345-3456', 'Family friendly! Perfect gift for your kids.', '2016', 9.99, 'Images/book2.jpg'),
(3, 'How To Traumatize Your Children', 'Bradley Hughes', 'Knock Knock', '2456-2456-2456', 'This groundbreaking instructional volume teaches you how to give your children the lifelong gifts of mental and emotional damage.', '2011', 10.99, 'Images/book3.jpg'),
(4, 'How To Talk To Your Cat About Gun Safety', 'Zachary Auburn', 'no one obviously', '2345-2345-2345', 'Modern cats must confront satanists, online predators, the possibility of needing to survive in a post-apocalyptic wasteland, and countless other threats to their nine lives.', '2016', 6.99, 'Images/book4.jpg'),
(5, 'White Trash Cooking', 'Ernest Mickler', 'Someone who would publish anythi', '#4567-4567-4567', 'Ernie Mickler’s much-imitated sugarsnap-pea prose style accompanies delicacies like Tutti’s Fancy Fruited Porkettes, Mock-Cooter Stew, and Oven-Baked Possum.', '2011', 13.99, 'Images/book5.jpg'),
(6, 'Will My Cat Eat My Eyeballs?', 'Caitlin Doughty', 'lol', '#12341-124-345', 'This needs none.', '2019', 15.99, 'Images/book6.jpg'),
(7, 'Kama Pootra: 52 Mind-Blowing Ways to Poop', 'Daniel Young', 'Someone who was clearly delusion', '#234513-1345123-13245', 'The Kama Pootra is the authoritative educational guide for a new and exciting pooping experience, a governing handbook of free-thinking bathroom conduct.', '2010', 10.99, 'Images/book7.jpg'),
(8, 'Images You Should Not Masturbate To', 'Rob Johnson', 'Who would possibly publish this?', '#23452-345673-2342', 'I don\'t wanna talk about it.', '2012', 9.99, 'Images/book8.jpg'),
(9, 'Helping The Retarded To Know God', 'H.R. Hahn', 'Concordia', '23451-13451-13451', 'Don\'t ask...', '1996', 4.99, 'Images/book9.jpg'),
(10, 'A Practical Guide To Racism', 'C.H. Dalton', '...', '3456-2456-234562', 'Read it with someone you hate.', '2014', 11.99, 'Images/book10.jpg');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
