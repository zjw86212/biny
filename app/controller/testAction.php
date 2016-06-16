<?php
/**
 * Test Action
 */
class testAction extends baseAction
{
    protected $csrfValidate = false;

    public function action_index()
    {

        $params = array(

        );
        return $this->display('main/test', $params);

    }

    public function action_form()
    {
        $form = $this->getForm('test', 'get_user');
        TXLogger::info($form->values());
        TXLogger::info($form->check());
        TXLogger::info($form->status);
        return $this->display('main/index', []);
    }
}
