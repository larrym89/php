<?php

class Page {

    public $head;
    public $body;
    public $title;
    public $styles;
    public $scripts;

    public function __construct($head, $body, $title, $styles, $scripts) {
        $this->head = $head;
        $this->body = $body;
        $this->title = $title;
        $this->styles = $styles;
        $this->scripts = $scripts;
    }

    public function render() {
        echo $this;
    }

    public function __toString()
    {
        $res = "<head>";
        $res.= "<title>" . $this->title . "</title>";
        $res.= $this->head;
        $res.= "<script>". $this->scripts ."</script>";
        $res.= "<style>" . $this->styles . "</style>";
        $res.= "</head>";
        $res.= "<body>" . $this->body . "</body>";
        return $res;
    }

}

$pg = new Page("","<div>PAGE BODY</div>","My Page","","");
$pg->render();