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
            <button class="btn btn-sm btn-primary" role="button">Novo Produto</button>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ["current" => "produtos"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/code/projetoCadastro/resources/views/produtos.blade.php ENDPATH**/ ?>