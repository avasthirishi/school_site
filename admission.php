<?php include("includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admissions | Nirman School of Education</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
          },
        },
      },
    };
  </script>
  <!-- EmailJS -->
  <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
</head>

<body class="font-lato bg-lightblue text-gray-800">

<!-- HERO -->
<section class="bg-gradient-to-r from-primary to-secondary text-white text-center py-20 px-6">
  <h1 class="text-4xl md:text-5xl font-bold mb-3">Admissions</h1>
  <p class="text-blue-100 text-lg md:text-xl">A Simple, Transparent & Student-Friendly Process</p>
</section>

<!-- MAIN ADMISSION CONTENT -->
<section class="max-w-7xl mx-auto px-6 py-16 grid lg:grid-cols-3 gap-10">

  <!-- LEFT: CONTENT -->
  <div class="lg:col-span-2 space-y-10">

    <!-- PRESCHOOL -->
    <div class="bg-white rounded-2xl shadow-md p-8 border-l-4 border-blue-400">
      <h2 class="text-3xl font-semibold text-primary mb-4">Preschool (Nursery - UKG)</h2>
      <p class="text-gray-700 mb-4">
        The concept of early education is not new. Our forefathers understood the importance of giving shape 
        to the emerging thought process of young minds in a positive manner. Preschool education helps in fostering 
        inherent skills and nurturing the mind for bigger academic challenges of the future.
      </p>
      <p class="text-gray-700 mb-6">
        At Nirman School, admission to preschool is a simple, hassle-free process and can be completed quickly.
      </p>

      <h3 class="text-xl font-semibold text-primary mt-4">Parents Visit</h3>
      <p class="text-gray-600 mb-3">Parents are welcome to visit our school and take a tour of our well-maintained and professionally managed campus.</p>

      <h3 class="text-xl font-semibold text-primary mt-4">Registration</h3>
      <p class="text-gray-600 mb-3">Parents can fill out the registration form online or at the school office for convenience.</p>

      <h3 class="text-xl font-semibold text-primary mt-4">Personal Interaction</h3>
      <p class="text-gray-600 mb-3">After form submission, parents and students are invited for a personal interaction. Admission is granted if seats are available.</p>

      <h3 class="text-xl font-semibold text-primary mt-4">Admission</h3>
      <p class="text-gray-600">To finalize admission, parents must complete fee payment and documentation. Admission is confirmed after review.</p>
    </div>

    <!-- PRIMARY -->
    <div class="bg-white rounded-2xl shadow-md p-8 border-l-4 border-blue-400">
      <h2 class="text-3xl font-semibold text-primary mb-4">Primary Section (Classes 1 - 8)</h2>
      <p class="text-gray-700 mb-4">
        The primary curriculum builds a strong academic base while developing confidence and creativity. We emphasize both knowledge and character.
      </p>
      <p class="text-gray-700 mb-6">
        Admission is smooth and transparent, helping every child adapt to our environment easily.
      </p>

      <h3 class="text-xl font-semibold text-primary mt-4">Parents Visit</h3>
      <p class="text-gray-600 mb-3">Parents may tour the school, meet teachers, and learn about our facilities. Forms are available both online and offline.</p>

      <h3 class="text-xl font-semibold text-primary mt-4">Registration</h3>
      <p class="text-gray-600 mb-3">Registration forms can be filled out digitally or submitted in person along with required documents.</p>

      <h3 class="text-xl font-semibold text-primary mt-4">Personal Interaction</h3>
      <p class="text-gray-600 mb-3">Students may attend a brief interaction or assessment to understand their academic level.</p>

      <h3 class="text-xl font-semibold text-primary mt-4">Admission</h3>
      <p class="text-gray-600">Admission is finalized after form review, seat confirmation, and fee payment.</p>
    </div>

    <!-- SECONDARY -->
    <div class="bg-white rounded-2xl shadow-md p-8 border-l-4 border-blue-400">
      <h2 class="text-3xl font-semibold text-primary mb-4">Secondary Section (Classes 9 - 10)</h2>
      <p class="text-gray-700 mb-4">
        The secondary stage prepares students for board examinations with a focus on academic excellence and personal growth.
      </p>
      <p class="text-gray-700 mb-6">
        We ensure that every student receives strong conceptual clarity, motivation, and personalized guidance.
      </p>

      <h3 class="text-xl font-semibold text-primary mt-4">Parents Visit</h3>
      <p class="text-gray-600 mb-3">Parents are invited to meet teachers and understand our academic environment and expectations.</p>

      <h3 class="text-xl font-semibold text-primary mt-4">Registration</h3>
      <p class="text-gray-600 mb-3">Applications are available online and at the office. Previous academic records and documents are required.</p>

      <h3 class="text-xl font-semibold text-primary mt-4">Personal Interaction / Test</h3>
      <p class="text-gray-600 mb-3">Students may appear for a short written test followed by an interaction. This ensures readiness for the CBSE curriculum.</p>

      <h3 class="text-xl font-semibold text-primary mt-4">Admission</h3>
      <p class="text-gray-600">Final admission is granted after document verification and fee payment.</p>
    </div>
  </div>

  <!-- RIGHT: CONTACT FORM -->
  <div>
    <div class="bg-white border border-blue-200 rounded-2xl shadow-lg p-8 sticky top-10">
      <h3 class="text-2xl font-bold text-primary mb-2 text-center">Contact Us</h3>
      <p class="text-gray-600 text-sm mb-6 text-center">
        Please fill the form below and we’ll get back to you shortly!
      </p>

      <form id="admissionForm" class="space-y-4">
        <input type="text" name="name" placeholder="Full Name" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-secondary">
        <input type="tel" name="phone" placeholder="Phone" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-secondary">
        <input type="email" name="email" placeholder="Email Address" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-secondary">
        <select name="class_category" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-secondary">
          <option value="">Select Class</option>
          <option>Preschool</option>
          <option>Classes 1 - 8</option>
          <option>Classes 9 - 10</option>
        </select>
        <textarea name="message" rows="4" placeholder="Your Message" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-secondary"></textarea>

        <button type="submit" class="w-full bg-gradient-to-r from-secondary to-primary text-white font-semibold py-3 rounded-md hover:opacity-90 transition">
          SUBMIT NOW
        </button>
      </form>

      <p id="formStatus" class="text-center text-sm mt-4 text-gray-700"></p>
    </div>
  </div>
</section>

<!-- FOOTNOTE -->
<section class="bg-blue-50 py-10 text-center border-t border-blue-100">
  <p class="text-gray-700 max-w-3xl mx-auto px-6">
    For any admission-related queries, please email us at 
    <a href="mailto:avasthirishi2@gmail.com" class="text-secondary font-semibold">avasthirishi2@gmail.com</a>
  </p>
</section>

<?php include("includes/footer.php"); ?>

<!-- EmailJS Script -->
<script>
  (function(){
    emailjs.init("RujErQ7tQbUaIeHQb"); // 🔹 Replace with your EmailJS Public Key
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
      }, (error) => {
        status.textContent = "❌ There was an error sending your form. Please try again.";
        status.classList.add("text-red-600");
      });
  });
</script>
</body>
</html>
