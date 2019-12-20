<?php
/**
 *
 */
class TemplatesController extends MY_Controller implements CrudModelInterface
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        print_r($this->data);
    }

    public function create()
    {
        $this->load->view('web/settings/templates/index');
    }

    public function store()
    {
        //
    }

    /**
     * @param $id
     */
    public function show($id)
    {
        //
    }

    public function update()
    {
        //
    }

    /**
     * @param $id
     */
    public function destroy($id)
    {
        //
    }

    public function printing()
    {
        //
    }

}
