<?php
namespace App\Repository;

use App\Dao\ImportantDateDao;
use Ipf\Repository\BaseRepository;

class ImportantDateRepository extends BaseRepository
{
    /**
     * @var ImportantDateDao
     */
    private $dao;

    protected function initObject()
    {
        $this->dao = new ImportantDateDao();
    }

    public function getList()
    {
        return $this->dao->find([]);
    }
}