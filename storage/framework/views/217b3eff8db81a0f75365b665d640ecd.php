<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="flex justify-between">
            <?php echo e(__('ÁREA DE EDIÇÃO')); ?> <button><a href="<?php echo e(route('vocalistas.index')); ?>">Voltar a
                    Listagem</a></button>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <form action="<?php echo e(route('vocalistas.update', $vocalista->id)); ?>" method="POST" class="flex flex-col p-36">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <label class="text-indigo-950 m-4" for="nome_vocalista">Vocalista</label>
                    <input type="text" name="nome_vocalista"
                        value="<?php echo e(old('nome_vocalista', $vocalista->nome_vocalista)); ?>">

                    <label class="text-indigo-950 m-4" for="nome_louvor">Louvor</label>
                    <input type="text" name="nome_louvor" value="<?php echo e(old('nome_louvor', $vocalista->nome_louvor)); ?>">

                    <label class="text-indigo-950 m-4" for="nome_versao_louvor">Versão</label>
                    <input type="text" name="nome_versao_louvor"
                        value="<?php echo e(old('nome_louvor_louvor', $vocalista->nome_versao_louvor)); ?>">

                    <label class="text-indigo-950 m-4" for="tonalidade">Tonalidade</label>
                    <select name="tonalidade" value="<?php echo e(old('tonalidade', $vocalista->tonalidade)); ?>" for="tonalidade"
                        class="form-select">

                        <option value="C" <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'C' ? 'selected' : ''); ?>>
                            C</option>
                        <option value="Cm"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'Cm' ? 'selected' : ''); ?>>Cm</option>
                        <option value="C#"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'C#' ? 'selected' : ''); ?>>C#</option>
                        <option value="C#m"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'C#m' ? 'selected' : ''); ?>>C#m</option>

                        <option value="Db"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'Db' ? 'selected' : ''); ?>>Db</option>
                        <option value="D"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'D' ? 'selected' : ''); ?>>D</option>
                        <option value="Dm"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'Dm' ? 'selected' : ''); ?>>Dm</option>
                        <option value="D#m"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'D#m' ? 'selected' : ''); ?>>D#m</option>

                        <option value="Ebm"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'Ebm' ? 'selected' : ''); ?>>Ebm</option>
                        <option value="Eb"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'Eb' ? 'selected' : ''); ?>>Eb</option>
                        <option value="E"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'E' ? 'selected' : ''); ?>>E</option>
                        <option value="Em"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'Ebm' ? 'selected' : ''); ?>>Em</option>

                        <option value="F"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'F' ? 'selected' : ''); ?>>F</option>
                        <option value="Fm"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'Fm' ? 'selected' : ''); ?>>Fm</option>
                        <option value="F#"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'F#' ? 'selected' : ''); ?>>F#</option>

                        <option value="G"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'G' ? 'selected' : ''); ?>>G</option>
                        <option value="Gm"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'Gm' ? 'selected' : ''); ?>>Gm</option>
                        <option value="G#"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'G#' ? 'selected' : ''); ?>>G#</option>
                        <option value="G#m"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'G#m' ? 'selected' : ''); ?>>G#m</option>

                        <option value="Ab"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'Ab' ? 'selected' : ''); ?>>Ab</option>
                        <option value="A"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'A' ? 'selected' : ''); ?>>A</option>
                        <option value="Am"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'Am' ? 'selected' : ''); ?>>Am</option>
                        <option value="A#m"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'A#m' ? 'selected' : ''); ?>>A#m</option>

                        <option value="Bbm"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'Bbm' ? 'selected' : ''); ?>>Bbm</option>
                        <option value="B"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'B' ? 'selected' : ''); ?>>B</option>
                        <option value="Bm"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'Bm' ? 'selected' : ''); ?>>Bm</option>
                        <option value="Bb"
                            <?php echo e(old('tonalidade', $vocalista->tonalidade) == 'Bb' ? 'selected' : ''); ?>>Bb</option>



                    </select>

                    <br>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Salvar</button>
                    <br>
                    <a href="<?php echo e(route('vocalistas.index')); ?>"
                        class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\esley.santana\Desktop\eltono\resources\views/vocalistas/edit.blade.php ENDPATH**/ ?>