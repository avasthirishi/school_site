<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nirman School of Education</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="font-sans text-gray-800">

<!-- ====== Top Contact Bar ====== -->
<div class="bg-sky-900 text-white text-sm py-2">
  <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center px-4">
    <!-- Contact Info -->
    <div class="flex items-center space-x-5">
      <a href="tel:+919431291346" class="flex items-center hover:text-sky-300 transition">
        <i class="fa-solid fa-phone mr-2"></i> +91-9431291346
      </a>
      <a href="mailto:admission.nirmanonline@gmail.com" class="flex items-center hover:text-sky-300 transition">
        <i class="fa-regular fa-envelope mr-2"></i> admission.nirmanonline@gmail.com
      </a>
    </div>

    <!-- Social Icons -->
    <div class="flex space-x-4 mt-2 sm:mt-0 text-lg">
      <a href="https://www.facebook.com/profile.php?id=61583533740482" target="_blank" 
         class="hover:text-blue-500 transition" aria-label="Facebook">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://www.instagram.com/nirmanschoolofeducation/" target="_blank" 
         class="hover:text-pink-500 transition" aria-label="Instagram">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://x.com/nirman_school" target="_blank" 
         class="hover:text-sky-400 transition" aria-label="Twitter">
        <i class="fab fa-x-twitter"></i>
      </a>
      <a href="https://www.youtube.com/channel/UCoPrHHhuaOeYQI6x2uSKBJg" target="_blank" 
         class="hover:text-red-500 transition" aria-label="YouTube">
        <i class="fab fa-youtube"></i>
      </a>
    </div>
  </div>
</div>

<!-- ====== Main Navigation ====== -->
<header class="bg-white shadow-md">
  <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
    <!-- Logo -->
    <a href="index.php" class="flex items-center">
      <img src="images/logo.png" alt="Nirman School Logo" class="h-16 w-auto">
      <div class="ml-3">
        <h1 class="text-xl font-bold text-sky-800">Nirman School of Education</h1>
        <p class="text-sm text-gray-600">Ambedkar Chowk, Vijay Nagar, Patna</p>
      </div>
    </a>

    <!-- Desktop Nav -->
    <nav class="hidden md:flex space-x-6 font-medium">
      <a href="index.php" class="text-sky-800 hover:text-orange-500 transition">Home</a>

      <div class="relative group">
        <button class="text-sky-800 hover:text-orange-500 transition flex items-center">
          About Us <i class="fa-solid fa-caret-down ml-1"></i>
        </button>
        <div class="absolute hidden group-hover:block bg-white shadow-lg py-2 rounded-md z-10">
          <a href="introduction.php" class="block px-4 py-2 hover:bg-sky-100 text-gray-700">Introduction</a>
          <a href="mission.php" class="block px-4 py-2 hover:bg-sky-100 text-gray-700">Our Mission</a>
          <a href="faculty.php" class="block px-4 py-2 hover:bg-sky-100 text-gray-700">Our Faculty</a>
        </div>
      </div>

      <a href="academy.php" class="text-sky-800 hover:text-orange-500 transition">Nirman Academy</a>
      <a href="academics.php" class="text-sky-800 hover:text-orange-500 transition">Beyond Academics</a>
      <!-- <a href="facilities.php" class="text-sky-800 hover:text-orange-500 transition">Facilities</a> -->
      <a href="admission.php" class="text-sky-800 hover:text-orange-500 transition">Admission</a>

      <div class="relative group">
        <button class="text-sky-800 hover:text-orange-500 transition flex items-center">
          Gallery <i class="fa-solid fa-caret-down ml-1"></i>
        </button>
        <div class="absolute hidden group-hover:block bg-white shadow-lg py-2 rounded-md z-10">
          <a href="photo-gallery.php" class="block px-4 py-2 hover:bg-sky-100 text-gray-700">Photo Gallery</a>
          <a href="video-gallery.php" class="block px-4 py-2 hover:bg-sky-100 text-gray-700">Video Gallery</a>
        </div>
      </div>

      <a href="contact.php" class="text-sky-800 hover:text-orange-500 transition">Contact Us</a>
    </nav>

    <!-- Mobile Hamburger -->
    <button id="menu-btn" class="md:hidden text-2xl text-sky-800 focus:outline-none">
      <i class="fa-solid fa-bars"></i>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden bg-sky-800 text-white flex flex-col space-y-3 py-4 px-6 md:hidden">
    <a href="index.php" class="hover:text-orange-300">Home</a>
    <a href="about.php" class="hover:text-orange-300">About Us</a>
    <a href="academy.php" class="hover:text-orange-300">Nirman Academy</a>
    <a href="academics.php" class="hover:text-orange-300">Beyond Academics</a>
    <a href="facilities.php" class="hover:text-orange-300">Facilities</a>
    <a href="admission.php" class="hover:text-orange-300">Admission</a>
    <a href="gallery.php" class="hover:text-orange-300">Gallery</a>
    <a href="contact.php" class="hover:text-orange-300">Contact Us</a>
  </div>
</header>

<script>
  // Mobile menu toggle
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>

</body>
</html>
