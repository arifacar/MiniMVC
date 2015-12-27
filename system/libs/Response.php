<?php

class Response {

    private $headers = array();
    private $level = 0;
    private $output;

    /**
     * 
     * @param type $header
     */
    public function addHeader($header) {
        $this->headers[] = $header;
    }

    /**
     * 
     * @param type $url
     * @param type $status
     */
    public function redirect($url, $status = 302) {
        header('Location: ' . str_replace(array('&amp;', "\n", "\r"), array('&', '', ''), $url), true, $status);
        exit();
    }

    /**
     * 
     * @param type $level
     */
    public function setCompression($level) {
        $this->level = $level;
    }

    /**
     * 
     * @param type $output
     */
    public function setOutput($output) {
        $this->output = $output;
    }

    /**
     * 
     * @return type
     */
    public function getOutput() {
        return $this->output;
    }

    /**
     * 
     * @param type $data
     * @param type $level
     * @return type
     */
    private function compress($data, $level = 0) {
        if (isset($_SERVER['HTTP_ACCEPT_ENCODING']) && (strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') !== false)) {
            $encoding = 'gzip';
        }

        if (isset($_SERVER['HTTP_ACCEPT_ENCODING']) && (strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'x-gzip') !== false)) {
            $encoding = 'x-gzip';
        }

        if (!isset($encoding) || ($level < -1 || $level > 9)) {
            return $data;
        }

        if (!extension_loaded('zlib') || ini_get('zlib.output_compression')) {
            return $data;
        }

        if (headers_sent()) {
            return $data;
        }

        if (connection_status()) {
            return $data;
        }

        $this->addHeader('Content-Encoding: ' . $encoding);

        return gzencode($data, (int) $level);
    }

    /**
     * output of data
     */
    public function output() {
        if ($this->output) {
            if ($this->level) {
                $output = $this->compress($this->output, $this->level);
            } else {
                $output = $this->output;
            }

            if (!headers_sent()) {
                foreach ($this->headers as $header) {
                    header($header, true);
                }
            }

            echo $output;
        }
    }

}
