 <section class="container mx-auto py-20 text-center mb-72">
     <h2 class="text-4xl font-bold mb-6">BONJOUR M (Mme) <?= htmlspecialchars($user['name']) ?></h2>
     <p class="text-lg mb-8 text-gray-600">votre email est :<?= htmlspecialchars($user['email']) ?></p>
     <p class="text-lg mb-8 text-gray-600">votre email est :<?= htmlspecialchars($user['created_at']) ?></p>

 </section>