<?php
class Sitecontent extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        has_access(21);
        $this->table_name = 'sitecontent';
    }

    public function home()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_home';
        if ($vals = $this->input->post()) {
            // pr($vals);
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'home'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 11; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            if (isset($_FILES["audio"]["name"]) && $_FILES["audio"]["name"] != "") {
                
                $image = upload_file(UPLOAD_PATH.'images/', 'audio');
                if(!empty($image['file_name'])){
                    if(isset($content_row['audio']))
                        $this->remove_file(UPLOAD_PATH."images/".$content_row['audio']);
                    $vals['audio'] = $image['file_name'];
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'home');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/home");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'home'));
        // pr($this->data['row']);
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function about_us()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_about_us';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'about_us'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 10; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'about_us');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/about_us");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'about_us'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function what_is_human_traffiking()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_what_is_human_traffiking';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'what_is_human_traffiking'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 8; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'what_is_human_traffiking');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/what_is_human_traffiking");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'what_is_human_traffiking'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function help_and_resources()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_help_and_resources';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'help_and_resources'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 8; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'help_and_resources');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/help_and_resources");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'help_and_resources'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function contact() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_contact';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'contact'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            // for($i = 1; $i <= 1; $i++) {
            //     if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
            //         $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
            //         if(!empty($image['file_name'])){
            //             if(isset($content_row['image'.$i]))
            //                 $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
            //             $vals['image'.$i] = $image['file_name'];
            //         }
            //     }
            // }
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name, array('code' => $data), 'ckey', 'contact');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/contact");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'contact'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    



    function terms_conditions() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_terms_conditions';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'terms_conditions'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {

                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            unset($vals['detail']);
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name, array('code' => $data, 'full_code' => $this->input->post('detail')), 'ckey', 'terms_conditions');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/terms_conditions");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'terms_conditions'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    

    function signup() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_signup';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'signup'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {

                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name, array('code' => $data), 'ckey', 'signup');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/signup");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'signup'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    function signin() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_signin';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'signin'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {

                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name, array('code' => $data), 'ckey', 'signin');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/signin");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'signin'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }


    function privacy_policy() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_privacy_policy';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'privacy_policy'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {

                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            unset($vals['detail']);
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name, array('code' => $data, 'full_code' => $this->input->post('detail')), 'ckey', 'privacy_policy');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/privacy_policy");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'privacy_policy'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function checkout()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_checkout';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'checkout'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            unset($vals['detail']);
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name, array('code' => $data, 'full_code' => $this->input->post('detail')), 'ckey', 'checkout');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/checkout");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'checkout'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }


    public function delete()
    {
        $arr = $this->input->post('delete');
        foreach ($arr as $key => $values) {
            $this->master->delete($this->table_name, 'id', $values);
        }
        redirect("admin/sitecontent/slider", 'refresh');
    }

    function remove_file($filepath)
    {
        if (is_file($filepath))
            unlink($filepath);
        return;
    }

}
?>