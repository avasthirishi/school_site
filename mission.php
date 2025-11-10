<?php include("includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mission | Nirman School of Education</title>

  <!-- ✅ Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: "#0ea5e9",       // Light blue
            primaryDark: "#075985",   // Deep blue
            accent: "#f97316"         // Orange
          }
        }
      }
    };
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>

<body class="bg-white text-gray-800 font-sans">

  <!-- ===== HERO ===== -->
  <section class="bg-gradient-to-r from-sky-900 to-sky-700 text-white text-center py-20">
    <div class="max-w-4xl mx-auto px-6">
      <h1 class="text-4xl md:text-5xl font-bold mb-3">Our Mission</h1>
      <p class="text-sky-100 text-lg max-w-2xl mx-auto">
        “Education is the most powerful weapon which you can use to change the world.” — Nelson Mandela
      </p>
    </div>
  </section>

  <!-- ===== MAIN CONTENT ===== -->
  <section class="bg-gradient-to-b from-sky-50 to-white py-16">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-start">
      
      <!-- === Mission Text === -->
      <div>
        <h2 class="text-3xl font-bold text-sky-800 mb-6">Our Mission</h2>
        <p class="mb-4 leading-relaxed text-gray-700">
          Our mission is to create an educational environment where the welfare and future of the student remain 
          at the core of every initiative. We strive to prepare our students for the challenges of tomorrow through 
          a thoughtfully designed curriculum, skill-based training, and a value-driven learning atmosphere.
        </p>
        <p class="mb-4 leading-relaxed text-gray-700">
          At Nirman School of Education, our focus extends beyond academics — we aim to foster physical fitness, 
          artistic creativity, and emotional intelligence through sports, arts, and interactive activities. 
          Every student is encouraged to discover their inherent talents and refine them through constant guidance, 
          motivation, and structured opportunities.
        </p>
        <p class="mb-4 leading-relaxed text-gray-700">
          Our ultimate goal is to nurture a generation of independent thinkers, compassionate citizens, and responsible 
          leaders who will contribute positively to society.
        </p>

        <h3 class="text-2xl font-semibold text-orange-500 mt-10 mb-4">We Are Committed To:</h3>
        <ul class="space-y-3 text-gray-700">
          <li><i class="fas fa-check text-orange-500 mr-2"></i> Providing education of the highest standards and quality</li>
          <li><i class="fas fa-check text-orange-500 mr-2"></i> Supporting students to achieve excellence in all fields</li>
          <li><i class="fas fa-check text-orange-500 mr-2"></i> Inculcating strong social and ethical values</li>
          <li><i class="fas fa-check text-orange-500 mr-2"></i> Ensuring holistic development — mental, physical, and moral</li>
          <li><i class="fas fa-check text-orange-500 mr-2"></i> Inspiring curiosity and lifelong learning</li>
        </ul>

        <p class="mt-6 text-gray-700 leading-relaxed">
          We encourage every student to make meaningful use of their time, pursue their passions, and embrace the joy of 
          learning. Our school believes that education should build not just knowledge, but character.
        </p>
      </div>

      <!-- === Contact Form === -->
      <div class="bg-white shadow-lg rounded-lg p-8 border-t-4 border-orange-400">
        <h2 class="text-2xl font-bold text-sky-800 mb-2">Contact Us</h2>
        <p class="text-gray-600 mb-6">
          Please fill up the form and we’ll get back to you on the next working day.
        </p>
        <form id="missionForm" class="space-y-4">
          <input type="text" name="name" placeholder="Full Name" required class="w-full border rounded-md p-3 focus:ring-2 focus:ring-sky-400">
          <input type="tel" name="phone" placeholder="Phone Number" required class="w-full border rounded-md p-3 focus:ring-2 focus:ring-sky-400">
          <input type="email" name="email" placeholder="Email Address" required class="w-full border rounded-md p-3 focus:ring-2 focus:ring-sky-400">
          <select name="class" class="w-full border rounded-md p-3 focus:ring-2 focus:ring-sky-400">
            <option value="">Select Class</option>
            <option value="Preschool">Preschool</option>
            <option value="Class I to VIII">Class I to VIII</option>
            <option value="Class IX to X">Class IX to X</option>
          </select>
          <textarea name="message" placeholder="Message (Optional)" rows="4" class="w-full border rounded-md p-3 focus:ring-2 focus:ring-sky-400"></textarea>
          <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white py-3 rounded-md font-semibold transition">
            Submit Now
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- ===== CALL TO ACTION ===== -->
  <section class="bg-sky-800 text-white text-center py-12">
    <div class="max-w-3xl mx-auto px-6">
      <h3 class="text-2xl font-bold mb-3">Empowering Students for a Brighter Future</h3>
      <p class="text-sky-100 mb-6">
        Join Nirman School of Education — where every child is guided to learn, lead, and succeed.
      </p>
      <a href="admission.php" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-full font-semibold transition">
        Apply for Admission
      </a>
    </div>
  </section>

  <?php include("includes/footer.php"); ?>

  <!-- ✅ EmailJS Integration -->
  <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
  <script>
    (function(){
      emailjs.init("YOUR_PUBLIC_KEY"); // Replace with your EmailJS public key
    })();

    document.getElementById("missionForm").addEventListener("submit", function(e){
      e.preventDefault();
      emailjs.sendForm("service_yourID", "template_yourID", this)
        .then(() => {
          alert("✅ Message sent successfully! We will contact you soon.");
          this.reset();
        }, (error) => {
          alert("❌ Failed to send message. Please try again.");
          console.log(error);
        });
    });
  </script>

</body>
</html>
