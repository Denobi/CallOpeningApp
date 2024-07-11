<h1>Edit</h1>
<?php

  $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST['id'];

  $res = $conn ->query($sql);
  $row = $res ->fetch_object();

?>
<form action="?page=salvar" method="POST">
  <input type="hidden"  name="acao" value="editTicket">
  <input type="hidden"  name="id" value="<?php print $row->id ?>">
<div class="mb-3">
  <label for="nomeUser" class="form-label">Seu Nome</label>
  <input type="text" class="form-control" id="nomeUser" value="<?php print $row->nomeUser?>" name="nomeUser" placeholder="João da Silva ">
</div>
<div class="mb-3">
  <label for="dpUser" class="form-label">Seu Departamento ou contrato</label>
  <input type="text" class="form-control" id="dpUser" value="<?php print $row->dpUser?>" name="dpUser" placeholder="Operacional LATAM">
</div>
<div class="mb-3">
  <label for="ramal" class="form-label">Seu Ramal</label>
  <input type="tel" class="form-control" id="ramal" value="<?php print $row->ramal?>" name="ramal" placeholder="3000">
</div>
<div class="mb-3">
  <label for="descTicket" class="form-label">Descreva seu problema</label>
  <textarea class="form-control" id="descTicket"  name="descTicket" rows="3"><?php print $row->descTicket ?></textarea>
</div>
<div class="mb-3">
  <button type="submit" class="btn btn-primary">ENVIAR</button>
</div>
</form>