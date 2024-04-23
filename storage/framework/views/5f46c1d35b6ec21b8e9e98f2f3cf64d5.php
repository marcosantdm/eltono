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
     <?php $__env->slot('header', null, ['class' => 'dark']); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('css/selectBox.css')); ?>">

        <button
            class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
            <span
                class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                <a href="<?php echo e(route('vocalistas.create')); ?>">CADASTRAR NOVO LOUVOR</a>
            </span>
        </button>




     <?php $__env->endSlot(); ?>

    <div class="py-12"> 

        
        <form action="<?php echo e(route('dashboard')); ?>" method="GET" class="flex my-4 gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <select name="nome_vocalista" id="vocalista"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-48">
                <option selected disabled>Filtrar Por: Vocalista</option>
                <?php $__currentLoopData = $vocalistasQuery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vocalista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($vocalista->nome_vocalista); ?>"><?php echo e($vocalista->nome_vocalista); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <select name="nome_louvor" id="louvor"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-48">
                <option selected disabled>Filtrar Por: Louvor</option>
                <?php $__currentLoopData = $louvoresQuery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vocalista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($vocalista->nome_louvor); ?>"><?php echo e($vocalista->nome_louvor); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <button type="submit"
                class="bg-green-500 dark:bg-green-700 hover:bg-green-600 dark:hover:bg-green-800 text-white font-bold py-2 px-4 rounded mr-2 text-base">Filtrar</button>
            <a href="<?php echo e(route('dashboard')); ?>"
                class="bg-yellow-500 dark:bg-yellow-700 hover:bg-yellow-600 dark:hover:bg-yellow-800 text-white font-bold py-2 px-4 rounded mr-2 text-base">Limpar
                Filtro</a>





        </form>





        

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto w-full">

                    <thead>
                        <th class="px-4 text-center">Vocalista</th>
                        <th class="px-4 text-center">Louvor</th>
                        <th class="px-4 text-center">Tonalidade</th>
                        <th class="px-4 text-center">Versão</th>

                    </thead>


                    <?php $__currentLoopData = $vocalistas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vocalista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>


                            <td class="border border-slate-950 px-4 py-2 text-gray-900 dark:text-white text-center">
                                <?php echo e($vocalista->nome_vocalista); ?>

                            </td>
                            <td class="border border-slate-950 px-4 py-2 text-gray-900 dark:text-white text-center">
                                <?php echo e($vocalista->nome_louvor); ?>

                            </td>
                            <td class="border  border-slate-950 px-4 py-2 text-gray-900 dark:text-white text-center">
                                <?php echo e($vocalista->tonalidade); ?>

                            </td>




                            <td class="border  border-slate-950 px-10 py-2 text-gray-900 dark:text-white ">

                                <div
                                    class=" flex-col items-center justify-center overflow-hidden py-2 px-4 z-50">
                                    <div>
                                        <label for="tw-modal <?php echo e($vocalista->id); ?>"
                                            class="cursor-pointer hover:underline rounded bg-black px-8 py-4 text-white active:bg-slate-400">OUÇA AGORA</label>
                                    </div>
                                    <input type="checkbox" id="tw-modal <?php echo e($vocalista->id); ?>" class="peer fixed appearance-none opacity-0">
                                    <label for="tw-modal <?php echo e($vocalista->id); ?>"
                                        class="pointer-events-none invisible absolute inset-0 flex cursor-pointer items-center justify-center overflow-hidden overscroll-contain bg-slate-700/30 opacity-0 transition-all duration-200 ease-in-out peer-checked:pointer-events-auto peer-checked:visible peer-checked:opacity-100 peer-checked:[&>*]:translate-y-0 peer-checked:[&>*]:scale-100">

                                        <div>
                                            <iframe src="<?php echo e($vocalista->nome_versao_louvor); ?>"
                                                frameborder="0"></iframe>
                                        </div>

                                    </label>
                                </div>
                            </td>






                            <td class="border px-4 py-2 text-center">
                                <div class="flex justify-center">
                                    <a href="<?php echo e(route('vocalistas.edit', $vocalista->id)); ?>"
                                        class="bg-blue-500 dark:bg-blue-700 hover:bg-blue-600 dark:hover:bg-blue-800 text-white font-bold py-2 px-4 rounded mr-2">Editar</a>
                                    <button
                                        class="bg-green-500 dark:bg-green-700 hover:bg-green-600 dark:hover:bg-green-800 text-white font-bold py-2 px-4 rounded mr-2 text-base">Add
                                        a lista</button>
                                    <form action="<?php echo e(route('vocalistas.destroy', $vocalista->id)); ?>" method="POST"
                                        onsubmit="return confirm('Tem certeza que deseja excluir ?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit"
                                            class="bg-red-500 dark:bg-red-700 hover:bg-red-600 dark:hover:bg-red-800 text-white font-bold py-2 px-4 rounded">Apagar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </table>

            </div>
        </div>
    </div> 



    <script>
        // Função para mostrar/esconder o dropdown
        document.getElementById('dropdownSearchButton').addEventListener('click', function() {
            document.getElementById('dropdownSearch').classList.toggle('hidden');
        });
    </script>

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
<?php /**PATH C:\Users\esley.santana\Desktop\eltono\resources\views/vocalistas/index.blade.php ENDPATH**/ ?>