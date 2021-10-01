<?php 
function es_url($file='')
{
    if($_SERVER['HTTP_HOST']=='shiv-pc') {
        return 'http://shiv-pc/all_tutorials/javascript/es6/'.$file;
    } else {
        return 'http://localhost/all_tutorial/javascript/es6/'.$file;
    }
}
?>