<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Controller {

    public function __construct() {
        parent::__construct(); //Controller main kontrollerinin construct metodunu calistir.
    }

    public function index() {
        $this->login();
    }

    public function login() {
        Session::init();
        if (Session::get("login") == true) {
            header("Location:" . SITE_URL . "/" . Session::get("lang") . "/panel");
        }

        $this->load->view("admin/login");
    }

    public function checkUser() {
        $params = array(
            ":mail" => $_POST["mail"],
            ":password" => $_POST["password"]
        );

        $admin_model = $this->load->model("Admin_Model");
        $result = $admin_model->userControl($params);

        if (!$result) {
            header("Location:" . ADMIN_URL);
        } else {
            Session::init();
            Session::set("login", true);
            Session::set("mail", $result[0]["mail"]);
            Session::set("userId", $result[0]["ID"]);
            Session::set("name", $result[0]["name"]);
            header("Location:" . SITE_URL . "/" . Session::get("lang") . "/panel");
        }
    }

    public function logout() {
        Session::init();
        Session::destroy();
        header("Location:" . ADMIN_URL);
    }

}

?>