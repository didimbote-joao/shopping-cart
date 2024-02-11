<?php
    $conn = new mysqli("localhost","root","","lojafrutas");
    if ($conn->connect_error) {
        die("Conexao falhada!" .$conn->connect_error);
    }
?>