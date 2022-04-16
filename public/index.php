<?php 

function getPage($page) {
    $path = __DIR__. "/../src/pages/$page.php";
    if (file_exists($path))
        return $path;
    else
        return false;
}

function getPartial($partial) {
    $path = __DIR__. "/../src/partials/$partial.php";
    if (file_exists($path)) {
        include $path;
        return true;
    }
    else
        return false;
}

// include header
getPartial('header');

$uri = ltrim($_SERVER['REQUEST_URI'], '/');

 if ($uri == '' || $uri == 'index.php') {
     include getPage('index');
 } else if (($page = getPage($uri)) && $uri != '404') {
     include $page;
 } else {
     http_response_code(404);
     include getPage('404');
 }

// include footer
 getPartial('footer');