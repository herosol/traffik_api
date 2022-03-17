<?php

class News extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->isLogged();
        has_access(10);
    }

    public function index() {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/news';
        $this->data['blogs'] = $this->master->get_data_rows('news');
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function manage() {
        $this->data['enable_editor'] = TRUE;
        $this->data['settings'] = $this->master->get_data_row('siteadmin');
        $this->data['pageView'] = ADMIN . '/news';
         if ($this->input->post()) {
            $vals = html_escape($this->input->post());
            $content_row = $this->master->get_data_row('news', array('id'=>$this->uri->segment(4)));

            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH.'news/', 'image');
                generate_thumb(UPLOAD_PATH.'news/',UPLOAD_PATH.'news/',$image['file_name'], 300,'thumb_');
                if(!empty($image['file_name'])){
                    // if(isset($content_row->image))
                    // // $this->remove_file(UPLOAD_PATH."news/".$content_row->image);

                    $vals['image'] = $image['file_name'];
                }
            }
            else
            {
                $vals['image'] = $content_row->image;
            }

            if (isset($_FILES["video"]["name"]) && $_FILES["video"]["name"] != "") {
            
                $video = upload_file(UPLOAD_PATH.'news/', 'video', 'video');
                if(!empty($video['file_name'])){
                    // if(isset($content_row['video']))
                    //     $this->remove_file(UPLOAD_PATH."news/".$content_row['video']);
                    $vals['video'] = $video['file_name'];
                }
            }
            else
            {
                $vals['video'] = $content_row->video;
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
                'news_date'=>$vals['news_date'],
                'video'=>$vals['video'],
                'video_duration'=>$vals['video_duration'],
                'image'=>$vals['image'],
                'status'=>$vals['status'],
                'created_date'=>$created_date,
            );
            $id = $this->master->save('news', $values, 'id', $this->uri->segment(4));
            //print_r($id);die;
            if($id > 0){
                setMsg('success', 'News has been saved successfully.');
                redirect(ADMIN . '/news', 'refresh');
                exit;
            }
        }
        $this->data['row'] = $this->master->get_data_row('news',array('id'=>$this->uri->segment('4')));
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
        $this->master->delete('news','id', $this->uri->segment(4));
        setMsg('success', 'New has been deleted successfully.');
        redirect(ADMIN . '/news', 'refresh');
    }
}

?>