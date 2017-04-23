-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2016 at 02:39 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vesti_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `f_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `l_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` char(1) COLLATE utf8_unicode_ci DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `f_name`, `l_name`, `email`, `status`) VALUES
(1, 'milovan', '123456', 'Milovan', 'Gibaca', 'gibaca.m@hotmail.com', '1'),
(2, 'milan', '123456', 'Milan', 'Gibaca', 'milan.gibaca@hotmail.com', '2'),
(3, 'nikola', '123456', 'Nikola', 'Markovic', 'nikola.markovic@gmail.com', '2'),
(4, 'nevens', '123', 'neven', 'savanovic', 'neven@gmail.com', '1'),
(5, 'nikolas', '123', 'nikola', 'savanovic', 'nikolas@gmail.com', '1'),
(6, 'nevenb', '123456', 'neven', 'bakic', 'nevenb@gmail.com', '1'),
(7, 'milan', '123', 'neven', 'savanovic', 'bikeer949@gmail.com', '1'),
(8, 'milana', '123456', 'neven', 'savanovic', 'biba.gibaca@gmail.com', '2'),
(9, 'milana', '123456', 'neven', 'savanovic', 'biba.gibaca@gmail.com', '2'),
(10, 'milana', '123456', 'neven', 'savanovic', 'biba.gibaca@gmail.com', '2'),
(11, 'milana', '123456', 'neven', 'savanovic', 'biba.gibaca@gmail.com', '2'),
(12, 'milana', '123456', 'neven', 'savanovic', 'biba.gibaca@gmail.com', '2');

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

CREATE TABLE IF NOT EXISTS `vesti` (
  `id_vesti` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uvod` varchar(1200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sadrzaj` text COLLATE utf8_unicode_ci,
  `vreme_objave` datetime DEFAULT CURRENT_TIMESTAMP,
  `slika` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kategorija` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `komentar` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_vesti`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id_vesti`, `naslov`, `uvod`, `sadrzaj`, `vreme_objave`, `slika`, `kategorija`, `komentar`) VALUES
(1, 'NADMAŠIO OČEKIVANJA: Apple u poslednjem kvartalu prodao 40,4 MILIONA iPhone-a', 'Najveća kompanija na svetu po tržišnoj kapitalizaciji saopštila je da je u trećem tromesečju prodala 40,4 miliona iPhone-a, što je za 15 odsto manje u odnosu na isti kvartal lani, ali blago iznad prosečne prognoze analitičara', 'Najveća kompanija na svetu po tržišnoj kapitalizaciji saopštila je da je u trećem tromesečju prodala 40,4 miliona iPhone-a, što je za 15 odsto manje u odnosu na isti kvartal lani, ali blago iznad prosečne prognoze analitičara koju su učestvovali u anketi istraživačke kompanije Faktset od 40,02 miliona.Najveća kompanija na svetu po tržišnoj kapitalizaciji saopštila je da je u trećem tromesečju prodala 40,4 miliona iPhone-a, što je za 15 odsto manje u odnosu na isti kvartal lani, ali blago iznad prosečne prognoze analitičara koju su učestvovali u anketi istraživačke kompanije Faktset od 40,02 miliona.Najveća kompanija na svetu po tržišnoj kapitalizaciji saopštila je da je u trećem tromesečju prodala 40,4 miliona iPhone-a, što je za 15 odsto manje u odnosu na isti kvartal lani, ali blago iznad prosečne prognoze analitičara koju su učestvovali u anketi istraživačke kompanije Faktset od 40,02 miliona.', '2016-07-27 21:43:18', 'iPhone-smartfon.jpg', '1', NULL),
(2, 'STAVITE OVU FUTROLU NA TELEFON i uhvatićete SVE pokemone (FOTO)', 'Ukoliko želite da više nikada ne propustite mogućnost da uhvatite retkog pokemona zato što ne možete lepo da ga naciljate, ova 3D štampana futrola za telefon rešiće problem.', 'Futrolu je napravio Džon Kliver, student dizajna iz Australije.Futrolu je napravio Džon Kliver, student dizajna iz AustralijeFutrolu je napravio Džon Kliver, student dizajna iz Australije.Futrolu je napravio Džon Kliver, student dizajna iz Australije.Futrolu je napravio Džon Kliver, student dizajna iz AustralijeFutrolu je napravio Džon Kliver, student dizajna iz Australije...', '2016-07-27 21:43:18', 'Pokemoni-02-620x350.jpg', '1', NULL),
(3, 'BLACKBERRY PREDSTAVIO NOVI TELEFON: Tvrde da je NAJSIGURNIJI na svetu (VIDEO)', 'BlackBerry je novi model nazvao DTEK 50, a on je nastao u saradnji sa čuvenom kompanijom Alcatel', 'DTEK 50 je baziran na Alcatelovom modelu Idol 4, pa ima ekran dijagonale 5,2 inča rezolucije 1920×1080 piksela, radi na Snapdragon 617 procesoru, ima 3GB RAM-a, 16GB memorije koja se može proširiti microSD memorijskim karticama, zadnju kameru od 13MP i prednju od 8MP s blicom.DTEK 50 je baziran na Alcatelovom modelu Idol 4, pa ima ekran dijagonale 5,2 inča rezolucije 1920×1080 piksela, radi na Snapdragon 617 procesoru, ima 3GB RAM-a, 16GB memorije koja se može proširiti microSD memorijskim karticama, zadnju kameru od 13MP i prednju od 8MP s blicom.DTEK 50 je baziran na Alcatelovom modelu Idol 4, pa ima ekran dijagonale 5,2 inča rezolucije 1920×1080 piksela, radi na Snapdragon 617 procesoru, ima 3GB RAM-a, 16GB memorije koja se može proširiti microSD memorijskim karticama, zadnju kameru od 13MP i prednju od 8MP s blicom.DTEK 50 je baziran na Alcatelovom modelu Idol 4, pa ima ekran dijagonale 5,2 inča rezolucije 1920×1080 piksela, radi na Snapdragon 617 procesoru, ima 3GB RAM-a, 16GB memorije koja se može proširiti microSD memorijskim karticama, zadnju kameru od 13MP i prednju od 8MP s blicom.', '2016-07-27 21:43:18', 'Blackberry-najsigurniji-telefon-620x350.jpg', '1', NULL),
(4, 'Apple uskoro završava svoje SVETSKO ČUDO:', 'PRAVA SVEMIRSKA PERVERZIJA će čuvati najveće tajne kosmosa!', 'Njihovo novo sedište ima svetleću fasadu, podzemnu salu, kao i sektor za istraživanje i razvoj, u kom će biti smeštene njihove tajne laboratorije', '2016-10-05 19:50:31', 'Apple-nova-zgrada-3-620x350.jpg', '1', NULL),
(5, 'FACEBOOK POSTAJE VELIKA ONLINE PRODAVNICA: Pogledajte šta ćemo sada moći da uradimo', 'Nova opcija dostupna je na aplikaciji za pametne telefone i zove se Facebook Marketplace', 'Facebook Marketplace omogućava pretraživanje sadržaja prema relevantnosti ljudi koji prodaju neke proizvode za koje biste možda mogli da budete zainteresovani i efikasno izlaže ono što vi sami imate da ponudite na online tržištu.', '2016-10-05 19:50:31', 'Facebook-marketplace.jpg', '1', NULL),
(6, 'WHATSAPP POSTAO JOŠ BOLJI: Od sada ćete samo ovu aplikaciju koristiti za slanje fotografija', 'ko WhatsApp, koji je u vlasništvu Facebooka, ima više od milijardu korisnika na mesečnom nivou, ova kompanija i dalje smatra Snapchat za veliku konkurenciju, pa na sve moguće načine pokušava da je iskopira, a nova opcija je još jedan dokaz za to', 'WhatsApp aplikacija za Android dobila je opciju koja omogućava crtanje po fotografijama koje korisnici razmenjuju putem ove platforme, a nova funkcija je slična onoj koju Snapchat poseduje već neko vreme. Očekuje se da će iOS verzija WhatsAppa ovu opciju dobiti u narednim nedeljama.Ako snimite fotografiju pomoću WhatsAppa, alati za obradu će se pojaviti odmah nakon fotografisanja, a putem ikonice olovke i slova “T” korisnici će moći da pišu i crtaju po fotografiji koristeći različite boje. Fotku će takođe biti moguće ukrasiti i nalepnicama.', '2016-10-05 19:50:31', 'WhatsApp-620x350.jpg', '1', NULL),
(12, 'Vučić: Hrvati su bežali od mene po Briselu ', 'Jedna zemlja se protivila, Republika Hrvatska, a zahvaljujem slovačkim prijateljima, nemačkim prijateljima, kao i Amerikancima. Nas je podržalo 27 zemalja članica, a samo jedna nije - rekao je večeras Vučić u Vladi Srbije', 'redsednik Vlade Srbije Aleksandar Vučić obratio se javnosti povodom otvaranja poglavlja u pregovaračkom procesu Srbije sa EU. Podsećamo, premijer Vučić je juče najavio da će saopštiti više detalja u vezi sa blokadom Hrvatske, da Srbija otvori i poglavlje 26 (obrazovanje i kultura). Premijer je tada izjavio i da mu je “dosta hrvatskog iživljavanja”.', '2016-12-13 21:34:17', 'vucic.jpg', '2', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
