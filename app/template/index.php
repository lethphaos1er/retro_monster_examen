<?php @include('partials/_head.php'); ?>
  <body class="bg-gray-800 text-white font-sans">
    <!-- Header -->
    <?php @include('partials/_header.php'); ?>

    <!-- Main Content -->
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
      <main class="w-full md:w-3/4 p-4">
        <!-- Section Monstre Aléatoire -->
        <?php @include('partials/_aleatoire.php'); ?>

        <!-- Section Derniers monstres -->
        <?php @include('partials/_last_monsters.php'); ?>
      </main>

      <!-- Sidebar -->
      <?php @include('partials/_aside.php'); ?>
    </div>

    <!-- Footer -->
    <?php @include('partials/_footer.php'); ?>
  </body>
</html>
