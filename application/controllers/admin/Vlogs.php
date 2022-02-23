<?php 
class Vlogs extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Vlog_model','vlog');
	}
	function index(){
		$this->data["pageView"] = ADMIN."/vlogs";
		$this->data["rows"] = $this->vlog->get_vlog();
		$this->load->view(ADMIN.'/includes/siteMaster',$this->data);
	}
	function manage(){
		$this->data["enable_editor"] = true;
		$this->data["pageView"] = ADMIN."/vlogs";
		$id = $this->uri->segment("4");
		$this->data["row"]=$this->vlog->get_vlog($id);
		if($this->input->post()){
			$vals = $this->input->post();
			if($_FILES['video']['name'] != ""){
				$this->removeVideo($id);
				$video = upload_video(UPLOADIMAGE.'/vlogs',"video");
				
				$vals["video"] = $video["file_name"];
			}else{
				$vals["video"] = $this->data["row"]->video;
			}

			if($_FILES['image']['name'] !=""){
				$this->removeImage($id);
				$image = upload_image(UPLOADIMAGE.'/vlogs','image');
				$vals['image']=$image['file_name'];
			}
			else{
				$vals["image"] = $this->data["row"]->image;
			}

			unset($vals['image1']);
				$this->vlog->save_vlog($vals,$id);
				setMsg("success","Vlog  uploaded successfully!");
				redirect("admin/vlogs");
		}
		
		$this->load->view(ADMIN."/includes/siteMaster",$this->data);
	}
	function delete(){
		$id = $this->uri->segment("4");
		if($id>0){	
			if($this->vlog->delete_vlog($id)>0){
				setMsg("success","Vlog deleted successfully");
				redirect("admin/vlogs");
			}
			else{
				setMsg("error","Vlog not found");
			}
		}
		else{
			setMsg("error","Invalid operation");
		}	
	}
	function removeImage($id){
		$row = $this->vlog->get_vlog($id);
		$filename = "./".UPLOADIMAGE."/vlogs/".$row->image;
		if(is_file($filename)){
			unlink($filename);
		}
		return;
	}
	function removeVideo($id){
		$row = $this->vlog->get_vlog($id);
		$filename = "./".UPLOADIMAGE."/vlogs/".$row->video;
		if(is_file($filename)){
			unlink($filename);
		}
		return;
	}
}

?>