<?php

namespace classes\dir1;

require_once 'interfaces/ActionInterface.php';

use interfaces\ActionInterface;

class One implements ActionInterface
{

    public function viewAction()
    {
        return "Name of the class is " . get_class($this);
    }
}