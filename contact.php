<?php include("includes/header.php"); ?>

<!-- Hero Section -->
<section class="bg-sky-900 text-white text-center py-16">
  <h1 class="text-4xl font-bold mb-3">Contact Us</h1>
  <p class="text-lg text-sky-200">We’d love to hear from you. Get in touch with Nirman School of Education.</p>
</section>

<!-- Contact Info + Form -->
<section class="py-12 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10">

    <!-- Left: Contact Info -->
    <div>
      <h2 class="text-2xl font-semibold text-sky-800 mb-4">Contact Info</h2>
      <p class="text-gray-700 mb-4">
        For admissions, events, or general inquiries, please reach out to us through the details below or by filling out the form.
      </p>

      <div class="space-y-3 text-gray-800">
        <p><i class="fa-solid fa-location-dot text-orange-500 mr-2"></i> Ambedkar Chowk, Vijay Nagar, Patna - 800020, Bihar</p>
        <p><i class="fa-solid fa-phone text-orange-500 mr-2"></i> <a href="tel:+919155921188" class="hover:text-sky-700">+91-9155921188</a></p>
        <p><i class="fa-solid fa-envelope text-orange-500 mr-2"></i> <a href="mailto:info@nirmaneducation.com" class="hover:text-sky-700">info@nirmaneducation.com</a></p>
      </div>

      <h3 class="mt-8 mb-3 text-xl font-semibold text-sky-800">Timings</h3>
      <ul class="text-gray-700 space-y-1">
        <li class="mt-8 mb-3 text-xl font-semibold text-sky-800"><strong>School Hours:</strong> 8:00 AM – 1:30 PM</li>
        <li><strong>Working Days:</strong> Monday – Friday</li>
        <li><strong>Closed:</strong> Saturday & Sunday</li>

          <li class="mt-8 mb-3 text-xl font-semibold text-sky-800"><strong>Academy Hours:</strong> 4:00 PM – 8:00 PM</li>
          <li><strong>Working Days:</strong> Monday – Friday</li>
        <li><strong>Closed:</strong> Saturday & Sunday</li>
  
        </ul>
    </div>

    <!-- Right: Contact Form -->
    <div class="bg-white shadow-lg rounded-lg p-6">
      <h2 class="text-xl font-semibold text-sky-800 mb-4">Send us a Message</h2>
      <form action="submit-form.php" method="POST" class="space-y-4">
        <div>
          <label class="block text-gray-700 mb-1">Full Name</label>
          <input type="text" name="name" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-sky-500">
        </div>

        <div>
          <label class="block text-gray-700 mb-1">Email Address</label>
          <input type="email" name="email" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-sky-500">
        </div>

        <div>
          <label class="block text-gray-700 mb-1">Phone Number</label>
          <input type="text" name="phone" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-sky-500">
        </div>

        <div>
          <label class="block text-gray-700 mb-1">Message</label>
          <textarea name="message" rows="4" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
        </div>

        <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-md font-semibold transition">
          Submit Now
        </button>
      </form>
    </div>
  </div>
</section>


<!-- Google Map (Bottom Section, Responsive & Styled) -->
<section class="bg-gradient-to-b from-white to-sky-50 py-16">
  <div class="max-w-6xl mx-auto text-center px-6">
    <h2 class="text-3xl font-bold text-sky-800 mb-6">Our Location</h2>
    <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
      Visit Nirman School of Education at New Bypass, NH-30, Khemnichak Road, Ramkrishan Nagar, Patna — a serene environment fostering academic excellence.
    </p>
    <div class="relative w-full h-[450px] md:h-[500px] lg:h-[300px] rounded-2xl overflow-hidden shadow-2xl border border-gray-200">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.566113545874!2d85.16388377361272!3d25.58609821584226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed589faa2a620b%3A0x71d503127f035d18!2sNirman%20School%20Of%20Education!5e0!3m2!1sen!2sin!4v1762355475432!5m2!1sen!2sin"
        class="absolute top-0 left-0 w-full h-full"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>


<?php include("includes/footer.php"); ?>
