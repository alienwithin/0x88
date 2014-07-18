CREATE DATABASE `Ox88`;
USE Ox88;

-- --------------------------------------------------------

-- 
-- Table structure for table `tp_hits`
-- 

CREATE TABLE `tp_hits` (
  `total` int(10) unsigned NOT NULL default '0'
) TYPE=MyISAM;

-- 
-- Dumping data for table `tp_hits`
-- 

INSERT INTO `tp_hits` VALUES (2922);

-- --------------------------------------------------------

-- 
-- Table structure for table `tp_langs`
-- 

CREATE TABLE `tp_langs` (
  `lang_iso2code` char(2) NOT NULL default '',
  `lang_name` varchar(50) NOT NULL default '',
  `country_code` char(2) default NULL,
  `country_name` varchar(100) default NULL,
  PRIMARY KEY  (`lang_iso2code`)
) TYPE=MyISAM;

-- 
-- Dumping data for table `tp_langs`
-- 

INSERT INTO `tp_langs` VALUES ('aa', 'Afar', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ab', 'Abkhazian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('af', 'Afrikaans', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('am', 'Amharic', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ar', 'Arabic', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('as', 'Assamese', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ay', 'Aymara', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('az', 'Azerbaijani', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ba', 'Bashkir', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('be', 'Byelorussian', 'by', 'Belarus');
INSERT INTO `tp_langs` VALUES ('bg', 'Bulgarian', 'bg', 'Bulgaria');
INSERT INTO `tp_langs` VALUES ('bh', 'Bihari', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('bi', 'Bislama', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('bn', 'Bengali; Bangla', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('bo', 'Tibetan', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('br', 'Breton', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ca', 'Catalan', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('co', 'Corsican', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('cs', 'Czech', 'cz', 'Czechia');
INSERT INTO `tp_langs` VALUES ('cy', 'Welsh', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('da', 'Danish', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('de', 'German', 'de', 'Germany');
INSERT INTO `tp_langs` VALUES ('dz', 'Bhutani', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('el', 'Greek', 'gr', 'Greece');
INSERT INTO `tp_langs` VALUES ('en', 'English', 'us', 'United States');
INSERT INTO `tp_langs` VALUES ('eo', 'Esperanto', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('es', 'Spanish', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('et', 'Estonian', 'ee', 'Estonia');
INSERT INTO `tp_langs` VALUES ('eu', 'Basque', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('fa', 'Persian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('fi', 'Finnish', 'fi', 'Finland');
INSERT INTO `tp_langs` VALUES ('fj', 'Fiji', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('fo', 'Faroese', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('fr', 'French', 'fr', 'France');
INSERT INTO `tp_langs` VALUES ('fy', 'Frisian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ga', 'Irish', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('gd', 'Scots Gaelic', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('gl', 'Galician', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('gn', 'Guarani', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('gu', 'Gujarati', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ha', 'Hausa', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('he', 'Hebrew', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('hi', 'Hindi', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('hr', 'Croatian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('hu', 'Hungarian', 'hu', 'Hungary');
INSERT INTO `tp_langs` VALUES ('hy', 'Armenian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ia', 'Interlingua', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('id', 'Indonesian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ie', 'Interlingue', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ik', 'Inupiak', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('in', 'Indonesian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('is', 'Icelandic', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('it', 'Italian', 'it', 'Italy');
INSERT INTO `tp_langs` VALUES ('iu', 'Inuktitut', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('iw', 'Hebrew', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ja', 'Japanese', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ji', 'Yiddish', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('jw', 'Javanese', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ka', 'Georgian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('kk', 'Kazakh', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('kl', 'Greenlandic', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('km', 'Cambodian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('kn', 'Kannada', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ko', 'Korean', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ks', 'Kashmiri', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ku', 'Kurdish', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ky', 'Kirghiz', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('la', 'Latin', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ln', 'Lingala', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('lo', 'Laothian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('lt', 'Lithuanian', 'lt', 'Lithuania');
INSERT INTO `tp_langs` VALUES ('lv', 'Latvian, Lettish', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('mg', 'Malagasy', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('mi', 'Maori', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('mk', 'Macedonian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ml', 'Malayalam', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('mn', 'Mongolian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('mo', 'Moldavian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('mr', 'Marathi', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ms', 'Malay', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('mt', 'Maltese', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('my', 'Burmese', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('na', 'Nauru', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ne', 'Nepali', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('nl', 'Dutch', 'nl', 'Netherlands');
INSERT INTO `tp_langs` VALUES ('no', 'Norwegian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('oc', 'Occitan', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('om', '(Afan) Oromo', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('or', 'Oriya', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('pa', 'Punjabi', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('pl', 'Polish', 'pl', 'Poland');
INSERT INTO `tp_langs` VALUES ('ps', 'Pashto, Pushto', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('pt', 'Portuguese', 'pt', 'Portugal');
INSERT INTO `tp_langs` VALUES ('qu', 'Quechua', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('rm', 'Rhaeto-Romance', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('rn', 'Kirundi', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ro', 'Romanian', 'ro', 'Romania');
INSERT INTO `tp_langs` VALUES ('ru', 'Russian', 'ru', 'Russian Federation');
INSERT INTO `tp_langs` VALUES ('rw', 'Kinyarwanda', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('sa', 'Sanskrit', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('sd', 'Sindhi', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('sg', 'Sangho', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('sh', 'Serbo-Croatian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('si', 'Sinhalese', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('sk', 'Slovak', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('sl', 'Slovenian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('sm', 'Samoan', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('sn', 'Shona', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('so', 'Somali', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('sq', 'Albanian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('sr', 'Serbian', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ss', 'Siswati', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('st', 'Sesotho', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('su', 'Sundanese', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('sv', 'Swedish', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('sw', 'Swahili', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ta', 'Tamil', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('te', 'Telugu', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('tg', 'Tajik', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('th', 'Thai', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ti', 'Tigrinya', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('tk', 'Turkmen', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('tl', 'Tagalog', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('tn', 'Setswana', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('to', 'Tonga', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('tr', 'Turkish', 'tr', 'Turkey');
INSERT INTO `tp_langs` VALUES ('ts', 'Tsonga', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('tt', 'Tatar', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('tw', 'Twi', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('ug', 'Uighur', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('uk', 'Ukrainian', 'ua', 'Ukraine');
INSERT INTO `tp_langs` VALUES ('ur', 'Urdu', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('uz', 'Uzbek', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('vi', 'Vietnamese', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('vo', 'Volapuk', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('wo', 'Wolof', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('xh', 'Xhosa', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('yi', 'Yiddish', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('yo', 'Yoruba', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('za', 'Zhuang', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('zh', 'Chinese', NULL, NULL);
INSERT INTO `tp_langs` VALUES ('zu', 'Zulu', NULL, NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `tp_logs`
-- 

CREATE TABLE `tp_logs` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `log` varchar(255) default NULL,
  `datetime` datetime NOT NULL default '0000-00-00 00:00:00',
  `ip` varchar(15) default NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) TYPE=MyISAM AUTO_INCREMENT=112 ;

-- 
-- Dumping data for table `tp_logs`
-- 

INSERT INTO `tp_logs` VALUES (96, '<b>Logged in</b> (admin)', '2005-12-05 16:40:52', '195.20.118.2');

-- --------------------------------------------------------

-- 
-- Table structure for table `tp_stats`
-- 

CREATE TABLE `tp_stats` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `datetime` datetime NOT NULL default '0000-00-00 00:00:00',
  `ip` varchar(15) default NULL,
  `user_agent` varchar(255) default NULL,
  `browser` varchar(255) default NULL,
  `os` varchar(255) default NULL,
  `uri` varchar(255) default NULL,
  `accept_lang` varchar(50) default NULL,
  `is_downloaded` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) TYPE=MyISAM AUTO_INCREMENT=9176 ;

-- 
-- Dumping data for table `tp_stats`
-- 

INSERT INTO `tp_stats` VALUES (7564, '2005-12-05 13:56:37', '195.92.53.2', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)', 'MSIE', 'Windows XP', '/os/index.php', 'en-gb', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `tp_users`
-- 

CREATE TABLE `tp_users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `login` varchar(255) NOT NULL default '',
  `password` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `Login` (`login`),
  KEY `id` (`id`)
) TYPE=MyISAM AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `tp_users`
-- 

INSERT INTO `tp_users` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3');
