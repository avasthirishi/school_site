<?php include("includes/header.php"); ?>
<!doctype html>
<html lang="en-US">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nirman School of Education - Best School in Patna for Classes 1 to 10</title>
  <meta name="description" content="Nirman School of Education provides quality education from Class 1 to 10 with special coaching through Nirman Academy. Located at Ambedkar Chowk, Vijay Nagar, Patna." />
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
          },
        },
      },
    };
  </script>
</head>
<body class="font-lato text-gray-800 antialiased">

  <!-- HERO SECTION -->
  <section class="bg-gradient-to-r from-primary to-secondary text-white text-center py-20 px-4 sm:py-24">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-blackhan mb-4 leading-tight">
      Welcome to Nirman School of Education
    </h1>
    <p class="text-base sm:text-lg md:text-xl text-blue-100 mb-6">
      Classes 1 to 10 | CBSE Affiliated
    </p>
    <span class="inline-block bg-accent text-dark font-bold px-6 py-2 rounded-full text-sm sm:text-base shadow-md">
      Shaping Future Leaders
    </span>
  </section>

  <!-- ABOUT -->
  <section class="bg-gray-50 py-16 px-4 text-center">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-blackhan text-primary mb-8">
        About Nirman School
      </h2>
      <p class="text-gray-600 leading-relaxed text-base sm:text-lg mb-4">
        Nirman School of Education is a premier institution in Patna, dedicated to quality learning from Classes 1 to 10. Our focus is holistic education—blending academics, discipline, and creativity.
      </p>
      <p class="text-gray-600 leading-relaxed text-base sm:text-lg">
        Our experienced faculty and modern facilities ensure that students grow into confident, capable, and compassionate individuals.
      </p>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="py-20 px-4 bg-white">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-blackhan text-primary mb-12">
        What Makes Us Special
      </h2>
      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <?php
          $features = [
            ['icon' => 'graduation-cap', 'title' => 'Academic Excellence', 'desc' => 'CBSE-aligned curriculum ensuring strong foundations in every subject.'],
            ['icon' => 'chalkboard-teacher', 'title' => 'Nirman Academy', 'desc' => 'Personalized coaching classes designed to enhance student performance.'],
            ['icon' => 'music', 'title' => 'Music & Singing', 'desc' => 'Dedicated training to build artistic confidence and creativity.'],
            ['icon' => 'futbol', 'title' => 'Sports & Activities', 'desc' => 'Encouraging physical fitness, discipline, and team spirit.'],
            ['icon' => 'users', 'title' => 'Experienced Faculty', 'desc' => 'Caring educators committed to nurturing academic and moral growth.'],
            ['icon' => 'building', 'title' => 'Modern Infrastructure', 'desc' => 'Smart classrooms, labs, and library for a future-ready learning environment.']
          ];
          foreach ($features as $f) {
            echo "
              <div class='bg-white shadow-lg p-8 rounded-xl border-t-4 border-secondary hover:border-accent transition-all duration-300'>
                <i class='fas fa-{$f['icon']} text-4xl text-secondary mb-4'></i>
                <h3 class='text-xl font-semibold mb-3'>{$f['title']}</h3>
                <p class='text-gray-600'>{$f['desc']}</p>
              </div>
            ";
          }
        ?>
      </div>
    </div>
  </section>

  <!-- TEAM -->
  <section class="bg-gray-50 py-20 px-4">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-blackhan text-primary mb-12">Meet Our Team</h2>
      <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
        <?php
          $team = [
            ['img' => 'ritu_gupta.jpg', 'name' => 'Ritu Gupta Roy', 'role' => 'Secretary & Director'],
            ['img' => 'amit_roy.jpg', 'name' => 'Amit Kumar Roy', 'role' => 'Founder'],
            ['img' => 'kripal_kanchan.jpg', 'name' => 'Kripal Kanchan', 'role' => 'Academic Coordinator']
          ];
          foreach ($team as $t) {
            echo "
              <div class='bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition'>
                <img src='images/faculty_image/{$t['img']}' alt='{$t['name']}' class='w-36 h-36 object-cover mx-auto rounded-full border-4 border-secondary mb-4'>
                <h3 class='text-xl font-semibold text-dark'>{$t['name']}</h3>
                <p class='text-secondary font-medium'>{$t['role']}</p>
              </div>
            ";
          }
        ?>
      </div>
    </div>
  </section>

  <!-- ENROLL + VIDEO -->
  <section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid gap-12 md:grid-cols-2 items-start">
      <!-- Left: contact / enroll -->
      <div>
        <h2 class="text-2xl md:text-3xl font-bold text-sky-800 mb-3 uppercase">
          How to Enroll Your Child?
        </h2>
        <p class="text-sm text-gray-600 mb-6">
          Call <span class="text-orange-500 font-semibold">+91-9431291346</span> or fill in the form below
        </p>

        <form action="contact_submit.php" method="post" class="space-y-4 bg-gray-50 border border-gray-100 rounded-lg shadow-sm p-6">
          <input name="name" type="text" placeholder="Full Name" required class="w-full border border-gray-300 px-4 py-2 rounded-md focus:ring-2 focus:ring-sky-200" />
          <input name="email" type="email" placeholder="Email Address" required class="w-full border border-gray-300 px-4 py-2 rounded-md focus:ring-2 focus:ring-sky-200" />
          <input name="phone" type="text" placeholder="Phone Number" required class="w-full border border-gray-300 px-4 py-2 rounded-md focus:ring-2 focus:ring-sky-200" />
          <textarea name="message" rows="4" placeholder="Message" class="w-full border border-gray-300 px-4 py-2 rounded-md focus:ring-2 focus:ring-sky-200"></textarea>

          <div class="flex flex-wrap items-center gap-4">
            <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full font-semibold shadow">
              Submit Now
            </button>
            <a href="admission.php" class="text-sky-700 hover:underline font-medium">Apply for Admission</a>
          </div>
        </form>
      </div>

      <!-- Right: video -->
      <div>
        <h2 class="text-2xl md:text-3xl font-bold text-sky-800 mb-3 uppercase">Video Gallery</h2>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="relative pb-[56.25%]">
            <iframe class="absolute inset-0 w-full h-full rounded-md"
              src="https://www.youtube.com/embed/80lMO7Ysn40"
              title="School Video"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
            </iframe>
          </div>
        </div>
        <p class="text-sm text-gray-500 mt-4">
          Watch highlights and events from our school to get a feel of student life and activities.
        </p>
      </div>
    </div>
  </section>

  <!-- MAP -->
  <section class="bg-gray-50 py-12">
    <div class="max-w-6xl mx-auto px-4">
      <iframe class="w-full h-80 sm:h-96 rounded-xl shadow-md"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.566113545874!2d85.16388377361272!3d25.58609821584226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed589faa2a620b%3A0x71d503127f035d18!2sNirman%20School%20Of%20Education!5e0!3m2!1sen!2sin!4v1762355475432!5m2!1sen!2sin"
        allowfullscreen=""
        loading="lazy">
      </iframe>
    </div>
  </section>

  <!-- CONTACT INFO -->
  <section class="bg-gradient-to-r from-primary to-secondary text-white py-16 px-6 text-center">
    <h2 class="text-3xl md:text-4xl font-blackhan mb-6">Contact Us</h2>
    <p class="text-base sm:text-lg mb-2">📍 Ambedkar Chowk Towards East, Vijay Nagar, B/10, Patna-20</p>
    <p class="text-base sm:text-lg mb-2">📞 <strong>9304348624 / 9431291346</strong></p>
    <p class="text-blue-100 text-sm sm:text-base">
      Join Nirman Academy today and give your child a head start toward success!
    </p>
  </section>

  <?php include("includes/footer.php"); ?>
</body>
</html>
