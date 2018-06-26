<?php
/**
 * Created by PhpStorm.
 * User: leopham
 * Date: 6/19/18
 * Time: 9:39 PM
 */

namespace Phthlaap\HtmlContructor;

use Phthlaap\HtmlContructor\Content\Javascript;
use Phthlaap\HtmlContructor\Content\Loader;
use Phthlaap\HtmlContructor\Http\Requester;

class App
{
    use Loader, Requester;

    public $content_loader = null;
    public $request = null;
    public $path  = null;

    public $js = null;

    public function __construct($path) {

        $this->path = $path;
        $this->setHtmlPath($path . "/html");
    }

    public function run() {
//        $js = new Javascript();
        $content = $this->loadTemplate($this->getRequestPath());

        $content = str_replace("@footer_script", Javascript::buildScript("footer"), $content);
        $content = str_replace("@header_script", Javascript::buildScript("header"), $content);
//        var_dump(Javascript::buildScript("footer"));

        echo $content;
    }

}