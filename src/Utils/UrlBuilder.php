<?php
namespace App\Utils;

use Ipf\Config\ConfigLoader;

class UrlBuilder
{
    public static function getDomain()
    {

        return [
            ConfigLoader::getConfig('domain', 'scheme'),
            ConfigLoader::getConfig('domain', 'domain'),
        ];
    }
    public static function buildPicUrl($image_id)
    {
        list($scheme, $domain) = self::getDomain();
        return $scheme . '://' . $domain . "/{$image_id}";
    }
}