<section class="container mx-auto py-16 mb-36">
    <h2 class="text-3xl font-bold mb-6 text-center text-black">Contactez-nous</h2>

    <?php if (!empty($errors)) : ?>
        <div class="bg-red-300 text-red-500 p-3 rounded mb-5 max-w-xl mx-auto">
            <?php foreach ($errors as $error) : ?>
                <p><?php echo htmlspecialchars($error); ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php if ($success) : ?>
        <div class="bg-green-100 text-green-700 p-3 rounded mb-5 max-w-xl mx-auto">
            <?php echo htmlspecialchars($success); ?>
        </div>
    <?php endif; ?>

    <form action="" method="POST" class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4">
        <input type="text" name="nom" placeholder="Votre nom" class="w-full border px-4 py-2 rounded-lg"
               value="<?php echo htmlspecialchars($nom); ?>">
        <input type="email" name="email" placeholder="Votre email" class="w-full border px-4 py-2 rounded-lg"
               value="<?php echo htmlspecialchars($email); ?>">
        <textarea name="message" placeholder="Votre message" class="w-full border px-4 py-2 rounded-lg"><?php echo htmlspecialchars($message); ?></textarea>
        <button type="submit" class="w-full bg-[#FA871F] text-white py-2 rounded-lg hover:bg-white hover:text-[#FA871F] hover:border-2">Envoyer</button>
    </form>
</section>
