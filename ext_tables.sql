#
# Table structure for table "tx_news2forum"
#
CREATE TABLE tx_news2forum (
  news_id int(11) default '0',
  forum_id int(11) default '0',
  PRIMARY KEY (news_id),
  KEY parent (forum_id)
);

#
# Table structure for table 'tt_news'
#
CREATE TABLE tt_news (
	tx_news2forum_create_topic tinyint(3) DEFAULT '0' NOT NULL
);
