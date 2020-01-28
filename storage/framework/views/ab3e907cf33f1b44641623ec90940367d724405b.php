<?php $__env->startSection('body'); ?>
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Produtos</h5>
            <table class="table table_ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome </th>
                        <th>Quantidade </th>
                        <th>Preçp </th>
                        <th>Departamento </th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <button class="btn btn-sm btn-primary" role="button" onClick="novoProduto()">Novo Produto</button>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="dlgProdutos">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" id="formProduto" >
                    <div class="modal-header">
                        <h5 class="modal-title">Novo produto</h5>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" id="id" class="form-control">
                        <div class="form-group">
                            <label for="nomeProduto" class="control-label"> Nome do Produto </label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nomeProduto" placeholder="Nome do Produto">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="precoProduto" class="control-label"> Preço </label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="precoProduto" placeholder="Preço do Produto">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="quantidadeProduto" class="control-label"> Quantidade </label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="quantidadeProduto" placeholder="Quantidade do Produto">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="categoriaProduto" class="control-label"> Categoria </label>
                            <div class="input-group">
                                <select class="form-control" id="categoriaProduto" > 

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"> Salvar</button>
                        <button type="submit" class="btn btn-secondary" data-dissmiss="modal"> Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <script type="text/javascript">
        function novoProduto() {
            $('#id').val('');
            $('#nomeProduto').val('');
            $('#precoProduto').val('');
            $('#quantidadeProduto').val('');
            $('#dlgProdutos').modal('show');
        }

        function carregarCategorias(){
            $.getJSON('/api/categorias', function(data) { 
                for(i=0; i<data.length;i++) {
                    opcao = '<option value="' + data[1].id + '">' + 
                        data[i].nome + '</option';
                    $('#categoriaProduto').append(opcao);
                }
            });
        }

        $(function(){
            carregarCategorias();
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ["current" => "produtos"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/code/projetoCadastro/resources/views/produtos.blade.php ENDPATH**/ ?>