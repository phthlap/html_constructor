<?php

namespace Phthlaap\HtmlContructor\Content;

//use Phthlaap\HtmlContructor\Content\Javascript;

trait Loader
{

    public $html_path = null;


    public function loadTemplate($template_path) {


        ob_start();
//        var_dump($this->html_path . "//" . $template_path);

//        $javascript = new Javascript();

        include $this->html_path . "//" . $template_path;

        $string = ob_get_contents();

        ob_end_clean ();

        return $string;
    }


    public function setHtmlPath($html_path) {
        $this->html_path = $html_path;
    }
}