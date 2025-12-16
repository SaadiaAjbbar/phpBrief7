<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DigitalWave Solutions - Services</title>
  <link href="../styles.css" rel="stylesheet">
</head>

<body class="bg-gray-50 text-gray-800">

  <?php
  $services = [
    [
      "titre" => "Création de sites Web",
      "description" => "Sites vitrines, e-commerce, applications modernes."
    ],
    [
      "titre" => "Développement sur mesure",
      "description" => "Outils internes, solutions métiers spécifiques."
    ],
    [
      "titre" => "Automatisation & API",
      "description" => "Automatisation des tâches, intégration d'API."
    ],
    [
      "titre" => "Création de sites Web",
      "description" => "Sites vitrines, e-commerce, applications modernes."
    ],
    [
      "titre" => "Développement sur mesure",
      "description" => "Outils internes, solutions métiers spécifiques."
    ],
    [
      "titre" => "Automatisation & API",
      "description" => "Automatisation des tâches, intégration d'API."
    ]
  ];
  ?>


  <section class="container mx-auto py-16 mb-36">
    <h2 class="text-3xl font-bold mb-8 text-center">Nos Services</h2>
    <div class="grid md:grid-cols-3 gap-8">


      <?php foreach ($services as $service): ?>
        <div class="bg-white p-6 shadow-md rounded-lg">
          <h3 class="text-xl font-bold mb-2"><?= $service["titre"] ?></h3>
          <p class="text-gray-600"><?= $service["description"] ?></p>
        </div>
      <?php endforeach ?>



    </div>
  </section>
</body>

</html>