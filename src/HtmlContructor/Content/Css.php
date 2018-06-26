<?php
/**
 * Created by PhpStorm.
 * User: leopham
 * Date: 6/19/18
 * Time: 10:55 PM
 */

namespace Phthlaap\HtmlContructor\Content;


class Css extends BaseScript
{

    public static function add($name, $url, $options = []) {
        self::addToHead($name, ["url" => $url, "type"=>"css"]);
    }
}