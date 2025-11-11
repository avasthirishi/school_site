<?php include("includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Faculty | Nirman School of Education</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Black+Han+Sans&display=swap" rel="stylesheet" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: "#1e3a8a",   // deep blue
            secondary: "#2563eb", // blue gradient
            accent: "#f97316",    // orange
          },
          fontFamily: {
            lato: ['Lato','sans-serif'],
            blackhan: ['Black Han Sans','sans-serif'],
          },
        },
      },
    };
  </script>
</head>

<body class="font-lato bg-gradient-to-b from-blue-50 to-white text-gray-800 antialiased">

  <!-- HERO -->
  <section class="bg-gradient-to-r from-primary to-secondary text-white text-center py-20 sm:py-24 px-6">
    <div class="max-w-4xl mx-auto">
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-blackhan mb-4">Our Esteemed Faculty</h1>
      <p class="text-blue-100 text-base sm:text-lg max-w-2xl mx-auto">
        Meet the guiding minds who inspire, nurture, and shape young learners into future leaders.
      </p>
    </div>
  </section>

  <!-- SECRETARY & DIRECTOR -->
  <section class="py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
      <img src="images/faculty_image/ritu_gupta.jpg" alt="Ritu Gupta Roy"
           class="rounded-2xl shadow-xl w-full object-cover">
      <div>
        <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-1">Mrs. Ritu Gupta Roy</h2>
        <h4 class="text-accent font-semibold text-lg mb-4">Secretary & Director</h4>
        <p class="text-gray-700 leading-relaxed mb-3">
          Mrs. Ritu Gupta Roy has been the cornerstone of Nirman School of Education since its inception. Her leadership
          blends compassion, academic excellence, and a vision for holistic education that empowers both students and teachers.
        </p>
        <p class="text-gray-700 leading-relaxed mb-3">
          With years of experience in educational management, she has implemented programs focusing on personality development,
          creative learning, and moral values.
        </p>
        <p class="text-gray-700 leading-relaxed">
          Her vision is to nurture every child’s potential and make the school a center of excellence and innovation,
          shaping students into confident, responsible citizens.
        </p>
      </div>
    </div>
  </section>

  <!-- FACULTY GRID -->
  <section class="bg-blue-50 py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto text-center mb-12">
      <h2 class="text-3xl font-blackhan text-primary mb-2">Our Dedicated Teachers</h2>
      <p class="text-gray-600 max-w-3xl mx-auto">
        Our teachers bring a wealth of knowledge and passion to every classroom, creating an inspiring and nurturing environment.
      </p>
    </div>

    <div class="max-w-6xl mx-auto grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
      <!-- Teacher Card -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/faculty_image/abhishek_kumar.jpg" alt="Abhishek Kumar" class="h-64 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-primary">Abhishek Kumar</h3>
          <p class="text-accent font-semibold">Biology</p>
          <p class="text-gray-600 mt-2">M.Sc. Botany, B.Ed. | 15 Years Experience</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/faculty_image/santosh.jpg" alt="Santosh Parashar" class="h-64 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-primary">Santosh Parashar</h3>
          <p class="text-accent font-semibold">Music</p>
          <p class="text-gray-600 mt-2">B.A. Music | 7 Years Experience</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/pushpa-kumari.jpg" alt="Pushpa Kumari" class="h-64 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-primary">Pushpa Kumari</h3>
          <p class="text-gray-600 mt-2">Dedicated educator focused on student development and academic excellence.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/dolly-kumari.jpg" alt="Dolly Kumari" class="h-64 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-primary">Dolly Kumari</h3>
          <p class="text-gray-600 mt-2">Interactive teacher who keeps students engaged and motivated.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/rohini-sinha.jpg" alt="Rohini Sinha" class="h-64 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-primary">Rohini Sinha</h3>
          <p class="text-gray-600 mt-2">Experienced teacher focused on conceptual clarity and student success.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/ragini-sinha.jpg" alt="Ragini Sinha" class="h-64 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-primary">Ragini Sinha</h3>
          <p class="text-gray-600 mt-2">Creates an inclusive classroom fostering creativity and curiosity.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/tanya-kumari.jpg" alt="Tanya Kumari" class="h-64 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-primary">Tanya Kumari</h3>
          <p class="text-gray-600 mt-2">Connects theory with real-life learning to make lessons impactful.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/faculty_image/rahul_sir.jpg" alt="Rahul Sir" class="h-64 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-primary">Rahul Sir</h3>
          <p class="text-gray-600 mt-2">Encourages analytical learning and deep conceptual understanding.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/faculty_image/amrit_roy.png" alt="Amrit Roy" class="h-64 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-primary">Amrit Roy</h3>
          <p class="text-gray-600 mt-2">Promotes innovative, hands-on teaching that fuels creativity.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="bg-gradient-to-r from-primary to-secondary text-white text-center py-12 px-4">
    <h3 class="text-2xl sm:text-3xl font-semibold mb-3">“Great teachers inspire greatness in others.”</h3>
    <p class="text-blue-100 mb-6">We are proud of our team that makes Nirman School a place of learning and growth.</p>
    <a href="contact.php"
       class="inline-block bg-accent hover:bg-orange-600 text-white px-8 py-3 rounded-full font-semibold transition">
       Contact Our Team
    </a>
  </section>

  <?php include("includes/footer.php"); ?>
</body>
</html>
