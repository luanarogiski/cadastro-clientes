
    <div class="modal fade" id="modalAdicionar" tabindex="-1" aria-labelledby="modalAdicionarLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAdicionarTitle">Adicionar</h5>
                    <a href="#" id="btnFechar" class="text-secondary" data-bs-dismiss="modal"> <span class="material-symbols-outlined">close</span></a>
                </div>
                <div class="modal-body">
                    <form id="formAdicionar">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" name="id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <label>Data de Nascimento</label>
                            <input type="date" name="dataNascimento" class="form-control" placeholder="Data de Nascimento">
                        </div>
                        <div class="form-group">
                            <label>CPF</label>
                            <input type="text" name="cpf" class="form-control" placeholder="Número do CPF">
                        </div>
                        <div class="form-group">
                            <label>Profissão</label>
                            <input type="text" name="profissao" class="form-control" placeholder="Profissão">
                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" name="telefone" class="form-control" placeholder="Número do Telefone">
                        </div>
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" name="cidade" class="form-control" placeholder="Cidade">
                        </div>
                        <div class="form-group">
                            <label>Estado</label>
                            <input type="text" name="estado" class="form-control" placeholder="Estado">
                        </div>
                        <div class="form-group">
                            <label>Endereço</label>
                            <input type="text" name="endereco" class="form-control" placeholder="Endereço">
                        </div>
                        <div class="form-group">
                            <label>Data do Cadastro</label>
                            <input type="date" name="dataCadastro" class="form-control" placeholder="Data do Cadastro" value="{{date('Y-m-d')}}">
                        </div>
                        <input type="hidden" name="acao">
                        <input type="hidden" name="id">
                        @csrf
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnCancelar" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" id="btnSalvar" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>
