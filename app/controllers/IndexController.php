<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $this->di->getDb();
        $this->di->getFlash();
    }

}

