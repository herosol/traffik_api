<?php

class Tags extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        has_access(7);
    }

    function index()
    {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/tag';

        $this->data['rows'] = $this->master->getRows('tags', ['status'=> 1]);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function manage()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/tag';
        if ($this->input->post()) {
            $vals = $this->input->post();

            $this->master->save('tags', $vals, 'id', $this->uri->segment(4));
            setMsg('success', 'National Directory Tag has been saved successfully.');
            if(empty(intval($this->uri->segment(4)))){
                redirect(ADMIN . '/tags', 'refresh');
                exit;
            }
        }

        $this->data['row'] = $this->master->getRow('tags', array('id' => $this->uri->segment('4')));
        $this->data['page_title'] = $this->data['row'] ? "Edit tag" : "Add New tag";
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function delete()
    {
        $this->master->delete('tags', 'id', $this->uri->segment(4));
        setMsg('success', 'National Directory Tag has been deleted successfully.');
        redirect(ADMIN . '/tags', 'refresh');
    }

}

?>