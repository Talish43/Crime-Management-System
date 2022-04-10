-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 07:24 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crime`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `cell` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `type`, `cell`, `city`, `pass`, `email`) VALUES
(3, 'Talish', 'superadmin', '03046767793', 'Lahore', '12345', 'jam.talish@gmail.com'),
(4, 'Babar', 'admin', '03088821388', 'Lahore', '12345', 'jambabar123@gmail.com'),
(5, 'Mohsin', 'sho', '03017431817', 'Faisalabad', '12345', 'mohsin@gmail.com'),
(6, 'Mazhar', 'constable', '03466368793', 'Lahore', '12345', 'jam.tushi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(700) NOT NULL,
  `date` timestamp(4) NOT NULL DEFAULT CURRENT_TIMESTAMP(4) ON UPDATE CURRENT_TIMESTAMP(4)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `phone`, `email`, `message`, `date`) VALUES
(1, 'Talish Nazir', 'Lahore', 'azam@gmail.com', '', '2019-07-31 01:56:29.8212'),
(4, 'Talish Nazir', '03046767793', 'talishnazir875@gmail.com', 'Hi Sir I Just Want To Talk To Admin', '2019-07-31 01:58:33.8635'),
(6, 'Talish Nazir', '03466368793', 'mohsin@gmail.com', 'kjlkjk', '2019-07-31 02:31:43.1405'),
(7, 'Talish Nazir', '03046767793', 'azam@gmail.com', 'l;klklkklkl;k', '2019-07-31 02:32:52.2307');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_criminal`
--

CREATE TABLE `tbl_criminal` (
  `id` int(100) NOT NULL,
  `firstname` varchar(300) NOT NULL,
  `lastname` varchar(300) NOT NULL,
  `image` varchar(3000) NOT NULL,
  `type` varchar(300) NOT NULL,
  `country` varchar(300) NOT NULL,
  `city` varchar(300) NOT NULL,
  `religion` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_criminal`
--

INSERT INTO `tbl_criminal` (`id`, `firstname`, `lastname`, `image`, `type`, `country`, `city`, `religion`, `email`) VALUES
(17, 'Ayyan', 'Ali', 'img/Criminal/ayan_ali.jpg', 'Money Launderer', 'UAE', 'Dubai', 'Somali Muslim', 'ayyan@gmail.com'),
(18, 'Sardar Usman ', 'Buzdar', 'img/Criminal/usman.jpg', 'Convicted Of Crimes', 'Pakistan', 'Dera Ghazi Khan', 'Muslim', 'usmanbuzdar@gmail.com'),
(20, 'Uzair', 'Balooch', 'img/Criminal/uzair1.jpg', 'Gangster', 'Pakistan', 'Karachi', 'Muslim', 'uzairkhan@gmail.com'),
(21, 'Imran', 'Ahmed', 'img/Criminal/imran.jpg', 'Terrorist', 'Pakistan', 'Pakpattan', 'Muslim', 'imranahmed@gmail.com'),
(22, 'Ali', 'Sher', 'img/Criminal/alisher.jpg', 'Highway Robbery', 'Pakistan', 'Kasur', 'Muslim', 'alisher@gmail.com'),
(23, 'Ali', 'Asghar', 'img/Criminal/ali.jpg', 'Street Robbery', 'Pakistan', 'Sheikhopoora', 'Muslim', 'aliasghar@gmail.com'),
(24, 'Shahbaz', 'Khan', 'img/Criminal/shahbaz.jpg', 'Drug Peddler', 'Pakistan', 'Lahore', 'Muslim', 'shahbazkhan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fir`
--

CREATE TABLE `tbl_fir` (
  `id` int(250) NOT NULL,
  `application_number` int(255) NOT NULL,
  `applicant_name` varchar(300) NOT NULL,
  `applicant_cell` varchar(300) NOT NULL,
  `applicant_cnic` varchar(200) NOT NULL,
  `address` varchar(3000) NOT NULL,
  `district` varchar(1000) NOT NULL,
  `city` varchar(1000) NOT NULL,
  `fir_catagory` varchar(200) NOT NULL,
  `officer_name` varchar(200) NOT NULL,
  `officer_contact` varchar(200) NOT NULL,
  `police_station` varchar(200) NOT NULL,
  `date` datetime(4) NOT NULL DEFAULT CURRENT_TIMESTAMP(4),
  `pass` varchar(200) NOT NULL,
  `placeofocc` varchar(1000) NOT NULL,
  `dateofocc` varchar(1000) NOT NULL,
  `timeofocc` varchar(1000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `status` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_help`
--

CREATE TABLE `tbl_help` (
  `id` int(30) NOT NULL,
  `hdtype` varchar(300) NOT NULL,
  `hddetail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_help`
--

INSERT INTO `tbl_help` (`id`, `hdtype`, `hddetail`) VALUES
(2, 'Help Updated ', 'Detail Updated Updated Now Now');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(30) NOT NULL,
  `ntype` varchar(10000) NOT NULL,
  `nheading` varchar(10000) NOT NULL,
  `image` varchar(20000) NOT NULL,
  `ndetails` varchar(20000) NOT NULL,
  `date` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `ntype`, `nheading`, `image`, `ndetails`, `date`) VALUES
(24, 'Crime', 'Two minors found dead', 'img/news/news1.jpg', 'Lahore: Two minors were found dead from different areas of the metropolis on Friday.\r\n\r\nAccording to rescue sources, a five-year-old unknown boy with burnt marks on his body was found dead from a garbage dump in Khamiso Goth of New Karachi. The identity of the deceased could not be identified yet.\r\n\r\nThe body was shifted to Abbasi Shaheed Hospital for medico-legal formalities.\r\n\r\nSeparately, the body of a newborn, seemed to be two days old, was found in Lyariâ€™s Behar Colony.\r\n\r\nThe body was moved to the morgue after completion of police legal formalities.', '2019-08-19 16:54:12.91'),
(25, 'Crime', 'Police recover abducted sisters', 'img/news/news2.jpg', 'MUZAFFARGARH: Police on Sunday recovered two sisters who were allegedly abducted from Jaampur one year ago.\r\n\r\nAccording to the details, two daughters of Sabir Hussain, a resident of Basti Cheena, had allegedly been abducted a year ago.\r\n\r\nA police team, led by Sadar police station SHO Jaampur Saifullah Khan Joiya raided Miran Hayat area of Khangarh district Muzaffargarh and recovered the girls.\r\n\r\nThe police produced the recovered girls before a court, which ordered to send them with their father.', '2019-08-19 16:57:11.06'),
(26, 'Crime', 'Girl allegedly gang-raped by six men in Jehlum', 'img/news/news3.jpg', 'JEHLUM: A teenage girl was allegedly gang-raped by six men in Jehlum on Saturday.\r\n\r\nAccording to details, the 22-year-old girl was sexually assaulted by six men in a private housing society.\r\n\r\nThe victim has been shifted to the hospital for a medical check-up.\r\n\r\nPolice have registered a case against six men including the local counselor after recording the girlâ€™s statement.\r\n\r\nTwo of the suspects have been arrested while efforts are on to nab the other culprits, police said.', '2019-08-19 16:59:52.84'),
(28, 'Crime', 'People roast trotters, heads under govtâ€™s nose', 'img/news/news5.jpeg', 'LAHORE: Despite the district administrationâ€™s strict monitoring on the first and second day of Eid-ul-Azha, the business roasting siri paye of sacrificial animals was observed in different areas of the city even though the administration had warned of lodging FIRs on violation of the law for the practice, banned under Section 144.\r\n\r\nMany people in areas, including Gawalmandi, Sanda Road, Mozang Adda, Allama Iqbal Town, Faiz Bagh, Shadbagh, Mughalpura, Dharampura, Dubbanpura, Sabzazar, Marghazar and other areas, were doing this business, whereas the roasting rates were Rs100 per trotter and Rs200 per head.\r\n\r\nSimilarly, the Lahore Waste Management Company (LWMC) failed to remove offals from several parts of the city on the first day of Eid, with streets littered, reeking of blood and animal waste. The second day was different after the protests by locals, the city presented a clean look.\r\n\r\nOn the other hand, the district administration claimed that Lahore Deputy Commissioner (DC) Saliha Saeed had strictly ordered officials of the district administration to monitor the cityâ€™s cleanliness whereas the DC herself monitored the situation as well.\r\n\r\nAccording to a press release by the DC office, â€œThe DC had distributed the waste bags among the citizen. She also distributed the food among the workers of LWMC who were on duty on the first day of Eid. She also visited the LWMC office on the second day and presided a meeting about the waste management of the city. She also directed the concern officials to ensure the cleanliness before and after Eid in the cityâ€.\r\n\r\nSimilarly, an official of LWMC told this scribe that LWMC had planned a comprehensive strategy for the collection, transportation and disposal of animal waste.\r\n\r\nâ€œFor the distribution of waste bags the LWMC had established the camps in each union council (UC) whereas the company had also established the waste collection points for private/cooperative societies and cantonment board, Lahore,â€ he said.\r\n\r\nâ€œAll of the cleanliness operations for Eid-ul-Azha have been monitored through a comprehensive system to ensure no lapses. Arrangements have been made at three sites for disposal of animal waste. These sites are Lakhoder Dumpsite, Mehmood Booti Dumpsite and Saggian Dumpsiteâ€ he concluded.', '2019-08-19 17:05:40.16'),
(29, 'Crime', 'Hamza Shehbazâ€™s physical remand extended by 11 days in assets case', 'img/news/news6.jpg', 'LAHORE: An accountability court on Saturday extended Pakistan Muslim League-Nawaz (PML-N) and Punjab Opposition leader Hamza Shehbazâ€™s physical remand by 11 days in assets beyond means case.\r\n\r\nDuring the hearing, Hamza told the court that the corruption charges against him are baseless.\r\n\r\nâ€œIf I have done corruption then the National Accountability Bureau (NAB) should present evidence in court. NAB along with the court should prove the corruption in front of the public,â€ Hamza said.\r\n\r\nThe court then approved the accountability watchdogâ€™s request to extend the physical remand of the PML-N leader and ordered Hamza to be presented on August 21.\r\n\r\nOn June 11, NAB had arrested Hamza after the Lahore High Court (LHC) rejected his interim bail in the Ramzan Sugar Mills and money laundering cases.\r\n\r\nAccording to the accountability watchdog, the PML-N leader made five companies from 2006 to 2009 and did a business of more than Rs19billion.', '2019-08-19 17:06:54.38'),
(30, 'Crime', 'Another man held for indecent exposure in Lahore', 'img/news/news7.jpg', 'LAHORE: Police arrested a man on Friday who harassed a girl in Lahore by flashing his private body part.\r\n\r\nPolice started investigating this case when the girl, who had been harassed, uploaded a video of him on social media in which he was on his motorcycle and could be clearly seen displaying his private body part to the girl who, at that time, was passing by.\r\nâ€œToday at 6pm this guy was near Thokar Niaz Baig j***** off [while] looking at me. I was in a decent dress so nobody can say I provoked him to m*******. A lot of girls face this. Please share this to make it reach his family and maybe authorities will also take action against such people,â€ the victim wrote in a tweet along with the video.\r\n\r\nLahore CCPO Lahore BA Nasir, took strict notice of the incident and directed SP Sadar Ahsan Saifullah to take prompt action against the culprit.\r\nThe video made by the victim helped police to locate and arrest the culprit. The suspect, identified through his motorcycle registration as Tayyab Ahmed was picked up by police from his residence which is in Westwood Colony, Raiwind.\r\n\r\nAlong with the suspect, police also confiscated the motorcycle used in committing this crime.\r\n\r\nAn FIR, under sections 1875/19,294/268 PPC, has also been registered at Chung Police station.\r\n\r\nThe CCPO acknowledged immediate action of the Sadar division and emphasised that people should not hesitate for a second and approach police right away to report such cases and, on the other hand, police should also facilitate the victims and their families on a priority basis. â€œIt is really unfortunate that women get harassed. Everyone in society should come forward to root out this emerging evil social practice,â€ he said.\r\n\r\nOn July 26, a similar incident took place in the cityâ€™s Raiwind neighbourhood, where police arrested a man who was sexually harassing girls.\r\n\r\nLater, the suspect was identified as Arsalan Manzoor, a resident of a private housing society in Chung. This issue gained spotlight when victim uploaded hs video from an anonymous twitter handle.', '2019-08-19 17:08:38.09'),
(31, 'Crime', '5.860 Kg hashish seized, 26 arrested in Sargodha', 'img/news/news9.jpg', 'SARGODHA  - Police have arrested 26 accused and recovered narcotics and weapons from them during last week.\r\n\r\nAccording to police sources here on Saturday, during drive against drug pushers and criminals, police teams of different police stations conducted raids at various place in their jurisdiction and arrested 26 accused.\r\n\r\nThe police also recovered 5.860 Kilograms Hashish, 485 bottles of liquor, three Pistols 30 bore, one Rifle 444 bore and three Guns 12 bore from them.\r\n\r\nThe arrested were identified as Muhammad Fayyaz, Muhammad Altaf, Niaz Ahmad, Safdar Abbas, Ghulam Abbas, Ahmad Saeed, Ulfat Abbas, Abid Hussain, Khurram Shahzad, Shafqat Ullah, Noor Muhammad, Shabbir Ahmad, Muhammad Ali, Yousaf, Khalid and others.\r\n\r\nPolice have registered separate cases against them, sources added.', '2019-08-20 01:26:43.07'),
(32, 'Crime', 'Two policemen injured as unknown suspects open fire in Islamabad', 'img/news/news10.jpg', 'ISLAMABAD (Dunya News) â€“ Unknown suspects on Monday have opened fire at two policemen and injured them in Islamabad.\r\n\r\nAccording to details, the officers have caught the attackers and recovered two pistols and bullets from their possession. \r\n\r\nMeanwhile, DIG operations has announced prize money for the victim officers due to their bravery.  ', '2019-08-20 01:28:34.99'),
(34, 'Crime', 'Lahore: Police arrest gang involved in cattle theft before Eid Ul Azha', 'img/news/news11.jpg', 'LAHORE  â€“ . Police have arrested a cattle theft gang that was active in provincial capital before Eid Ul Azha.\r\n\r\nAs per details, Dolphin Force have arrested a gang involved in cattle theft from Sagian Pull area of Lahore. Two members of the gang were arrested by police while 3 others managed to flee.\r\n\r\nPolice recovered 5 goats , mobile phones, Van and amunation from the possession of thieves. The suspects include Abid and Tariq.', '2019-08-20 01:33:30.22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registered_users`
--

CREATE TABLE `tbl_registered_users` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `cnic` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registered_users`
--

INSERT INTO `tbl_registered_users` (`id`, `name`, `email`, `pass`, `cnic`, `phone`) VALUES
(2, 'Talish Nazir', 'jam.talish@gmail.com', '12345', '3630399398521', '03046767793'),
(3, 'Talish Nazir', 'jam.talish@gmail.com', '1123123', '3630399398521', '03088821'),
(4, 'Talish Nazir', 'jam.talish@gmail.com', '123123', '44444', '44444444'),
(5, 'Talish Nazir', 'talishnazir875@gmail.com', '123123', '3630399398521', '03046767793'),
(6, 'Talish Nazir', 'mohsin@gmail.com', '12345', '12345', '44444444'),
(7, 'Talish Nazir', 'jam.talish@gmail.com', '12345', '36303123', '03046767793'),
(8, 'Talish Nazir', 'jam.talish@gmail.com', '12345', '36303123', '03046767793'),
(9, 'Talish Nazir', 'jam.talish@gmail.com', '12345', '36303123', '03046767793'),
(10, 'Talish Nazir', 'jambabar123@gmail.com', '12345', '44444', '03046767793');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_station`
--

CREATE TABLE `tbl_station` (
  `id` int(30) NOT NULL,
  `scode` varchar(300) NOT NULL,
  `scity` varchar(300) NOT NULL,
  `sname` varchar(300) NOT NULL,
  `shoname` varchar(300) NOT NULL,
  `scontact` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_station`
--

INSERT INTO `tbl_station` (`id`, `scode`, `scity`, `sname`, `shoname`, `scontact`, `email`) VALUES
(2, '12345', 'Lahore', 'Ichra', 'Talish', '03046767793', 'mohsin@gmail.com'),
(3, '12345', 'Lahore', 'Ichra', 'Talish', '123456', 'tushi123@gmail.com'),
(4, '12345', 'Lahore', 'Basti Malook', 'Khadim Hussain', '03046767793', 'jam.talish@gmail.com'),
(5, '111', 'Lahore', 'Lar Multan', 'Talish', '03046767793', 'talishnazir875@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_update`
--

CREATE TABLE `tbl_update` (
  `id` int(30) NOT NULL,
  `upheading` varchar(100) NOT NULL,
  `uptype` varchar(200) NOT NULL,
  `updetail` varchar(1000) NOT NULL,
  `postedby` varchar(100) NOT NULL,
  `date` datetime(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_update`
--

INSERT INTO `tbl_update` (`id`, `upheading`, `uptype`, `updetail`, `postedby`, `date`) VALUES
(1, 'Azad Kashmir Issue', 'Info', 'This Is Info Detail', 'Admin', '2019-08-06 12:38:15.003'),
(2, '', 'Info', 'info info info updated', '', '2019-08-06 12:38:15.003'),
(3, 'High Alert', 'Warning', 'High Alert On Kashmir Border As Indian Are Going To Attack On Kashmir', 'Super Admin', '2019-08-06 14:56:58.902');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(30) NOT NULL,
  `application_number` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `name` text NOT NULL,
  `cnic` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_criminal`
--
ALTER TABLE `tbl_criminal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fir`
--
ALTER TABLE `tbl_fir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_help`
--
ALTER TABLE `tbl_help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_registered_users`
--
ALTER TABLE `tbl_registered_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_station`
--
ALTER TABLE `tbl_station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_update`
--
ALTER TABLE `tbl_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_criminal`
--
ALTER TABLE `tbl_criminal`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_fir`
--
ALTER TABLE `tbl_fir`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_help`
--
ALTER TABLE `tbl_help`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_registered_users`
--
ALTER TABLE `tbl_registered_users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_station`
--
ALTER TABLE `tbl_station`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_update`
--
ALTER TABLE `tbl_update`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
