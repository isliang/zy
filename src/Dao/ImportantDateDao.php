<?php

namespace App\Dao;

use Ipf\Dao\BaseDao;
use Ipf\Dao\DaoInfo;

class ImportantDateDao extends BaseDao
{
    public function getDaoInfo()
    {
        $dao_info = new DaoInfo();
        $dao_info->setMasterDsn('zy_db_master');
        $dao_info->setSlaveDsn('zy_db_slave');
        $dao_info->setDbName('zy_db');
        $dao_info->setTableName('important_date');
        $dao_info->setPk('id');
        $dao_info->setSkipCache(true);
        return $dao_info;
    }
}