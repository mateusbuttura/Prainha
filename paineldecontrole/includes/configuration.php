<?php

    //Propriedades do Banco de Dados

define("HOST", "localhost");
define("USER", "root");
define("PASS","");
define("BDNAME", "prainha");

mysql_connect(HOST,USER,PASS);
mysql_select_db(BDNAME);
