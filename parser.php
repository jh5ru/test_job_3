<?php
require_once('simple_html_dom.php');

class Parser
{
    public $link;

    public function __construct($link)
    {
        $this->link = $link;
    }

    public function run()
    {
        $items = [];

        $html = file_get_html($this->link);
        $ret = $html->find('.n-snippet-list.n-snippet-list_type_grid .n-snippet-cell2');
        foreach ($ret as $item) {
            $items[] = ['image' => $item->find('img')[0]->src, 'name' => $item->find('img')[0]->title, 'price' => $item->find('.price')[0]];
        }
        return $items;
    }

}

if (isset($_POST['link']) and is_string($_POST['link']) and filter_var($_POST['link'], FILTER_VALIDATE_URL)) {
    $link = trim($_POST['link']);
    $parser = new Parser($link);
    $data = $parser->run();
}
