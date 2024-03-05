<?php

include ('../routes/consola.php')

class MySQLDatabase {
    private $self;
    private $host;
    private $username;
    private $password;
    private $database;

    public function __init__() {
        $self.$host = 'localhost';
        $self.$username = 'root';
        $self.$password = '';
        $self.$database = 'rtapp';
    }

    public function connect($self) {
        try {
            $self.connect($self->host, $self->username, $self->password, $self->database);
            $db_connnect = 'Conexion exitosa';
            php_console_log($db_connnect);
        } catch (Exception $self.connect.error) {
            $db_error = 'Conexion fallida';
            php_console_error($db_error);
        }
    }
}


