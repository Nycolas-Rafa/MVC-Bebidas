<?php
class DbConfig
{
    
    //atributos
    private $_host='localhost';
    private $_username='root';
    private $_password='';
    private $_database='poo';
    protected $connection;

    //metodos
    public function __construct()
    {
        if (!isset($this->connection)){ //verifica a conexão 
            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database); //pega as informações para conexão
            if (!$this->connection){ //Se não existir conexão
                echo "Não foi possivel acessar ";
                exit;
            }

        }
    }

}


?>