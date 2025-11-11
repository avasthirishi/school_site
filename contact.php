<?php include("includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | Nirman School of Education</title>
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

<body class="font-lato bg-gray-50 text-gray-800 antialiased">

  <!-- HERO -->
  <section class="bg-gradient-to-r from-primary to-secondary text-white text-center py-20 sm:py-24 px-4">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-blackhan mb-3">Contact Us</h1>
    <p class="text-base sm:text-lg md:text-xl text-blue-100">
      We’d love to hear from you — connect with Nirman School of Education today.
    </p>
  </section>

  <!-- CONTACT SECTION -->
  <section class="py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12">

      <!-- Left: Info -->
      <div>
        <h2 class="text-2xl sm:text-3xl font-blackhan text-primary mb-6">Get in Touch</h2>
        <p class="text-gray-700 leading-relaxed mb-6">
          For admissions, collaborations, or general inquiries, feel free to reach us via phone, email, or by filling out the contact form.
        </p>

        <div class="space-y-4 text-gray-800">
          <p class="flex items-start">
            <i class="fa-solid fa-location-dot text-accent mr-3 mt-1"></i>
            Ambedkar Chowk, Vijay Nagar, Patna – 800020, Bihar
          </p>
          <p class="flex items-start">
            <i class="fa-solid fa-phone text-accent mr-3 mt-1"></i>
            <a href="tel:+919431291346" class="hover:text-secondary">+91-9431291346</a>
          </p>
          <p class="flex items-start">
            <i class="fa-solid fa-envelope text-accent mr-3 mt-1"></i>
            <a href="mailto:admission.nirmanonline@gmail.com" class="hover:text-secondary">admission.nirmanonline@gmail.com</a>
          </p>
        </div>

        <!-- Timings -->
        <div class="mt-10">
          <h3 class="text-xl sm:text-2xl font-semibold text-primary mb-4">School Timings</h3>
          <ul class="text-gray-700 space-y-1 text-sm sm:text-base">
            <li><strong>School Hours:</strong> 8:00 AM – 1:30 PM</li>
            <li><strong>Working Days:</strong> Monday – Friday</li>
            <li><strong>Closed:</strong> Saturday & Sunday</li>
          </ul>

          <h3 class="text-xl sm:text-2xl font-semibold text-primary mt-8 mb-4">Academy Timings</h3>
          <ul class="text-gray-700 space-y-1 text-sm sm:text-base">
            <li><strong>Academy Hours:</strong> 4:00 PM – 8:00 PM</li>
            <li><strong>Working Days:</strong> Monday – Friday</li>
            <li><strong>Closed:</strong> Saturday & Sunday</li>
          </ul>
        </div>
      </div>

      <!-- Right: Form -->
      <div class="bg-white shadow-xl rounded-2xl p-6 sm:p-8 border border-gray-100">
        <h2 class="text-2xl font-semibold text-primary mb-4 text-center">Send Us a Message</h2>
        <form action="submit-form.php" method="POST" class="space-y-5">
          <div>
            <label class="block text-gray-700 text-sm font-medium mb-1">Full Name</label>
            <input type="text" name="name" required
                   class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-secondary outline-none">
          </div>
          <div>
            <label class="block text-gray-700 text-sm font-medium mb-1">Email Address</label>
            <input type="email" name="email" required
                   class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-secondary outline-none">
          </div>
          <div>
            <label class="block text-gray-700 text-sm font-medium mb-1">Phone Number</label>
            <input type="text" name="phone"
                   class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-secondary outline-none">
          </div>
          <div>
            <label class="block text-gray-700 text-sm font-medium mb-1">Message</label>
            <textarea name="message" rows="4" required
                      class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-secondary outline-none"></textarea>
          </div>

          <button type="submit"
                  class="w-full bg-gradient-to-r from-secondary to-primary text-white font-semibold py-2.5 rounded-md hover:opacity-90 transition">
            Submit Now
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- MAP -->
  <section class="bg-gradient-to-b from-white to-sky-50 py-16">
    <div class="max-w-6xl mx-auto text-center px-4 sm:px-6">
      <h2 class="text-3xl sm:text-4xl font-blackhan text-primary mb-6">Our Location</h2>
      <p class="text-gray-600 mb-8 max-w-2xl mx-auto text-base sm:text-lg">
        Visit Nirman School of Education at New Bypass, NH-30, Khemnichak Road, Ramkrishan Nagar, Patna —
        a serene environment fostering academic excellence.
      </p>

      <div class="relative w-full h-[400px] sm:h-[450px] md:h-[500px] lg:h-[400px] rounded-2xl overflow-hidden shadow-2xl border border-gray-200">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.566113545874!2d85.16388377361272!3d25.58609821584226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed589faa2a620b%3A0x71d503127f035d18!2sNirman%20School%20Of%20Education!5e0!3m2!1sen!2sin!4v1762355475432!5m2!1sen!2sin"
          class="absolute top-0 left-0 w-full h-full border-0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </section>

  <?php include("includes/footer.php"); ?>
</body>
</html>
