LostFound
=========

A Lost and Found Webapp for the University of Toronto Mississauga

To Install
==========
- Import the 'LostFound.sql' database into your phpMyAdmin

OR:

- Create a database table named "LostFound" in your phpMyAdmin
- The table should consist of:

  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `dateFound` date NOT NULL,
  `building` varchar(30) NOT NULL,
  `claimed` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
  
- Copy and Paste the 'itemsX.X' file into your web space
