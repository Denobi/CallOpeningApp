<h1>create</h1>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cad">
  <!-- <input type="hidden" name="nivel" value="$_SESSION['nivelAcesso']"> -->
<div class="mb-3">
  <label for="nomeUser" class="form-label">Seu Nome</label>
  <input type="text" class="form-control" id="nomeUser" name="nomeUser" placeholder="João da Silva ">
</div>
<div class="mb-3">
  <label for="dpUser" class="form-label">Seu Departamento ou contrato</label>
  <input type="text" class="form-control" id="dpUser" name="dpUser" placeholder="Operacional LATAM">
</div>
<div class="mb-3">
  <label for="ramal" class="form-label">Seu Ramal</label>
  <input type="tel" class="form-control" id="ramal" name="ramal" placeholder="3000">
</div>
<div class="mb-3">
  <label for="descTicket" class="form-label">Descreva seu problema</label>
  <textarea class="form-control" id="descTicket" name="descTicket" rows="3" placeholder="Curabitur euismod aliquam tortor eu venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce non molestie ex. Quisque laoreet dui ac finibus mollis"></textarea>
</div>
<div class="mb-3">
  <button type="submit" class="btn btn-primary">ENVIAR</button>
</div>
</form>