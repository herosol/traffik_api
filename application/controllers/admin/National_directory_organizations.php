<?php

class National_directory_organizations extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->isLogged();
        has_access(10);
    }

    public function index() {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/national_directory_organizations';
        $this->data['organizations'] = $this->master->get_data_rows('national_directory_organizations');
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function manage() {
        $this->data['enable_editor'] = TRUE;
        $this->data['settings'] = $this->master->get_data_row('siteadmin');
        $this->data['pageView'] = ADMIN . '/national_directory_organizations';
         if ($this->input->post()) {
            $vals = html_escape($this->input->post());
            $content_row = $this->master->get_data_row('national_directory_organizations', array('id'=>$this->uri->segment(4)));

            $created_date="";
            if(empty($content_row->created_date)){
                $created_date=date('Y-m-d h:i:s');
            }
            else{
                $created_date=$content_row->created_date;
            }

            $values=array(
                'name'=>$vals['name'],
                'state'=>$vals['state'],
                'city'=>$vals['city'],
                'zipcode'=>$vals['zipcode'],
                'tag'=>$vals['tag'],
                'lng'=>$vals['lng'],
                'lat'=>$vals['lat'],
                'zipcode'=>$vals['zipcode'],
                'status'=>$vals['status'],
                'created_date'=>$created_date,
            );
            $id = $this->master->save('national_directory_organizations', $values, 'id', $this->uri->segment(4));
            //print_r($id);die;
            if($id > 0){
                setMsg('success', 'Organization has been saved successfully.');
                redirect(ADMIN . '/national_directory_organizations', 'refresh');
                exit;
            }
        }
        $this->data['tags']  = $this->master->get_data_rows('tags', ['status'=> 1]);

        $this->data['row'] = $this->master->get_data_row('national_directory_organizations',array('id'=>$this->uri->segment('4')));
         $this->load->view(ADMIN . '/includes/siteMaster', $this->data);        
    }

    function add_category(){
        $data=$this->input->post();
        $res=array();
        if(empty($data['cat_name'])){
            $res['status']=false;
            $res['empty']=true;
            echo json_encode($res);
        }
        else{
            $vals=array(
                'name'=>$data['cat_name']
            );
            $q=$this->master->save("categories",$vals);
            if($q>0){
                $res['status']=true;
                $res['success']=true;
                $res['cat_id']=$q;
            }
            else{
                 $res['status']=false; 
                 $res['fail']=false;  
            }
            echo json_encode($res);
        }
    }	
    
    function delete()
    {
        has_access(17);
        $this->master->delete('national_directory_organizations','id', $this->uri->segment(4));
        setMsg('success', 'Organization has been deleted successfully.');
        redirect(ADMIN . '/national_directory_organizations', 'refresh');
    }
}

?>