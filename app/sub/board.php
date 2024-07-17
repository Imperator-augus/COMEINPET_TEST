<?php

//
// Controller for display
// https://{domain}/sub/board/view
//
class News extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(5);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'news');
        $module->run();
    }
}

//
// Controller for display
// https://{domain}/sub/board/free
//
class Free extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(6);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'freeboard');
        $module->run();
    }
}

class dog extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(8);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'dog');
        $module->run();
    }
}

class cat extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(9);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'cat');
        $module->run();
    }
}


class small extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(10);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'small');
        $module->run();
    }
}


class bird extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(11);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'bird');
        $module->run();
    }
}

//updates
class fish extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(12);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'fish');
        $module->run();
    }
}

class etc extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(13);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'etc');
        $module->run();
    }
}

class find extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(15);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'find');
        $module->run();
    }
}

class protection extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(16);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'protection');
        $module->run();
    }
}

class service extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(17);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'service');
        $module->run();
    }
}

class offer extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(19);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'offer');
        $module->run();
    }
}

class hunt extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(20);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'hunt');
        $module->run();
    }
}


class knowledge extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(23);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'knowledge');
        $module->run();
    }
}

class free_board extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(24);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'free_board');
        $module->run();
    }
}

class review extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(25);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'review');
        $module->run();
    }
}

class dog_product extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(29);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'dog_product');
        $module->run();
    }
}

class cat_product extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(30);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'cat_product');
        $module->run();
    }
}

class etc_product extends \controller\Make_Controller
{

    public function init()
    {
        $this->layout()->category_key(31);
        $this->layout()->head();
        $this->layout()->view();
        $this->layout()->foot();
    }

    public function make()
    {
        $this->module();
    }

    public function module()
    {
        $module = new \Module\Board\Make_Controller();
        $module->set('id', 'etc_product');
        $module->run();
    }
}
