-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2022 at 12:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` varchar(100) NOT NULL,
  `id_summit` int(11) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `id_summit`, `username`, `password`, `status`) VALUES
('ADM_jui78sge', NULL, 'admin', 'a9eb8ecd8cb14bbcdc22428f514b92e17fd693a86159d7a20faaa5e37f299bc4', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ambassador`
--

CREATE TABLE `ambassador` (
  `id_ambassador` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `referral_code` varchar(100) DEFAULT NULL,
  `total_redeem` int(11) DEFAULT 0,
  `photo` text DEFAULT NULL,
  `institution` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `tiktok` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ambassador`
--

INSERT INTO `ambassador` (`id_ambassador`, `name`, `referral_code`, `total_redeem`, `photo`, `institution`, `instagram`, `status`, `tiktok`) VALUES
(9, 'Ilham Sagita Putra', 'ILH001', 1, 'http://127.0.0.1/iys-web/uploads/ambassador/92e476228749137e2e2f1382a3590f5c.png', 'STIKI Malang', 'https://instagram.com/ilhamsagitap', 1, 'https://tiktok.com/@-');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id_announcement` int(11) NOT NULL,
  `id_summit` int(11) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `poster` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `is_registered` tinyint(4) DEFAULT 0,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id_announcement`, `id_summit`, `title`, `poster`, `content`, `is_registered`, `date`) VALUES
(23, 1, 'gwegeg', NULL, 'sdfaswdfasdgawegasdfawe', 1, '2022-04-15 22:14:22'),
(24, 1, NULL, NULL, NULL, 0, '2022-05-18 09:17:39');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id_award` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id_certificate` int(11) NOT NULL,
  `id_user` varchar(100) DEFAULT NULL,
  `file_path` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_templates`
--

CREATE TABLE `certificate_templates` (
  `id_certificate_template` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `file_path` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `mailer_username` varchar(100) DEFAULT NULL,
  `mailer_password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`mailer_username`, `mailer_password`) VALUES
('ilhaja94@gmail.com', '!ilham12345!');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `num_code` int(3) NOT NULL DEFAULT 0,
  `alpha_2_code` varchar(2) DEFAULT NULL,
  `alpha_3_code` varchar(3) DEFAULT NULL,
  `en_short_name` varchar(52) DEFAULT NULL,
  `nationality` varchar(39) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`num_code`, `alpha_2_code`, `alpha_3_code`, `en_short_name`, `nationality`) VALUES
(4, 'AF', 'AFG', 'Afghanistan', 'Afghan'),
(8, 'AL', 'ALB', 'Albania', 'Albanian'),
(10, 'AQ', 'ATA', 'Antarctica', 'Antarctic'),
(12, 'DZ', 'DZA', 'Algeria', 'Algerian'),
(16, 'AS', 'ASM', 'American Samoa', 'American Samoan'),
(20, 'AD', 'AND', 'Andorra', 'Andorran'),
(24, 'AO', 'AGO', 'Angola', 'Angolan'),
(28, 'AG', 'ATG', 'Antigua and Barbuda', 'Antiguan or Barbudan'),
(31, 'AZ', 'AZE', 'Azerbaijan', 'Azerbaijani, Azeri'),
(32, 'AR', 'ARG', 'Argentina', 'Argentine'),
(36, 'AU', 'AUS', 'Australia', 'Australian'),
(40, 'AT', 'AUT', 'Austria', 'Austrian'),
(44, 'BS', 'BHS', 'Bahamas', 'Bahamian'),
(48, 'BH', 'BHR', 'Bahrain', 'Bahraini'),
(50, 'BD', 'BGD', 'Bangladesh', 'Bangladeshi'),
(51, 'AM', 'ARM', 'Armenia', 'Armenian'),
(52, 'BB', 'BRB', 'Barbados', 'Barbadian'),
(56, 'BE', 'BEL', 'Belgium', 'Belgian'),
(60, 'BM', 'BMU', 'Bermuda', 'Bermudian, Bermudan'),
(64, 'BT', 'BTN', 'Bhutan', 'Bhutanese'),
(68, 'BO', 'BOL', 'Bolivia (Plurinational State of)', 'Bolivian'),
(70, 'BA', 'BIH', 'Bosnia and Herzegovina', 'Bosnian or Herzegovinian'),
(72, 'BW', 'BWA', 'Botswana', 'Motswana, Botswanan'),
(74, 'BV', 'BVT', 'Bouvet Island', 'Bouvet Island'),
(76, 'BR', 'BRA', 'Brazil', 'Brazilian'),
(84, 'BZ', 'BLZ', 'Belize', 'Belizean'),
(86, 'IO', 'IOT', 'British Indian Ocean Territory', 'BIOT'),
(90, 'SB', 'SLB', 'Solomon Islands', 'Solomon Island'),
(92, 'VG', 'VGB', 'Virgin Islands (British)', 'British Virgin Island'),
(96, 'BN', 'BRN', 'Brunei Darussalam', 'Bruneian'),
(100, 'BG', 'BGR', 'Bulgaria', 'Bulgarian'),
(104, 'MM', 'MMR', 'Myanmar', 'Burmese'),
(108, 'BI', 'BDI', 'Burundi', 'Burundian'),
(112, 'BY', 'BLR', 'Belarus', 'Belarusian'),
(116, 'KH', 'KHM', 'Cambodia', 'Cambodian'),
(120, 'CM', 'CMR', 'Cameroon', 'Cameroonian'),
(124, 'CA', 'CAN', 'Canada', 'Canadian'),
(132, 'CV', 'CPV', 'Cabo Verde', 'Cabo Verdean'),
(136, 'KY', 'CYM', 'Cayman Islands', 'Caymanian'),
(140, 'CF', 'CAF', 'Central African Republic', 'Central African'),
(144, 'LK', 'LKA', 'Sri Lanka', 'Sri Lankan'),
(148, 'TD', 'TCD', 'Chad', 'Chadian'),
(152, 'CL', 'CHL', 'Chile', 'Chilean'),
(156, 'CN', 'CHN', 'China', 'Chinese'),
(158, 'TW', 'TWN', 'Taiwan, Province of China', 'Chinese, Taiwanese'),
(162, 'CX', 'CXR', 'Christmas Island', 'Christmas Island'),
(166, 'CC', 'CCK', 'Cocos (Keeling) Islands', 'Cocos Island'),
(170, 'CO', 'COL', 'Colombia', 'Colombian'),
(174, 'KM', 'COM', 'Comoros', 'Comoran, Comorian'),
(175, 'YT', 'MYT', 'Mayotte', 'Mahoran'),
(178, 'CG', 'COG', 'Congo (Republic of the)', 'Congolese'),
(180, 'CD', 'COD', 'Congo (Democratic Republic of the)', 'Congolese'),
(184, 'CK', 'COK', 'Cook Islands', 'Cook Island'),
(188, 'CR', 'CRI', 'Costa Rica', 'Costa Rican'),
(191, 'HR', 'HRV', 'Croatia', 'Croatian'),
(192, 'CU', 'CUB', 'Cuba', 'Cuban'),
(196, 'CY', 'CYP', 'Cyprus', 'Cypriot'),
(203, 'CZ', 'CZE', 'Czech Republic', 'Czech'),
(204, 'BJ', 'BEN', 'Benin', 'Beninese, Beninois'),
(208, 'DK', 'DNK', 'Denmark', 'Danish'),
(212, 'DM', 'DMA', 'Dominica', 'Dominican'),
(214, 'DO', 'DOM', 'Dominican Republic', 'Dominican'),
(218, 'EC', 'ECU', 'Ecuador', 'Ecuadorian'),
(222, 'SV', 'SLV', 'El Salvador', 'Salvadoran'),
(226, 'GQ', 'GNQ', 'Equatorial Guinea', 'Equatorial Guinean, Equatoguinean'),
(231, 'ET', 'ETH', 'Ethiopia', 'Ethiopian'),
(232, 'ER', 'ERI', 'Eritrea', 'Eritrean'),
(233, 'EE', 'EST', 'Estonia', 'Estonian'),
(234, 'FO', 'FRO', 'Faroe Islands', 'Faroese'),
(238, 'FK', 'FLK', 'Falkland Islands (Malvinas)', 'Falkland Island'),
(239, 'GS', 'SGS', 'South Georgia and the South Sandwich Islands', 'South Georgia or South Sandwich Islands'),
(242, 'FJ', 'FJI', 'Fiji', 'Fijian'),
(246, 'FI', 'FIN', 'Finland', 'Finnish'),
(248, 'AX', 'ALA', 'ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â¦land Islands', 'ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â¦land Island'),
(250, 'FR', 'FRA', 'France', 'French'),
(254, 'GF', 'GUF', 'French Guiana', 'French Guianese'),
(258, 'PF', 'PYF', 'French Polynesia', 'French Polynesian'),
(260, 'TF', 'ATF', 'French Southern Territories', 'French Southern Territories'),
(262, 'DJ', 'DJI', 'Djibouti', 'Djiboutian'),
(266, 'GA', 'GAB', 'Gabon', 'Gabonese'),
(268, 'GE', 'GEO', 'Georgia', 'Georgian'),
(270, 'GM', 'GMB', 'Gambia', 'Gambian'),
(275, 'PS', 'PSE', 'Palestine, State of', 'Palestinian'),
(276, 'DE', 'DEU', 'Germany', 'German'),
(288, 'GH', 'GHA', 'Ghana', 'Ghanaian'),
(292, 'GI', 'GIB', 'Gibraltar', 'Gibraltar'),
(296, 'KI', 'KIR', 'Kiribati', 'I-Kiribati'),
(300, 'GR', 'GRC', 'Greece', 'Greek, Hellenic'),
(304, 'GL', 'GRL', 'Greenland', 'Greenlandic'),
(308, 'GD', 'GRD', 'Grenada', 'Grenadian'),
(312, 'GP', 'GLP', 'Guadeloupe', 'Guadeloupe'),
(316, 'GU', 'GUM', 'Guam', 'Guamanian, Guambat'),
(320, 'GT', 'GTM', 'Guatemala', 'Guatemalan'),
(324, 'GN', 'GIN', 'Guinea', 'Guinean'),
(328, 'GY', 'GUY', 'Guyana', 'Guyanese'),
(332, 'HT', 'HTI', 'Haiti', 'Haitian'),
(334, 'HM', 'HMD', 'Heard Island and McDonald Islands', 'Heard Island or McDonald Islands'),
(336, 'VA', 'VAT', 'Vatican City State', 'Vatican'),
(340, 'HN', 'HND', 'Honduras', 'Honduran'),
(344, 'HK', 'HKG', 'Hong Kong', 'Hong Kong, Hong Kongese'),
(348, 'HU', 'HUN', 'Hungary', 'Hungarian, Magyar'),
(352, 'IS', 'ISL', 'Iceland', 'Icelandic'),
(356, 'IN', 'IND', 'India', 'Indian'),
(360, 'ID', 'IDN', 'Indonesia', 'Indonesian'),
(364, 'IR', 'IRN', 'Iran', 'Iranian, Persian'),
(368, 'IQ', 'IRQ', 'Iraq', 'Iraqi'),
(372, 'IE', 'IRL', 'Ireland', 'Irish'),
(376, 'IL', 'ISR', 'Israel', 'Israeli'),
(380, 'IT', 'ITA', 'Italy', 'Italian'),
(384, 'CI', 'CIV', 'CÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â´te d\'Ivoire', 'Ivorian'),
(388, 'JM', 'JAM', 'Jamaica', 'Jamaican'),
(392, 'JP', 'JPN', 'Japan', 'Japanese'),
(398, 'KZ', 'KAZ', 'Kazakhstan', 'Kazakhstani, Kazakh'),
(400, 'JO', 'JOR', 'Jordan', 'Jordanian'),
(404, 'KE', 'KEN', 'Kenya', 'Kenyan'),
(408, 'KP', 'PRK', 'Korea (Democratic People\'s Republic of)', 'North Korean'),
(410, 'KR', 'KOR', 'Korea (Republic of)', 'South Korean'),
(414, 'KW', 'KWT', 'Kuwait', 'Kuwaiti'),
(417, 'KG', 'KGZ', 'Kyrgyzstan', 'Kyrgyzstani, Kyrgyz, Kirgiz, Kirghiz'),
(418, 'LA', 'LAO', 'Lao People\'s Democratic Republic', 'Lao, Laotian'),
(422, 'LB', 'LBN', 'Lebanon', 'Lebanese'),
(426, 'LS', 'LSO', 'Lesotho', 'Basotho'),
(428, 'LV', 'LVA', 'Latvia', 'Latvian'),
(430, 'LR', 'LBR', 'Liberia', 'Liberian'),
(434, 'LY', 'LBY', 'Libya', 'Libyan'),
(438, 'LI', 'LIE', 'Liechtenstein', 'Liechtenstein'),
(440, 'LT', 'LTU', 'Lithuania', 'Lithuanian'),
(442, 'LU', 'LUX', 'Luxembourg', 'Luxembourg, Luxembourgish'),
(446, 'MO', 'MAC', 'Macao', 'Macanese, Chinese'),
(450, 'MG', 'MDG', 'Madagascar', 'Malagasy'),
(454, 'MW', 'MWI', 'Malawi', 'Malawian'),
(458, 'MY', 'MYS', 'Malaysia', 'Malaysian'),
(462, 'MV', 'MDV', 'Maldives', 'Maldivian'),
(466, 'ML', 'MLI', 'Mali', 'Malian, Malinese'),
(470, 'MT', 'MLT', 'Malta', 'Maltese'),
(474, 'MQ', 'MTQ', 'Martinique', 'Martiniquais, Martinican'),
(478, 'MR', 'MRT', 'Mauritania', 'Mauritanian'),
(480, 'MU', 'MUS', 'Mauritius', 'Mauritian'),
(484, 'MX', 'MEX', 'Mexico', 'Mexican'),
(492, 'MC', 'MCO', 'Monaco', 'MonÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â©gasque, Monacan'),
(496, 'MN', 'MNG', 'Mongolia', 'Mongolian'),
(498, 'MD', 'MDA', 'Moldova (Republic of)', 'Moldovan'),
(499, 'ME', 'MNE', 'Montenegro', 'Montenegrin'),
(500, 'MS', 'MSR', 'Montserrat', 'Montserratian'),
(504, 'MA', 'MAR', 'Morocco', 'Moroccan'),
(508, 'MZ', 'MOZ', 'Mozambique', 'Mozambican'),
(512, 'OM', 'OMN', 'Oman', 'Omani'),
(516, 'NA', 'NAM', 'Namibia', 'Namibian'),
(520, 'NR', 'NRU', 'Nauru', 'Nauruan'),
(524, 'NP', 'NPL', 'Nepal', 'Nepali, Nepalese'),
(528, 'NL', 'NLD', 'Netherlands', 'Dutch, Netherlandic'),
(531, 'CW', 'CUW', 'CuraÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â§ao', 'CuraÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â§aoan'),
(533, 'AW', 'ABW', 'Aruba', 'Aruban'),
(534, 'SX', 'SXM', 'Sint Maarten (Dutch part)', 'Sint Maarten'),
(535, 'BQ', 'BES', 'Bonaire, Sint Eustatius and Saba', 'Bonaire'),
(540, 'NC', 'NCL', 'New Caledonia', 'New Caledonian'),
(548, 'VU', 'VUT', 'Vanuatu', 'Ni-Vanuatu, Vanuatuan'),
(554, 'NZ', 'NZL', 'New Zealand', 'New Zealand, NZ'),
(558, 'NI', 'NIC', 'Nicaragua', 'Nicaraguan'),
(562, 'NE', 'NER', 'Niger', 'Nigerien'),
(566, 'NG', 'NGA', 'Nigeria', 'Nigerian'),
(570, 'NU', 'NIU', 'Niue', 'Niuean'),
(574, 'NF', 'NFK', 'Norfolk Island', 'Norfolk Island'),
(578, 'NO', 'NOR', 'Norway', 'Norwegian'),
(580, 'MP', 'MNP', 'Northern Mariana Islands', 'Northern Marianan'),
(581, 'UM', 'UMI', 'United States Minor Outlying Islands', 'American'),
(583, 'FM', 'FSM', 'Micronesia (Federated States of)', 'Micronesian'),
(584, 'MH', 'MHL', 'Marshall Islands', 'Marshallese'),
(585, 'PW', 'PLW', 'Palau', 'Palauan'),
(586, 'PK', 'PAK', 'Pakistan', 'Pakistani'),
(591, 'PA', 'PAN', 'Panama', 'Panamanian'),
(598, 'PG', 'PNG', 'Papua New Guinea', 'Papua New Guinean, Papuan'),
(600, 'PY', 'PRY', 'Paraguay', 'Paraguayan'),
(604, 'PE', 'PER', 'Peru', 'Peruvian'),
(608, 'PH', 'PHL', 'Philippines', 'Philippine, Filipino'),
(612, 'PN', 'PCN', 'Pitcairn', 'Pitcairn Island'),
(616, 'PL', 'POL', 'Poland', 'Polish'),
(620, 'PT', 'PRT', 'Portugal', 'Portuguese'),
(624, 'GW', 'GNB', 'Guinea-Bissau', 'Bissau-Guinean'),
(626, 'TL', 'TLS', 'Timor-Leste', 'Timorese'),
(630, 'PR', 'PRI', 'Puerto Rico', 'Puerto Rican'),
(634, 'QA', 'QAT', 'Qatar', 'Qatari'),
(638, 'RE', 'REU', 'RÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â©union', 'RÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â©unionese, RÃƒÆ’Ã†â€™'),
(642, 'RO', 'ROU', 'Romania', 'Romanian'),
(643, 'RU', 'RUS', 'Russian Federation', 'Russian'),
(646, 'RW', 'RWA', 'Rwanda', 'Rwandan'),
(652, 'BL', 'BLM', 'Saint BarthÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â©lemy', 'BarthÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â©lemois'),
(654, 'SH', 'SHN', 'Saint Helena, Ascension and Tristan da Cunha', 'Saint Helenian'),
(659, 'KN', 'KNA', 'Saint Kitts and Nevis', 'Kittitian or Nevisian'),
(660, 'AI', 'AIA', 'Anguilla', 'Anguillan'),
(662, 'LC', 'LCA', 'Saint Lucia', 'Saint Lucian'),
(663, 'MF', 'MAF', 'Saint Martin (French part)', 'Saint-Martinoise'),
(666, 'PM', 'SPM', 'Saint Pierre and Miquelon', 'Saint-Pierrais or Miquelonnais'),
(670, 'VC', 'VCT', 'Saint Vincent and the Grenadines', 'Saint Vincentian, Vincentian'),
(674, 'SM', 'SMR', 'San Marino', 'Sammarinese'),
(678, 'ST', 'STP', 'Sao Tome and Principe', 'SÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â£o TomÃƒÆ’Ã†â€™Ãƒâ€šÃ'),
(682, 'SA', 'SAU', 'Saudi Arabia', 'Saudi, Saudi Arabian'),
(686, 'SN', 'SEN', 'Senegal', 'Senegalese'),
(688, 'RS', 'SRB', 'Serbia', 'Serbian'),
(690, 'SC', 'SYC', 'Seychelles', 'Seychellois'),
(694, 'SL', 'SLE', 'Sierra Leone', 'Sierra Leonean'),
(702, 'SG', 'SGP', 'Singapore', 'Singaporean'),
(703, 'SK', 'SVK', 'Slovakia', 'Slovak'),
(704, 'VN', 'VNM', 'Vietnam', 'Vietnamese'),
(705, 'SI', 'SVN', 'Slovenia', 'Slovenian, Slovene'),
(706, 'SO', 'SOM', 'Somalia', 'Somali, Somalian'),
(710, 'ZA', 'ZAF', 'South Africa', 'South African'),
(716, 'ZW', 'ZWE', 'Zimbabwe', 'Zimbabwean'),
(724, 'ES', 'ESP', 'Spain', 'Spanish'),
(728, 'SS', 'SSD', 'South Sudan', 'South Sudanese'),
(729, 'SD', 'SDN', 'Sudan', 'Sudanese'),
(732, 'EH', 'ESH', 'Western Sahara', 'Sahrawi, Sahrawian, Sahraouian'),
(740, 'SR', 'SUR', 'Suriname', 'Surinamese'),
(744, 'SJ', 'SJM', 'Svalbard and Jan Mayen', 'Svalbard'),
(748, 'SZ', 'SWZ', 'Swaziland', 'Swazi'),
(752, 'SE', 'SWE', 'Sweden', 'Swedish'),
(756, 'CH', 'CHE', 'Switzerland', 'Swiss'),
(760, 'SY', 'SYR', 'Syrian Arab Republic', 'Syrian'),
(762, 'TJ', 'TJK', 'Tajikistan', 'Tajikistani'),
(764, 'TH', 'THA', 'Thailand', 'Thai'),
(768, 'TG', 'TGO', 'Togo', 'Togolese'),
(772, 'TK', 'TKL', 'Tokelau', 'Tokelauan'),
(776, 'TO', 'TON', 'Tonga', 'Tongan'),
(780, 'TT', 'TTO', 'Trinidad and Tobago', 'Trinidadian or Tobagonian'),
(784, 'AE', 'ARE', 'United Arab Emirates', 'Emirati, Emirian, Emiri'),
(788, 'TN', 'TUN', 'Tunisia', 'Tunisian'),
(792, 'TR', 'TUR', 'Turkey', 'Turkish'),
(795, 'TM', 'TKM', 'Turkmenistan', 'Turkmen'),
(796, 'TC', 'TCA', 'Turks and Caicos Islands', 'Turks and Caicos Island'),
(798, 'TV', 'TUV', 'Tuvalu', 'Tuvaluan'),
(800, 'UG', 'UGA', 'Uganda', 'Ugandan'),
(804, 'UA', 'UKR', 'Ukraine', 'Ukrainian'),
(807, 'MK', 'MKD', 'Macedonia (the former Yugoslav Republic of)', 'Macedonian'),
(818, 'EG', 'EGY', 'Egypt', 'Egyptian'),
(826, 'GB', 'GBR', 'United Kingdom of Great Britain and Northern Ireland', 'British, UK'),
(831, 'GG', 'GGY', 'Guernsey', 'Channel Island'),
(832, 'JE', 'JEY', 'Jersey', 'Channel Island'),
(833, 'IM', 'IMN', 'Isle of Man', 'Manx'),
(834, 'TZ', 'TZA', 'Tanzania, United Republic of', 'Tanzanian'),
(840, 'US', 'USA', 'United States of America', 'American'),
(850, 'VI', 'VIR', 'Virgin Islands (U.S.)', 'U.S. Virgin Island'),
(854, 'BF', 'BFA', 'Burkina Faso', 'BurkinabÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â©'),
(858, 'UY', 'URY', 'Uruguay', 'Uruguayan'),
(860, 'UZ', 'UZB', 'Uzbekistan', 'Uzbekistani, Uzbek'),
(862, 'VE', 'VEN', 'Venezuela (Bolivarian Republic of)', 'Venezuelan'),
(876, 'WF', 'WLF', 'Wallis and Futuna', 'Wallis and Futuna, Wallisian or Futunan'),
(882, 'WS', 'WSM', 'Samoa', 'Samoan'),
(887, 'YE', 'YEM', 'Yemen', 'Yemeni'),
(894, 'ZM', 'ZMB', 'Zambia', 'Zambian');

-- --------------------------------------------------------

--
-- Table structure for table `participant_details`
--

CREATE TABLE `participant_details` (
  `id_user` varchar(100) DEFAULT NULL,
  `id_summit` int(11) DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL COMMENT '1: Laki; 2: Perempuan',
  `birth_date` date DEFAULT NULL,
  `step` tinyint(4) DEFAULT 0,
  `fullname` varchar(150) DEFAULT NULL,
  `nationality` varchar(200) DEFAULT NULL,
  `occupation` varchar(150) DEFAULT NULL,
  `field_of_study` varchar(150) DEFAULT NULL,
  `institution_workplace` varchar(150) DEFAULT NULL,
  `whatsapp_number` varchar(15) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `emergency_contact` varchar(200) DEFAULT NULL,
  `contact_relation` varchar(200) DEFAULT NULL,
  `disease_history` text DEFAULT NULL,
  `tshirt_size` varchar(8) DEFAULT NULL,
  `is_vegetarian` tinyint(4) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `achievements` text DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `social_projects` text DEFAULT NULL,
  `talents` text DEFAULT NULL,
  `essay_type` varchar(150) DEFAULT NULL,
  `essay` text DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `source_account` varchar(150) DEFAULT NULL,
  `motivation_link` text DEFAULT NULL,
  `share_proof_link` text DEFAULT NULL,
  `referral_code` varchar(100) DEFAULT NULL,
  `termsncondition` tinyint(4) DEFAULT 0,
  `is_submited` tinyint(4) DEFAULT 0,
  `photo` text DEFAULT NULL,
  `alert_announcement` int(11) DEFAULT 0,
  `qr` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant_details`
--

INSERT INTO `participant_details` (`id_user`, `id_summit`, `gender`, `birth_date`, `step`, `fullname`, `nationality`, `occupation`, `field_of_study`, `institution_workplace`, `whatsapp_number`, `instagram`, `emergency_contact`, `contact_relation`, `disease_history`, `tshirt_size`, `is_vegetarian`, `address`, `achievements`, `experience`, `social_projects`, `talents`, `essay_type`, `essay`, `source`, `source_account`, `motivation_link`, `share_proof_link`, `referral_code`, `termsncondition`, `is_submited`, `photo`, `alert_announcement`, `qr`) VALUES
('USRP_f283c819', 1, 1, '2022-01-20', 5, 'Ilham Sagita Putra', 'Indonesia', 'Student', 'University', 'STIKI Malang', '089602657511', 'ilhamsagitap', 'Ibuk: 089874', 'Kamu: 04804395', '-', 'XL', 0, 'Jl. Gadang Gang 9 Malang', '-', 'Studying at STIKI Malang', 'Yes', 'Ngibul', 'Theme2', 'jh', 'Friends', 'Fiersa Besari', 'https://youtube.com', 'https://drive.com', 'BDJF8934', 1, 1, 'http://127.0.0.1/iys-web/uploads/self-photo/afcf806a7f73b1e7906f7220d6474d21.jpg', 0, 'http://127.0.0.1/iys-web/uploads/qr/QR_1650035951.png'),
('USRP_d5dd8f50', 1, 1, '2022-01-20', 5, 'Ilham Supali', 'Bangladesh', 'sf', 'asdf', 'sdaf', '08966786546', 'sdf', 'sadf', 'sadf', 'sadf', 'XL', 1, 'sdf', 'asef', 'gfdsg', 'dsaf', 'asdf', 'Theme2', 'sdafawe', 'Friends', 'sdf', 'sdf', 'sef', 'ILH001', 1, 1, 'http://127.0.0.1/iys-web/uploads/self-photo/9c348b300dfce46dbca5a9c5ffe0555f.jpg', 0, 'http://127.0.0.1/iys-web/uploads/qr/QR_1653035807.png'),
('USRP_4d4fbbd6', 1, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL),
('USRP_c46ec44e', 1, 1, '2022-01-20', 4, 'Ababowl', 'Cabo Verde', 'sdf', 'sdf', 'sdf', '089454', 'ababil', 'sdf', 'sdf', 'sdf', 'XL', 1, 'sdf', 'sdf', 'asdf', 'asdf', 'sadf', 'Theme1', 'sdfasdfsdaf', 'Instagram', 'sdf', 'asdf', 'sdf', '-', 0, 0, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_status`
--

CREATE TABLE `payment_status` (
  `id_payment_status` int(11) NOT NULL,
  `id_payment_type` int(11) DEFAULT NULL,
  `id_user` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0 COMMENT '0: waiting; 1: purchase; 2: pending; 3: canceled; 4: failure; 5: purchased',
  `proof_of_payment` varchar(100) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_status`
--

INSERT INTO `payment_status` (`id_payment_status`, `id_payment_type`, `id_user`, `status`, `proof_of_payment`, `is_active`) VALUES
(16, 8, 'USRP_f283c819', 1, NULL, 1),
(17, 9, 'USRP_f283c819', 1, NULL, 0),
(18, 10, 'USRP_f283c819', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment_transaction`
--

CREATE TABLE `payment_transaction` (
  `id_payment_transaction` varchar(255) NOT NULL,
  `id_user` varchar(100) DEFAULT NULL,
  `id_payment_type` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `date_expired` timestamp NULL DEFAULT NULL,
  `method_type` varchar(100) DEFAULT NULL,
  `item` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `method_img` varchar(150) DEFAULT NULL,
  `method_name` varchar(100) DEFAULT NULL,
  `method_guide` varchar(150) DEFAULT NULL,
  `virtual_number` varchar(150) DEFAULT NULL,
  `bill_key` varchar(100) DEFAULT NULL,
  `biller_code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_transaction`
--

INSERT INTO `payment_transaction` (`id_payment_transaction`, `id_user`, `id_payment_type`, `total`, `order_id`, `date`, `date_expired`, `method_type`, `item`, `status`, `method_img`, `method_name`, `method_guide`, `virtual_number`, `bill_key`, `biller_code`) VALUES
('TRANS669480281f283c819', 'USRP_f283c819', 8, 10000, '669480281', '2022-05-27 10:39:13', '2022-05-28 10:39:13', 'mandiri bill', 'Registration', 5, 'http://127.0.0.1/iys-web/assets/img/payment/mandiri.png', 'mandiri bill', 'https://app.sandbox.midtrans.com/snap/v1/transactions/99b067c6-f6b5-493e-b05c-1ade00ea9c11/pdf', NULL, '243508071493', '70012');

-- --------------------------------------------------------

--
-- Table structure for table `payment_types`
--

CREATE TABLE `payment_types` (
  `id_payment_type` int(11) NOT NULL,
  `id_summit` int(11) DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `usd` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_types`
--

INSERT INTO `payment_types` (`id_payment_type`, `id_summit`, `start_date`, `end_date`, `amount`, `description`, `usd`) VALUES
(8, 1, '2022-06-30 17:00:00', '2022-07-31 16:59:00', 10000, 'Registration', 102.55),
(9, 1, '2022-07-31 17:00:00', '2022-08-31 16:59:00', 2000000, 'Batch 1', 136.73),
(10, 1, '2022-09-01 05:00:00', '2022-09-30 05:00:00', 3000000, 'Batch 2', 205.1);

-- --------------------------------------------------------

--
-- Table structure for table `summits`
--

CREATE TABLE `summits` (
  `id_summit` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `theme` varchar(150) DEFAULT NULL,
  `regist_start_date` timestamp NULL DEFAULT NULL,
  `regist_end_date` timestamp NULL DEFAULT NULL,
  `summit_date` date DEFAULT NULL,
  `is_active` binary(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summits`
--

INSERT INTO `summits` (`id_summit`, `name`, `theme`, `regist_start_date`, `regist_end_date`, `summit_date`, `is_active`) VALUES
(1, 'Istanbul Youth Summith 2023', 'Inspiring', '2022-07-02 17:00:00', '2023-01-01 16:59:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(100) NOT NULL,
  `id_user_role` tinyint(4) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `token_regis` text DEFAULT NULL,
  `is_verif` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `id_user_role`, `email`, `password`, `status`, `name`, `token_regis`, `is_verif`) VALUES
('USRP_4d4fbbd6', 1, '181111060@mhs.stiki.ac.id', 'b4ac5cab6d13eda95852f3a9e1339021ae871346aba06f7e03d902a92adbfd79', NULL, 'Ilham Sagita ', '62fc2031663c0fbc56678bca4ccbba58ca1b92e336f4c346fa8efc561e2881566bbab4ef2e16099bdf34dbdd77f4f1d4158e39d252ab97cd6c04fc4ad3fd0a5ecjFHnZ0IUnIw17Ym56yodKjlwE0U23A8ud4MM2BBY/7xvmqCfIXbFskIDYj4Mmc8', 1),
('USRP_c46ec44e', 1, '211111034@mhs.stiki.ac.id', '095510a13c0f35711c95f8ce2f2625bb3df690a4bb0d2576cd43cfe58a75bba5', NULL, 'Ababowl', '454d08adedcafe359ae4280129055222dd563313fb3925ec5afa4b0aeed268a5637b5056d4f10e5fd3f4524575e82e8671f9587d20eda3bcb28cd4070aa59b09RI67lco0uIZHQLGR9DHJgt0VpaWzNJ/Qfeb502UaYy/pLcJOvMgQduspg++VrjOz', 1),
('USRP_d5dd8f50', 1, 'ilham.supali@gmail.com', 'b4ac5cab6d13eda95852f3a9e1339021ae871346aba06f7e03d902a92adbfd79', NULL, 'Ilham Supali', NULL, 1),
('USRP_f283c819', 1, 'ilham.sagitaputra@gmail.com', 'b4ac5cab6d13eda95852f3a9e1339021ae871346aba06f7e03d902a92adbfd79', NULL, 'Ilham Sagita Putra', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id_user_role` tinyint(4) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id_user_role`, `description`) VALUES
(1, 'Participant'),
(2, 'Supervisor'),
(3, 'Intern'),
(4, 'Volunteer');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_announcement`
-- (See below for the actual view)
--
CREATE TABLE `v_announcement` (
`name_summit` varchar(150)
,`id_announcement` int(11)
,`id_summit` int(11)
,`title` varchar(150)
,`poster` text
,`content` text
,`is_registered` tinyint(4)
,`date` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_payment_types`
-- (See below for the actual view)
--
CREATE TABLE `v_payment_types` (
`id_payment_type` int(11)
,`id_summit` int(11)
,`start_date` timestamp
,`end_date` timestamp
,`amount` int(11)
,`description` text
,`name` varchar(150)
);

-- --------------------------------------------------------

--
-- Structure for view `v_announcement`
--
DROP TABLE IF EXISTS `v_announcement`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_announcement`  AS SELECT `s`.`name` AS `name_summit`, `a`.`id_announcement` AS `id_announcement`, `a`.`id_summit` AS `id_summit`, `a`.`title` AS `title`, `a`.`poster` AS `poster`, `a`.`content` AS `content`, `a`.`is_registered` AS `is_registered`, `a`.`date` AS `date` FROM (`announcements` `a` join `summits` `s`) WHERE `a`.`id_summit` = `s`.`id_summit` ;

-- --------------------------------------------------------

--
-- Structure for view `v_payment_types`
--
DROP TABLE IF EXISTS `v_payment_types`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_payment_types`  AS SELECT `pt`.`id_payment_type` AS `id_payment_type`, `pt`.`id_summit` AS `id_summit`, `pt`.`start_date` AS `start_date`, `pt`.`end_date` AS `end_date`, `pt`.`amount` AS `amount`, `pt`.`description` AS `description`, `s`.`name` AS `name` FROM (`payment_types` `pt` join `summits` `s`) WHERE `pt`.`id_summit` = `s`.`id_summit` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `admins_FK` (`id_summit`);

--
-- Indexes for table `ambassador`
--
ALTER TABLE `ambassador`
  ADD PRIMARY KEY (`id_ambassador`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id_announcement`),
  ADD KEY `announcements_FK` (`id_summit`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id_certificate`),
  ADD KEY `certificates_FK` (`id_user`);

--
-- Indexes for table `certificate_templates`
--
ALTER TABLE `certificate_templates`
  ADD PRIMARY KEY (`id_certificate_template`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`num_code`),
  ADD UNIQUE KEY `alpha_2_code` (`alpha_2_code`),
  ADD UNIQUE KEY `alpha_3_code` (`alpha_3_code`);

--
-- Indexes for table `participant_details`
--
ALTER TABLE `participant_details`
  ADD KEY `participant_details_FK` (`id_user`);

--
-- Indexes for table `payment_status`
--
ALTER TABLE `payment_status`
  ADD PRIMARY KEY (`id_payment_status`),
  ADD KEY `payment_status_FK_1` (`id_user`);

--
-- Indexes for table `payment_transaction`
--
ALTER TABLE `payment_transaction`
  ADD PRIMARY KEY (`id_payment_transaction`),
  ADD KEY `payments_FK` (`id_user`),
  ADD KEY `payments_FK_1` (`id_payment_type`);

--
-- Indexes for table `payment_types`
--
ALTER TABLE `payment_types`
  ADD PRIMARY KEY (`id_payment_type`),
  ADD KEY `payment_types_FK` (`id_summit`);

--
-- Indexes for table `summits`
--
ALTER TABLE `summits`
  ADD PRIMARY KEY (`id_summit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `users_FK` (`id_user_role`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id_user_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambassador`
--
ALTER TABLE `ambassador`
  MODIFY `id_ambassador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id_announcement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id_certificate` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificate_templates`
--
ALTER TABLE `certificate_templates`
  MODIFY `id_certificate_template` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_status`
--
ALTER TABLE `payment_status`
  MODIFY `id_payment_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payment_types`
--
ALTER TABLE `payment_types`
  MODIFY `id_payment_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `summits`
--
ALTER TABLE `summits`
  MODIFY `id_summit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_FK` FOREIGN KEY (`id_summit`) REFERENCES `summits` (`id_summit`);

--
-- Constraints for table `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `announcements_FK` FOREIGN KEY (`id_summit`) REFERENCES `summits` (`id_summit`);

--
-- Constraints for table `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `certificates_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `participant_details`
--
ALTER TABLE `participant_details`
  ADD CONSTRAINT `participant_details_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `payment_status`
--
ALTER TABLE `payment_status`
  ADD CONSTRAINT `payment_status_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `payment_status_FK_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `payment_transaction`
--
ALTER TABLE `payment_transaction`
  ADD CONSTRAINT `payments_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `payments_FK_1` FOREIGN KEY (`id_payment_type`) REFERENCES `payment_types` (`id_payment_type`);

--
-- Constraints for table `payment_types`
--
ALTER TABLE `payment_types`
  ADD CONSTRAINT `payment_types_FK` FOREIGN KEY (`id_summit`) REFERENCES `summits` (`id_summit`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_FK` FOREIGN KEY (`id_user_role`) REFERENCES `user_roles` (`id_user_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
