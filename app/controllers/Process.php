<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function contactMessage(){
        $params=array(
            "name"=>$this->request->post['name'],
            "mail"=>$this->request->post['mail'],
            "phone"=>$this->request->post['phone'],
            "message"=>$this->request->post['message'],
            "date"=>date("Y-m-d H:i:s", time())            
        );        
        
        $process_model = $this->load->model("Process_Model");
        
        $result=$process_model->addContactMessage($params);
        
        if ($result==1){
            $resultData["result"]=" Basariyla kaydedildi ";
            $this->response->redirect("../contact?result=success");
        } else {
            $resultData["result"]="Kayit islemini yaparken bir hata olustu";
            $this->response->redirect("../contact?result=error");
        }
    }
    
    public function logout(){
        Session::init();
        Session::destroy();
        header("Location:".SITE_URL);
    }        
 

}
