<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends Controller{
    public function __construct() {
        parent::__construct(); //Controller main kontrollerinin construct metodunu calistir.
        Session::init();
        
        if (Session::get("login")==false){
            Session::destroy();
            header("Location:".ADMIN_URL);
        }
    }
    
    public function index(){
        $data["namesurname"]=Session::get("name");
        $this->load->view("admin/index",$data);
    }      
    
    public function settings(){
       $panel_model = $this->load->model("Panel_Model");
       $settings[0]=$panel_model->getSettings();    
       $data["settings"]=$settings[0];
       $this->load->view("admin/settings",$data);
   }
   
    public function updateSettings(){
       $panel_model = $this->load->model("Panel_Model");

       $site_title=array(
            "value"=>$this->request->post['site_title']
        );
       $panel_model->updateSettings($site_title,1);    
        
        $site_desc=array(
            "value"=>$this->request->post['site_desc']
        );
       $panel_model->updateSettings($site_desc,2);    
       
        $site_keywords=array(
            "value"=>$this->request->post['site_keywords']
        );     
       $panel_model->updateSettings($site_keywords,3);    

      $this->response->redirect("settings?result=success");
       
   }
   
    public function contents(){
       $panel_model = $this->load->model("Panel_Model");
       $data=$panel_model->getContents();
       $this->load->view("admin/contents",$data);
   }      
   
    
    public function content(){
       $panel_model = $this->load->model("Panel_Model");
       $data["categories"]=$panel_model->getCategories();

       $this->load->view("admin/content",$data);
   } 
   
   
    public function addContent(){
        $params=array(
            "categoryID"=>$this->request->post['categoryID'],
            "lang"=>$this->request->post['lang'],
            "status"=>$this->request->post['status'],
            "title"=>$this->request->post['title'],
            "thumbnail"=>$this->request->post['thumbnail'],
            "seo_title"=>$this->request->post['seo_title'],
            "seo_keywords"=>$this->request->post['seo_keywords'],
            "seo_desc"=>$this->request->post['seo_desc'],
            "permalink"=>$this->request->post['permalink'],
            "description"=>$_POST['desc'],
            "content"=>$_POST['content']
        );        
                
        $panel_model = $this->load->model("Panel_Model");
        $result=$panel_model->addContent($params);
        $this->response->redirect("content?result=success");
    }
    
    public function updateContent(){
        $params=array(
            "categoryID"=>$this->request->post['categoryID'],
            "lang"=>$this->request->post['lang'],
            "status"=>$this->request->post['status'],
            "title"=>$this->request->post['title'],
            "thumbnail"=>$this->request->post['thumbnail'],
            "seo_title"=>$this->request->post['seo_title'],
            "seo_keywords"=>$this->request->post['seo_keywords'],
            "seo_desc"=>$this->request->post['seo_desc'],
            "permalink"=>$this->request->post['permalink'],
            "description"=>$_POST['desc'],
            "content"=>$_POST['content']
        );        
                
        $panel_model = $this->load->model("Panel_Model");
        $result=$panel_model->updateContent($params,$this->request->post['ID']);
        $this->response->redirect("content?editID=".$this->request->post['ID']."&result=success");
    }    
    
    public function deleteContent(){
        $where="ID=".$this->request->get['ID'];        
                
        $panel_model = $this->load->model("Panel_Model");
        $result=$panel_model->deleteContent($where);
        $this->response->redirect("contents?result=success");
    }    
    
   
}
