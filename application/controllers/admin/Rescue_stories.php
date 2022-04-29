<?php

class Rescue_stories extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->isLogged();
        has_access(10);
    }

    public function index() {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/rescue_stories';
        $this->data['blogs'] = $this->master->get_data_rows('rescue_stories');
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function manage() {
        $this->data['enable_editor'] = TRUE;
        $this->data['settings'] = $this->master->get_data_row('siteadmin');
        $this->data['pageView'] = ADMIN . '/rescue_stories';
         if ($this->input->post()) {
            $vals = $this->input->post();
            $content_row = $this->master->get_data_row('rescue_stories', array('id'=>$this->uri->segment(4)));
            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH.'rescue_stories/', 'image');
                generate_thumb(UPLOAD_PATH.'rescue_stories/',UPLOAD_PATH.'rescue_stories/',$image['file_name'], 400,'thumb_');
                if(!empty($image['file_name'])){
                    if(isset($content_row->image))
                        // $this->remove_file(UPLOAD_PATH."rescue_stories/".$content_row->image);

                    $vals['image'] = $image['file_name'];
                }
            }
            else
            {
                $vals['image'] = $content_row->image;
            }

            if (isset($_FILES["detail_image"]["name"]) && $_FILES["detail_image"]["name"] != "") {
                
                $detail_image = upload_file(UPLOAD_PATH.'rescue_stories/', 'detail_image');
                generate_thumb(UPLOAD_PATH.'rescue_stories/',UPLOAD_PATH.'rescue_stories/',$detail_image['file_name'], 500,'thumb_');
                if(!empty($detail_image['file_name'])){
                    if(isset($content_row->detail_image))
                        // $this->remove_file(UPLOAD_PATH."rescue_stories/".$content_row->detail_image);

                    $vals['detail_image'] = $detail_image['file_name'];
                }
            }
            else
            {
                $vals['detail_image'] = $content_row->detail_image;
            }

            $created_date="";
            if(empty($content_row->created_date)){
                $created_date=date('Y-m-d h:i:s');
            }
            else{
                $created_date=$content_row->created_date;
            }

            $values=array(
                'victim'=>$vals['victim'],
                'age'=>$vals['age'],
                'gender'=>$vals['gender'],
                'location'=>$vals['location'],
                'types_of_trafficking'=>$vals['types_of_trafficking'],
                'short_description'=>$vals['short_description'],
                'detail_image'=>$vals['detail_image'],
                'detail'=>$vals['detail'],
                'image'=>$vals['image'],
                'status'=>$vals['status'],
                'created_date'=>$created_date,
            );
            $id = $this->master->save('rescue_stories', $values, 'id', $this->uri->segment(4));
            //print_r($id);die;
            if($id > 0){
                setMsg('success', 'Rescue Story has been saved successfully.');
                redirect(ADMIN . '/rescue_stories', 'refresh');
                exit;
            }
        }
        $this->data['row'] = $this->master->get_data_row('rescue_stories',array('id'=>$this->uri->segment('4')));
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
        $this->master->delete('rescue_stories','id', $this->uri->segment(4));
        setMsg('success', 'Rescue Story has been deleted successfully.');
        redirect(ADMIN . '/rescue_stories', 'refresh');
    }
}

?>