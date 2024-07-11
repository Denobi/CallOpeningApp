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
                print"<script>location.href='?page=visuTicket';</script>";
            }else{
               
                print"<script> console.log(err)</script>";
                print"<script>alert('Não foi possivel cadastrar');</script>";
                print"<script>location.href='?page=visuTicket';</script>";
            }
            break;
            case 'editTicket':
                $nomeUser = $_POST["nomeUser"];
                $dpUser = $_POST["dpUser"];
                $ramal = $_POST["ramal"];
                $descTicket = $_POST["descTicket"];
                
                
                $sql = "UPDATE usuarios SET 
                nomeUser ='{$nomeUser}', 
                dpUser='{$dpUser}',
                ramal='{$ramal}',
                descTicket='{$descTicket}' 
                WHERE id=".$_REQUEST["id"];
            
            $res = $conn->query($sql);
            
            if($res==true){
                print"<script>alert('Editado com sucesso');</script>";
                print"<script>location.href='?page=visuTicket';</script>";
            }else{
                
                print"<script> console.log(err)</script>";
                print"<script>alert('Não foi possivel cadastrar');</script>";
                print"<script>location.href='?page=visuTicket';</script>";
            }
            break;
            
            
            case 'deletTicket':
                $sql="DELETE FROM usuarios WHERE id =".$_REQUEST["id"];
                
                $res = $conn->query($sql);
                
                if($res==true){
                    print"<script>alert('Excluido com sucesso');</script>";
                    print"<script>location.href='?page=visuTicket';</script>";
                }else{
                    
                    print"<script> console.log(err)</script>";
                    print"<script>alert('Não foi possivel Excluir');</script>";
                    print"<script>location.href='?page=visuTicket';</script>";
                }
                break;
                
           
                case 'ticketConc':

                    $sqlVerif = "SELECT * FROM usuarios WHERE id=".$_REQUEST['id'];

                    $resVerif = $conn ->query($sqlVerif);
                    $rowVerif = $resVerif ->fetch_object();

                    $nomeUser = $rowVerif->nomeUser;
                    $dpUser = $rowVerif->dpUser;
                    $ramal =$rowVerif->ramal;
                    $descTicket =$rowVerif->descTicket;
                    $dataExec = $_REQUEST['data'];
                    
        
                    $sql = "INSERT INTO ticketexec (nomeUser,dpUser,ramal,descTicket,dataExec) 
                    VALUES ('{$nomeUser}','{$dpUser}','{$ramal}','{$descTicket}','{$dataExec}')";
        
                    $res = $conn->query($sql);

                    $sqlDelet="DELETE FROM usuarios WHERE id =".$_REQUEST["id"];
                
                    $resDelet = $conn->query($sqlDelet);
        
                    if($res==true){
                        print"<script>alert('Finalizado com sucesso');</script>";
                        print"<script>location.href='?page=viewticketConc';</script>";
                    }else{
                       
                        print"<script> console.log(err)</script>";
                        print"<script>alert('Não foi possivel cadastrar');</script>";
                        print"<script>location.href='?page=visuTicket';</script>";
                    }
                    break;

                    case 'deletTicketConc':
                        $sql="DELETE FROM ticketexec WHERE id =".$_REQUEST["id"];
                        
                        $res = $conn->query($sql);
                        
                        if($res==true){
                            print"<script>alert('Excluido com sucesso');</script>";
                            print"<script>location.href='?page=viewticketConc';</script>";
                        }else{
                            
                            print"<script> console.log(err)</script>";
                            print"<script>alert('Não foi possivel Excluir');</script>";
                            print"<script>location.href='?page=visuTicket';</script>";
                        }
                        break;
                default:
                # code...
                break;
            }
            
            
            
            