<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;



    class Atualizar{
        function atualizarResiduo(Conexao $conexao, string $campo, string $novoDado, string $id){

            $conn = $conexao->conectar();
            $sql = "update cadastrarResiduo set $campo = '$novoDado' where id = '$id'" ;
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            if ($result){
                echo "<br>Atualizado com sucesso!";
            } else {
                echo "<br>Não atualizado!";
            }


        }



    }//Fim do Atualizar



?>