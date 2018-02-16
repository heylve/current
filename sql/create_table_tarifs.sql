p  ---------------------------------------
  my_contacts | 
CREATE TABLE tarifs(
 id INT NOT NULL,
 code_acte char(10) NOT NULL,
 nomenclature char(10) NOT NULL,
 category char(10) not null ,
 taux_plein float(3,2) not null,
 part_amo float(3,2) not null,
 part_amc float(3,2) not null,
	
 primary key (id)
)
 ENGINE=MyISAM DEFAULT CHARSET=latin1 |
