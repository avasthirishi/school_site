<?php include("includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Faculty | Nirman School of Education</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: "#0ea5e9", // light blue
            accent: "#f97316",  // orange
            dark: "#1e3a8a"     // deep blue
          }
        }
      }
    }
  </script>
</head>

<body class="bg-gradient-to-b from-blue-50 to-white text-gray-800">

  <!-- ===== Hero Section ===== -->
  <section class="bg-gradient-to-r from-sky-800 to-sky-600 text-white text-center py-20">
    <div class="max-w-4xl mx-auto px-6">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Esteemed Faculty</h1>
      <p class="text-sky-100 text-lg max-w-2xl mx-auto">
        Meet the guiding minds behind Nirman School of Education — educators who inspire, nurture, and shape young learners into future leaders.
      </p>
    </div>
  </section>

  <!-- ===== Secretary & Director ===== -->
  <section class="py-16">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
      <img src="images/faculty_image/ritu_gupta.jpg" alt="Ritu Gupta Roy" class="rounded-lg shadow-lg w-full object-cover">
      <div>
        <h2 class="text-3xl font-bold text-dark mb-2">Mrs. Ritu Gupta Roy</h2>
        <h4 class="text-lg text-accent font-semibold mb-4">Secretary & Director</h4>
        <p class="leading-relaxed text-gray-700 mb-3">
          Mrs. Ritu Gupta Roy has been the cornerstone of Nirman School of Education since its inception. Her leadership blends compassion, academic excellence, and vision for a holistic education system that empowers both students and teachers.
        </p>
        <p class="leading-relaxed text-gray-700 mb-3">
          With years of experience in educational management, she has successfully implemented programs that focus on personality development, creative learning, and moral values.
        </p>
        <p class="leading-relaxed text-gray-700 mb-3">
          Her vision is to nurture every child’s potential and make the school a center of excellence and innovation, shaping students into confident, responsible citizens.
        </p>
      </div>
    </div>
  </section>

  <!-- ===== Faculty Members ===== -->
  <section class="bg-blue-50 py-16">
    <div class="max-w-6xl mx-auto px-6 text-center mb-12">
      <h2 class="text-3xl font-bold text-dark mb-2">Our Dedicated Teachers</h2>
      <p class="text-gray-600">
        Our teachers bring a wealth of knowledge and dedication to the classroom. Each faculty member plays a vital role in creating an inspiring and nurturing learning environment.
      </p>
    </div>

    <div class="max-w-6xl mx-auto grid sm:grid-cols-2 lg:grid-cols-3 gap-8 px-6">

      <!-- Teacher Card -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/faculty_image/abhishek_kumar.jpg" alt="Abhishek Kumar" class="h-66 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-dark">Abhishek Kumar</h3>
          <p class="text-accent font-semibold">Biology</p>
          <p class="text-gray-600 mt-2">M.Sc. Botany, B.Ed. | 15 Years of Experience</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/faculty_image/santosh.jpg" alt="Santosh Parashar" class="h-66 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-dark">Santosh Parashar</h3>
          <p class="text-accent font-semibold">Music</p>
          <p class="text-gray-600 mt-2">B.A. in Music | 7 Years of Experience</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/pushpa-kumari.jpg" alt="Pushpa Kumari" class="h-66 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-dark">Pushpa Kumari</h3>
          <p class="text-gray-600 mt-2">Dedicated and passionate educator focused on student development and academic excellence.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/dolly-kumari.jpg" alt="Dolly Kumari" class="h-66 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-dark">Dolly Kumari</h3>
          <p class="text-gray-600 mt-2">Known for her interactive teaching style that keeps students engaged and inspired.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/rohini-sinha.jpg" alt="Rohini Sinha" class="h-66 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-dark">Rohini Sinha</h3>
          <p class="text-gray-600 mt-2">A caring and experienced teacher, focused on conceptual understanding and student success.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/ragini-sinha.jpg" alt="Ragini Sinha" class="h-66 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-dark">Ragini Sinha</h3>
          <p class="text-gray-600 mt-2">Creates an inclusive classroom environment fostering creativity and curiosity.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/tanya-kumari.jpg" alt="Tanya Kumari" class="h-66 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-dark">Tanya Kumari</h3>
          <p class="text-gray-600 mt-2">Energetic teacher who connects theory to real-life applications, enhancing learning outcomes.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/faculty_image/rahul_sir.jpg" alt="Rahul Sir" class="h-66 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-dark">Rahul Sir</h3>
          <p class="text-gray-600 mt-2">Passionate educator with a focus on analytical learning and conceptual clarity.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
        <img src="images/faculty_image/amrit_roy.png" alt="Amrit Roy" class="h-66 w-full object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-dark">Amrit Roy</h3>
          <p class="text-gray-600 mt-2">Encourages innovative and creative thinking through hands-on teaching techniques.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- ===== Footer CTA ===== -->
  <section class="bg-sky-800 text-white text-center py-12">
    <h3 class="text-2xl font-semibold mb-3">“Great teachers inspire greatness in others.”</h3>
    <p class="text-sky-100 mb-6">We are proud of our team that makes Nirman School a place of learning and growth.</p>
    <a href="contact.php" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-full font-semibold transition">
      Contact Our Team
    </a>
  </section>

  <?php include("includes/footer.php"); ?>

</body>
</html>
