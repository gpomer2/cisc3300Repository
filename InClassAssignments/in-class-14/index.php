<?php
require_once 'Item.php';

use Store\Item;


$item = new Item("Cool Widget", 19.99, "A very cool widget for all your widget needs.");


echo $item->getItemData();
