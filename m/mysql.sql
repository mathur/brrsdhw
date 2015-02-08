#
# Table structure for table 'members'
#

CREATE TABLE `members` (
  `member_id` int(11) unsigned NOT NULL auto_increment,
  `firstname` varchar(100) default NULL,
  `lastname` varchar(100) default NULL,
  `login` varchar(100) NOT NULL default '',
  `passwd` varchar(32) NOT NULL default '',
  PRIMARY KEY  (`member_id`)
) TYPE=MyISAM;



#
# Dumping data for table 'members'
#

INSERT INTO `members` (`member_id`, `firstname`, `lastname`, `login`, `passwd`) VALUES("1", "Rohan", "Mathur", "rohan32", "f9c533add6164af3bf43518044081138");
