CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;


INSERT INTO `member` (`id`, `name`, `position`, `company`, `email`, `phone`, `website`, `photo`, `linkedin`, `facebook`, `google`, `twitter`) VALUES
(1, 'Chanda Burton', 'CEO', 'Google', 'Chanda@google.com', '+752-12-6293995', 'http://www.google.com', 'img/1.jpg', 'https://www.linkedin.com/', 'https://www.facebook.com', 'http://plus.google.com', 'https://twitter.com/'),
(2, 'Jonas Fleming', 'CTO', 'Ebay Inc', 'jonas@ebay.com', '+295-44-6632660', 'http://www.ebay.com', 'img/2.jpg', NULL, 'https://www.facebook.com/', NULL, 'https://twitter.com/'),
(3, 'Robin Pickett', 'Marketing Director', 'Yahoo', 'robin@yahoo.com', '+619-84-2138270', 'http://www.yahoo.com', 'img/3.jpg', 'https://www.linkedin.com/', NULL, 'http://plus.google.com', 'https://twitter.com/'),
(4, 'Summer Reeves', 'Developer', 'MySQL', 'summer@mysql.com', '+626-92-2804775', 'http://www.mysql.com', 'img/4.jpg', 'https://www.linkedin.com/', 'https://www.facebook.com/', 'http://plus.google.com', NULL);
