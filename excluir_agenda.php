<?php
    include('conexao.php');

    $sql = "DELETE FROM agenda WHERE id_agenda='". $_GET['id_agenda'] ."'";
    $result = mysqli_query($con, $sql);

    if($result){
        header('Location:listar_agenda.php');
    }else{
        echo "Erro ao tentar excluir dados: ". $mysql_error($con) ."!";
        echo
        "<div>
            <a href='listar_usuarios.php'>Voltar</a>
        </div>"; 
    }
?>