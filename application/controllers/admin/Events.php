<?php

class Events extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->isLogged();
        has_access(10);
    }

    public function index() {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/events';
        $this->data['blogs'] = $this->master->get_data_rows('events');
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function manage() {
        $this->data['enable_editor'] = TRUE;
        $this->data['settings'] = $this->master->get_data_row('siteadmin');
        $this->data['pageView'] = ADMIN . '/events';
         if ($this->input->post()) {
            $vals = html_escape($this->input->post());
            $content_row = $this->master->get_data_row('events', array('id'=>$this->uri->segment(4)));

            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH.'events/', 'image');
                generate_thumb(UPLOAD_PATH.'events/',UPLOAD_PATH.'events/',$image['file_name'], 300,'thumb_');
                if(!empty($image['file_name'])){
                    // if(isset($content_row->image))
                    // // $this->remove_file(UPLOAD_PATH."events/".$content_row->image);

                    $vals['image'] = $image['file_name'];
                }
            }
            else
            {
                $vals['image'] = $content_row->image;
            }

            $created_date="";
            if(empty($content_row->created_date)){
                $created_date=date('Y-m-d h:i:s');
            }
            else{
                $created_date=$content_row->created_date;
            }

            $values=array(
                'heading'=>$vals['heading'],
                'state'=>$vals['state'],
                'city'=>$vals['city'],
                'location'=>$vals['location'],
                'zipcode'=>$vals['zipcode'],
                'short_description'=>$vals['short_description'],
                'event_date'=>$vals['event_date'],
                'event_time'=>$vals['event_time'],
                'image'=>$vals['image'],
                'status'=>$vals['status'],
                'created_date'=>$created_date,
            );
            $id = $this->master->save('events', $values, 'id', $this->uri->segment(4));
            //print_r($id);die;
            if($id > 0){
                setMsg('success', 'Event has been saved successfully.');
                redirect(ADMIN . '/events', 'refresh');
                exit;
            }
        }
        $this->data['row'] = $this->master->get_data_row('events',array('id'=>$this->uri->segment('4')));
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
        $this->master->delete('events','id', $this->uri->segment(4));
        setMsg('success', 'Event has been deleted successfully.');
        redirect(ADMIN . '/events', 'refresh');
    }
}

?>