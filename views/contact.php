 <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DigitalWave Solutions - Contact</title>
    <link href="../styles.css" rel="stylesheet">
</head>

<body class="bg-gray-50 text-gray-800 bg-[url('../assets/contact.png')] bg-no-repeat bg-cover">
    

<?php
$errors = [];
$success = '';
$nom = '';
$email = '';
$message = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (empty($nom)) {
        $errors[] = "Le nom ne doit pas etre vide";
    } elseif (!preg_match("/^[a-zA-Z\s'-]+$/", $nom)) {
        $errors[] = "Le nom doit contenir just des lettres";
    }

    if (empty($email)) {
        $errors[] = "L'email ne doit pas etre vide";
    } elseif (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.(com|fr|net|org)$/", $email)) {
        $errors[] = "L'email est non valide";
    }

    if (empty($message)) {
        $errors[] = "Le message ne doit pas etre vide";
    } elseif (!preg_match("/^[a-zA-Z0-9\s]{10,100}$/", $message)) {

        if(strlen($message)<10){
            $errors[] = "Le message est trop court";
        }else{
            $errors[] = "Le message est trop long";
        }
        
    }

    if (empty($errors)) {
        $success = "Votre message a ete envoye !";
        $nom ='';
        $email ='';
        $message = '';
    }
}
?>

<section class="container mx-auto py-16 mb-36">
    <h2 class="text-3xl font-bold mb-6 text-center text-white">Contactez-nous</h2>

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

    <form action="https://formsubmit.co/ajbbarsaadia6@gmail.com" method="POST" class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4">
        <input type="text" name="nom" placeholder="Votre nom" class="w-full border px-4 py-2 rounded-lg"
               value="<?php echo htmlspecialchars($nom); ?>">
        <input type="email" name="email" placeholder="Votre email" class="w-full border px-4 py-2 rounded-lg"
               value="<?php echo htmlspecialchars($email); ?>">
        <textarea name="message" placeholder="Votre message" class="w-full border px-4 py-2 rounded-lg"><?php echo htmlspecialchars($message); ?></textarea>
        <button type="submit" class="w-full bg-[#FA871F] text-white py-2 rounded-lg hover:bg-white hover:text-[#FA871F] hover:border-2">Envoyer</button>
    </form>
</section>

   

</body>

</html>


