<?php include("includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nirman Academy – Coaching Classes for Classes 1 to 10 | Patna</title>
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

<body class="font-lato text-gray-800 bg-gray-50 antialiased">

  <!-- HERO -->
  <section class="bg-gradient-to-r from-primary to-secondary text-white text-center py-20 sm:py-24 px-4">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-blackhan mb-3">NIRMAN ACADEMY</h1>
    <p class="text-base sm:text-lg md:text-xl text-blue-100">Education · Art · Culture</p>
    <p class="mt-4 font-semibold text-yellow-300 text-sm sm:text-base">“Be Positive, Work Hard & Look Forward”</p>
  </section>

  <!-- ABOUT -->
  <section class="py-16 px-4 text-center">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-blackhan text-primary mb-6">About Our Academy</h2>
      <p class="text-gray-600 text-base sm:text-lg leading-relaxed">
        Nirman Academy provides comprehensive <strong>coaching classes from Class 1 to 10</strong>
        across all major subjects. We believe in holistic learning that blends strong academics with
        art, culture, and personality development. Our experienced faculty guides every student
        toward academic success and confidence.
      </p>
    </div>
  </section>

  <!-- FACULTY -->
  <section class="bg-white py-20 px-4">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-blackhan text-primary mb-12">Our Faculties</h2>

      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <?php
          $faculty = [
            ['img'=>'kripal_kanchan.jpg','name'=>'Kripal Kanchan','subj'=>'Chemistry / Physics','exp'=>'15 Years Experience','qual'=>'M.Sc. Chemistry, B.Ed.'],
            ['img'=>'abhishek_kumar.jpg','name'=>'Abhishek Kumar','subj'=>'Biology','exp'=>'15 Years Experience','qual'=>'M.Sc. Botany, B.Ed.'],
            ['img'=>'surendra_jha.jpg','name'=>'Surendra Jha','subj'=>'Social Science','exp'=>'25 Years Experience','qual'=>'M.A., B.Ed.'],
            ['img'=>'sumit_kumar.jpg','name'=>'Sumit Kumar','subj'=>'Mathematics','exp'=>'15 Years Experience','qual'=>'M.Sc. Maths, B.Ed.'],
            ['img'=>'rounak_roy.jpg','name'=>'Rounak Roy','subj'=>'English','exp'=>'5 Years Experience','qual'=>'BBM'],
            ['img'=>'santosh.jpg','name'=>'Santosh Prasher','subj'=>'Music','exp'=>'7 Years Experience','qual'=>'B.A Music'],
          ];
          foreach($faculty as $f){
            echo "
              <div class='bg-gray-50 shadow-lg rounded-xl p-6 hover:shadow-2xl transition'>
                <img src='images/faculty_image/{$f['img']}' alt='{$f['name']}'
                     class='w-32 h-32 sm:w-36 sm:h-36 rounded-full object-cover mx-auto border-2 border-secondary mb-4'>
                <h3 class='text-lg sm:text-xl font-semibold text-primary'>{$f['name']}</h3>
                <p class='text-sm text-gray-500 mb-1'>{$f['subj']}</p>
                <p class='text-sm text-gray-600'>{$f['exp']}</p>
                <p class='text-sm text-gray-700 mt-2 font-medium'>{$f['qual']}</p>
              </div>
            ";
          }
        ?>
      </div>
    </div>
  </section>

  <!-- CLASSES OFFERED -->
  <section class="py-16 px-4 bg-gray-50 text-center">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-blackhan text-primary mb-6">Coaching for Classes 1 to 10</h2>
      <p class="text-gray-700 text-base sm:text-lg leading-relaxed mb-8">
        We offer coaching in <span class="font-semibold">Science, Mathematics, English, Social Studies, and Hindi.</span>
        Every class emphasizes conceptual clarity, exam preparation, and regular performance tracking.
      </p>
      <div class="flex flex-wrap justify-center gap-3">
        <?php for($i=1;$i<=10;$i++): ?>
          <span class="px-4 py-2 sm:px-5 bg-white shadow rounded-full border border-blue-200 text-primary font-semibold hover:bg-secondary hover:text-white transition">
            Class <?php echo $i; ?>
          </span>
        <?php endfor; ?>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="bg-gradient-to-r from-primary to-secondary text-white py-16 px-6 text-center">
    <h2 class="text-3xl md:text-4xl font-blackhan mb-6">Contact Us</h2>
    <p class="text-base sm:text-lg mb-2">📍 Ambedkar Chowk Towards East, Vijay Nagar, B/10, Patna-20</p>
    <p class="text-base sm:text-lg mb-2">📞 <strong>+91-9304348624 / +91-9431291346</strong></p>
    <p class="text-blue-100 text-sm sm:text-base">Join Nirman Academy today and give your child a head start toward success!</p>
  </section>

  <?php include("includes/footer.php"); ?>
</body>
</html>
