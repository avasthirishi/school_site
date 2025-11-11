<?php include("includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mission | Nirman School of Education</title>

  <!-- ✅ Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Black+Han+Sans&display=swap" rel="stylesheet" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: "#1e3a8a",     // Deep Blue
            secondary: "#2563eb",   // Blue Gradient
            accent: "#f97316",      // Orange
          },
          fontFamily: {
            lato: ['Lato', 'sans-serif'],
            blackhan: ['Black Han Sans', 'sans-serif'],
          },
        },
      },
    };
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>

<body class="bg-white text-gray-800 font-lato antialiased">

  <!-- ===== HERO ===== -->
  <section class="bg-gradient-to-r from-primary to-secondary text-white text-center py-20 sm:py-24 px-6">
    <div class="max-w-4xl mx-auto">
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-blackhan mb-3">Our Mission</h1>
      <p class="text-blue-100 text-base sm:text-lg md:text-xl max-w-2xl mx-auto">
        “Education is the most powerful weapon which you can use to change the world.” — Nelson Mandela
      </p>
    </div>
  </section>

  <!-- ===== MAIN CONTENT ===== -->
  <section class="bg-gradient-to-b from-blue-50 to-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-start">

      <!-- === Mission Text === -->
      <div>
        <h2 class="text-3xl sm:text-4xl font-blackhan text-primary mb-6">Our Mission</h2>

        <p class="mb-4 leading-relaxed text-gray-700">
          Our mission is to create an educational environment where the welfare and future of the student remain 
          at the core of every initiative. We strive to prepare our students for the challenges of tomorrow through 
          a thoughtfully designed curriculum, skill-based training, and a value-driven learning atmosphere.
        </p>
        <p class="mb-4 leading-relaxed text-gray-700">
          At Nirman School of Education, our focus extends beyond academics — we aim to foster physical fitness, 
          artistic creativity, and emotional intelligence through sports, arts, and interactive activities. 
          Every student is encouraged to discover their inherent talents and refine them through guidance and opportunity.
        </p>
        <p class="mb-4 leading-relaxed text-gray-700">
          Our ultimate goal is to nurture a generation of independent thinkers, compassionate citizens, and responsible 
          leaders who will contribute positively to society.
        </p>

        <h3 class="text-2xl font-semibold text-accent mt-10 mb-4">We Are Committed To:</h3>
        <ul class="space-y-3 text-gray-700">
          <li><i class="fas fa-check text-accent mr-2"></i> Providing education of the highest standards and quality.</li>
          <li><i class="fas fa-check text-accent mr-2"></i> Supporting students to achieve excellence in all fields.</li>
          <li><i class="fas fa-check text-accent mr-2"></i> Inculcating strong social and ethical values.</li>
          <li><i class="fas fa-check text-accent mr-2"></i> Ensuring holistic development — mental, physical, and moral.</li>
          <li><i class="fas fa-check text-accent mr-2"></i> Inspiring curiosity and lifelong learning.</li>
        </ul>

        <p class="mt-6 text-gray-700 leading-relaxed">
          We encourage every student to make meaningful use of their time, pursue their passions, and embrace the joy of 
          learning. Our school believes that education should build not just knowledge, but character.
        </p>
      </div>

      <!-- === Contact Form === -->
      <div class="bg-white shadow-xl rounded-2xl p-8 border-t-4 border-accent">
        <h2 class="text-2xl font-semibold text-primary mb-2 text-center">Contact Us</h2>
        <p class="text-gray-600 text-center mb-6">
          Fill in your details and we’ll get back to you shortly.
        </p>

        <form id="missionForm" class="space-y-4">
          <input type="text" name="name" placeholder="Full Name" required
                 class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-secondary outline-none">
          <input type="tel" name="phone" placeholder="Phone Number" required
                 class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-secondary outline-none">
          <input type="email" name="email" placeholder="Email Address" required
                 class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-secondary outline-none">
          <select name="class" class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-secondary outline-none">
            <option value="">Select Class</option>
            <option value="Preschool">Preschool</option>
            <option value="Class I to VIII">Class I to VIII</option>
            <option value="Class IX to X">Class IX to X</option>
          </select>
          <textarea name="message" placeholder="Message (Optional)" rows="4"
                    class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-secondary outline-none"></textarea>

          <button type="submit"
                  class="w-full bg-gradient-to-r from-secondary to-primary text-white font-semibold py-3 rounded-md hover:opacity-90 transition">
            Submit Now
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- ===== CALL TO ACTION ===== -->
  <section class="bg-gradient-to-r from-primary to-secondary text-white text-center py-16 px-6">
    <div class="max-w-3xl mx-auto">
      <h3 class="text-2xl sm:text-3xl md:text-4xl font-blackhan mb-3">Empowering Students for a Brighter Future</h3>
      <p class="text-blue-100 mb-6">
        Join Nirman School of Education — where every child is guided to learn, lead, and succeed.
      </p>
      <a href="admission.php" class="inline-block bg-accent hover:bg-orange-600 text-white px-8 py-3 rounded-full font-semibold transition">
        Apply for Admission
      </a>
    </div>
  </section>

  <?php include("includes/footer.php"); ?>

  <!-- ✅ EmailJS Integration -->
  <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
  <script>
    (function(){
      emailjs.init("RujErQ7tQbUaIeHQb"); // ✅ Replace with your EmailJS Public Key
    })();

    document.getElementById("missionForm").addEventListener("submit", function(e){
      e.preventDefault();
      emailjs.sendForm("service_7bnjvdq", "template_yourID", this)
        .then(() => {
          alert("✅ Message sent successfully! We will contact you soon.");
          this.reset();
        }, (error) => {
          alert("❌ Failed to send message. Please try again.");
          console.error(error);
        });
    });
  </script>
</body>
</html>
