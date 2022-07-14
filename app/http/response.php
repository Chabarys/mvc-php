<?php

namespace App\Http;

class Response {

    /**
     * Código do status HTTP
     * @var integer
     */
    private $httpCode = 200;

    /**
     * cabeçalho do response
     * @var array
     */
    private $header = [];

    /**
     * Tipo de conteúdo que está sendo retornado
     * @var string
     */
    private $contentType = "text/html";
    
    /**
     * Conteúdo do Response
     * @var mixed
     */
    private $content;

    /**
     * Método responsável por iniciar a classe e definir os valores
     */
    public function __construct($httpCode, $content, $contentType = "text/html") {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->contentType = $contentType;
        $this->setContentType($contentType);
    }

    /**
     * Método responsável por alterar o contentType do Response
     * @param string $contentType
     */
    public function setContentType($contentType) {
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }

    /**
     * Método responsável por adicionar um registro no cabeçalho do Response
     * @param string $key
     * @param string $value
     */
    public function addHeader($key, $value) {
        $this->headers[$key] = $value;
    }

    /**
     * Método responsável por enviar a resposta para o usuário
     */
    public function sendReponse() {
        switch($this->contentType) {
            case "text/html":
                echo $this->content;
                exit;
        }
    }
}