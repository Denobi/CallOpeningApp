<?php
    switch ($_REQUEST["acao"]) {
        case 'cad':
            $nomeUser = $_POST["nomeUser"];
            $dpUser = $_POST["dpUser"];
            $ramal = $_POST["ramal"];
            $descTicket = $_POST["descTicket"];
            

            $sql = "INSERT INTO usuarios (nomeUser,dpUser,ramal,descTicket) 
            VALUES ('{$nomeUser}','{$dpUser}','{$ramal}','{$descTicket}')";

            $res = $conn->query($sql);

            if($res==true){
                print"<script>alert('Cadastrado com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
               
                print"<script> console.log(err)</script>";
                print"<script>alert('Não foi possivel cadastrar');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;
        case 'editTicket':
            # code...
            break;
        case 'deletTicket':
            # code...
            break;
        
        default:
            # code...
            break;
    }



