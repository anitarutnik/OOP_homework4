<?php

namespace classes;

require_once 'classes/dir1/One.php';
require_once 'classes/dir1/Two.php';
require_once 'classes/dir1/Three.php';

require_once 'classes/dir2/One.php';
require_once 'classes/dir2/Two.php';
require_once 'classes/dir2/Three.php';

use classes\dir1\One as Dir1_One;
use classes\dir1\Two as Dir1_Two;
use classes\dir1\Three as Dir1_Three;

use classes\dir2\One as Dir2_One;
use classes\dir2\Two as Dir2_Two;
use classes\dir2\Three as Dir2_Three;

final class App
{
    public function outputViewAction($className)
    {
        $product = null;

        switch ($className) {
            case "dir1/One":
                $product = new Dir1_One();
                break;
            case "dir1/Two":
                $product = new Dir1_Two();
                break;
            case "dir1/Three":
                $product = new Dir1_Three();
                break;
            case "dir2/One":
                $product = new Dir2_One();
                break;
            case "dir2/Two":
                $product = new Dir2_Two();
                break;
            case "dir2/Three":
                $product = new Dir2_Three();
                break;
            default:
                $product = new Dir1_One();
                break;
        }

        return $product->viewAction();

    }
}