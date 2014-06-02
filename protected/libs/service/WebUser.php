<?php

/**
 * Customized base controller class.
 * All controller classes should extend from this base class.
 */
class WebUser extends CWebUser
{

    public $loginUrl = array('/site/login');

    protected function beforeLogin($id,$states,$fromCookie)
    {
        //here could be your condition...
        $this->returnUrl = array('site/index');
        return true;
    }

}