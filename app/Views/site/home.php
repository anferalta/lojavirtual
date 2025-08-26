<!-- component -->
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-16 py-3">
                    <span class="sr-only">Image</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    <h1>Produto</h1><br>
                    
                    <?php if (!empty($produtos)): ?>
                        <?php foreach ($produtos as $produto): ?>

                            <p><?= htmlspecialchars($produto->nome, ENT_QUOTES, 'UTF-8') ?></p>

                            <p><?= number_format($produto->preco, 2, ',', '.') ?></p>

                        <?php endforeach ?>

                    <?php else: ?>
                        <p>Nenhum produto para ser exibido</p>
                    <?php endif ?>        
                </th>
                <th scope="col" class="px-6 py-3">
                    <h1>Categoria</h1><br>
                    <?php if (!empty($categorias)): ?>
                        <?php foreach ($categorias as $categoria): ?>

                            <p><?= htmlspecialchars($categoria->nome, ENT_QUOTES, 'UTF-8') ?></p>

                        <?php endforeach ?>

                    <?php else: ?>
                        <p>Nenhum categoria para ser exibida</p>
                    <?php endif ?>    
                </th>

            </tr>
        </thead>
        <tbody>


        </tbody>
    </table>
</div>

