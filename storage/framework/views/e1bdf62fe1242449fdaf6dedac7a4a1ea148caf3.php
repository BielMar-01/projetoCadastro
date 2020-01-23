<?php $__env->startSection('body'); ?>
    <div class="jumbotron bg-light border border-secondery">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary"><!--Inicio de Produtos -->
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Produtos</h5>
                        <p class="card=text">
                            Aqui você cadastra todos os seus produtos. 
                            Só não se esqueça de cadastra previamente as categorias
                        </p>
                        <a href="/produtos" class="btn btn-primary"> Cadastre seus produtos</a>
                    </div>   
                </div><!--Fim de Produtos -->

                <div class="card border border-primary"><!--Inicio de Categorias -->
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Categorias</h5>
                        <p class="card=text">
                            Cadastre as categorias dos seus produtos
                        </p>
                        <a href="/categorias" class="btn btn-primary"> Cadastre suas categorias</a>
                    </div>   
                </div><!--Fim de Categorias --> 
                 
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ["current" => "home"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/code/projetoCadastro/resources/views/index.blade.php ENDPATH**/ ?>