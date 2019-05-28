<?php 

try 
{
    include 'conexao.php';

    $sql  = "INSERT INTO contato (nome, telefone, cidade) VALUES (?, ?, ?) ";    
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $_REQUEST['nome']);
    $stmt->bindParam(2, $_REQUEST['telefone']);
    $stmt->bindParam(3, $_REQUEST['cidade']);
    $stmt->execute();

    echo '<strong>Contato Salvo com Sucesso!</strong>';
    
} catch(Exception $e) {
    echo $e->getMessage();
}

?>






