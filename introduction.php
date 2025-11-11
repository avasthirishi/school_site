<?php include("includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Introduction | Nirman School of Education</title>

  <!-- ✅ Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Black+Han+Sans&display=swap" rel="stylesheet" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#1e3a8a',       // Deep Blue
            secondary: '#2563eb',     // Medium Blue
            accent: '#f97316',        // Orange
          },
          fontFamily: {
            lato: ['Lato', 'sans-serif'],
            blackhan: ['Black Han Sans', 'sans-serif'],
          },
        },
      },
    };
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="font-lato bg-white text-gray-800 antialiased">

  <!-- ===== HERO SECTION ===== -->
  <section class="bg-gradient-to-r from-primary to-secondary text-white text-center py-20 sm:py-24 px-6">
    <div class="max-w-4xl mx-auto">
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-blackhan mb-3">Introduction</h1>
      <p class="text-blue-100 text-base sm:text-lg md:text-xl max-w-2xl mx-auto">
        “Education is not the learning of facts, but the training of the mind to think.” — Albert Einstein
      </p>
    </div>
  </section>

  <!-- ===== ABOUT SECTION ===== -->
  <section class="bg-gradient-to-b from-blue-50 to-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl sm:text-4xl font-blackhan text-primary mb-8">About Nirman School of Education</h2>
      <div class="max-w-4xl mx-auto text-gray-700 leading-relaxed space-y-5 text-justify sm:text-lg">
        <p>
          Nirman School of Education is a modern institution built on the foundation of traditional values, academic excellence, and holistic development.
          We believe education should not just fill the mind with knowledge but also shape character, creativity, and compassion.
        </p>
        <p>
          Established with the mission of nurturing young minds, Nirman School provides an atmosphere that encourages exploration, innovation, and confidence.
          We integrate experiential learning and technology-enabled teaching to ensure our students are prepared for the future.
        </p>
        <p>
          Our curriculum blends academics with co-curricular and extracurricular activities to ensure a balanced development.
          Every classroom is a place of curiosity, interaction, and inspiration — where students grow intellectually, emotionally, and socially.
        </p>
        <p>
          With dedicated teachers, strong parental collaboration, and a student-first philosophy, Nirman School of Education aims to empower every learner
          to discover their purpose and reach their full potential.
        </p>
      </div>
    </div>
  </section>

  <!-- ===== OUR AIM SECTION ===== -->
  <section class="bg-gradient-to-r from-primary to-secondary text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl sm:text-4xl font-blackhan text-accent mb-8">Our Aim</h2>
      <p class="max-w-3xl mx-auto text-blue-100 mb-10 text-base sm:text-lg">
        Our aim is to create a forward-thinking learning environment that goes beyond books and classrooms —
        helping children evolve as confident, compassionate, and capable individuals ready to face the challenges of tomorrow.
      </p>

      <div class="grid md:grid-cols-2 gap-6 text-left max-w-4xl mx-auto text-sm sm:text-base">
        <div class="space-y-3">
          <p><i class="fas fa-check text-accent mr-2"></i> Promote creative, independent, and analytical thinking.</p>
          <p><i class="fas fa-check text-accent mr-2"></i> Foster academic excellence through experiential learning.</p>
          <p><i class="fas fa-check text-accent mr-2"></i> Encourage teamwork, leadership, and moral integrity.</p>
          <p><i class="fas fa-check text-accent mr-2"></i> Build awareness about physical health and emotional well-being.</p>
          <p><i class="fas fa-check text-accent mr-2"></i> Provide a safe, inclusive, and supportive learning atmosphere.</p>
        </div>
        <div class="space-y-3">
          <p><i class="fas fa-check text-accent mr-2"></i> Prepare students for global citizenship with respect for diversity.</p>
          <p><i class="fas fa-check text-accent mr-2"></i> Ensure personalized attention to every student’s growth and progress.</p>
          <p><i class="fas fa-check text-accent mr-2"></i> Nurture curiosity, discipline, and perseverance among learners.</p>
          <p><i class="fas fa-check text-accent mr-2"></i> Create lifelong learners equipped with practical and social skills.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== VISION & VALUES SECTION ===== -->
  <section class="bg-gradient-to-b from-blue-50 via-white to-blue-50 py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl sm:text-4xl font-blackhan text-primary mb-6">Our Vision & Core Values</h2>
      <p class="max-w-4xl mx-auto text-gray-600 mb-10 text-base sm:text-lg">
        At Nirman, our vision is to redefine education by developing balanced, self-aware, and responsible individuals.
        We stand by values that form the cornerstone of our mission:
      </p>

      <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8">
        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
          <i class="fas fa-lightbulb text-accent text-3xl mb-3"></i>
          <h3 class="font-semibold text-primary mb-2">Innovation</h3>
          <p class="text-gray-600 text-sm">Encouraging creative thinking and problem-solving in every child.</p>
        </div>

        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
          <i class="fas fa-heart text-accent text-3xl mb-3"></i>
          <h3 class="font-semibold text-primary mb-2">Empathy</h3>
          <p class="text-gray-600 text-sm">We nurture kindness, respect, and emotional intelligence among learners.</p>
        </div>

        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
          <i class="fas fa-users text-accent text-3xl mb-3"></i>
          <h3 class="font-semibold text-primary mb-2">Collaboration</h3>
          <p class="text-gray-600 text-sm">We teach teamwork, communication, and leadership from an early age.</p>
        </div>

        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
          <i class="fas fa-book-open text-accent text-3xl mb-3"></i>
          <h3 class="font-semibold text-primary mb-2">Integrity</h3>
          <p class="text-gray-600 text-sm">We uphold honesty, fairness, and responsibility in every learning process.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CALL TO ACTION ===== -->
  <section class="bg-gradient-to-r from-primary to-secondary text-white py-16 text-center px-6">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-2xl sm:text-3xl md:text-4xl font-blackhan mb-4">Join Us in Shaping the Future</h2>
      <p class="text-blue-100 mb-8 text-base sm:text-lg">
        Nirman School of Education invites you to be part of our journey — where every child learns, leads, and shines.
      </p>
      <a href="admission.php" class="inline-block bg-accent hover:bg-orange-600 px-8 py-3 rounded-full font-semibold transition">
        Apply for Admission
      </a>
    </div>
  </section>

  <?php include("includes/footer.php"); ?>
</body>
</html>
