<?php

namespace Phthlaap\HtmlContructor\Http;


trait Requester
{
    public function getServerRequestURI() {
        return $_SERVER["REQUEST_URI"];
    }
    public function getRequestPath() {
//        var_dump(ltrim($this->getServerRequestURI(), '/'));
        $filePath = ltrim($this->getServerRequestURI(), '/');
        return $filePath;
    }
}