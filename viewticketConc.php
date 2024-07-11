<h1>view</h1>

<?php
$sql = "SELECT * FROM ticketexec";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {

    print '
    <table class="table table-hover p-4 table-dark table-striped ">
        <thead>
            <tr>
                <th scope="col">Nome do Usuario</th>
                <th scope="col">Departamento</th>
                <th scope="col">Ramal do Usuario</th>
                <th scope="col">Descrição do chamado</th>
                <th scope="col">Data da execução</th>
                <th scope="col">Ações</th>
             
            </tr>
        </thead>
        <tbody>
    <tr>';

    while ($row = $res->fetch_object()) {
        print "
        <tr class=' '>

            <td> $row->nomeUser </td>
            <td> $row->dpUser </td>
            <td> $row->ramal </td>
            <td> $row->descTicket </td>
            <td> $row->dataExec</td>
            <td class='d-flex justify-content-between align-self-center' style='height:15vh;'> 

            <button style='height:7vh; margin-top:2vh' onclick=\"if (confirm('Tem certeza que deseja excluir')) {
                location.href='?page=salvar&acao=deletTicketConc&id=".$row->id."'
            }
            else{false;}
            \" class='btn text-center btn-danger'>DELETAR</button> </td>
          
            </tr>
           ";
    }
    print "  
        </tbody>
    </table>";
} else {
    print("<h3 class='alert alert-danger'>Não Foi possivel localizar...</h3>");
}

?>
<!-- 
// <a href='#' class='card-link'>Card link</a>
// <a href='#' class='card-link'>Another link</a> -->