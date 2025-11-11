<?php include("includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admission - Nirman School of Education</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Black+Han+Sans&display=swap" rel="stylesheet" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#1e3a8a',
            secondary: '#2563eb',
            accent: '#fbbf24',
            lightblue: '#e0f2fe',
          },
          fontFamily: {
            lato: ['Lato', 'sans-serif'],
            blackhan: ['Black Han Sans', 'sans-serif'],
          },
        },
      },
    };
  </script>
  <!-- EmailJS -->
  <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
</head>

<body class="font-lato bg-lightblue text-gray-800 antialiased">

  <!-- HERO -->
  <section class="bg-gradient-to-r from-primary to-secondary text-white text-center py-20 sm:py-24 px-4">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-blackhan mb-3">Admissions</h1>
    <p class="text-base sm:text-lg md:text-xl text-blue-100">
      A Simple, Transparent & Student-Friendly Process
    </p>
  </section>

  <!-- MAIN ADMISSION SECTION -->
  <section class="max-w-7xl mx-auto px-4 sm:px-6 py-16 grid lg:grid-cols-3 gap-10">

    <!-- LEFT CONTENT -->
    <div class="lg:col-span-2 space-y-10">

      <!-- Preschool -->
      <div class="bg-white rounded-2xl shadow-md p-6 sm:p-8 border-l-4 border-blue-400">
        <h2 class="text-2xl sm:text-3xl font-semibold text-primary mb-4">Preschool (Nursery – UKG)</h2>
        <p class="text-gray-700 mb-4">
          Preschool education fosters early development and shapes young minds for future learning.
          At Nirman School, we provide a joyful environment that builds curiosity, discipline, and confidence.
        </p>
        <p class="text-gray-700 mb-6">
          Admission to preschool is simple and can be completed online or at our school office.
        </p>

        <ul class="space-y-3 text-gray-700 text-sm sm:text-base">
          <li><span class="font-semibold text-primary">Parents Visit:</span> Tour our safe, vibrant campus and experience our environment firsthand.</li>
          <li><span class="font-semibold text-primary">Registration:</span> Fill out the admission form online or in-person at the office.</li>
          <li><span class="font-semibold text-primary">Personal Interaction:</span> After submission, parents and students are invited for interaction. Admission is granted based on seat availability.</li>
          <li><span class="font-semibold text-primary">Final Admission:</span> Complete fee payment and document verification to confirm admission.</li>
        </ul>
      </div>

      <!-- Primary -->
      <div class="bg-white rounded-2xl shadow-md p-6 sm:p-8 border-l-4 border-blue-400">
        <h2 class="text-2xl sm:text-3xl font-semibold text-primary mb-4">Primary Section (Classes 1 – 8)</h2>
        <p class="text-gray-700 mb-4">
          The primary curriculum strengthens academics and builds creativity, communication, and critical thinking.
          Our teaching encourages curiosity and responsibility among students.
        </p>

        <ul class="space-y-3 text-gray-700 text-sm sm:text-base">
          <li><span class="font-semibold text-primary">Parents Visit:</span> Meet teachers, understand our programs, and view facilities.</li>
          <li><span class="font-semibold text-primary">Registration:</span> Forms are available both online and offline with required documents.</li>
          <li><span class="font-semibold text-primary">Interaction:</span> Students may attend a short assessment or interaction to determine academic level.</li>
          <li><span class="font-semibold text-primary">Admission:</span> Confirm admission after document review and fee payment.</li>
        </ul>
      </div>

      <!-- Secondary -->
      <div class="bg-white rounded-2xl shadow-md p-6 sm:p-8 border-l-4 border-blue-400">
        <h2 class="text-2xl sm:text-3xl font-semibold text-primary mb-4">Secondary Section (Classes 9 – 10)</h2>
        <p class="text-gray-700 mb-4">
          The secondary stage prepares students for CBSE board exams through a balanced approach of academics,
          self-confidence, and future readiness.
        </p>
        <ul class="space-y-3 text-gray-700 text-sm sm:text-base">
          <li><span class="font-semibold text-primary">Parents Visit:</span> Visit and interact with faculty to learn about our academic environment.</li>
          <li><span class="font-semibold text-primary">Registration:</span> Submit applications online or in person with previous report cards.</li>
          <li><span class="font-semibold text-primary">Assessment:</span> A brief test and interaction ensure placement readiness for the CBSE curriculum.</li>
          <li><span class="font-semibold text-primary">Admission:</span> Admission is finalized after verification and fee payment.</li>
        </ul>

        <div class="mt-8 bg-blue-50 border border-blue-200 rounded-lg p-5">
          <h3 class="text-lg sm:text-xl font-semibold text-primary mb-2">Documents Required</h3>
          <ul class="list-disc list-inside text-gray-700 text-sm sm:text-base space-y-1">
            <li>Birth Certificate (Photocopy)</li>
            <li>Two Passport-size Photographs</li>
            <li>Transfer Certificate / Report Card</li>
            <li>Address Proof (Aadhar / Voter ID)</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- RIGHT: CONTACT FORM -->
    <div>
      <div class="bg-white border border-blue-200 rounded-2xl shadow-lg p-6 sm:p-8 sticky top-10">
        <h3 class="text-2xl font-bold text-primary mb-2 text-center">Apply for Admission</h3>
        <p class="text-gray-600 text-sm mb-6 text-center">
          Please fill out the form below and we’ll reach out to assist you.
        </p>

        <form id="admissionForm" class="space-y-4">
          <input type="text" name="name" placeholder="Full Name" required
                 class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-secondary outline-none">
          <input type="tel" name="phone" placeholder="Phone Number" required
                 class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-secondary outline-none">
          <input type="email" name="email" placeholder="Email Address" required
                 class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-secondary outline-none">
          <select name="class_category" required
                  class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-secondary outline-none">
            <option value="">Select Class</option>
            <option>Preschool</option>
            <option>Classes 1 – 8</option>
            <option>Classes 9 – 10</option>
          </select>
          <textarea name="message" rows="4" placeholder="Your Message (optional)"
                    class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-secondary outline-none"></textarea>

          <button type="submit"
                  class="w-full bg-gradient-to-r from-secondary to-primary text-white font-semibold py-3 rounded-md hover:opacity-90 transition">
            SUBMIT NOW
          </button>
        </form>

        <p id="formStatus" class="text-center text-sm mt-4 text-gray-700"></p>
      </div>
    </div>
  </section>

  <!-- CONTACT CTA -->
  <section class="bg-gradient-to-r from-primary to-secondary text-white text-center py-16 px-6">
    <h2 class="text-2xl sm:text-3xl md:text-4xl font-blackhan mb-4">Contact Us for Admission Queries</h2>
    <p class="text-base sm:text-lg mb-2">📍 Ambedkar Chowk, Vijay Nagar, Patna - 16</p>
    <p class="text-base sm:text-lg mb-2">📞 <strong>+91-9431291346 / +91-9304348624</strong></p>
    <p class="text-blue-100 text-sm sm:text-base">
      Our team will be happy to assist you with the admission process and requirements.
    </p>
  </section>

  <!-- FOOTNOTE -->
  <section class="bg-blue-50 py-10 text-center border-t border-blue-100">
    <p class="text-gray-700 max-w-3xl mx-auto px-6 text-sm sm:text-base">
      For any admission-related queries, please email us at
      <a href="mailto:avasthirishi2@gmail.com" class="text-secondary font-semibold">avasthirishi2@gmail.com</a>
    </p>
  </section>

  <?php include("includes/footer.php"); ?>

  <!-- EmailJS Script -->
  <script>
    (function(){
      emailjs.init("RujErQ7tQbUaIeHQb"); // ✅ Replace with your EmailJS Public Key
    })();

    const form = document.getElementById("admissionForm");
    const status = document.getElementById("formStatus");

    form.addEventListener("submit", function(e){
      e.preventDefault();
      emailjs.sendForm("service_7bnjvdq", "YOUR_TEMPLATE_ID", this)
        .then(() => {
          status.textContent = "✅ Thank you! Your admission form has been submitted successfully.";
          status.classList.add("text-green-600");
          form.reset();
        }, () => {
          status.textContent = "❌ There was an error sending your form. Please try again later.";
          status.classList.add("text-red-600");
        });
    });
  </script>
</body>
</html>
