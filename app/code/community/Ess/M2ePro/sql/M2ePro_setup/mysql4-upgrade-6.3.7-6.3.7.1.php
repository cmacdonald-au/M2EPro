<?php

//########################################

/** @var $installer Ess_M2ePro_Model_Upgrade_MySqlSetup */
$installer = $this;
$installer->startSetup();

$connection = $installer->getConnection();

//########################################

/*

    ALTER TABLE `m2epro_ebay_template_shipping_service`
        ADD COLUMN `cost_percentage_lift` smallint(5) DEFAULT NULL AFTER `cost_surcharge_value`;
*/

// ---------------------------------------

$installer->getTableModifier('ebay_template_shipping_service')
          ->addColumn('cost_percentage_lift', 'varchar(255) ', 'NULL', 'cost_surcharge_value');

// ---------------------------------------

//########################################

$installer->endSetup();

//########################################
