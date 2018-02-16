# ---------------------------------------
  my_contacts | 
CREATE TABLE my_contact_2(
 contact_id INT NOT NULL,
 last_name varchar(30) NOT NULL,
 first_name varchar(30) NOT NULL,
 email varchar(50) NOT NULL,
 gender char(1) DEFAULT NULL,
 birthday date DEFAULT NULL,
 profession varchar(50) DEFAULT NULL,
 location varchar(50) DEFAULT NULL,
 status varchar(20) DEFAULT NULL,
 interests varchar(100) DEFAULT NULL,
 seeking varchar(100) DEFAULT NULL,
 primary key (contact_id)
)
 ENGINE=MyISAM DEFAULT CHARSET=latin1 |
