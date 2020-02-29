<?php 
use RainLab\Pages\Classes\Page;
class Cms5e5a1d6fcc4b4352880616_2eee996a75bf0fba26e490594d8339afClass extends Cms\Classes\LayoutCode
{
public function onStart()
{
    $page = Page::find('chairs');
    $this['chairsPages'] = $page->getChildren();
}
}
