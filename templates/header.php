 <header class="bg-black shadow-md text-white">
   <nav class="container mx-auto flex justify-between items-center py-4 p-32 ">
     <h1 class=" text-4xl font-bold text-[#FA871F] ml-3.5">DigitalWave</h1>

     
     <ul class="flex space-x-6">
       <li><a href="/" class="<?php if($page==="/"){ echo 'text-[#FA871F]'; }?>  text-xl  hover:text-[#FA871F]">Accueil</a></li>
       <li><a href="/services" class="<?php if($page==="/services"){ echo 'text-[#FA871F]'; }?>  text-xl hover:text-[#FA871F]">Services</a></li>
       <li><a href="/about" class="<?php if($page==="/about"){ echo 'text-[#FA871F]'; }?> text-xl hover:text-[#FA871F]">À propos</a></li>
       <li><a href="/contact" class="<?php if($page==="/contact"){ echo 'text-[#FA871F]'; }?> text-xl hover:text-[#FA871F]">Contact</a></li>
     </ul>
   </nav>
 </header>