<?php
session_start();
include('config.php');
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
                if($_SESSION['nivelAcesso']=="Admin"){

                    print"<script>alert('Editado com sucesso');</script>";
                    print"<script>location.href='?page=visuTicket';</script>";
                }else{
                    print"<script>alert('Editado com sucesso');</script>";
                    print"<script>location.href='dashComum.php';</script>";
                }
               
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
                print"<script>alert('Cadastrado com sucesso');</script>";
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
                        #NOVOS USUARIOS
                        case 'cadNewUser':
                            $nomeUser = $_POST["nomeUser"];
                            $username = $_POST["username"];
                            $mailUser = $_POST["mailUser"];
                            $passUser = sha1($_POST["passUser"]);
                            $passUser2 = sha1($_POST["passUser2"]);
                            print"alert(".$passUser === $passUser2.")";
                            if($passUser === $passUser2){
                                $sql = "INSERT INTO accountusers (nomeUser,username,mailUser,passUser) 
                                VALUES ('{$nomeUser}','{$username}','{$mailUser}','{$passUser}')";
                    
                                $res = $conn->query($sql);
                    
                                if($res==true){
                                    print"<script>alert('Novo Usuario Cadastrado com sucesso');</script>";
                                    print"<script>location.href='index.php';</script>";
                                }else{
                                    
                                    print"<script> console.log(err)</script>";
                                    print"<script>alert('Não foi possivel cadastrar');</script>";
                                    print"<script>location.href='cadUsersNew.php';</script>";
                                }
                            }else{
                                   
                                print"<script> console.log(err)</script>";
                                print"<script>alert('As senhas não coincidem, por favor tente novamente');</script>";
                                print"<script>location.href='cadUsersNew.php';</script>";
                            }
                
                           
                            break;
                default:
                # code...
                break;
            }
            
            
            
            