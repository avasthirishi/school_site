<!-- includes/header.php -->
<!-- ========================================================= -->
<!-- 📌 Nirman School of Education - Global Header Component -->
<!-- ========================================================= -->

<!-- ====== Top Contact Bar ====== -->
<div class="bg-primary text-white text-sm py-3">
  <div class="max-w-7xl mx-auto flex justify-between items-center px-4 flex-wrap gap-2">
    <!-- Contact Info -->
    <div class="flex flex-col sm:flex-row gap-2 sm:gap-4">
      <a href="tel:+919431291346" class="flex items-center hover:text-accent transition text-xs sm:text-sm">
        <i class="fa-solid fa-phone mr-2"></i> +91-9431291346
      </a>
      <a href="mailto:admission.nirmanonline@gmail.com" class="flex items-center hover:text-accent transition text-xs sm:text-sm">
        <i class="fa-regular fa-envelope mr-2"></i> admission.nirmanonline@gmail.com
      </a>
    </div>

    <!-- Social Icons -->
    <div class="flex justify-end space-x-3 text-base sm:text-lg">
      <a href="https://www.facebook.com/profile.php?id=61583533740482" target="_blank" class="hover:text-blue-400 transition" aria-label="Facebook">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://www.instagram.com/nirmanschoolofeducation/" target="_blank" class="hover:text-pink-400 transition" aria-label="Instagram">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://x.com/nirman_school" target="_blank" class="hover:text-sky-300 transition" aria-label="Twitter">
        <i class="fab fa-x-twitter"></i>
      </a>
      <a href="https://www.youtube.com/channel/UCoPrHHhuaOeYQI6x2uSKBJg" target="_blank" class="hover:text-red-500 transition" aria-label="YouTube">
        <i class="fab fa-youtube"></i>
      </a>
    </div>
  </div>
</div>

<!-- ====== Main Navigation ====== -->
<header class="bg-white shadow-md sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
    <!-- Logo -->
    <a href="index.php" class="flex items-center space-x-3">
      <img src="images/logo.png" alt="Nirman School Logo" class="h-14 sm:h-16 w-auto">
      <div>
        <h1 class="text-lg sm:text-xl font-bold text-primary leading-tight">
          Nirman School of Education
        </h1>
        <p class="text-xs sm:text-sm text-gray-600">
          Ambedkar Chowk, Vijay Nagar, Patna
        </p>
      </div>
    </a>

    <!-- Desktop Nav -->
    <nav class="hidden md:flex items-center space-x-6 font-medium">
      <a href="index.php" class="text-primary hover:text-accent transition">Home</a>

      <!-- About Dropdown -->
      <div class="relative group">
        <button class="text-primary hover:text-accent transition flex items-center focus:outline-none">
          About Us <i class="fa-solid fa-caret-down ml-1"></i>
        </button>
        <div class="absolute hidden group-hover:block bg-white shadow-lg py-2 rounded-md w-44 top-7 left-0 z-20">
          <a href="introduction.php" class="block px-4 py-2 hover:bg-gray-100 text-gray-700">Introduction</a>
          <a href="mission.php" class="block px-4 py-2 hover:bg-gray-100 text-gray-700">Our Mission</a>
          <a href="faculty.php" class="block px-4 py-2 hover:bg-gray-100 text-gray-700">Our Faculty</a>
        </div>
      </div>

      <a href="academy.php" class="text-primary hover:text-accent transition">Nirman Academy</a>
      <a href="academics.php" class="text-primary hover:text-accent transition">Beyond Academics</a>
      <a href="admission.php" class="text-primary hover:text-accent transition">Admission</a>

      <!-- Gallery Dropdown -->
      <div class="relative group">
        <button class="text-primary hover:text-accent transition flex items-center focus:outline-none">
          Gallery <i class="fa-solid fa-caret-down ml-1"></i>
        </button>
        <div class="absolute hidden group-hover:block bg-white shadow-lg py-2 rounded-md w-44 top-7 left-0 z-20">
          <a href="photo-gallery.php" class="block px-4 py-2 hover:bg-gray-100 text-gray-700">Photo Gallery</a>
          <a href="video-gallery.php" class="block px-4 py-2 hover:bg-gray-100 text-gray-700">Video Gallery</a>
        </div>
      </div>

      <a href="contact.php" class="text-primary hover:text-accent transition">Contact Us</a>
    </nav>

    <!-- Mobile Hamburger -->
    <button id="menu-btn" class="md:hidden text-2xl text-primary focus:outline-none">
      <i class="fa-solid fa-bars"></i>
    </button>
  </div>

  <!-- ====== Mobile Menu ====== -->
  <div id="mobile-menu" class="hidden flex flex-col bg-primary text-white px-6 py-4 space-y-3 md:hidden">
    <a href="index.php" class="hover:text-accent transition">Home</a>

    <!-- Mobile About Dropdown -->
    <details class="group">
      <summary class="cursor-pointer flex justify-between items-center hover:text-accent">
        About Us <i class="fa-solid fa-caret-down text-xs ml-2"></i>
      </summary>
      <div class="pl-4 mt-1 space-y-1 text-sm">
        <a href="introduction.php" class="block hover:text-accent">Introduction</a>
        <a href="mission.php" class="block hover:text-accent">Our Mission</a>
        <a href="faculty.php" class="block hover:text-accent">Our Faculty</a>
      </div>
    </details>

    <a href="academy.php" class="hover:text-accent transition">Nirman Academy</a>
    <a href="academics.php" class="hover:text-accent transition">Beyond Academics</a>
    <a href="admission.php" class="hover:text-accent transition">Admission</a>

    <!-- Mobile Gallery Dropdown -->
    <details class="group">
      <summary class="cursor-pointer flex justify-between items-center hover:text-accent">
        Gallery <i class="fa-solid fa-caret-down text-xs ml-2"></i>
      </summary>
      <div class="pl-4 mt-1 space-y-1 text-sm">
        <a href="photo-gallery.php" class="block hover:text-accent">Photo Gallery</a>
        <a href="video-gallery.php" class="block hover:text-accent">Video Gallery</a>
      </div>
    </details>

    <a href="contact.php" class="hover:text-accent transition">Contact Us</a>
  </div>
</header>

<!-- ====== Mobile Menu Toggle Script ====== -->
<script>
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    menuBtn.innerHTML = mobileMenu.classList.contains('hidden')
      ? '<i class="fa-solid fa-bars"></i>'
      : '<i class="fa-solid fa-xmark"></i>';
  });
</script>
