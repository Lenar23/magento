<?php
$installer = $this;

$installer->startSetup();
$table = $installer->getConnection()
->newTable($installer->getTable('wdevelop_helloworld'))
->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
'identity' => true, 
'nullable' => false, 
'primary' => true), 'HelloWorld ID')
->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 51, array(
'nullable' => false
), 'HelloWorld Name')
->addColumn('surname', Varien_Db_Ddl_Table::TYPE_VARCHAR, 51, array(
'nullable' => false
), 'HelloWorld Surname')
->addColumn('age', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
'nullable' => false, 
'default' => 0
), 'HelloWorld Age')
->addColumn('create_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, array(
'nullable' => false
), 'HelloWorld created_at')
->setComment('HelloWorld Table');
$installer->getConnection()->createTable($table);
$installer->endSetup();
