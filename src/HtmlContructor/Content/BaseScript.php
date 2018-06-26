<?php
/**
 * Created by PhpStorm.
 * User: leopham
 * Date: 6/19/18
 * Time: 10:57 PM
 */

namespace Phthlaap\HtmlContructor\Content;


class BaseScript
{
    //public $session = null;
//    public $header = null;
//    public $footer = null;
    public static function addToHead($index, $script) {
        $_SESSION['header'][$index] = $script;
    }

    public static function addToFooter($index, $script) {
        $_SESSION['footer'][$index] = $script;
//        var_dump($_SESSION);
    }

    public static function buildScript($scope = 'footer') {

        $content = "";
//        var_dump($_SESSION[$scope]);

        foreach($_SESSION[$scope] as $name => $script) {
            if($script['type'] == 'javascript') {

                $content .= "<script script-name='".$name."' type='text/javascript'>".self::loadScript($script["url"])."</script>";
            }
            if($script['type'] == 'css') {

                $content .= "<style script-name='".$name."' type='text/css' rel='stylesheet'>".self::loadScript($script["url"])."</style>";
            }

        }

        return $content;

    }

    public static function loadScript($url) {
        return file_get_contents($url);
    }
}