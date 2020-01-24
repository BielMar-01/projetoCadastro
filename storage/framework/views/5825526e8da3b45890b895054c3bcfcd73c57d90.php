<?php $__env->startSection('body'); ?>
    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <select class="custom-select mr-sm-2" id="categoria" name="categoria">
                        <option selected>Choose...</option>
                        <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->nome); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" 
                            placeholder="Produto">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ["current" => "produtos"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/code/projetoCadastro/resources/views/novoproduto.blade.php ENDPATH**/ ?>