<?php include("includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Academics & Activities - Nirman School of Education</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />
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
          },
        },
      },
    };
  </script>
</head>

<body class="bg-gradient-to-b from-sky-50 to-white text-gray-800 font-lato antialiased">

  <!-- ===== HERO ===== -->
  <section class="relative bg-cover bg-center py-24 sm:py-28" style="background-image: url('images/school_campus.jpg');">
    <div class="absolute inset-0 bg-sky-900/70"></div>
    <div class="relative text-center max-w-3xl mx-auto px-4">
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white mb-4 drop-shadow-lg">
        Academics & Co-Curricular Education
      </h1>
      <p class="text-base sm:text-lg md:text-xl text-sky-100 leading-relaxed">
        Empowering students through a balanced approach to academics and extra-curricular excellence.
      </p>
    </div>
  </section>

  <!-- ===== EXTRA CURRICULAR ===== -->
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <h2 class="text-3xl sm:text-4xl font-blackhan text-center text-sky-800 mb-4">
      Extra Curricular Activities
    </h2>
    <p class="text-center text-gray-600 max-w-3xl mx-auto mb-12 text-base sm:text-lg leading-relaxed">
      At Nirman School of Education, we nurture creativity, discipline, teamwork, and leadership through diverse programs
      that help students explore their full potential.
    </p>

    <div class="space-y-16">
      <?php
        $activities = [
          [
            'icon'=>'🎵','title'=>'Music Class','faculty'=>'Santosh Prasher',
            'desc'=>'Music speaks where words fail. Structured lessons in singing and instrumental music develop rhythm, creativity, confidence, and expression. Students perform in assemblies and cultural events, gaining appreciation for melody and teamwork.',
            'images'=>['/images/music/music1.jpg','/images/music/music2.jpg','/images/music/music3.jpg']
          ],
          [
            'icon'=>'🥋','title'=>'Karate Class','faculty'=>'Amrit Roy',
            'desc'=>'Karate builds strength, discipline, and respect. With certified instructors, our sessions improve focus, fitness, and confidence. Belt tests, demos, and tournaments foster pride and perseverance.',
            'images'=>['/images/karate/karate1.jpg','/images/karate/karate2.jpg','/images/karate/karate3.jpg']
          ],
          [
            'icon'=>'💃','title'=>'Dance Class','faculty'=>'Rahul',
            'desc'=>'Dance fosters rhythm, grace, and teamwork. Students explore classical, contemporary, and folk dance forms, performing in cultural programs to gain stage confidence and express creativity.',
            'images'=>['/images/dance/dance1.jpg','/images/dance/dance2.jpg','/images/dance/dance3.jpg']
          ],
          [
            'icon'=>'🎨','title'=>'Art & Craft','faculty'=>'Amrit Roy',
            'desc'=>'Art & Craft nurtures imagination and fine motor skills through painting, sketching, and craftwork. Students learn patience, creativity, and appreciation for design and aesthetics.',
            'images'=>['/images/art_craft/art1.jpg','/images/art_craft/art2.jpg','/images/art_craft/art3.jpg']
          ],
          [
            'icon'=>'🎭','title'=>'Theatre & Drama Play','faculty'=>'Santosh Prasher & Rahul',
            'desc'=>'Drama builds character, empathy, and communication. Students practice stage performance, dialogue, and expression while learning teamwork and confidence through plays and skits.',
            'images'=>['/images/theatre_drama/drama1.jpg','/images/theatre_drama/drama2.jpg','/images/theatre_drama/drama3.jpg']
          ],
          [
            'icon'=>'🧩','title'=>'Project-Based Activities','faculty'=>'Rounak Roy',
            'desc'=>'Our project-based learning blends academics with real-world experiences. Students collaborate on creative projects that encourage critical thinking, innovation, and problem-solving.',
            'images'=>['/images/projects/project1.jpg','/images/projects/project2.jpg','/images/projects/project3.jpg']
          ],
        ];

        foreach($activities as $a){
          echo "
            <div class='bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden p-6 sm:p-8'>
              <h3 class='text-2xl sm:text-3xl font-semibold text-sky-800 mb-2'>{$a['icon']} {$a['title']}</h3>
              <p class='text-gray-600 mb-4 text-sm sm:text-base leading-relaxed'>{$a['desc']}</p>
              <p class='text-gray-500 text-xs sm:text-sm mb-6'><span class='font-semibold text-gray-800'>Faculty:</span> {$a['faculty']}</p>
              <div class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4'>
          ";
          foreach($a['images'] as $img){
            echo "<img src='{$img}' alt='{$a['title']}' class='rounded-lg object-cover h-48 sm:h-56 md:h-60 w-full' />";
          }
          echo "</div></div>";
        }
      ?>
    </div>
  </section>

  <!-- ===== CTA ===== -->
  <section class="bg-gradient-to-r from-sky-800 to-sky-600 text-white py-16 text-center">
    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4">Empowering Young Minds, Building Futures</h2>
    <p class="text-sky-100 mb-6 text-sm sm:text-base">
      Explore our world of academics, creativity, and innovation at Nirman School of Education.
    </p>
    <a href="admission.php"
       class="inline-block bg-orange-500 hover:bg-orange-600 px-6 sm:px-8 py-3 rounded-full font-semibold text-white transition">
       Enroll Now
    </a>
  </section>

  <?php include("includes/footer.php"); ?>
</body>
</html>
