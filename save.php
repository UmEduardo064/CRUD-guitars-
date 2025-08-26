<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "guitarlist";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn ->connect_error)
    {
        die("". $conn ->connect_error);
    }

    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $num_corda = $_POST['num_corda'];
    $preco = $_POST['preco'];
    $captation = $_POST['captation'];
    $ponte = $_POST['ponte'];
    
    $sql = "INSERT INTO guitars (MODELO, MARCA, PRECO, NUM_CORDAS, TYPE_CAPTACAO, PONTE)
            VALUES ('$modelo','$marca','$preco','$num_corda','$captation','$ponte' )";

    if ($conn->query($sql) === TRUE)
    {
    echo "Guitarra cadastrada com sucesso!";
    echo "<br><a href='index.php'>Voltar</a>";
    } 
    else 
    {
    echo "Erro: " . $sql . "<br>" . $conn->error;
    }

$conn->close();

?>