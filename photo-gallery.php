<?php include("includes/header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Photo Gallery | Nirman School of Education</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800 font-[Lato]">

  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-sky-900 via-sky-800 to-sky-900 text-white py-20 text-center">
    <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Photo Gallery</h1>
    <p class="text-sky-200 text-lg">Explore the vibrant campus life of Nirman School of Education</p>
  </section>

  <!-- Gallery Section -->
  <section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-sky-800 text-center mb-10">Our Photo Collection</h2>

      <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php
          $folder = "images/photo_gallery/";
          $images = glob($folder . "*.{jpg,jpeg,png,gif,JPG,PNG}", GLOB_BRACE);

          if (!empty($images)):
            foreach ($images as $image):
        ?>
              <div class="relative group overflow-hidden rounded-xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-1">
                <img src="<?php echo $image; ?>" 
                     alt="School Gallery Image" 
                     class="w-full h-60 object-cover transition-transform duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                  <span class="text-white text-lg font-semibold">Nirman School</span>
                </div>
              </div>
        <?php 
            endforeach;
          else:
        ?>
            <p class="text-center text-gray-500 text-lg">No images found in <code>/images/photo_gallery/</code>.</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="bg-sky-900 text-white text-center py-16">
    <h2 class="text-3xl font-bold mb-4">Experience the Spirit of Nirman</h2>
    <p class="text-sky-200 mb-8">Where education meets excellence and creativity.</p>
    <a href="contact.php" class="bg-orange-500 hover:bg-orange-600 px-8 py-3 rounded-full font-semibold transition">Contact Us</a>
  </section>

</body>
</html>

<?php include("includes/footer.php"); ?>
