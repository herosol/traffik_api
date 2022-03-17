<?php
class Pages extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        header('Content-Type: application/json');
        $this->load->model('Pages_model', 'page');
    }

    function home()
    {
        $meta = $this->page->getMetaContent('home');
        $this->data['page_title'] = $meta->page_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('home');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            $this->data['partners']  = $this->master->get_data_rows('partners', ['status'=> '1']); 
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function contact_us()
    {
        $meta = $this->page->getMetaContent('contact');
        $this->data['page_title'] = $meta->page_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('contact');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function save_contact_message()
    {
        if($this->input->post())
        {
            $res = [];
            $res['status'] = 0;
            $res['validationErrors'] = '';
            
            $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]|max_length[30]', ['min_length'=> 'Please enter full name.', 'max_length'=> 'Name too long.']);
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[10]|max_length[1000]', ['min_length'=> 'Please enter a complete message.', 'max_length'=> '1000 character limit reached.']);
            if ($this->form_validation->run() === FALSE) {
                $res['validationErrors'] = validation_errors();
            }
            else
            {
                $post = html_escape($this->input->post());
                unset($post['callback']);
                $is_added = $this->master->save('contact', $post);
                if($is_added)
                {
                    $res['status'] = 1;
                }
            }
            echo json_encode($res);
            exit;
        }
    }

    function what_is_human_traffiking()
    {
        $meta = $this->page->getMetaContent('what_is_human_traffiking');
        $this->data['page_title'] = $meta->page_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('what_is_human_traffiking');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function what_is_sex_traffiking()
    {
        $meta = $this->page->getMetaContent('what_is_sex_traffiking');
        $this->data['page_title'] = $meta->page_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('what_is_sex_traffiking');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function fact_and_stats()
    {
        $meta = $this->page->getMetaContent('fact_and_stats');
        $this->data['page_title'] = $meta->page_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('fact_and_stats');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function policy_and_legislation()
    {
        $meta = $this->page->getMetaContent('policy_and_legislation');
        $this->data['page_title'] = $meta->page_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('policy_and_legislation');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function corporate_partners()
    {
        $meta = $this->page->getMetaContent('corporate_partners');
        $this->data['page_title'] = $meta->page_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('corporate_partners');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function start_a_fundraiser()
    {
        $meta = $this->page->getMetaContent('start_a_fundraiser');
        $this->data['page_title'] = $meta->page_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('start_a_fundraiser');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function help_and_resources()
    {
        $meta = $this->page->getMetaContent('help_and_resources');
        $this->data['page_title'] = $meta->page_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('help_and_resources');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function traffik_and_sex()
    {
        $meta = $this->page->getMetaContent('traffik_and_sex');
        $this->data['page_title'] = $meta->page_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('traffik_and_sex');
        if ($data) 
        {
            $this->data['content']   = unserialize($data->code);
            $this->data['details']   = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            $this->data['partners']  = $this->master->get_data_rows('partners', ['status'=> '1']); 
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function national_directory()
    {
        $meta = $this->page->getMetaContent('national_directory');
        $this->data['page_title'] = $meta->page_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('national_directory');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function current_affairs()
    {
        $meta = $this->page->getMetaContent('current_affairs');
        $this->data['page_title'] = $meta->page_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('current_affairs');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function rescue_stories()
    {
        $meta = $this->page->getMetaContent('rescue_stories');
        $this->data['page_title'] = $meta->page_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('rescue_stories');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function share_story()
    {
        $meta = $this->page->getMetaContent('share_story');
        $this->data['page_title'] = $meta->page_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('share_story');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function project_unit()
    {
        $meta = $this->page->getMetaContent('project_unit');
        $this->data['page_title'] = $meta->page_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('project_unit');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

}
