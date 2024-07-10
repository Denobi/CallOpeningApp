<h1>view</h1>

<?php
$sql = "SELECT * FROM usuarios";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {

    print '<div class="container text-center">
            <div class="row mt-5">';

    while ($row = $res->fetch_object()) {
        print "
            <div class='col mt-5'>
                <div class='card' style='width: 28rem; height:80vh'>
                    <div class='card-body'>
                        <p class='fw-bold' > Nome do Usuario:<h5 class='fs-3 card-title'>".$row->nomeUser."</h5></p>
                        
                        <p class='fw-bold' > Departamento do Usuario:<h6 class='fs-3 card-subtitle mb-2 text-body-secondary'>".$row->dpUser."</h6></p>
                        <p class='fw-bold' > Ramal do Usuario:<h6 class='fs-3 card-subtitle mb-2 text-body-secondary'>".$row->ramal."</h6></p>
                        <p class='fw-bold' > Descrição do chamado:</p>
                        <p class='card-text fs-5'>".$row->descTicket."</p>
                       
                    </div>
                </div>      
            </div>";
    }
    print "  </div>
            </div>";
} else {
    print("<h3 class='alert alert-danger'>Não Foi possivel localizar...</h3>");
}

?>
<!-- 
// <a href='#' class='card-link'>Card link</a>
// <a href='#' class='card-link'>Another link</a> -->