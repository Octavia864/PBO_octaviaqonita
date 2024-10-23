<?php

class HtmlElement {
    private $attributes = [];
    private $tag;

    public function __construct($tag) {
        $this->tag = $tag;
    }

    public function set($name, $value) {
        $this->attributes[$name] = $value;
    }

    public function get($name) {
        return $this->attributes[$name] ?? null;
    }

    public function html($innerHTML = '') {
        $html = "<{$this->tag}";
        foreach ($this->attributes as $key => $value) {
            $html .= '' . $key .'=' .$value .'"';
        }
        $html .= '>';
        $html .= $innerHTML;
        $html .= "</$this->tag>";
    }
}

$article = new HtmlElement('article');
$article->id = 'main';
$article->class = 'light';

//show the attributes
echo $article->class."<br />";//light
echo $article->id;//main
?>

