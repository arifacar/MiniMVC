<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $index_model = $this->load->model("Index_Model");

        $data["Options"] = $index_model->getOptions();

        $opt = array();
        foreach ($data["Options"] as $option) {
            $opt[$option["name"]] = $option["value"];
        }
        $data["Options"] = $opt;
        
        $data["getMenu"] = $index_model->getMenu();
       
        $this->load->view("index", $data);
    }

    public function contact() {
        echo "contact";
        exit;
    }

    public function savenews() {
        //$this->load->view("index");
        $index_model = $this->load->model("Index_Model");
        $result = $index_model->saveNews();
        if ($result == 1) {
            $data["result"] = " Basariyla kaydedildi ";
        } else {
            $data["result"] = "Kayit islemini yaparken bir hata olustu";
        }

        $this->load->view("index", $data);
    }

    public function mailsend() {
        //include_once '';
    }

    public function updatenews() {
        //$this->load->view("index");
        $index_model = $this->load->model("Index_Model");
        $result = $index_model->updateNews();

        if ($result == 1) {
            $data["result"] = "Basariyla guncellendi ";
        } else {
            $data["result"] = "Guncelleme islemini yaparken bir hata olustu";
        }

        $this->load->view("index", $data);
    }

    public function deletenews() {
        //$this->load->view("index");
        $index_model = $this->load->model("Index_Model");
        $result = $index_model->deleteNews();

        if ($result == 1) {
            $data["result"] = "Basariyla silindi ";
        } else {
            $data["result"] = "Silme islemini yaparken bir hata olustu";
        }

        $this->load->view("index", $data);
    }

}
