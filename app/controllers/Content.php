<?php

// defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index($permalink) {
        //$this->load->view("index");
        $index_model = $this->load->model("Index_Model");

        $data["Options"] = $index_model->getOptions();
        $opt = array();
        foreach ($data["Options"] as $option) {
            $opt[$option["name"]] = $option["value"];
        }
        $data["Options"] = $opt;

        $data["getMenu"] = $index_model->getMenu();


        $content_model = $this->load->model("Content_Model");

        $data["getContent"] = $content_model->getContent($permalink);
        $data["permalink"] = strtolower($permalink);

        if (empty($data["getContent"])) {
            if ($permalink == "contact" || $permalink == "iletisim") {
                $this->load->view("contact", $data);
                exit;
            }
        }

        if (empty($data["getContent"])) {
            // Eger sayfa yoksa hata sayfasina yonlendir!
            header("Location: " . SITE_URL . "/" . Session::get("lang") . "/404");
            exit;
        }

        $this->load->view("content", $data);
    }

}
