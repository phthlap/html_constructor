<?php


function addJS($name, $script, $ops = []) {
    \Phthlaap\HtmlContructor\Content\Javascript::add($name, $script, $ops);
}

function addCSS($name, $script, $ops = []) {
    \Phthlaap\HtmlContructor\Content\Css::add($name, $script, $ops);

}