<?php $__env->startSection('body'); ?>
    <div class="card border">
        <div class="card-body">
            <form action="/categorias/<?php echo e($cat->id); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="nomeCategoria">Nome da Categoria</label>
                    <input type="text" class="form-control" name="nomeCategoria" id="nomeCategoria" 
                        placeholder="Categoria" value="<?php echo e($cat->nome); ?>">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ["current" => "categorias"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/code/projetoCadastro/resources/views//editarcategoria.blade.php ENDPATH**/ ?>