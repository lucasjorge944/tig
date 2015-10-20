<!-- Modal Editar Usuário -->
<div class="modal fade" id="modalEditUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Usuário</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="txtEditNome">Nome</label>
            <input type="email" class="form-control" id="txtEditNome" placeholder="">
          </div>
          <div class="form-group">
            <label for="txtEditUsuario">Usuário</label>
            <input type="password" class="form-control" id="txtEditUsuario" placeholder="">
          </div>
          <div class="form-group">
            <label for="txtNome">Tipo de Usuário</label>
            <select class="form-control">
              <option>Vendedor</option>
              <option>Administrador</option>
            </select>
          </div>
        </form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button id="btnSaveEditUser" type="button" class="btn btn-success">Salvar Alterações</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Excluir Usuário -->
<div class="modal fade bs-example-modal-sm" id="modalDelUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <center><h3>Deseja realmente excluir o usuário?</h3></center>
          </div>
        </div> 
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <center><button id="btnSaveDelUser" type="button" class="btn btn-success btn-block"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Sim</button></center>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <center><button type="button" class="btn btn-danger btn-block " data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Não</button></center>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<!-- Modal Reset Senha -->
<div class="modal fade" id="modalResetPass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Resetar</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="txtResetSenha">Senha Nova</label>
            <input type="password" class="form-control" id="txtResetSenha" placeholder="">
          </div>
          <div class="form-group">
            <label for="txtResetSenha2">Digite Novamente sua Senha</label>
            <input type="password" class="form-control" id="txtResetSenha2" placeholder="">
          </div>
        </form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button id="btnSaveResetPass" type="button" class="btn btn-success">Salvar Alterações</button>
      </div>
    </div>
  </div>
</div>