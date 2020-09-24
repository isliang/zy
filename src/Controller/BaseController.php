<?php
namespace App\Controller;

use App\Repository\ImportantDateRepository;

abstract class BaseController
{
    /**
     * @var ImportantDateRepository
     */
    protected $important_date_repository;

    public function __construct()
    {
        $this->important_date_repository = new ImportantDateRepository();
    }

    protected function json($code, $msg, $data = null)
    {
        header('Content-type:application/json');
        echo json_encode([
            'code' => $code,
            'msg' => $msg,
            'data' => $data,
        ]);
        exit;
    }
}