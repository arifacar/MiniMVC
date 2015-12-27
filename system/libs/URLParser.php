<?php

class URLParser extends Controller {

    // Normalde Controller eklenmez ama biz parmalink icin index
    // icinde bir metod control yoksa sayfa actiracagiz

    public $_url; //@var Array URL verilerini tutar.
    public $_controllerName = 'Index'; //@var String Çalıştırılacak controller adını tutar.
    public $_methodName = 'Index'; //@var String Çalıştırılacak method adını tutar.
    public $_controllerPath = 'app/controllers/'; //@var String Controller dosyalarının yolunu tutar.
    public $_controller; //@var Object Çalıştırılan controller nesnesini/sınıfını tutar.

    public function __construct() {
        parent::__construct(); //Controller main kontrollerinin construct metodunu calistir.
        $this->getUrl();
        $this->language();
        $this->loadController();
        $this->callMethod();
    }

    /**
     * Url'i alır, dizi haline getirir. $_url özelliğine atar.
     * $_url[0] -> Controller ismi
     * $_url[1] -> Method ismi
     * $_url[2] -> Parametre
     * 
     * Ya da
     * 
     * Url boş ise $_url özelliğini unset() yapar.
     */
    public function getUrl() {
        $this->_url = isset($_GET["url"]) ? $_GET["url"] : null;
        if ($this->_url != null) {
            $this->_url = rtrim($this->_url, "/");
            $this->_url = explode("/", $this->_url);
        } else {
            unset($this->_url);
        }
    }

    /**
     * Controller dosyasını ve Controller'ı yükler.
     * $_url[0] set edilmişse $_controllerName'e atar ve $_controllerName'i 
     * yükler.
     * $_url[0] set edilmemişse $_controllerName'in default değerini yükler.
     */
    public function language() {

        Session::init();

        if (!isset($this->_url[0])) {
            Session::set("lang", "tr");
            header("Location:" . SITE_URL . "/" . "tr");
        }

        if ($this->_url[0] == "admin") {
            Session::set("lang", "tr");
            header("Location:" . SITE_URL . "/" . "tr/admin");
        }

        if ($this->_url[0] == "tr" || $this->_url[0] == "TR" || $this->_url[0] == "en" || $this->_url[0] == "EN") {
            Session::set("lang", strtolower($this->_url[0]));
        } else {
            Session::set("lang", "tr");
            header("Location: " . SITE_URL . "/" . Session::get("lang"));
            exit;
        }
    }

    public function loadController() {
        if (!isset($this->_url[1])) {
            include $this->_controllerPath . $this->_controllerName . '.php';
            $this->_controller = new $this->_controllerName();
        } else {
            $this->_controllerName = ucwords($this->_url[1]);
            $fileName = $this->_controllerPath . $this->_controllerName . ".php";
            if (file_exists($fileName)) {
                include $fileName;
                if (class_exists($this->_controllerName)) {
                    $this->_controller = new $this->_controllerName();
                }
            }
        }
    }

    /**
     * Methodu parametreli ya da parametresiz yükler.
     * $_url[1] set edilmişse $_methodName'e atar ve $_methodName'i 
     * yükler.
     * $_url[1] set edilmemişse $_methodName'in default değerini yükler.
     */
    public function callMethod() {
        if (isset($this->_url[3])) {
            $this->_methodName = $this->_url[2];
            if (method_exists($this->_controller, $this->_methodName)) {
                $this->_controller->{$this->_methodName}($this->_url[3]);
            } else {
                echo "Controller içinde method bulunamadı.";
            }
        } else {
            if (isset($this->_url[2])) {
                $this->_methodName = $this->_url[2];
                if (method_exists($this->_controller, $this->_methodName)) {
                    $this->_controller->{$this->_methodName}();
                } else {
                    echo "Controller içinde method bulunamadı.";
                }
            } else {
                if (method_exists($this->_controller, $this->_methodName)) {
                    $this->_controller->{$this->_methodName}();
                } else {
                    //Buraya Sayfa Actirma Islemi Yaptiracagiz

                    include_once 'app/controllers/Content.php';
                    $index = new Content();
                    $index->index($this->_url[1]);
                }
            }
        }
    }

}
