<?php
/**
 * Created by PhpStorm.
 * User: leopham
 * Date: 6/19/18
 * Time: 10:55 PM
 */

namespace Phthlaap\HtmlContructor\Content;


class Javascript extends BaseScript
{

    public static function add($name, $url, $options = []) {
        self::addToFooter($name, ["url" => $url, "type"=>"javascript"]);
    }
}