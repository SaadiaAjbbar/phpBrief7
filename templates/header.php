 <!DOCTYPE html>
 <html lang="fr">

 <head>
   <meta charset="UTF-8">
   <title>DigitalWave Solutions</title>
   <link href="/styles.css" rel="stylesheet">
 </head>

 <body class="bg-gray-50 text-gray-800">

   <header class="bg-black text-white">
     <nav class="container mx-auto flex justify-between items-center py-4 px-8">
       <h1 class="text-3xl font-bold text-[#FA871F]">DigitalWave</h1>
       <ul class="flex space-x-6">
         <li><a href="/" class="<?= $page === '/' ? 'text-[#FA871F]' : '' ?>">Accueil</a></li>
         <li><a href="/services" class="<?= $page === '/services' ? 'text-[#FA871F]' : '' ?>">Services</a></li>
         <li><a href="/about" class="<?= $page === '/about' ? 'text-[#FA871F]' : '' ?>">À propos</a></li>
         <li><a href="/contact" class="<?= $page === '/contact' ? 'text-[#FA871F]' : '' ?>">Contact</a></li>
           <?php if (isset($_SESSION['user'])): ?>
             <!-- user login -->
             
             <li><a href="/profile" class="<?= $page === '/profile' ? 'text-[#FA871F]' : '' ?>">Profile</a></li>
             <li><a href="/logout" class="<?= $page === '/logout' ? 'text-[#FA871F]' : '' ?>">Logout</a></li>
           <?php else: ?>
             <!-- non -->
             <li><a href="/login" class="<?= $page === '/login' ? 'text-[#FA871F]' : '' ?>">Login</a></li>
             <li><a href="/register" class="<?= $page === '/register' ? 'text-[#FA871F]' : '' ?>">Register</a></li>
           <?php endif; ?>
         
       </ul>
     </nav>
   </header>