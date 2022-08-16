

<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarTitle">Editar</h5>
                    <a href="#" id="btnFechar" class="text-secondary" data-bs-dismiss="modal"> <span class="material-symbols-outlined">close</span></a>
                </div>
                <div class="modal-body">
                    <form id="formEditar">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" name="id" value="{{ $id }}" class="form-control">
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
                            <label>Endereço</label>
                            <input type="text" name="endereco" class="form-control" placeholder="Endereço">
                        </div>
                        <div class="form-group">
                            <label>Data do Cadastro</label>
                            <input type="date" name="dataCadastro" class="form-control" placeholder="Data do Cadastro">
                        </div>
                        <div class="form-group">
                            <label>Data da Compra</label>
                            <input type="date" name="compra" class="form-control" placeholder="Data da Compra">
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


