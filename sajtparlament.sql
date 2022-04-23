-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 02:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sajtparlament`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentId` int(11) NOT NULL,
  `commentText` text DEFAULT NULL,
  `commentDateTime` datetime DEFAULT NULL,
  `commentAuthor` varchar(256) DEFAULT NULL,
  `commentImage` text DEFAULT NULL,
  `commentApproved` varchar(256) DEFAULT 'zabranjen',
  `newsId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentId`, `commentText`, `commentDateTime`, `commentAuthor`, `commentImage`, `commentApproved`, `newsId`) VALUES
(83, 'DVADVADVADVA', '2022-03-18 01:32:06', 'Dusan Velickovic', '90963900_295795948069769_7483083938856960000_n.jpg', 'dozvoljen', 38),
(84, 'TRI TRI TRI', '2022-03-18 01:32:24', 'Dusan Velickovic', '90963900_295795948069769_7483083938856960000_n.jpg', 'dozvoljen', 35),
(85, 'TRI TRI TRI', '2022-03-18 01:32:31', 'Dusan Velickovic', '90963900_295795948069769_7483083938856960000_n.jpg', 'dozvoljen', 34),
(86, 'dasafss', '2022-03-18 01:33:14', 'Dusan Velickovic', '90963900_295795948069769_7483083938856960000_n.jpg', 'zabranjen', 34),
(87, 'gfdffgdfd', '2022-03-18 01:33:17', 'Dusan Velickovic', '90963900_295795948069769_7483083938856960000_n.jpg', 'zabranjen', 34),
(88, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat nulla in nunc tincidunt, sed pharetra nisi vestibulum. Quisque et suscipit libero. Sed eu sem nec augue blandit sollicitudin quis.', '2022-03-18 01:34:43', 'Dusan Velickovic', '90963900_295795948069769_7483083938856960000_n.jpg', 'dozvoljen', 38),
(101, 'JEDAN', '2022-03-18 02:18:58', 'Dusan Velickovic', '90963900_295795948069769_7483083938856960000_n.jpg', 'dozvoljen', 54),
(102, 'DVA\r\n', '2022-03-18 02:19:18', 'Dusan Velickovic', '90963900_295795948069769_7483083938856960000_n.jpg', 'dozvoljen', 54),
(103, 'OBRISI ME :)', '2022-03-19 01:54:12', 'Dusan Velickovic', '90963900_295795948069769_7483083938856960000_n.jpg', 'zabranjen', 30);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messagesId` int(3) NOT NULL,
  `messagesNameSurname` varchar(60) DEFAULT NULL,
  `messagesEmail` varchar(35) DEFAULT NULL,
  `messagesContent` text DEFAULT NULL,
  `messageTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messagesId`, `messagesNameSurname`, `messagesEmail`, `messagesContent`, `messageTime`) VALUES
(5, 'Jon Jones', 'jonjones@gmail.com', 'Dear team,\r\n\r\nI am pleased to introduce you to [Name] who is starting today as a Customer Support Representative. She will be providing technical support and assistance to our users, making sure they enjoy the best experience with our products.\r\n\r\nFeel free to greet [Name] in person and congratulate her with the new role!\r\n\r\nBest regards,\r\n[Your name]\r\n[Job title]', '2022-02-21 20:02:49'),
(6, 'Sanja Velickovic', 'sanja@gmail.com', 'WOOOW OVO JE EKSTRA', '2022-02-21 20:05:49'),
(8, 'Dragan Velickovic', 'dmd.nis@gmail.com', 'caoacaoaocacoacoacoacoa', '2022-02-21 23:36:41'),
(21, 'Dusan Velickovic', 'dusanvelickovic000@gmail.com', 'drgopfkdgpdokdfphgokdfhopfdkfpdohkfohkfgpohkfgphok', '2022-02-28 22:56:40'),
(22, 'Marko Zivkovic', 'luka.spasic@borastankovic.edu.rs', 'sdfiojksdfoijsdoisdjdfgoisj', '2022-02-28 22:58:12'),
(23, 'Dusan Velickovic', 'luka.spasic@borastankovic.edu.rs', 'LALALALALALALALA', '2022-03-15 01:48:25'),
(24, 'Dusan Velickovic', 'dusanvelickovic000@gmail.com', 'Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan\r\nDusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan\r\nDusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan\r\nDusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan\r\nDusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan\r\nDusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan\r\nDusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan\r\nDusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan\r\nDusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan\r\nDusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan\r\nDusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan\r\nDusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan Dusan', '2022-03-15 11:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsId` int(3) NOT NULL,
  `newsTitle` varchar(255) DEFAULT NULL,
  `newsContent` text DEFAULT NULL,
  `newsImage` text DEFAULT NULL,
  `newsAuthor` varchar(50) DEFAULT NULL,
  `newsDate` datetime DEFAULT NULL,
  `newsTags` varchar(255) DEFAULT NULL,
  `newsApproved` varchar(256) DEFAULT 'zabranjena',
  `newsContentEntry` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsId`, `newsTitle`, `newsContent`, `newsImage`, `newsAuthor`, `newsDate`, `newsTags`, `newsApproved`, `newsContentEntry`) VALUES
(8, 'Lorem ipsum 1', '  Sedma potencijalna ruta invazije ilustruje kako bi ruske snage mogle da pokrenu kopnenu invaziju na Ukrajinu preko okupiranog poluostrva Krim koje je Putin anektirao 2014. godine.', 'placeholder-news.jpg', 'dusan', '2022-01-14 00:00:00', 'rusija, britanija, putin, vojska, ukrajina, kijev', 'zabranjena', '  Sedma potencijalna ruta invazije ilustruje kako bi ruske snage mogle da pokrenu kopnenu invaziju na Ukrajinu preko okupiranog poluostrva Krim '),
(9, 'Lorem ipsum 2', '<br />\r\nĐoković će se takmičiti na turniru u Dubaiju od 21. februara, biće mu to premijerni nastup u 2022. godini posle agonije u Australiji. Kao gost RTS-a, setio se brojnih karijernih momenata, a pet izjava se posebno izdvojilo. <br />\r\nO intervjuu za „Ekip“ od kog je dobio nagradu, iako je znao da je pozitivan na koronavirus: \"Priznao sam da je to bila greška. Ta nagrada mi je bila veoma značajna, pre određenog vremena smo odlučili da će taj dan biti intervju. <br />\r\nSaznao sam za taj test dan pre ili tog popodneva. Razmišljao sam šta da radim, bio sam sa maskom sve vreme osim kada smo se slikali. Bio sam udaljen nekoliko metara od njih. <br />\r\nOn je posle potvrdio da sam nosio masku sve vreme, da je greška i da sam se postavio sebično priznajem. <br />\r\nSvi pravimo greške, ali ne očekujem da će mi svi oprostiti. Shvatam da ima mnogo ljudi koji će me osuđivati\".', 'placeholder-news.jpg', 'dusan', '2022-01-28 00:00:00', 'djokovic, tenis, vakcine, australija, novak, koronavirus', 'zabranjena', 'Najbolji teniser sveta Novak Đoković jo&scaron; jednom je izneo svoju stranu priče o deportaciji iz Australije, uz osvrt na pojedine detalje iz pro&scaron;losti i najavu da će jo&scaron; dugo igrati tenis. '),
(10, 'Lorem ipsum 3', '<br />\r\n<br />\r\nU Monaku je, naime, na snazi sanitarna, a ne vakcinalna propusnica. Prema onome što stoji na zvaničnom sajtu \"Info kovid 19\" Monaka, koji je ažuriran pre pet dana, postoji i mogućnost prilaganja PCR testa ne starijeg od 72 sata za svo osoblje i učesnike događaja u sektoru sporta. Posetioci moraju da prilože test star svega 24 sata.<br />\r\n<br />\r\nAli, ne lezi vraže. Turnir jeste u Monaku, ali se igra u - Francuskoj! Naime, fizički, tereni se nalaze na teritoriji mesta Rokbrin Kap Marten, u \"Montekarlo Kantri klubu\" na nekoliko koraka od \"nevidljive\" granice između Principata Monako i Republike Francuske. Da ironija bude veća, spaja ih avenija koja nosi ime princeze Grejs...<br />\r\n<br />\r\nDilemu čiji će zdravstveni propisi da važe na turniru, razrešila je za \"Novosti\" Katrin Šesa, zadužena za odnose s javnošću \"Montekarlo Kantri kluba\".', 'placeholder-news.jpg', 'dusan', '2022-02-15 00:00:00', 'djokovic, tenis, monte karlo, novak, francuska', 'zabranjena', 'Prema važećim zdravstvenim pravilima koja vladaju u Kneževini, Novak Đoković, u principu, ne bi trebalo da ima nikakvih problema da nastupi na ovom turniru koji se igra od 9. do 17. aprila.'),
(15, 'Lorem ipsum 4', ' Inspirisana je balkanskom tradicijom, a osmišljena sa zahtevom klijenata da se zaklone od komšije, a otvore ka prirodi - ne zvuči li to savršeno?\r\nLjupka vikendica sa fasadom od drveta i profilisanog lima projektovana je za Veliko Blaško, u opštini Laktaši u Republici Srpskoj, Bosna i Hercegovina. Na njeno oblikovanje i arhitekturu značajno je uticala sama okolina.', 'placeholder-news.jpg', 'admin', '2022-01-15 00:00:00', 'odmor, vikendica, priroda, laktasi', 'zabranjena', 'Ova atraktivna kuća za odmor nastala je kao rezultat prilagođavanja terenu, ruži vetrova i drugim spolja&scaron;njim uticajima.'),
(16, 'Lorem ipsum 5', ' Njihovo prisustvo ne bi bilo loše za \"orlove\", možda bi im i dobrodošli neki njihovi koševi, ali utisak je da bi \"žuljanje\" poništilo pozitivne efekte\r\nLegendarni Kari, aktuelni selektor košarkaške reprezentacije, ponovo je pokrenuo pitanje stranca zbog problematične situacije sa FIBA terminima kvalifikacija za Svetsko prvenstvo. Ne može da računa na najbolje igrače iz NBA i Evrolige, često čak ni iz Evrokupa, a realnost je takva da nemamo dovoljno „drugopozivaca“ koji ispunjavaju kriterijume, naročito na najosetljivijoj poziciji plejmejkera.', 'placeholder-news.jpg', 'dusan', '2021-12-28 00:00:00', 'kosarka, srbija, stranci, reprezentacija, svetislav pesic, orlovi', 'zabranjena', 'Stranac u ko&scaron;arka&scaron;koj reprezentaciji Srbije delovao je kao ne&scaron;to nezamislivo do poslednje izjave Svetislava Pe&scaron;ića.'),
(26, 'Lorem ipsum 6', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'placeholder-news.jpg', 'dusan', '2022-02-18 00:00:00', 'php, kurs, programiranje', 'dozvoljena', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. '),
(28, 'Lorem ipsum 7', '<br />\r\nKupatilo će delovati prostranije i svetlije ako ga opremite u belim tonovima sa drvenim detaljima.', 'placeholder-news.jpg', 'dusan', '2022-02-10 00:00:00', 'kupatilo, uredjenje, detalji', 'dozvoljena', 'Ukoliko vam kupatilo nije naročito prostrano, dobro je znati da i ona manja mogu sasvim fino da se urede, uz par korisnih ideja.'),
(29, 'Lorem ipsum 8', '<b>Ljupka vikendica sa fasadom od drveta i profilisanog lima projektovana je za Veliko Blaško</b>, u opštini Laktaši u Repu<u>blici Srpskoj, Bosna i Hercegovina</u>. Na njeno obliko<span style=\"font-family: Impact;\">vanje i arhitekturu značajno je</span> uticala sama okolina.', 'placeholder-news.jpg', 'admin', '2022-01-15 00:00:00', 'odmor, vikendica, priroda, laktasi', 'dozvoljena', 'Ova atraktivna kuća za odmor nastala je kao rezultat prilagođavanja terenu, ruži vetrova i drugim spolja&scaron;njim uticajima. Inspirisana je balkanskom tradicijom, a osmi&scaron;ljena sa zahtevom klijenata da se zaklone od kom&scaron;ije, a otvore ka prirodi - ne zvuči li to savr&scaron;eno?'),
(30, 'Vest 8', ', možda bi im i dobrodošli neki njihovi koševi, ali utisak je da bi \"žuljanje\" poništilo pozitivne efekte\r\nLegendarni Kari, aktuelni selektor košarkaške reprezentacije, ponovo je pokrenuo pitanje stranca zbog problematične situacije sa FIBA terminima kvalifikacija za Svetsko prvenstvo. Ne može da računa na najbolje igrače iz NBA i Evrolige, često čak ni iz Evrokupa, a realnost je takva da nemamo dovoljno „drugopozivaca“ koji ispunjavaju kriterijume, naročito na najosetljivijoj poziciji plejmejkera.', 'placeholder-news.jpg', 'dusan', '2021-12-28 00:00:00', 'kosarka, srbija, stranci, reprezentacija, svetislav pesic, orlovi', 'dozvoljena', 'Stranac u ko&scaron;arka&scaron;koj reprezentaciji Srbije delovao je kao ne&scaron;to nezamislivo do poslednje izjave Svetislava Pe&scaron;ića. Njihovo prisustvo ne bi bilo lo&scaron;e za &quot;orlove&quot;'),
(32, 'Vest 7', '<br />\r\npokazuje se kako bi Putin mogao da prvenstveno da cilja ukrajinsku prestonicu Kijev kao i industrijski grad Dnjepar. <br />\r\nNa novoj mapi, objavljenoj na zvaničnom Tviter nalogu ministarstva odbrane, prikazane su tri moguće rute za invaziju usmerenu na Kijev, <br />\r\ndok su tri prikazane za Dnjepar, prenosi Skaj njuz. <br />\r\nSedma potencijalna ruta invazije ilustruje kako bi ruske snage mogle da pokrenu kopnenu invaziju na Ukrajinu preko okupiranog poluostrva <br />\r\nKrim koje je Putin anektirao 2014. godine.', 'placeholder-news.jpg', 'dusan', '2022-01-14 00:00:00', 'rusija, britanija, putin, vojska, ukrajina, kijev', 'dozvoljena', 'U ilustraciji zasnovanoj na satelitskim snimcima i drugim obaeve&scaron;tajnim izvorima, '),
(34, 'Vest 6', '<br />\r\n<br />\r\n\"Info kovid 19\" Monaka, koji je ažuriran pre pet dana, postoji i mogućnost prilaganja PCR testa ne starijeg od 72 sata za svo osoblje i učesnike događaja u sektoru sporta. Posetioci moraju da prilože test star svega 24 sata.<br />\r\n<br />\r\nAli, ne lezi vraže. Turnir jeste u Monaku, ali se igra u - Francuskoj! Naime, fizički, tereni se nalaze na teritoriji mesta Rokbrin Kap Marten, u \"Montekarlo Kantri klubu\" na nekoliko koraka od \"nevidljive\" granice između Principata Monako i Republike Francuske. Da ironija bude veća, spaja ih avenija koja nosi ime princeze Grejs...<br />\r\n<br />\r\nDilemu čiji će zdravstveni propisi da važe na turniru, razrešila je za \"Novosti\" Katrin Šesa, zadužena za odnose s javnošću \"Montekarlo Kantri kluba\".', 'placeholder-news.jpg', 'dusan', '2022-02-15 00:00:00', 'djokovic, tenis, monte karlo, novak, francuska', 'dozvoljena', 'U Monaku je, naime, na snazi sanitarna, a ne vakcinalna propusnica. Prema onome &scaron;to stoji na zvaničnom sajtu '),
(35, 'Vest 5', '<br />\r\n  <br />\r\n  Početak meča protekao je u znaku povrede Alena Smailagića, koji je nakon odbrane i čuvanja Brajsa Džonsa nezgodno iskrenuo levu nogu, zbog čega je ostao da leži na parketu, a potom uz bolnu grimasu napustio igru uz pomoć Uroša Trifunovića.<br />\r\n   <br />\r\n  To kao da je uticalo na crno-bele, pa je FMP od početnog egala uspeo da napravi mini-seriju i povede 13:9.<br />\r\n  <br />\r\n  Mučili su se izabranici Željka Obradovića u tim trenucima, a da je FMP raspoložen pokazao je i momenat iz završnice prve četvrtine, kada je Brajs Džons pogodio trojku sa deset metara, da bi prva četvrtina bila okončana rezultatom 24:21 za FMP.<br />\r\n  <br />\r\n  No, po povratku na parket u drugoj deonici Partizan je zaigrao znatno bolje. Razigrao se Kevin Panter, pa je vođstvod FMP-a 26:21 bilo kratkog daha. Obradovićevi puleni su ubrzo došli do izjednačenja (26:26), nakon čega je meč bio u egalu sve do finiša druge deonice kada su Nemanja Dangubić i Zek Ledej bili precizni za tri poena, a ekipa iz Humske stigla do viška od devet poena (50:41), što je bila razlika i nakon 20 minuta igre (52:43).', 'placeholder-news.jpg', 'dusan3', '2022-02-19 00:00:00', 'partizan, kosarka, fmp, kup radivoja koraca, nis, zvezda, crvena, finale, zeljko obradovic', 'dozvoljena', 'Ko&scaron;arka&scaron;i Partizana plasirali su se u finale Kupa Radivoja Koraća pobedom nad FMP Železnikom 92:89.'),
(38, 'Vest 4', '<br /><br />\r\nReprezentativac Srbije je u 33. sekundi utakmice na asistenciju Danila postigao najbrži gol u istoriji Lige šampiona od strane jednog debitanta. Ipak, to nije bilo dovoljno za pobedu pošto je u 66. minutu Dani Pareho doneo izjadnečenje domaćoj ekipi.<br /><br />\r\nVlahović je postao najbrži debitant koji je kao starter u Ligi šampiona postigao gol, prestigavši Andreasa Melera iz Borusije Dortmund još od 1995. godine.<br />\r\n     <br />\r\n     On je prihvatio dubinsku loptu Danila na grudi i bez gledanja uputio udarac iz prve kroz noge štopera Viljareala u sam ugao gola Heronima Ruljija.<br />\r\n     <br />\r\n     Mogao je srpski napadač i do gola u finišu utakmice kada je majstorskim udarcem umalo po drugi put savladao  golmana Viljareala koji je ovoga puta izašao kao pobednik iz tog duela.<br /><br />\r\n     \r\n     Tokom prvog poluvremena je mogao i do asistencije, ali je njegov sjajan potez i dodavanje za Lokatelija završilo pored gola.<br /><br />\r\n     Ono što može da brine trenera Juventusa Masimilijana Alegrija jeste povreda Vestona Mekenija koji je uz Vlahovića bio jedan od najboljih igrača na terenu, ali je sredinom drugog poluvremena izašao zbog povrede, a morali su da mu pomognu da napusti teren jer nije bio u stanju sam da hoda.<br /><br />\r\n     Juventus se odlučio na defanzivu i igru iz kontranapada, ali je zbog takvog pristupa na kraju bio kažnjen kada je Kapue poslao loptu u srce kaznenog prostora i promašao Pareha koji je neshvatljivo ostao zaboravljen i rutinski realizovao veliku šansu.<br /><br />\r\n     Revanš će se igrati u Torinu 16. marta.<br /><br />\r\n     Bilo je jasno da ćemo od samog starta gledati poseban meč.\r\n\r\n\r\n\r\n\r\ndusan', 'placeholder-news.jpg', 'dusan', '2022-02-23 00:00:00', 'fudbal, juventus, vlahovic, liga sampiona, gol, viljareal, napadac, srbija, torino', 'dozvoljena', 'Fudbaleri Juventusa su odigrali nere&scaron;eno 1:1 (0:1) na gostovanju Viljarealu u prvoj utakmici osmine finala Lige &scaron;ampiona, a veče je obeležio Du&scaron;an Vlahović.'),
(54, 'Vest 3', '<br />\r\nReprezentativac Srbije je u 33. sekundi utakmice na asistenciju Danila postigao najbrži gol u istoriji Lige šampiona od strane jednog debitanta. Ipak, to nije bilo dovoljno za pobedu pošto je u 66. minutu Dani Pareho doneo izjadnečenje domaćoj ekipi.<br />\r\nVlahović je postao najbrži debitant koji je kao starter u Ligi šampiona postigao gol, prestigavši Andreasa Melera iz Borusije Dortmund još od 1995. godine.<br />\r\n     <br />\r\n     On je prihvatio dubinsku loptu Danila na grudi i bez gledanja uputio udarac iz prve kroz noge štopera Viljareala u sam ugao gola Heronima Ruljija.<br />\r\n     <br />\r\n     Mogao je srpski napadač i do gola u finišu utakmice kada je majstorskim udarcem umalo po drugi put savladao  golmana Viljareala koji je ovoga puta izašao kao pobednik iz tog duela.<br />\r\n     <br />\r\n     Tokom prvog poluvremena je mogao i do asistencije, ali je njegov sjajan potez i dodavanje za Lokatelija završilo pored gola.<br />\r\n     Ono što može da brine trenera Juventusa Masimilijana Alegrija jeste povreda Vestona Mekenija koji je uz Vlahovića bio jedan od najboljih igrača na terenu, ali je sredinom drugog poluvremena izašao zbog povrede, a morali su da mu pomognu da napusti teren jer nije bio u stanju sam da hoda.<br />\r\n     Juventus se odlučio na defanzivu i igru iz kontranapada, ali je zbog takvog pristupa na kraju bio kažnjen kada je Kapue poslao loptu u srce kaznenog prostora i promašao Pareha koji je neshvatljivo ostao zaboravljen i rutinski realizovao veliku šansu.<br />\r\n     Revanš će se igrati u Torinu 16. marta.<br />\r\n     Bilo je jasno da ćemo od samog starta gledati poseban meč.<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\ndusan', 'placeholder-news.jpg', 'dusan', '2022-03-07 23:31:38', 'dgfd', 'dozvoljena', 'Fudbaleri Juventusa su odigrali nere&scaron;eno 1:1 (0:1) na gostovanju Viljarealu u prvoj utakmici osmine finala Lige &scaron;ampiona, a veče je obeležio Du&scaron;an Vlahović.'),
(63, 'Vest 2', '\"Telefon nikada ne prestaje da zvoni. Prvi put sam iskusio to pre dve godine kada je krenuo Adrija tur. Ovo su sada slatke muke. Što se tiče samih tenisera ja sam sa mnogima bio u kontaktu dok sam igrao profesionalni tenis i sve su to sjajni momci. Oni imaju svoje agente koji su dosta žustriji i teži za pregovore, ali mnogi od njih su bili već u Beogradu. <br />\r\n<br />\r\nOsetili su naše gostoprimstvo i na koji način mi komuniciramo i sarađujemo s njima, mnogima je velika čast i zadovoljstvo što će se vratiti. Dočekaćemo ih još bolje nego prošle godine i da nam se vraćaju svake godine\", rekao je najmlađi Đoković za Nova.rs.', 'placeholder-news.jpg', 'dusan', '2022-03-21 20:13:27', 'djokovic', 'dozvoljena', 'Direktor Serbia Opena obja&scaron;njava kako su obezbeđeni idealni uslovi za tenisere, a u jednom trenutku je, s posebnim osmehom, spomenuo i rođenog '),
(65, 'Borini dani 3', 'pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor elit sed vulputate mi sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum varius sit amet mattis vulputate enim nulla aliquet <br />\r\n<br />\r\nporttitor lacus luctus accumsan tortor posuere ac ut consequat semper viverra nam libero justo laoreet sit amet cursus sit amet dictum sit amet justo donec enim diam vulputate ut pharetra sit amet aliquam id diam maecenas ultricies mi eget mauris pharetra et ultrices neque ornare aenean euismod elementum nisi quis <br />\r\n<br />\r\neleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna neque viverra justo nec ultrices dui sapien eget mi proin sed libero enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare', 'Gimnazija_S.Sremac_u_Nišu.jpg', 'dusan', '2022-03-24 22:29:38', 'borini dani', 'dozvoljena', 'in nibh mauris cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis'),
(66, 'Borini dani 2', 'pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor elit sed vulputate mi sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum varius sit amet mattis vulputate <br />\r\n<br />\r\nenim nulla aliquet porttitor lacus luctus accumsan tortor posuere ac ut consequat semper viverra nam libero justo laoreet sit amet cursus sit amet dictum sit amet justo donec enim diam vulputate ut pharetra sit amet aliquam id diam maecenas ultricies mi eget mauris pharetra et ultrices neque ornare aenean euismod elementum nisi quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna neque <br />\r\n<br />\r\nviverra justo nec ultrices dui sapien eget mi proin sed libero enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare', 'Gimnazija_S.Sremac_u_Nišu.jpg', 'dusan', '2022-03-24 22:31:01', 'borini dani', 'dozvoljena', 'pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor elit sed vulputate mi sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum varius sit amet mattis vulputate <br />\r\n'),
(67, 'Borini dani 1', '<p>pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor elit sed vulputate mi sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum varius sit amet mattis <br>\r\n<br>\r\nvulputate enim nulla aliquet porttitor lacus luctus accumsan tortor posuere ac ut consequat semper viverra nam libero justo laoreet sit amet cursus sit amet dictum sit amet justo donec enim diam vulputate ut pharetra sit amet aliquam id diam maecenas ultricies mi eget mauris pharetra et ultrices <br>\r\n<span style=\"background-color: rgb(0, 0, 255);\"><font color=\"#efefef\"><br><br></font></span></p><p style=\"text-align: justify; \"><br></p>', 'Gimnazija_S.Sremac_u_Nišu.jpg', 'dusan', '2022-03-24 22:31:54', 'borini dani', 'dozvoljena', 'pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor elit sed vulputate mi sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum varius sit amet mattis '),
(68, 'Vest 1', '<p><span style=\"font-family: \" arial=\"\" black\";\"=\"\"><b>pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor elit sed vulputate mi sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum varius sit amet mattis vulputate</b></span></p><p><u> enim nulla aliquet porttitor lacus luctus accumsan tortor posuere ac ut consequat semper viverra nam libero justo laoreet sit amet \r\n\r\ncursus sit amet dictum sit amet justo donec enim diam vulputate ut pharetra sit amet aliquam id diam maecenas ultricies mi eget mauris pharetra et ultrices neque ornare aenean </u></p><h1><ul><li style=\"text-align: left;\">euismod elementum nisi quis eleifend\r\n</li></ul></h1><h2><ul><li style=\"text-align: left;\">quam adipiscing vitae proin sagittis nisl\r\nrhoncus mattis rhoncus </li></ul></h2><h3><ul><li style=\"text-align: left;\">urna neque viverra\r\njusto nec ultrices dui sapien eget mi </li></ul></h3><h4><ul><li style=\"text-align: left;\">proin sed\r\nlibero enim sed faucibus turpis in eu mi bibendum\r\nneque </li></ul><h5><ul><li style=\"text-align: left;\">egestas congue quisque egestas diam in arcu\r\ncursus euismod </li></ul></h5><h5><h6><ul><li style=\"text-align: left;\">quis viverra nibh cras pulvinar mattis\r\nnunc</li><li style=\"text-align: left;\"><br></li></ul></h6></h5><blockquote><pre><ul><li style=\"text-align: left;\"> sed blandit libero volutpat sed cras ornare</li></ul></pre></blockquote></h4><ul style=\"padding: 0px; margin: 0px; box-sizing: border-box; color: rgb(0, 0, 0); font-family: sans-serif; font-size: 20px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 246, 246); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><li style=\"padding: 0px; margin: 0px; box-sizing: border-box; list-style: none; text-align: left;\"><span style=\"padding: 0px; margin: 0px; box-sizing: border-box; background-color: rgb(0, 0, 255);\">euismod elementum nisi quis eleifend</span></li><li style=\"padding: 0px; margin: 0px; box-sizing: border-box; list-style: none; text-align: left;\"><span style=\"padding: 0px; margin: 0px; box-sizing: border-box; background-color: rgb(0, 0, 255);\">quam adipiscing vitae proin sagittis nisl</span></li><li style=\"padding: 0px; margin: 0px; box-sizing: border-box; list-style: none; text-align: left;\"><span style=\"padding: 0px; margin: 0px; box-sizing: border-box; background-color: rgb(0, 0, 255);\">rhoncus mattis rhoncus urna neque viverra</span></li><li style=\"padding: 0px; margin: 0px; box-sizing: border-box; list-style: none; text-align: left;\"><span style=\"padding: 0px; margin: 0px; box-sizing: border-box; background-color: rgb(0, 0, 255);\">justo nec ultrices dui sapien eget mi proin sed</span></li><li style=\"padding: 0px; margin: 0px; box-sizing: border-box; list-style: none; text-align: left;\"><span style=\"padding: 0px; margin: 0px; box-sizing: border-box; background-color: rgb(0, 0, 255);\">libero enim sed faucibus turpis in eu mi bibendum</span></li><li style=\"padding: 0px; margin: 0px; box-sizing: border-box; list-style: none; text-align: left;\"><span style=\"padding: 0px; margin: 0px; box-sizing: border-box; background-color: rgb(0, 0, 255);\">neque egestas congue quisque egestas diam in arcu</span></li><li style=\"padding: 0px; margin: 0px; box-sizing: border-box; list-style: none; text-align: left;\"><span style=\"padding: 0px; margin: 0px; box-sizing: border-box; background-color: rgb(0, 0, 255);\">cursus euismod quis viverra nibh cras pulvinar mattis</span></li><li style=\"padding: 0px; margin: 0px; box-sizing: border-box; list-style: none; text-align: left;\"><span style=\"padding: 0px; margin: 0px; box-sizing: border-box; background-color: rgb(0, 0, 255);\">nunc sed blandit libero volutpat sed cras ornare</span></li></ul><ul><li style=\"text-align: left;\"><span style=\"background-color: rgb(0, 0, 255);\"></span></li><li style=\"text-align: left;\"></li></ul><p><br></p>', 'placeholder-news.jpg', 'dusan', '2022-03-24 22:34:03', 'kosarka', 'dozvoljena', 'ultrices dui sapien eget mi proin sed libero enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare');

-- --------------------------------------------------------

--
-- Table structure for table `userlikesnews`
--

CREATE TABLE `userlikesnews` (
  `userLikesNewsId` int(3) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `newsId` int(3) DEFAULT NULL,
  `userLikesNewsTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlikesnews`
--

INSERT INTO `userlikesnews` (`userLikesNewsId`, `userId`, `newsId`, `userLikesNewsTime`) VALUES
(97, 2, 35, NULL),
(100, 2, 29, NULL),
(102, 1, 30, NULL),
(109, 2, 16, NULL),
(115, 2, 28, NULL),
(116, 2, 10, NULL),
(117, 2, 30, NULL),
(118, 2, 63, NULL),
(119, 2, 8, NULL),
(121, 2, 54, NULL),
(122, 2, 15, NULL),
(123, 2, 9, NULL),
(124, 2, 67, NULL),
(125, 2, 68, NULL),
(126, 2, 38, NULL),
(127, 2, 26, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_uid` varchar(40) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_pwd` varchar(256) NOT NULL,
  `user_admin` tinyint(1) DEFAULT NULL,
  `user_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_uid`, `user_email`, `user_pwd`, `user_admin`, `user_image`) VALUES
(1, 'Luka Spasic', 'luka.spasic@borastankovic.edu.rs', '$2y$10$J2k/rESmDtkn5.abBPO9yOJIpGT3eSI2ktQ3T8MJvakrA89tJia82', 1, '104306eebea462655943f9587768a08f_400x400.jpg'),
(2, 'Dusan Velickovic', 'dusan.velickovic@borastankovic.edu.rs', '$2y$10$qmy3yqcQRGI8xk/38.3X.Ox9YwnJMaPwC6KyNSpfIHqpomP59OYP2', 1, '90963900_295795948069769_7483083938856960000_n.jpg'),
(3, 'Rasta Milic', 'milic.rasta@borastankovic.edu.rs', '$2y$10$qqSpQXrstJTYedO5JF76EuqFo6yz3YBXBGjSj3eLNK9OHFWB5jIZe', 0, 'ef240bd4f729f8fe59372b093eeeac76.jpg'),
(24, 'Nikola Nikolic', 'nikola@gmail.com', '$2y$10$nuwuwXdGMKdse7Mqet9aW.ooN2V4uBPsuoLeUpMDupTRA1iWAx5T6', 0, '1645561739-h_57498741-750x500.jpg'),
(26, 'Ivan Kostic', 'ivan@gmail.com', '$2y$10$gcVSJmZXEO4qR5KGNVqoZOev1LfTMvd/u3Ooztd3gLoFJjI2OmeKK', 0, 'placeholderVest.jpg'),
(27, 'Sifra Sifric', 'sifra@gmail.com', '$2y$10$BDM/H0k/B7I3rxByzkD6tuAm4.fJtFHml0zJA7HnkMDs2HUcnAyrS', 1, 'placeholderKorisnik.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentId`),
  ADD KEY `newsId` (`newsId`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messagesId`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsId`);

--
-- Indexes for table `userlikesnews`
--
ALTER TABLE `userlikesnews`
  ADD PRIMARY KEY (`userLikesNewsId`),
  ADD KEY `newsId` (`newsId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messagesId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `userlikesnews`
--
ALTER TABLE `userlikesnews`
  MODIFY `userLikesNewsId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`newsId`) REFERENCES `news` (`newsId`);

--
-- Constraints for table `userlikesnews`
--
ALTER TABLE `userlikesnews`
  ADD CONSTRAINT `userlikesnews_ibfk_1` FOREIGN KEY (`newsId`) REFERENCES `news` (`newsId`),
  ADD CONSTRAINT `userlikesnews_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
