Table	Create Tablengap_ccam	
CREATE TABLE `ngap_ccam` 
#(`id` int(11) NOT NULL AUTO_INCREMENT,
# `code_acte` char(10) NOT NULL,  
#  `homme` tinyint(1) NOT NULL,
#  `femme` tinyint(1) NOT NULL,  
#  `age_min` int(3) DEFAULT NULL,
#  `age_max` int(3) DEFAULT NULL,
#  `hors_psc` tinyint(1) NOT NULL,
#  `cabinet` tinyint(1) NOT NULL,
#  `visite` tinyint(1) NOT NULL,
#  `urgence` tinyint(1) NOT NULL,
  `maj_m` tinyint(1) NOT NULL,
  `garde` tinyint(1) NOT NULL,
  `asso_g_gs` tinyint(1) NOT NULL,
  `asso_vg_vgs` tinyint(1) NOT NULL,
  `maj_j` tinyint(1) NOT NULL, 
  `maj_r` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),  
  KEY `acte` (`code_acte`)
  ) ENGINE=MyISAM AUTO_INCREMENT=137 DEFAULT CHARSET=latin1
