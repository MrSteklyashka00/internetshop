<?php

namespace app\engine;

class Render{
public function renderTemplate($template,$params=[]){
    $tempPath= ROOT .'/views/'.$template.'.php';
    ob_start();
    extract($params);
    if(file_exists($tempPath)){
        include $tempPath;
        return ob_get_clean();
    }
    else
    echo 'Невозможно отобразить элемент';
}
}




// function render($template,$params=[]){
//     echo  renderTemplate('layout',
//     [
//         'header'=>renderTemplate('logo_header',[]),
//         'content'=>renderTemplate($template, $params),
//         'footer'=>renderTemplate('footer',[])
//     ]
// );

// }