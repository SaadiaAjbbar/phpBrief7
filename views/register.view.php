<section class="container mx-auto py-16 mb-36">
  <h2 class="text-3xl font-bold mb-6 text-center text-black">NOUVEAU COMPTE</h2>
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

  <form method="POST" class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4">
    <input type="text" name="name" placeholder="Votre nom" class="w-full border px-4 py-2 rounded-lg">
    <input type="email" name="email" placeholder="Votre email" class="w-full border px-4 py-2 rounded-lg">
    <input type="password" name="password" placeholder="Votre password" class="w-full border px-4 py-2 rounded-lg">
    <!--<input type="date" name="created_at" placeholder="Votre email" class="w-full border px-4 py-2 rounded-lg">-->

    <button type="submit" name="submit" class="w-full bg-[#FA871F] text-white py-2 rounded-lg hover:bg-white hover:text-[#FA871F] hover:border-2">Register</button>
  </form>
</section>