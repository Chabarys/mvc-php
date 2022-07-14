<?php

namespace App\Http;

class Request {

    /**
     * Método HTTP da requisição
     * @var string
     */
    private $httpMethod;

    /**
     * URI da página
     * @var string
     */
    private $uri;

    /**
     * Parametros da URL ($_GET)
     * @var array
     */
    private $queryParams = [];

    /**
     * Variáveis recebidas no POST da página ($_POST)
     * @var array
     */
    private $postVars = [];

    /**
     * Cabeçalho da requisição
     * @var array
     */
    private $headers = [];

    /**
     * Construtor da classe
     */
    public function __construct(){
        $this->queryParams = $_GET ?? [];
        $this->postVars = $_POST ?? [];
        $this->headers = getallheaders();
        $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';
    }

    /**
     * Método responsável por retornar o HTTP da requisição.
     * @return string
     */
    public function getHttpMethod() {
        return $this->httpMethod;
    }
    /**
     * Método responsável por retornar o URI da requisição.
     * @return string
     */
    public function getUri() {
        return $this->uri;
    }

    /**
     * Método responsável por retornar os HEADERS da requisição.
     * @return array
     */
    public function getHeaders() {
        return $this->headers;
    }

    /**
     * Método responsável por retornar os parâmentros da requisição.
     * @return array
     */
    public function getQueryParams() {
        return $this->queryParams;
    }

    /**
     * Método responsável por retornar as variáveis da requisição.
     * @return array
     */
    public function getPostVars() {
        return $this->postVars;
    }
}