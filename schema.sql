-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: music-store
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `band_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `summary` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F4E2474F49ABEB17` (`band_id`),
  CONSTRAINT `FK_F4E2474F49ABEB17` FOREIGN KEY (`band_id`) REFERENCES `bands` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albums`
--

LOCK TABLES `albums` WRITE;
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;
INSERT INTO `albums` VALUES (1,1,'Fire','hey/fire','1992-11-30','Pierwszy studyjny album polskiej grupy muzycznej Hey. Wydawnictwo zrealizowano w składzie: Katarzyna Nosowska (śpiew, słowa), Piotr Banach (gitara, muzyka), Jacek Chrzanowski (gitara basowa), Robert Ligiewicz (perkusja) oraz Marcin Żabiełowicz (gitara), ponadto gościnnie w 8 utworze zaśpiewała Edyta Bartosiewicz, a w 18 zaśpiewał Andrzej \"Kobra\" Kraiński. Album muzycznie w stylu rocka i grunge.','2015-06-10 00:33:44','2015-06-11 02:42:08'),(2,1,'Ho!','hey/ho','1994-04-22','rugi studyjny album polskiej grupy muzycznej Hey. Wydawnictwo zrealizowano w składzie: Katarzyna Nosowska (śpiew, słowa), Piotr Banach (gitara, muzyka), Jacek Chrzanowski (gitara basowa), Robert Ligiewicz (perkusja) oraz Marcin Żabiełowicz (gitara), ponadto gościnnie na wiolonczeli zagrała Katarzyna Kwiatek.\r\n\r\nAlbum zrealizował Leszek Kamiński w produkcji Katarzyny Kanclerz oraz Andrzeja Puczyńskiego. Fotografie oraz koncepcja graficzna: Marta i Łukasz „Thor” Dziubalscy.','2015-06-10 02:14:50','2015-06-10 02:14:50'),(3,1,'?','hey/question-mark','1995-10-09','Album studyjny zespołu Hey wydany w 1995 roku, na który złożyły się nagrania z Heledore oraz nowe nagrania. Album osiągnął status platynowej płyty.','2015-06-10 02:23:27','2015-06-11 04:39:52'),(4,1,'Do rycerzy, do szlachty, doo mieszczan','hey/do-rycerzy-do-szlachty-doo-mieszczan','2012-11-06','en twórczy ferment zaowocował 11 utworami opartymi o różnorodne brzmienia elektroniczne, elektryczne i akustyczne. Istniejące i wymyślone. Jeśli wsłuchamy się w teksty, okaże się, że to być może najbardziej pozytywna płyta Hey’a. Katarzyna Nosowska patrzy na świat z większym spokojem, śmiało przygląda się życiu i zachodzącym w nim zmianom. \r\n\r\nPaweł Krawczyk mówi wprost: „Zmiany te wynikają – choć zabrzmi to banalnie – z całkiem naturalnej potrzeby rozwoju, poszukiwania, wkraczania w nieznane…”\r\n\r\nPo raz pierwszy materiał został zarejestrowany w sześcioosobowym składzie, bowiem do grupy dołączył Marcin Zabrocki, kompozytor i multiinstrumentalista znany m.in. ze współpracy z grupami: Biff, Pogodno, Mordy.\r\n\r\nKompozytorem większości piosenek jest Paweł Krawczyk, którego wsparli: Katarzyna Nosowska, Marcin Zabrocki, Jacek Chrzanowski. Teksty są oczywiście autorstwa Katarzyny Nosowskiej - z wyjątkiem jednego, który napisała i zaśpiewała Gaba Kulka','2015-06-10 02:36:37','2015-06-10 02:36:37'),(5,2,'Miłość w czasach popkultury','my/milosc-w-czasach-popkultury','1999-10-25','Miłość w czasach popkultury – album zespołu Myslovitz, wydany w 1999 roku. Otrzymał „złotą” i „platynową płytę” i był trzecim najlepiej sprzedającym się albumem w Polsce w 2000 roku. Single odniosły sporą popularność, a Myslovitz dostało „Fryderyki” w kategoriach: zespół, płyta, teledysk i piosenka (dwukrotnie). Płytę sprzedano w 150 tys. egzemplarzy.','2015-06-10 03:00:57','2015-06-10 03:00:57'),(6,2,'Myslovitz','my/myslovitz','1995-03-13','Myslovitz – debiutancki album zespołu Myslovitz, wydany w 1995 roku. Zawiera 11 utworów. Płyta wyraźnie jest podzielona na dwie części. Pierwsze 6 utworów utrzymanych jest w konwencji pop-rockowej, a następne to w większości psychodeliczne ballady. Część utworów śpiewanych jest na dwa głosy.','2015-06-10 03:06:25','2015-06-10 03:06:25'),(7,2,'Nieważne jak wysoko jesteśmy...','my/niewazne-jak-wysoko-jestesmy','2011-05-03','Na początku 2010 roku zespół Myslovitz – po długiej przerwie – ponownie wszedł do studia, by rozpocząć rejestrację nowego albumu. Pierwsza sesja odbyła się na przełomie stycznia i lutego w Ustroniu. W tym celu została wynajęta modernistyczna willa (obecnie Dom Architekta). Później prace przeniosły się do nowoczesnego studia w Lubrzy a następnie do Wrocławia do studia Fonoplastykon. Na producenta i realizatora płyty wybrano Marcina Borsa.','2015-06-10 03:10:25','2015-06-10 03:10:25'),(8,3,'Migracje','mela-koteluk/migracje','2014-11-17','Migracje to tytuł nowej płyty Meli Koteluk, na której artystka zabiera słuchaczy do świata pełnego kontrastów. Realizm łączy się tu z abstrakcją, minimalizm z przestrzennym muzycznie bogactwem. Do pracy nad drugim albumem zespół zaprosił Marka Dziedzica, producenta muzycznego odpowiadającego za brzmienie płyt m.in. Sorry Boys czy Ballad i Romansów. Album Migracje, to zbiór niezależnych brzmieniowo kompozycji i polskich, autorskich tekstów. Całość dowodzi konsekwencji Meli i jej zespołu w pielęgnowaniu charakterystycznego języka, którego nie sposób pomylić z żadnym innym.','2015-06-10 16:32:05','2015-06-10 16:32:05'),(9,3,'Spadochron','mela-koteluk/spadochron','2012-05-08','Debiutancki album Meli Koteluk wydany w maju 2012 roku. Artystka oprócz charakterystycznego głosu dała się poznać tą płytą jako oryginalna autorka tekstów. Twórczość zawarta na albumie \"Spadochron\" przyczyniła się do uzyskania przez Koteluk nominacji do nagród Fryderyki 2013: Artysta Roku - Muzyka Rozrywkowa oraz Debiut Roku - Muzyka Rozrywkowa.','2015-06-10 16:41:37','2015-06-10 16:41:37'),(10,5,'Many Stylez','sofa/many-stylez','2006-05-15','Many Stylez - debiutancka płyta zespołu SOFA. Swoją premierę miała 15 maja 2006 roku nakładem wytwórni Kayax.','2015-06-10 16:57:05','2015-06-10 16:57:05'),(11,5,'Hardkor I Disko','sofa/hardkor-i-disko','2012-02-28','Hardkor i disko – trzeci album studyjny zespołu SOFA. Wydany 28 lutego 2012 nakładem wytwórni EMI Music Poland.','2015-06-10 17:00:28','2015-06-10 17:00:28'),(12,6,'Hard Working Classes','sorry-boys/hard-working-classes','2010-11-08','„Hard Working Classes” to tytuł debiutanckiej, ale bardzo dojrzałej płyty zespołu Sorry Boys. Siła ich muzyki to hipnotyzujące gitary, wyjątkowo bogate brzmienie, a także zjawiskowy głos Izy Komoszyńskiej. Jak mówi sam zespół, ich album jest pełen miłosnej pasji. To opowieść o emocjonalnie ciężkiej pracy, wkładanej w budowanie relacji. Warto wspomnieć, że Iza nie tylko śpiewa, ale jest też autorką wszystkich tekstów i współautorką wszystkich kompozycji.','2015-06-10 17:20:17','2015-06-10 17:20:17'),(13,6,'Vulcano','sorry-boys/vulcano','2013-11-04','Vulcano – drugi album studyjny polskiej grupy alternatywnej Sorry Boys, wydany w 2013 roku. Płyta zadebiutowała na 26. miejscu zestawienia OLiS.','2015-06-10 17:24:02','2015-06-10 17:24:02');
/*!40000 ALTER TABLE `albums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albums_covers`
--

DROP TABLE IF EXISTS `albums_covers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albums_covers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) DEFAULT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F2B03C3A1137ABCF` (`album_id`),
  CONSTRAINT `FK_F2B03C3A1137ABCF` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albums_covers`
--

LOCK TABLES `albums_covers` WRITE;
/*!40000 ALTER TABLE `albums_covers` DISABLE KEYS */;
INSERT INTO `albums_covers` VALUES (1,1,'uploads/covers/hey-fire.jpg',44886,'large');
/*!40000 ALTER TABLE `albums_covers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albums_to_genres`
--

DROP TABLE IF EXISTS `albums_to_genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albums_to_genres` (
  `album_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  PRIMARY KEY (`album_id`,`genre_id`),
  KEY `IDX_472346A31137ABCF` (`album_id`),
  KEY `IDX_472346A34296D31F` (`genre_id`),
  CONSTRAINT `FK_472346A34296D31F` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`),
  CONSTRAINT `FK_472346A31137ABCF` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albums_to_genres`
--

LOCK TABLES `albums_to_genres` WRITE;
/*!40000 ALTER TABLE `albums_to_genres` DISABLE KEYS */;
INSERT INTO `albums_to_genres` VALUES (1,2);
/*!40000 ALTER TABLE `albums_to_genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albums_tracks`
--

DROP TABLE IF EXISTS `albums_tracks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albums_tracks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration` time NOT NULL,
  `rank` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2650E7A61137ABCF` (`album_id`),
  CONSTRAINT `FK_2650E7A61137ABCF` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albums_tracks`
--

LOCK TABLES `albums_tracks` WRITE;
/*!40000 ALTER TABLE `albums_tracks` DISABLE KEYS */;
INSERT INTO `albums_tracks` VALUES (1,1,'One of Them','hey/fire/one-of-them','00:02:44',1),(2,1,'Choice','hey/fire/choice','00:03:38',2),(3,1,'Dreams','hey/fire/dreams','00:02:46',3),(4,1,'Nonsense','hey/fire/nonsense','00:02:45',4),(5,1,'Karą będzie lęk','hey/fire/kara-bedzie-lek','00:03:36',5),(6,1,'Little Peace','hey/fire/little-peace','00:02:50',6),(7,1,'Zazdrość','hey/fire/zazdrosc','00:02:01',7),(8,1,'Moja i twoja nadzieja','hey/fire/moja-i-twoja-nadzieja','00:04:46',8),(9,1,'Desire','hey/fire/desire','00:03:58',9),(10,1,'Delusions','hey/fire/delusions','00:03:29',10),(11,1,'Eksperyment','hey/fire/eksperyment','00:03:40',11),(12,1,'Flowers for Titus','hey/fire/flowers-for-titus','00:03:21',12),(13,1,'Zobaczysz','hey/fire/zobaczysz','00:04:20',13),(14,1,'Schisophrenic Family','hey/fire/schisophrenic-family','00:01:54',14),(15,1,'Fate','hey/fire/fate','00:03:04',15),(16,1,'38','hey/fire/38','00:00:38',16),(17,1,'Teksański','hey/fire/teksanski','00:02:42',17),(18,1,'Moja i twoja nadzieja (acoustic)','hey/fire/moja-i-twoja-nadzieja-acoustic','00:03:05',18),(19,2,'Empty Page','hey/ho/empty-page','00:04:08',1),(20,2,'O Drugim Policzku','hey/ho/o-drugim-policzku','00:04:16',2),(21,2,'Ja Sowa','hey/ho/ja-sowa','00:04:33',3),(22,2,'Have A Nice Day','hey/ho/have-a-nice-day','00:33:03',4),(23,2,'Cudownie','hey/ho/cudownie','00:04:23',5),(24,2,'Between','hey/ho/between','00:03:31',6),(25,2,'Is It Strange','hey/ho/is-it-strange','00:02:58',7),(26,2,'Misie','hey/ho/misie','00:05:02',8),(27,2,'Niekoniecznie O Mezczyznie','hey/ho/niekoniecznie-o-mezczyznie','00:03:48',9),(28,2,'That\'s A Lie','hey/ho/that-s-a-lie','00:04:01',10),(29,2,'Chyba','hey/ho/chyba','00:01:05',11),(30,2,'Maliny Sie Koncza','hey/ho/maliny-sie-koncza','00:05:21',12),(31,2,'What About Me','hey/ho/what-about-me','00:04:21',13),(32,2,'Ho','hey/ho/ho','00:04:09',14),(33,3,'Wczesna Jesien','hey//wczesna-jesien','00:04:38',1),(34,3,'Doroslosc Jak Poczatek Umierania','hey//doroslosc-jak-poczatek-umierania','00:03:28',2),(35,3,'Prawda','hey//prawda','00:04:34',3),(36,3,'I Don\'t Know','hey//i-don-t-know','00:03:39',4),(37,3,'Aniol','hey//aniol','00:04:40',5),(38,3,'Kropka','hey//kropka','00:03:09',6),(39,3,'R.e.r.e.','hey//r-e-r-e','00:03:39',7),(40,3,'As Raindrops Fell','hey//as-raindrops-fell','00:02:58',8),(41,3,'Musli','hey//musli','00:02:15',9),(42,3,'List','hey//list','00:04:28',10),(43,3,'Fire Of My Soul','hey//fire-of-my-soul','00:03:26',11),(44,3,'Heledore Babe','hey//heledore-babe','00:03:42',12),(45,3,'Je-le','hey//je-le','00:02:54',13),(46,3,'Just Another Day','hey//just-another-day','00:02:50',14),(47,3,'Gdy Mnie Sen Zmorzy','hey//gdy-mnie-sen-zmorzy','00:04:12',15),(48,4,'Wieliczka','hey/do-rycerzy-do-szlachty-doo-mieszczan/wieliczka','00:03:56',1),(49,4,'Co tam?','hey/do-rycerzy-do-szlachty-doo-mieszczan/co-tam','00:03:48',2),(50,4,'... że się kupidyn Tobą interesuje','hey/do-rycerzy-do-szlachty-doo-mieszczan/ze-sie-kupidyn-toba-interesuje','00:03:47',3),(51,4,'Woda','hey/do-rycerzy-do-szlachty-doo-mieszczan/woda','00:04:12',4),(52,4,'Lilia, kula i cyrkiel','hey/do-rycerzy-do-szlachty-doo-mieszczan/lilia-kula-i-cyrkiel','00:03:32',5),(53,4,'Podobno','hey/do-rycerzy-do-szlachty-doo-mieszczan/podobno','00:03:58',6),(54,4,'Wilk Vs. Kot','hey/do-rycerzy-do-szlachty-doo-mieszczan/wilk-vs-kot','00:04:03',7),(55,4,'Bez chorągwi','hey/do-rycerzy-do-szlachty-doo-mieszczan/bez-choragwi','00:04:28',8),(56,4,'Lot pszczoły nad tymiankiem','hey/do-rycerzy-do-szlachty-doo-mieszczan/lot-pszczoly-nad-tymiankiem','00:04:06',9),(57,4,'Do Rycerzy, do Szlachty, do Mieszczan','hey/do-rycerzy-do-szlachty-doo-mieszczan/do-rycerzy-do-szlachty-do-mieszczan','00:04:55',10),(58,4,'Z przyczyn technicznych','hey/do-rycerzy-do-szlachty-doo-mieszczan/z-przyczyn-technicznych','00:04:09',11),(59,5,'Chłopcy','my/milosc-w-czasach-popkultury/chlopcy','00:03:58',1),(60,5,'Nienawiść','my/milosc-w-czasach-popkultury/nienawisc','00:03:48',2),(61,5,'Długość dźwięku samotności','my/milosc-w-czasach-popkultury/dlugosc-dzwieku-samotnosci','00:04:10',3),(62,5,'Dla Ciebie','my/milosc-w-czasach-popkultury/dla-ciebie','00:03:46',4),(63,5,'Peggy Sue nie wyszła za mąż','my/milosc-w-czasach-popkultury/peggy-sue-nie-wyszla-za-maz','00:04:25',5),(64,5,'Gdzieś','my/milosc-w-czasach-popkultury/gdzies','00:04:31',6),(65,5,'Kraków','my/milosc-w-czasach-popkultury/krakow','00:03:27',7),(66,5,'Miłość w czasach popkultury','my/milosc-w-czasach-popkultury/milosc-w-czasach-popkultury','00:03:12',8),(67,5,'Noc','my/milosc-w-czasach-popkultury/noc','00:05:54',9),(68,5,'Aleksander','my/milosc-w-czasach-popkultury/aleksander','00:04:01',10),(69,5,'My','my/milosc-w-czasach-popkultury/my','00:03:26',11),(70,5,'Zmiana','my/milosc-w-czasach-popkultury/zmiana','00:06:26',12),(71,6,'Kobieta','my/myslovitz/kobieta','00:03:42',1),(72,6,'Papierowe skrzydła','my/myslovitz/papierowe-skrzydla','00:02:24',2),(73,6,'Myslovitz','my/myslovitz/myslovitz','00:03:57',3),(74,6,'Zgon','my/myslovitz/zgon','00:02:32',4),(75,6,'Przedtem','my/myslovitz/przedtem','00:03:45',5),(76,6,'Krótka piosenka o miłości','my/myslovitz/krotka-piosenka-o-milosci','00:03:34',6),(77,6,'Maj','my/myslovitz/maj','00:06:26',7),(78,6,'Wyznanie','my/myslovitz/wyznanie','00:06:05',8),(79,6,'Deszcz','my/myslovitz/deszcz','00:06:25',9),(80,6,'Good Day My Angel','my/myslovitz/good-day-my-angel','00:06:57',10),(81,6,'Moving Revolution','my/myslovitz/moving-revolution','00:07:54',11),(82,7,'Skaza','my/niewazne-jak-wysoko-jestesmy/skaza','00:05:35',1),(83,7,'Art Brut','my/niewazne-jak-wysoko-jestesmy/art-brut','00:04:47',2),(84,7,'Przypadek Hermana Rotha','my/niewazne-jak-wysoko-jestesmy/przypadek-hermana-rotha','00:04:48',3),(85,7,'Ukryte','my/niewazne-jak-wysoko-jestesmy/ukryte','00:04:10',4),(86,7,'Ofiary zapaści Teatru Telewizji','my/niewazne-jak-wysoko-jestesmy/ofiary-zapasci-teatru-telewizji','00:03:43',5),(87,7,'Efekt Motyla','my/niewazne-jak-wysoko-jestesmy/efekt-motyla','00:04:25',6),(88,7,'Srebrna Nitka Ciszy','my/niewazne-jak-wysoko-jestesmy/srebrna-nitka-ciszy','00:03:18',7),(89,7,'21 Gramów','my/niewazne-jak-wysoko-jestesmy/21-gramow','00:05:22',8),(90,7,'Blog filatelistów polskich','my/niewazne-jak-wysoko-jestesmy/blog-filatelistow-polskich','00:05:12',9),(91,8,'Tragikomedia','mela-koteluk/migracje/tragikomedia','00:03:49',1),(92,8,'Stan dusz','mela-koteluk/migracje/stan-dusz','00:03:44',2),(93,8,'Żurawie origami','mela-koteluk/migracje/zurawie-origami','00:03:20',3),(94,8,'Na wróble','mela-koteluk/migracje/na-wroble','00:03:22',4),(95,8,'Fastrygi','mela-koteluk/migracje/fastrygi','00:04:09',5),(96,8,'Zmienne tętno','mela-koteluk/migracje/zmienne-tetno','00:01:13',6),(97,8,'Tango katana','mela-koteluk/migracje/tango-katana','00:03:34',7),(98,8,'To nic','mela-koteluk/migracje/to-nic','00:04:15',8),(99,8,'Pobite gary','mela-koteluk/migracje/pobite-gary','00:03:05',9),(100,8,'Migracje','mela-koteluk/migracje/migracje','00:03:30',10),(101,8,'Duzno','mela-koteluk/migracje/duzno','00:01:18',11),(102,8,'Przeprowadzki','mela-koteluk/migracje/przeprowadzki','00:04:01',12),(103,8,'Jak w obyczajowym filmie','mela-koteluk/migracje/jak-w-obyczajowym-filmie','00:04:08',13),(104,9,'Dlaczego drzewa nic nie mówią','mela-koteluk/spadochron/dlaczego-drzewa-nic-nie-mowia','00:04:30',1),(105,9,'Spadochron','mela-koteluk/spadochron/spadochron','00:03:43',2),(106,9,'O domu','mela-koteluk/spadochron/o-domu','00:03:52',3),(107,9,'Działać bez działania','mela-koteluk/spadochron/dzialac-bez-dzialania','00:03:49',4),(108,9,'Niewidzialna','mela-koteluk/spadochron/niewidzialna','00:04:52',5),(109,9,'Melodia ulotna','mela-koteluk/spadochron/melodia-ulotna','00:04:05',6),(110,9,'Stale płynne','mela-koteluk/spadochron/stale-plynne','00:02:08',7),(111,9,'Wolna','mela-koteluk/spadochron/wolna','00:04:07',8),(112,9,'Rola, gra','mela-koteluk/spadochron/rola-gra','00:04:14',9),(113,9,'Pojednanie','mela-koteluk/spadochron/pojednanie','00:04:01',10),(114,9,'Nie zasypiaj','mela-koteluk/spadochron/nie-zasypiaj','00:03:59',11),(115,9,'In the Meantime','mela-koteluk/spadochron/in-the-meantime','00:03:11',12),(116,10,'Muzikal High (Introduction)','sofa/many-stylez/muzikal-high-introduction','00:02:10',1),(117,10,'Many Stylez','sofa/many-stylez/many-stylez','00:03:57',2),(118,10,'Moje zycie to','sofa/many-stylez/moje-zycie-to','00:03:36',3),(119,10,'The Life I Chose','sofa/many-stylez/the-life-i-chose','00:04:18',4),(120,10,'Wicked Skillz','sofa/many-stylez/wicked-skillz','00:04:34',5),(121,10,'Where\'s The Groove?','sofa/many-stylez/where-s-the-groove','00:04:17',6),(122,10,'Flow.Reality','sofa/many-stylez/flow-reality','00:03:23',7),(123,10,'Spokoj Jaki Mam','sofa/many-stylez/spokoj-jaki-mam','00:03:43',8),(124,10,'Everythin\' In My Soul','sofa/many-stylez/everythin-in-my-soul','00:01:43',9),(125,10,'No Matter','sofa/many-stylez/no-matter','00:03:52',10),(126,10,'Countryside (Skit)','sofa/many-stylez/countryside-skit','00:00:40',11),(127,10,'F.A.Q.','sofa/many-stylez/f-a-q','00:03:56',12),(128,10,'So far','sofa/many-stylez/so-far','00:04:43',13),(129,10,'I.L.Y.','sofa/many-stylez/i-l-y','00:04:16',14),(130,10,'What\'s Goin\' On?','sofa/many-stylez/what-s-goin-on','00:04:55',15),(131,11,'Bloodshed','sofa/hardkor-i-disko/bloodshed','00:02:49',1),(132,11,'Egzorcyzmy Emili Roze','sofa/hardkor-i-disko/egzorcyzmy-emili-roze','00:04:43',2),(133,11,'Chlopcy','sofa/hardkor-i-disko/chlopcy','00:04:01',3),(134,11,'Hardkor i disko','sofa/hardkor-i-disko/hardkor-i-disko','00:03:01',4),(135,11,'Obrazenia Wewnetrzne','sofa/hardkor-i-disko/obrazenia-wewnetrzne','00:04:01',5),(136,11,'Serpentyny I Mydlane Banki','sofa/hardkor-i-disko/serpentyny-i-mydlane-banki','00:03:43',6),(137,11,'Headlights','sofa/hardkor-i-disko/headlights','00:04:13',7),(138,11,'Chaos ADHD','sofa/hardkor-i-disko/chaos-adhd','00:04:01',8),(139,11,'Clutter','sofa/hardkor-i-disko/clutter','00:03:54',9),(140,11,'Electro Insanity','sofa/hardkor-i-disko/electro-insanity','00:03:30',10),(141,11,'On Nie Mowi','sofa/hardkor-i-disko/on-nie-mowi','00:02:20',11),(142,12,'Hard Working Classes','sorry-boys/hard-working-classes/hard-working-classes','00:03:34',1),(143,12,'Salty River','sorry-boys/hard-working-classes/salty-river','00:03:13',2),(144,12,'Cancer Sign Love','sorry-boys/hard-working-classes/cancer-sign-love','00:03:21',3),(145,12,'Chance','sorry-boys/hard-working-classes/chance','00:04:04',4),(146,12,'Trains Go Everywhere','sorry-boys/hard-working-classes/trains-go-everywhere','00:03:51',5),(147,12,'I Feel Life','sorry-boys/hard-working-classes/i-feel-life','00:04:07',6),(148,12,'Roe Deer At A Rodeo','sorry-boys/hard-working-classes/roe-deer-at-a-rodeo','00:03:57',7),(149,12,'Caesar On Fire','sorry-boys/hard-working-classes/caesar-on-fire','00:03:53',8),(150,12,'Give Me Back My Money','sorry-boys/hard-working-classes/give-me-back-my-money','00:03:45',9),(151,12,'No Saviour','sorry-boys/hard-working-classes/no-saviour','00:03:05',10),(152,13,'Evolution (St Teresa)','sorry-boys/vulcano/evolution-st-teresa','00:03:24',1),(153,13,'Phoenix','sorry-boys/vulcano/phoenix','00:03:27',2),(154,13,'Leaving Warsaw','sorry-boys/vulcano/leaving-warsaw','00:03:43',3),(155,13,'The Sun','sorry-boys/vulcano/the-sun','00:03:50',4),(156,13,'Back To Piano','sorry-boys/vulcano/back-to-piano','00:02:53',5),(157,13,'Dagny','sorry-boys/vulcano/dagny','00:03:43',6),(158,13,'This New World','sorry-boys/vulcano/this-new-world','00:03:42',7),(159,13,'Vulcano','sorry-boys/vulcano/vulcano','00:02:54',8),(160,13,'Miss Homeless','sorry-boys/vulcano/miss-homeless','00:03:33',9),(161,13,'Zimna Wojna','sorry-boys/vulcano/zimna-wojna','00:03:56',10);
/*!40000 ALTER TABLE `albums_tracks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artists`
--

DROP TABLE IF EXISTS `artists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stage_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `biography` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artists`
--

LOCK TABLES `artists` WRITE;
/*!40000 ALTER TABLE `artists` DISABLE KEYS */;
INSERT INTO `artists` VALUES (1,NULL,'katarzyna-nosowska','Katarzyna','Nosowska',NULL,'2015-06-10 00:33:44','2015-06-10 00:33:44'),(2,NULL,'pawel-krawczyk','Paweł','Krawczyk',NULL,'2015-06-10 00:33:44','2015-06-10 00:33:44'),(3,NULL,'marcin-zabielowicz','Marcin','Żabiełowicz',NULL,'2015-06-10 00:33:44','2015-06-10 00:33:44'),(4,NULL,'robert-ligiewicz','Robert','Ligiewicz',NULL,'2015-06-10 00:33:44','2015-06-10 00:33:44'),(5,NULL,'jacek-chrzanowski','Jacek','Chrzanowski',NULL,'2015-06-10 00:33:44','2015-06-10 00:33:44'),(6,NULL,'marcin-zabrocki','Marcin','Zabrocki',NULL,'2015-06-10 00:33:44','2015-06-10 00:33:44'),(7,NULL,'piotr-banach','Piotr','Banach',NULL,'2015-06-10 00:33:44','2015-06-10 00:33:44'),(8,NULL,'marcin-macuk','Marcin','Macuk',NULL,'2015-06-10 00:33:44','2015-06-10 00:33:44'),(9,NULL,'michal-kowalonek','Michał','Kowalonek',NULL,'2015-06-10 02:42:00','2015-06-10 02:42:00'),(10,NULL,'wojciech-powaga','Wojciech','Powaga',NULL,'2015-06-10 02:42:24','2015-06-10 02:42:24'),(11,NULL,'przemyslaw-myszor','Przemysław','Myszor',NULL,'2015-06-10 02:42:47','2015-06-10 02:42:47'),(12,NULL,'jacek-kuderski','Jacek','Kuderski',NULL,'2015-06-10 02:43:01','2015-06-10 02:43:01'),(13,NULL,'wojciech-kuderski','Wojciech','Kuderski',NULL,'2015-06-10 02:43:20','2015-06-10 02:43:20'),(14,'Bango','bango-marcin-porczek','Marcin','Porczek',NULL,'2015-06-10 02:48:23','2015-06-10 02:48:23'),(15,NULL,'rafal-cieslik','Rafał','Cieślik',NULL,'2015-06-10 02:48:38','2015-06-10 02:48:38'),(16,NULL,'artur-rojek','Artur','Rojek',NULL,'2015-06-10 02:48:52','2015-06-10 02:48:52'),(17,'Mela Koteluk','mela-koteluk-malwina-koteluk','Malwina','Koteluk',NULL,'2015-06-10 03:17:21','2015-06-10 03:17:21'),(19,NULL,'katarzyna-kurzawska','Katarzyna','Kurzawska',NULL,'2015-06-10 16:46:54','2015-06-10 16:46:54'),(20,NULL,'tomasz-organek','Tomasz','Organek',NULL,'2015-06-10 16:47:06','2015-06-10 16:47:06'),(21,NULL,'iwo-naumowicz','Iwo','Naumowicz',NULL,'2015-06-10 16:47:24','2015-06-10 16:47:24'),(22,NULL,'adam-staszewski','Adam','Staszewski',NULL,'2015-06-10 16:47:40','2015-06-10 16:47:40'),(23,NULL,'bartek-stankiewicz','Bartek','Stankiewicz',NULL,'2015-06-10 16:47:53','2015-06-10 16:47:53'),(24,NULL,'robert-markiewicz','Robert','Markiewicz',NULL,'2015-06-10 16:48:05','2015-06-10 16:48:05'),(25,NULL,'izabela-komoszynsk','Izabela','Komoszyńsk',NULL,'2015-06-10 17:08:00','2015-06-10 17:08:00'),(26,NULL,'tomasz-dabrowski','Tomasz','Dąbrowski',NULL,'2015-06-10 17:08:13','2015-06-10 17:08:13'),(27,NULL,'piotr-blak','Piotr','Blak',NULL,'2015-06-10 17:08:24','2015-06-10 17:08:24'),(28,NULL,'bartosz-mielczarek','Bartosz','Mielczarek',NULL,'2015-06-10 17:08:39','2015-06-10 17:08:39'),(29,NULL,'maciej-golyzniak','Maciej','Gołyźniak',NULL,'2015-06-10 17:08:51','2015-06-10 17:08:51');
/*!40000 ALTER TABLE `artists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artists_photos`
--

DROP TABLE IF EXISTS `artists_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artists_photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_id` int(11) DEFAULT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E8D32E74B7970CF8` (`artist_id`),
  CONSTRAINT `FK_E8D32E74B7970CF8` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artists_photos`
--

LOCK TABLES `artists_photos` WRITE;
/*!40000 ALTER TABLE `artists_photos` DISABLE KEYS */;
/*!40000 ALTER TABLE `artists_photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bands`
--

DROP TABLE IF EXISTS `bands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `formed` int(11) NOT NULL,
  `origin_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `origin_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `biography` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bands`
--

LOCK TABLES `bands` WRITE;
/*!40000 ALTER TABLE `bands` DISABLE KEYS */;
INSERT INTO `bands` VALUES (1,'Hey','hey',1992,'Polska','Szczecin','Polski zespół muzyczny, powstały w 1992 w Szczecinie. Inicjatorem był gitarzysta Piotr Banach. Od początku istnienia wokalistką zespołu jest Katarzyna Nosowska. Zespół wykonuje różnorodną muzykę w granicach szeroko pojętego rocka z wpływami muzyki elektronicznej.','2015-06-10 00:33:44','2015-06-10 00:33:44'),(2,'Myslovitz','myslovitz',1992,'Polska','Mysłowice','Polski zespół rockowy, założony w 1992 w Mysłowicach przez Artura Rojka i Wojtka Powagę. W pierwszym składzie znaleźli się także perkusista Marcin Porczek i basista Rafał Cieślik. Ich muzyka zawierała elementy college rocka, shoegaze i (tu zdania są podzielone, a sam zespół tej etykietki nie znosi), choć obecnie kieruje się w rejony bardziej alternatywne.','2015-06-10 02:46:46','2015-06-10 08:33:54'),(3,'Mela Koteluk','mela-koteluk',2003,'Polska','Sulechów','Mela Koteluk właściwie Malwina Koteluk (ur. 3 lipca 1985 w Sulechowie) – polska wokalistka.\r\nKoteluk śpiewała w chórkach w zespole Scorpions oraz u Gaby Kulki. W 2003 zdobyła 2 miejsce VI edycji Konkursu „Pamiętajmy o Osieckiej”. W 2011 roku Mela wzięła udział w konkursie Make More Music. 8 maja 2012 wydała swoją pierwszą płytę pt. Spadochron, będącą płytą tygodnia w programie III Polskiego Radia. Zagrała również koncert retransmitowany przez tę stację. W 2013 artystka w duecie z Czesławem Mozilem nagrała Pieśń o szczęściu – utwór promujący film Baczyński w reżyserii Kordiana Piwowarskiego. Jest również inicjatorką akcji wspierającej żywe granie Nie bądź dźwiękoszczelny, a także laureatką Nagrody Artystycznej Miasta Torunia im. Grzegorza Ciechowskiego i plebiscytu Ale Sztuka.','2015-06-10 08:37:50','2015-06-10 08:37:50'),(5,'SOFA','sofa',2003,'Polska','Łódź','SOFA - sześcioosobowy zespół, posiadający aż 3 wokalistów, grający muzykę soul, experimental, funk, hip-hop, chillout, rnb z Torunia, Polska.\r\nZespół powstał w pierwszych miesiącach 2003 z inicjatywy czterech młodych muzyków: Adama Staszewskiego, Michała Bryndala, Tomasza Organka i Bartosza Staszkiewicza i wywodzi się po cześci z toruńskich formacji Gribojedow, Vernissage oraz Jeremi (Przemek Wałczuk). W pierwotnym składzie zaczęli spotykać się na próby i grać instrumentalnie, poszukując melodii oscylujących wokół szeroko pojmowanej czarnej muzyki.','2015-06-10 16:50:27','2015-06-10 16:50:27'),(6,'Sorry Boys','sorry-boys',2006,'Polska','Warszawa','Zespół Sorry Boys powstał 2006 r. w Warszawie. Grupa została już doceniona zarówno w Polsce, jak i za granicą. W 2008 r. utwór „Winter” znalazł się na kompilacji Piotra Kaczkowskiego z cyklu Minimax. W tym samym roku zespół Sorry Boys został wyłoniony przez brytyjskiego organizatora jako polski reprezentant na GBOB 2008, w którym wzięły udział zespoły z 30 krajów świata. Zespół zdobył statuetkę „Best New Band from Poland”.','2015-06-10 17:16:28','2015-06-10 17:16:28');
/*!40000 ALTER TABLE `bands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bands_members`
--

DROP TABLE IF EXISTS `bands_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bands_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `band_id` int(11) DEFAULT NULL,
  `artist_id` int(11) DEFAULT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `former` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9566033F49ABEB17` (`band_id`),
  KEY `IDX_9566033FB7970CF8` (`artist_id`),
  CONSTRAINT `FK_9566033F49ABEB17` FOREIGN KEY (`band_id`) REFERENCES `bands` (`id`),
  CONSTRAINT `FK_9566033FB7970CF8` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bands_members`
--

LOCK TABLES `bands_members` WRITE;
/*!40000 ALTER TABLE `bands_members` DISABLE KEYS */;
INSERT INTO `bands_members` VALUES (1,1,1,'wokal',0),(2,1,2,'gitara, chórki',0),(3,1,3,'gitara',0),(4,1,4,'perkusja',0),(5,1,5,'gitara basowa',0),(6,1,6,'instrumenty klawiszowe, sampling, chórki',0),(7,1,7,'gitara',1),(8,1,8,'gitara basowa',1),(9,2,9,'śpiew/gitara',0),(10,2,10,'gitara',0),(11,2,11,'gitara/instrumenty klawiszowe',0),(12,2,12,'gitara basowa',0),(13,2,13,'perkusja',0),(14,2,14,'gitara basowa',1),(15,2,15,'perkusja',1),(16,2,16,'śpiew/gitara',0),(17,3,17,'Wokalistka',0),(18,5,19,'wokal',0),(19,5,20,'gitara/ wokal',0),(20,5,21,'MC',0),(21,5,22,'gitara basowa',0),(22,5,23,'instrumenty klawiszowe',0),(23,5,24,'perkusja',0),(24,6,25,'śpiew, instrumenty klawiszowe',0),(25,6,26,'gitara',0),(26,6,27,'gitara, instrumenty klawiszowe',0),(27,6,28,'gitara basowa',0),(28,6,29,'perkusa',0);
/*!40000 ALTER TABLE `bands_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres`
--

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` VALUES (1,'Soul','soul'),(2,'Rock','rock'),(3,'Indie pop','indie-pop'),(4,'Alternatywa','alternatywa'),(5,'Rock alternatywny','rock-alternatywny');
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-11  4:57:12
