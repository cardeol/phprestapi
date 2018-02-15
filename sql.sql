CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) CHARACTER SET latin1 NOT NULL,
  `password` varchar(64) CHARACTER SET latin1 DEFAULT NULL,
  `username` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `updated_at` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `send_email` int(11) DEFAULT '1',
  `active` int(11) DEFAULT NULL,
  `activation_code` varchar(45) DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `usertokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(45) DEFAULT NULL,
  `value` varchar(400) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `date_expiration` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
