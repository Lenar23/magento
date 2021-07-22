<?php
$installer = $this;

$installer->startSetup();

$installer->run("DROP TABLE IF EXISTS {$this->getTable('wdevelop_helloworld')};
                 CREATE TABLE {$this->getTable('wdevelop_helloworld')} 
                 (`id` int(11) unsigned NOT NULL auto_increment,
                 `name` varchar(51) NOT NULL default '',
                 `surname` varchar(51) NOT NULL default '',
                 `age` int(3) unsigned NOT NULL default 0,
                 `create_at` timestamp,
                 PRIMARY KEY (`id`)) Engine=InnoDB DEFAULT CHARSET=utf8;
                 
                 INSERT INTO {$this->getTable('wdevelop_helloworld')} VALUES (1, 'Lenar', 'Zairov', 33, '2021-22-07 14:43:00');");

$installer->endSetup();
