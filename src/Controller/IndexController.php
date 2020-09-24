<?php
namespace App\Controller;

use App\Constant\CodeConstant;

class IndexController extends BaseController
{
    public function getImportantDate()
    {
        $list = $this->important_date_repository->getList();
        if ($list) {
            $code = CodeConstant::CODE_SUCCESS;
        } else {
            $code = CodeConstant::CODE_FAIL;
        }
        $this->json($code, CodeConstant::$msg[$code], $list);
    }
}