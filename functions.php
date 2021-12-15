<?php 
function es_url($file='')
{
    if($_SERVER['HTTP_HOST']=='shiv-pc') {
        return 'http://shiv-pc/all_tutorials/css-scripts/'.$file;
    } else {
        return 'http://localhost/all_tutorial/css-scripts/'.$file;
    }
}
?>