<?php
namespace App\Constant;

class CodeConstant
{
    const CODE_SUCCESS = 200;
    const CODE_FAIL = 10000;
    /**
     * 文件上传失败
     */
    const CODE_FILE_UPLOAD_FAIL = 10001;
    /**
     * 上传的文件不是图片类型
     */
    const CODE_UPLOADED_FILE_NOT_IMAGE = 10002;
    /**
     * 文件上传目录没有定义
     */
    const CODE_UPLOAD_PATH_UNDEFINED = 10003;

    /**
     * 参数错误
     */
    const CODE_PARAMS_ERROR = 10004;

    const CODE_UPLOADED_FILE_NOT_IMAGE_VIDEO = 10005;

    public static $msg = [
        self::CODE_SUCCESS => 'success',
        self::CODE_FAIL => 'fail',
        self::CODE_FILE_UPLOAD_FAIL => '图片上传失败',
        self::CODE_UPLOADED_FILE_NOT_IMAGE => '请上传图片格式',
        self::CODE_UPLOAD_PATH_UNDEFINED => 'upload path undefined',
        self::CODE_PARAMS_ERROR => '参数错误',
        self::CODE_UPLOADED_FILE_NOT_IMAGE_VIDEO => '只支持图片和视频格式的文件上传',
    ];
}