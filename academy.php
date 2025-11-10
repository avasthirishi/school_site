<?php include("includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nirman Academy - Coaching Classes for Classes 1 to 10 | Patna</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Black+Han+Sans&display=swap" rel="stylesheet">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#1e3a8a',
            secondary: '#3b82f6',
            accent: '#fbbf24',
            dark: '#0f172a',
          },
          fontFamily: {
            lato: ['Lato', 'sans-serif'],
            blackhan: ['Black Han Sans', 'sans-serif'],
          }
        }
      }
    }
  </script>
</head>

<body class="font-lato text-gray-800 bg-gray-50">

<!-- HERO -->
<section class="bg-gradient-to-r from-primary to-secondary text-white text-center py-20 px-6">
  <h1 class="text-4xl md:text-5xl font-blackhan mb-3">NIRMAN ACADEMY</h1>
  <p class="text-lg md:text-xl text-blue-100">Education, Art & Culture</p>
  <p class="mt-4 font-semibold text-yellow-300">“Be Positive, Work Hard & Look Forward”</p>
</section>

<!-- ABOUT -->
<section class="py-16 px-6 text-center">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-3xl md:text-4xl font-blackhan text-primary mb-6">About Our Academy</h2>
    <p class="text-gray-600 text-lg leading-relaxed">
      Nirman Academy provides comprehensive <strong>coaching classes from Class 1 to 10</strong> 
      across all major subjects. We believe in holistic learning that blends strong academics 
      with art, culture, and personality development. Our experienced faculty is dedicated 
      to guiding every student toward academic success and confidence.
    </p>
  </div>
</section>

<!-- FACULTY SECTION -->
<section class="bg-white py-20 px-6">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-blackhan text-primary mb-12">Our Faculties</h2>

    <div class="grid gap-10 sm:grid-cols-2 md:grid-cols-3">
      <!-- Faculty 1 -->
      <div class="bg-gray-50 shadow-lg rounded-xl p-6 hover:shadow-2xl transition">
        <img src="images/faculty_image/kripal_kanchan.jpg" alt="Kripal Kanchan" class="w-36 h-36 rounded-full object-cover mx-auto border-2 border-secondary mb-4">
        <h3 class="text-xl font-semibold text-primary">Kripal Kanchan</h3>
        <p class="text-sm text-gray-500 mb-1">Chemistry / Physics</p>
        <p class="text-sm text-gray-600">15 Years Experience</p>
        <p class="text-sm text-gray-700 mt-2 font-medium">M.Sc. Chemistry, B.Ed.</p>
      </div>

      <!-- Faculty 2 -->
      <div class="bg-gray-50 shadow-lg rounded-xl p-6 hover:shadow-2xl transition">
        <img src="images/faculty_image/abhishek_kumar.jpg" alt="Abhishek Kumar" class="w-36 h-36 rounded-full object-cover mx-auto border-2 border-secondary mb-4">
        <h3 class="text-xl font-semibold text-primary">Abhishek Kumar</h3>
        <p class="text-sm text-gray-500 mb-1">Biology</p>
        <p class="text-sm text-gray-600">15 Years Experience</p>
        <p class="text-sm text-gray-700 mt-2 font-medium">M.Sc. Botany, B.Ed.</p>
      </div>

      <!-- Faculty 3 -->
      <div class="bg-gray-50 shadow-lg rounded-xl p-6 hover:shadow-2xl transition">
        <img src="images/faculty_image/surendra_jha.jpg" alt="Surendra Jha" class="w-36 h-36 rounded-full object-cover mx-auto border-2 border-secondary mb-4">
        <h3 class="text-xl font-semibold text-primary">Surendra Jha</h3>
        <p class="text-sm text-gray-500 mb-1">Social Science</p>
        <p class="text-sm text-gray-600">25 Years Experience</p>
        <p class="text-sm text-gray-700 mt-2 font-medium">M.A., B.Ed.</p>
      </div>

      <!-- Faculty 4 -->
      <div class="bg-gray-50 shadow-lg rounded-xl p-6 hover:shadow-2xl transition">
        <img src="images/faculty_image/sumit_kumar.jpg" alt="Sumit Kumar" class="w-36 h-36 rounded-full object-cover mx-auto border-2 border-secondary mb-4">
        <h3 class="text-xl font-semibold text-primary">Sumit Kumar</h3>
        <p class="text-sm text-gray-500 mb-1">Mathematics</p>
        <p class="text-sm text-gray-600">15 Years Experience</p>
        <p class="text-sm text-gray-700 mt-2 font-medium">M.Sc. Maths, B.Ed.</p>
      </div>

      <!-- Faculty 5 -->
      <div class="bg-gray-50 shadow-lg rounded-xl p-6 hover:shadow-2xl transition">
        <img src="images/faculty_image/rounak_roy.jpg" alt="Rounak Roy" class="w-36 h-36 rounded-full object-cover mx-auto border-2 border-secondary mb-4">
        <h3 class="text-xl font-semibold text-primary">Rounak Roy</h3>
        <p class="text-sm text-gray-500 mb-1">English</p>
        <p class="text-sm text-gray-600">5 Years Experience</p>
        <p class="text-sm text-gray-700 mt-2 font-medium">BBM</p>
      </div>

      <!-- Faculty 6 -->
      <div class="bg-gray-50 shadow-lg rounded-xl p-6 hover:shadow-2xl transition">
        <img src="images/faculty_image/santosh.jpg" alt="Shivesh Bhatt" class="w-36 h-36 rounded-full object-cover mx-auto border-4 border-secondary mb-4">
        <h3 class="text-xl font-semibold text-primary">Santosh Prasher</h3>
        <p class="text-sm text-gray-500 mb-1">Music</p>
        <p class="text-sm text-gray-600">7 Years Experience</p>
        <p class="text-sm text-gray-700 mt-2 font-medium">B.A Music</p>
      </div>
    </div>

    <div class="mt-10">
      <h3 class="text-lg font-semibold text-primary mb-1">Primary Faculties</h3>
      <p class="text-gray-700 font-medium">Swati Smriti / Aman Gupta</p>
    </div>
  </div>
</section>

<!-- CLASSES OFFERED -->
<section class="py-16 px-6 bg-gray-50 text-center">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-3xl md:text-4xl font-blackhan text-primary mb-6">Coaching for Classes 1 to 10</h2>
    <p class="text-gray-700 text-lg leading-relaxed mb-6">
      We offer coaching in <span class="font-semibold">Science, Mathematics, English, Social Studies, and Hindi</span>.
      Every class focuses on conceptual clarity, exam preparation, and regular performance tracking.
    </p>
    <div class="flex flex-wrap justify-center gap-3 mt-8">
      <?php for($i=1; $i<=10; $i++): ?>
        <span class="px-5 py-2 bg-white shadow rounded-full border border-blue-200 text-primary font-semibold hover:bg-secondary hover:text-white transition">Class <?php echo $i; ?></span>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- CONTACT INFO -->
<section class="bg-gradient-to-r from-primary to-secondary text-white py-16 px-6 text-center">
  <h2 class="text-3xl md:text-4xl font-blackhan mb-6">Contact Us</h2>
  <p class="text-lg mb-2">📍 Ambedkar Chowk Towards East, Vijay Nagar, B/10, Patna-20</p>
  <p class="text-lg mb-2">📞 <strong>9304348624 / 7870398844</strong></p>
  <p class="text-blue-100">Join Nirman Academy today and give your child a head start toward success!</p>
</section>

<?php include("includes/footer.php"); ?>
</body>
</html>
