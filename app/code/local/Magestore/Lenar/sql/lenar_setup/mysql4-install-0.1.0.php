<?php
$installer = $this;

$installer->startSetup();
$table = $installer->getConnection()
->newTable($installer->getTable('magestore_lenar'))
->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
'identity' => true, 
'nullable' => false, 
'primary' => true), 'Lenar ID')
->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 51, array(
'nullable' => false
), 'Lenar Name')
->addColumn('surname', Varien_Db_Ddl_Table::TYPE_VARCHAR, 51, array(
'nullable' => false
), 'Lenar Surname')
->addColumn('age', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
'nullable' => false, 
'default' => 0
), 'Lenar Age')
->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, array(
'nullable' => false
), 'Lenar created_at')
->setComment('Lenar Table');
$installer->getConnection()->createTable($table);
$installer->endSetup();
