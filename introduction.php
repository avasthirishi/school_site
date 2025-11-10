<?php include("includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Introduction | Nirman School of Education</title>

  <!-- ✅ Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#0ea5e9',       // Sky Blue
            primaryDark: '#075985',   // Dark Blue
            accent: '#f97316',        // Orange
          }
        }
      }
    };
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="font-sans text-gray-800 bg-white">

  <!-- ====== HERO SECTION ====== -->
  <section class="relative bg-gradient-to-r from-sky-900 to-sky-700 text-white text-center py-20">
    <div class="max-w-4xl mx-auto px-6">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Introduction</h1>
      <p class="text-lg text-sky-100 max-w-2xl mx-auto">
        “Education is not the learning of facts, but the training of the mind to think.” — Albert Einstein
      </p>
    </div>
  </section>

  <!-- ====== ABOUT SECTION ====== -->
  <section class="bg-gradient-to-b from-sky-50 to-white py-16">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-sky-800 mb-6 text-center">About Nirman School of Education</h2>
      <div class="max-w-4xl mx-auto text-gray-700 leading-relaxed space-y-5">
        <p>
          Nirman School of Education is a modern institution built on the foundation of traditional values, 
          academic excellence, and holistic development. We believe education should not just fill the mind with knowledge 
          but also shape character, creativity, and compassion.
        </p>
        <p>
          Established with the mission of nurturing young minds, Nirman School provides an atmosphere that encourages 
          exploration, innovation, and confidence. We integrate experiential learning and technology-enabled teaching 
          to ensure our students are prepared for the future.
        </p>
        <p>
          Our curriculum blends academics with co-curricular and extracurricular activities to ensure a balanced development. 
          We strive to make every classroom a place of curiosity, interaction, and inspiration — where students grow intellectually, 
          emotionally, and socially.
        </p>
        <p>
          With dedicated teachers, strong parental collaboration, and a student-first philosophy, Nirman School of Education 
          aims to empower every learner to discover their purpose and reach their full potential.
        </p>
      </div>
    </div>
  </section>

  <!-- ====== OUR AIM SECTION ====== -->
  <section class="bg-gradient-to-r from-sky-800 to-sky-600 text-white py-16">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-center text-orange-400 mb-8">Our Aim</h2>
      <p class="max-w-4xl mx-auto text-sky-100 mb-10 text-center">
        Our aim is to create a forward-thinking learning environment that goes beyond books and classrooms — 
        helping children evolve as confident, compassionate, and capable individuals ready to face the challenges of tomorrow.
      </p>

      <div class="grid md:grid-cols-2 gap-5 max-w-4xl mx-auto text-sm sm:text-base">
        <div class="space-y-3">
          <p><i class="fas fa-check text-orange-400 mr-2"></i> To promote creative, independent, and analytical thinking.</p>
          <p><i class="fas fa-check text-orange-400 mr-2"></i> To foster academic excellence through experiential learning.</p>
          <p><i class="fas fa-check text-orange-400 mr-2"></i> To encourage teamwork, leadership, and moral integrity.</p>
          <p><i class="fas fa-check text-orange-400 mr-2"></i> To build awareness about physical health and emotional well-being.</p>
          <p><i class="fas fa-check text-orange-400 mr-2"></i> To provide a safe, inclusive, and supportive learning atmosphere.</p>
        </div>
        <div class="space-y-3">
          <p><i class="fas fa-check text-orange-400 mr-2"></i> To prepare students for global citizenship with respect for diversity.</p>
          <p><i class="fas fa-check text-orange-400 mr-2"></i> To ensure personalized attention to every student’s growth and progress.</p>
          <p><i class="fas fa-check text-orange-400 mr-2"></i> To nurture curiosity, discipline, and perseverance among learners.</p>
          <p><i class="fas fa-check text-orange-400 mr-2"></i> To create lifelong learners equipped with practical and social skills.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ====== VISION & VALUES SECTION ====== -->
  <section class="bg-gradient-to-r from-sky-50 via-white to-sky-50 py-16">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold text-sky-800 mb-4">Our Vision & Core Values</h2>
      <p class="max-w-4xl mx-auto text-gray-600 mb-10">
        At Nirman, our vision is to redefine education by developing balanced, self-aware, and responsible individuals. 
        We stand by values that form the cornerstone of our mission:
      </p>
      <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">
        <div class="p-6 bg-white rounded-lg shadow hover:shadow-md transition">
          <i class="fas fa-lightbulb text-orange-500 text-3xl mb-3"></i>
          <h3 class="font-semibold text-sky-800 mb-2">Innovation</h3>
          <p class="text-gray-600 text-sm">We encourage creative thinking and problem-solving in every child.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow hover:shadow-md transition">
          <i class="fas fa-heart text-orange-500 text-3xl mb-3"></i>
          <h3 class="font-semibold text-sky-800 mb-2">Empathy</h3>
          <p class="text-gray-600 text-sm">We nurture kindness, respect, and emotional intelligence among learners.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow hover:shadow-md transition">
          <i class="fas fa-users text-orange-500 text-3xl mb-3"></i>
          <h3 class="font-semibold text-sky-800 mb-2">Collaboration</h3>
          <p class="text-gray-600 text-sm">We teach teamwork, communication, and leadership from an early age.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow hover:shadow-md transition">
          <i class="fas fa-book-open text-orange-500 text-3xl mb-3"></i>
          <h3 class="font-semibold text-sky-800 mb-2">Integrity</h3>
          <p class="text-gray-600 text-sm">We uphold honesty, fairness, and responsibility in every learning process.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ====== CALL TO ACTION ====== -->
  <section class="bg-gradient-to-r from-sky-800 to-sky-600 text-white py-16 text-center">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-3xl font-bold mb-4">Join Us in Shaping the Future</h2>
      <p class="text-sky-100 mb-8">
        Nirman School of Education invites you to be a part of our journey — where every child learns, leads, and shines.
      </p>
      <a href="admission.php" class="bg-orange-500 hover:bg-orange-600 px-8 py-3 rounded-full font-semibold transition">
        Apply for Admission
      </a>
    </div>
  </section>

  <?php include("includes/footer.php"); ?>
</body>
</html>
