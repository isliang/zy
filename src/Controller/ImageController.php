<?php
namespace App\Controller;

use App\Constant\CodeConstant;
use App\Utils\UrlBuilder;

class ImageController extends BaseController
{
    public function upload()
    {
        $file = $_FILES['file'];
        //有错误 或者 文件不存在
        if ($file['error'] != UPLOAD_ERR_OK || !is_uploaded_file($file['tmp_name'])) {
            $code = CodeConstant::CODE_FILE_UPLOAD_FAIL;
            $this->json($code, CodeConstant::$msg[$code]);
        }
        $file_type = explode('/', $file['type'])[0];
        $ext_name = explode('/', $file['type'])[1];
        if ($file_type != 'image' && $file_type != 'video') {//不是图片 视频
            $code = CodeConstant::CODE_UPLOADED_FILE_NOT_IMAGE_VIDEO;
            $this->json($code, CodeConstant::$msg[$code]);
        }
        if (!defined("UPLOAD_PATH")) {
            $code = CodeConstant::CODE_UPLOAD_PATH_UNDEFINED;
            $this->json($code, CodeConstant::$msg[$code]);
        }
        if (!is_dir(UPLOAD_PATH)) {
            @mkdir(UPLOAD_PATH);
        }
        $base_dir = rtrim(UPLOAD_PATH, DS);
        $sub_path = $file_type . DS . date("Y/m/d");
        if (!is_dir($base_dir . DS . $sub_path)) {
            @mkdir($base_dir . DS . $sub_path, 0777, true);
        }
        $img_name = $sub_path . DS . md5($file['name'] . microtime(true)) . ".{$ext_name}";
        $full_name = $base_dir . DS . $img_name;
        if (move_uploaded_file($file["tmp_name"], $full_name)) {
            $code = CodeConstant::CODE_SUCCESS;
            $url = UrlBuilder::buildPicUrl($img_name);
            $this->json($code, CodeConstant::$msg[$code], $url);
        }
    }
}