<header
      class="bg-gray-900 shadow-lg relative top-8"
      x-data="{ open: false, loggedIn: true, userMenuOpen: false }"
    >
     <?php @include('_nav.php');?>

      <!-- Menu pour mobile -->
      <div x-show="open" class="md:hidden p-8">
        <a
          class="block bg-gray-900 text-white px-4 py-2 hover:bg-gray-700"
          href="#"
          >Monstres</a
        >
        <a
          class="block bg-gray-900 text-white px-4 py-2 hover:bg-gray-700"
          href="#"
          >Ajouter un monstre</a
        >
        <!-- <a
          class="block bg-gray-900 text-white px-4 py-2 hover:bg-gray-700"
          href="#"
          >Se connecter</a
        >
        <a
          class="block bg-gray-900 text-white px-4 py-2 hover:bg-gray-700"
          href="#"
          >Mon Profil</a
        >
        <a
          class="block bg-gray-900 text-white px-4 py-2 hover:bg-gray-700"
          href="#"
          >Mon Deck</a
        >
        <a
          class="block bg-gray-900 text-white px-4 py-2 hover:bg-gray-700"
          href="#"
          >Ajouter un Monstre</a
        >
        <a
          class="block bg-gray-900 text-white px-4 py-2 hover:bg-gray-700"
          href="#"
          >Se Déconnecter</a
        > -->
      </div>
    </header>