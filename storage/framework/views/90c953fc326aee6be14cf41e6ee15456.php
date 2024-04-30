<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Louvores do Dia</title>
</head>
<body style="font-family: Helvetica; background-color:#1a202c; margin: 0; padding: 0; height: 100vh;">
    <h2 style="text-align: center; font-size: 24px; text-transform: uppercase; letter-spacing: 1px; padding: 30px 0; color: white">Louvores do Dia</h2>
    <div style="margin: 10px 70px 70px; box-shadow: 0px 35px 50px rgba(0, 0, 0, 0.2); background-color: white;">
        <table style="border-radius: 5px; font-size: 12px; font-weight: normal; border-collapse: collapse; width: 100%; max-width: 100%; white-space: nowrap;">
            <thead>
                <tr>
                    <th style="padding: 8px; border-bottom: 1px solid #ddd;">Vocalista</th>
                    <th style="padding: 8px; border-bottom: 1px solid #ddd;">Louvor</th>
                    <th style="padding: 8px; border-bottom: 1px solid #ddd;">Tonalidade</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $dados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td style="padding: 8px; border-bottom: 1px solid #ddd;"><?php echo e($dado->nome_vocalista); ?></td>
                    <td style="padding: 8px; border-bottom: 1px solid #ddd;"><?php echo e($dado->nome_louvor); ?></td>
                    <td style="padding: 8px; border-bottom: 1px solid #ddd;"><?php echo e($dado->tonalidade); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div style="text-align: center; font-size: 10px; margin-top: 20px; color: #c2c2c2;">
        <p>Todos os direitos reservados. &copy; <?php echo e(date('Y')); ?> <a href="https://www.linkedin.com/in/esleyleal/"  style="color: inherit; text-decoration: underline;" target="_blank">Esley Leal Santana</a>.</p>
        <p>Este projeto, desenvolvido em Laravel, visa facilitar a organização de ensaios e planejamentos na igreja, permitindo o cadastro de vocalistas, músicas, tonalidades e links de vídeos.</p>
    </div>

</body>
</html>
<?php /**PATH /home/leal/code/eltono/resources/views/vocalistas/gerar-pdf.blade.php ENDPATH**/ ?>