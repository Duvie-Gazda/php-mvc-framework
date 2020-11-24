<?php
    namespace UK;
    use mysqli;

class UK_DataBase extends mysqli
    {
        private $hostName;
        private $login;
        private $pass;
        private $dbName;
        private $port;
        private $socket;
        
        /**
         * Method __construct
         *
         * @return void
         */
        public function __construct(){
            /* if were given more arguments call other constructoe that is named 
                as constructor with num of arguments htat was given*/
            $arguments = func_get_args();
            $numberOfArguments = func_num_args();    
            if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
                call_user_func_array(array($this, $function), $arguments);
            }
            // connect to db by data gotten from db config file 
            include '../application/configs/path.config.php';
            include DB_CONFG;
            if (isset($defaultDB)){
                $configData = $defaultDB;
                $this->hostName = $configData['hostName'];
                $this->login = $configData['login'];
                $this->pass = $configData['pass'];
                $this->dbName = $configData['dbName'];
                $this->port = $configData['port'];
                $this->connect($this->hostName,$this->login,$this->pass,$this->dbName,$this->port,$this->socket);
            }else{
                $configData = null;
            }
        }        
        /**
        *  __Construct method
        * @param $hostName
        * @param $login
        * @param $pass
        * @param $dbName
        * @param $port
        * @param $socket
        */
        public function __construct6($hostName, $login, $pass, $dbName, $port, $socket)
        {
            $this->hostName = $hostName;
            $this->login = $login;
            $this->pass = $pass;
            $this->dbName = $dbName;
            $this->port = $port;
            $this->socket = $socket;
        }
        /**
         * Method __construct5
         *
         * @param $hostName $hostName [host name]
         * @param $login $login [user login]
         * @param $pass $pass [user pass]
         * @param $dbName $dbName [name of data base]
         * @param $port $port [database port]
         *
         * @return void
         */
        public function __construct5($hostName, $login, $pass, $dbName, $port){
            $this->hostName = $hostName;
            $this->login = $login;
            $this->pass = $pass;
            $this->dbName = $dbName;
            $this->port = $port;
            $this->socket = null;
            $this->connect($this->hostName, $this->login, $this->pass, $this->dbName, $this->port);
        }        
        /**
         * Method __construct4
         *
         * @param $hostName $hostName [host name]
         * @param $login $login [user login]
         * @param $pass $pass [user pass]
         * @param $dbName $dbName [name of data base]
         *
         * @return void
         */
        public function __construct4($hostName, $login, $pass, $dbName){
            $this->hostName = $hostName;
            $this->login = $login;
            $this->pass = $pass;
            $this->dbName = $dbName;
            $this->port = 3306;
            $this->socket = null;
            $this->connect($this->hostName, $this->login, $this->pass, $this->dbName, $this->port);
        }        
        /**
         * Method status
         * 
         * @return mysqli::status
         */
        public function status(){
            return mysqli_sqlstate($this);
        }        
        /**
         * Method close
         * closes db connection
         * @return void
         */
        public function close(){
            parent::close();
        }           
        /**
         * Method connect
         * @param $hostName $hostName [host name]
         * @param $login $login [user login]
         * @param $pass $pass [user pass]
         * @param $dbName $dbName [name of data base]
         * @param $socket $socket [socket]
         *
         * @return void
         */
        public function connect($host = null, $login = null, $pass= null, $dbName = null, $port = null, $socket = null){
            parent::__construct($host,$login,$pass, $dbName,$port);
            if ($this->connect_error) {
                $error = new UK_Log();
                $error->error("Connection Error : " . $this->connect_errno .'  '. $this->connect_error);
            }
        }     
        public function getFromDB_ByQuery($query){
            $this->connect($this->hostName,$this->login,$this->pass,$this->dbName,$this->port,$this->socket);
            return $this->query($query);
        }
        /**
        * Get $hostName
        */
        public function getHostName()
        {
            return $this->hostName;
        }

        /**
        * Get $login
        */
        public function getLogin()
        {
            return $this->login;
        }

        /**
        * Get $pass
        */
        public function getPass()
        {
            return $this->pass;
        }

        /**
        * Get $dbName
        */
        public function getDbName()
        {
            return $this->dbName;
        }

        /**
        * Get $port
        */
        public function getPort()
        {
            return $this->port;
        }

    }
