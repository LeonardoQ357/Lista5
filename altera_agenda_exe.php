<?php
    include('conexao.php');

    $nome_foto = "";
    if(file_exists($_FILES['foto']['tmp_name'])){
        $pasta_destino = "fotos/";
        $extensao = strtolower(substr($_FILES['foto']['name'], -4));
        $nome_foto = $pasta_destino . date("Ymd-His") . $extensao;
        move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);

        $sql = "UPDATE agenda SET 
                nome= '". $_POST['name'] ."', 
                apelido= '". $_POST['nickname'] ."', 
                endereco= '". $_POST['endereco'] ."',
                bairro= '". $_POST['bairro'] ."',
                cidade= '". $_POST['cidade'] ."',
                estado= '". $_POST['estado'] ."',
                telefone= '". $_POST['tel'] ."',
                celular= '". $_POST['cel'] ."',
                email= '". $_POST['email'] ."',
                foto= '". $nome_foto ."'  
                WHERE id_agenda= '". $_POST['id'] ."'";
        $result = mysqli_query($con, $sql);
    }else{
        $sql = "UPDATE agenda SET 
                nome= '". $_POST['name'] ."', 
                apelido= '". $_POST['nickname'] ."', 
                endereco= '". $_POST['endereco'] ."',
                bairro= '". $_POST['bairro'] ."',
                cidade= '". $_POST['cidade'] ."',
                estado= '". $_POST['estado'] ."',
                telefone= '". $_POST['tel'] ."',
                celular= '". $_POST['cel'] ."',
                email= '". $_POST['email'] ."' 
                WHERE id_agenda= '". $_POST['id'] ."'";
        $result = mysqli_query($con, $sql);
    }

    if($result){
        header('location: listar_agenda.php');
    }else{
        echo "Erro ao tentar alterar dados: ". $mysql_error($con) ."!";
        echo
        "<div>
            <a href='listar_usuarios.php'>Voltar</a>
        </div>"; 
    }
?>