<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kader Posyandu</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link href="<?php echo base_url().'assets/Backend/css/styles.css' ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/Backend/css/tailwind.output.css'?>" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="<?php echo base_url().'assets/Backend/js/init-alpine.js'?>"></script>

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url().'assets/Backend/img/logo_posyandu.png'?>">
    
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen}"
    >
      <!-- Desktop sidebar -->
      <aside
        class="z-20 flex-shrink-0 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="#"
          >
            Kader Posyandu
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="<?php echo base_url().'index.php/Backend/' ?>"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                  ></path>
                </svg>
                <span class="ml-4">Dashboard</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="<?php echo base_url().'index.php/Backend/data_ortu' ?>"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                  ></path>
                </svg>
                <span class="ml-4">Data Orang Tua</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="<?php echo base_url().'index.php/Backend/data_balita' ?>"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                  ></path>
                </svg>
                <span class="ml-4">Data Balita</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                @click="togglePagesMenu"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
                    ></path>
                  </svg>
                  <span class="ml-4">Pertumbuhan</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template x-if="isPagesMenuOpen">
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                  aria-label="submenu"
                >
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="<?php echo base_url().'index.php/Backend/data_pertumbuhan' ?>">
                      Data Pertumbuhan
                    </a>
                  </li>
                  <!--<li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="<?php echo base_url().'index.php/Backend/data_saran_gizi' ?>">
                      Saran Perbaikan Gizi
                    </a>
                  </li>-->
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="<?php echo base_url().'index.php/Backend/hasil_status_gizi' ?>">
                      Hasil Status Gizi
                    </a>
                  </li>
                </ul>
              </template>
            </li>
            <li class="relative px-6 py-3">
              <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                @click="togglePagesMenu"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
                    ></path>
                  </svg>
                  <span class="ml-4">Perkembangan</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template x-if="isPagesMenuOpen">
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                  aria-label="submenu"
                >
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="w-full" href="<?php echo base_url().'index.php/Backend/data_kemampuan_motorik' ?>">Data Kemampuan Motorik</a>
                  </li>
                  <!--<li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="w-full" href="<?php echo base_url().'index.php/Backend/data_saran_perkembangan' ?>">Saran Perkembangan</a>
                  </li>-->
                </ul>
              </template>
            </li>
          </ul>
        </div>
      </aside>
      <!-- Mobile sidebar -->
      <!-- Backdrop -->
      <div
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
      ></div>
      <aside
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="#"
          >
            Kader Posyandu
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="<?php echo base_url().'index.php/Backend/' ?>"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                  ></path>
                </svg>
                <span class="ml-4">Dashboard</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="<?php echo base_url().'index.php/Backend/data_ortu' ?>"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                  ></path>
                </svg>
                <span class="ml-4">Data Orang Tua</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="<?php echo base_url().'index.php/Backend/data_balita' ?>"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                  ></path>
                </svg>
                <span class="ml-4">Data Balita</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                @click="togglePagesMenu"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
                    ></path>
                  </svg>
                  <span class="ml-4">Pertumbuhan</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template x-if="isPagesMenuOpen">
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                  aria-label="submenu"
                >
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="<?php echo base_url().'index.php/Backend/data_pertumbuhan' ?>">
                      Data Pertumbuhan
                    </a>
                  </li>
                  <!--<li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="<?php echo base_url().'index.php/Backend/data_saran_gizi' ?>">
                      Saran Perbaikan Gizi
                    </a>
                  </li>-->
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="<?php echo base_url().'index.php/Backend/hasil_status_gizi' ?>">
                      Hasil Status Gizi
                    </a>
                  </li>
                </ul>
              </template>
            </li>
            <li class="relative px-6 py-3">
              <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                @click="togglePagesMenu"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
                    ></path>
                  </svg>
                  <span class="ml-4">Perkembangan</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template x-if="isPagesMenuOpen">
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                  aria-label="submenu"
                >
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="w-full" href="<?php echo base_url().'index.php/Backend/data_kemampuan_motorik' ?>">Data Kemampuan Motorik</a>
                  </li>
                  <!--<li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="w-full" href="<?php echo base_url().'index.php/Backend/data_saran_perkembangan' ?>">Saran Perkembangan</a>
                  </li>-->
                </ul>
              </template>
            </li>
          </ul>
        </div>
      </aside>
      <div class="flex flex-col flex-1 w-full">
        <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
          <div
            class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300"
          >
            <!-- Mobile hamburger -->
            <button
              class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
              @click="toggleSideMenu"
              aria-label="Menu"
            >
              <svg
                class="w-6 h-6"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
            
            <div class="flex justify-center flex-1 lg:mr-32">
              <div
                class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
              > 
              </div>
            </div>
            <ul class="flex items-center flex-shrink-0 space-x-6">
              <!-- Theme toggler -->
              <li class="flex">
                <button
                  class="rounded-md focus:outline-none focus:shadow-outline-purple"
                  @click="toggleTheme"
                  aria-label="Toggle color mode"
                >
                  <template x-if="!dark">
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                      ></path>
                    </svg>
                  </template>
                  <template x-if="dark">
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </template>
                </button>
              </li>
              <!-- Notifications menu -->
              <li class="relative">
                <button
                  class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
                  @click="toggleNotificationsMenu"
                  @keydown.escape="closeNotificationsMenu"
                  aria-label="Notifications"
                  aria-haspopup="true"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
                    ></path>
                  </svg>
                  <!-- Notification badge -->
                  <span
                    aria-hidden="true"
                    class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"
                  ></span>
                </button>
                <template x-if="isNotificationsMenuOpen">
                  <ul
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click.away="closeNotificationsMenu"
                    @keydown.escape="closeNotificationsMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700"
                    aria-label="submenu"
                  >
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Messages</span>
                        <span
                          class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"
                        >
                          13
                        </span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Sales</span>
                        <span
                          class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"
                        >
                          2
                        </span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Alerts</span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li>
              <!-- Profile menu -->
              <li class="relative">Welcome <?php echo $this->session->userdata('ses_name') ?>
                <button
                  class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                  @click="toggleProfileMenu"
                  @keydown.escape="closeProfileMenu"
                  aria-label="Account"
                  aria-haspopup="true"
                >
                  <img
                    class="object-cover w-8 h-8 rounded-full"
                    src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
                    alt=""
                    aria-hidden="true"
                  />
                </button>
                <template x-if="isProfileMenuOpen">
                  <ul
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click.away="closeProfileMenu"
                    @keydown.escape="closeProfileMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                    aria-label="submenu"
                  >
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                          ></path>
                        </svg>
                        <span>Profile</span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                          ></path>
                          <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="<?php echo base_url().'index.php/Login/logout'?>"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                          ></path>
                        </svg>
                        <span>Log out</span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li>
            </ul>
          </div>
        </header>
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container grid px-6 mx-auto">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Hasil Status Gizi Balita
            </h2>
            <!-- CTA -->
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <p class="text-sm font-semibold text-black-600 dark:text-black-400">
                Hasil Status Gizi
              </p>
            </div>

            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="card-body">

              <?php foreach ($tbl_balita as $balita) { ?>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Ibu</label>
                                <select name="id_ortu" class="form-control" readonly="readonly">
                                    <?php
                                    foreach ($tbl_ortu as $ortu) {
                                    ?>
                                    <option value="<?php echo $ortu->id_ortu ?>" <?php echo ($ortu->id_ortu == $balita->id_ortu) ? 'selected' : '' ?>  ><?php echo $ortu->nm_ibu ?></option>
                                <?php  } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Balita</label>
                                <input type="text" name="nm_balita" class="form-control" readonly="readonly" value="<?php echo $balita->nm_balita ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" readonly="readonly" value="<?php echo $balita->tgl_lahir ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Kelamin</label><br>
                                <div class="form-check form-check-inline">
                                <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="custom1" name="jenis_kelamin" value="Laki-Laki" <?php if($balita->jenis_kelamin == 'Laki-Laki') echo "checked='checked'" ?>>
                                <label class="custom-control-label" for="custom1">Laki-Laki</label>
                                </div>&nbsp;&nbsp;
                                                    
                                <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="custom2" name="jenis_kelamin" value="Perempuan" <?php if($balita->jenis_kelamin == 'Perempuan') echo "checked='checked'" ?>>
                                <label class="custom-control-label" for="custom2">Perempuan</label>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Berat Badan Lahir</label>
                                <input type="text" name="bb_lahir" class="form-control" readonly="readonly" value="<?php echo $balita->bb_lahir ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Panjang Badan Lahir</label>
                                <input type="text" name="pb_lahir" class="form-control" readonly="readonly" value="<?php echo $balita->pb_lahir ?>">
                            </div>
                        </div>
                    </div>
                           
              <?php } ?>

              </div>
                
            </div>&nbsp;&nbsp;

            
            <!-- With actions -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
              Tabel Data Hasil Status Gizi Balita
            </h4>
            
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">No</th>
                      <th class="px-4 py-3">Tanggal Cek Pertumbuhan</th>
                      <th class="px-4 py-3">Usia (Bulan)</th>
                      <th class="px-4 py-3">Berat Badan (Kg)</th>
                      <th class="px-4 py-3">Status Gizi</th>
                      <th class="px-4 py-3">Saran Gizi</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                    <?php $no = 1; foreach ($tbl_pertumbuhan as $pertumbuhan) { 
$trainingData = ([
        [
            "usia"      => 6,
            "berat"     => 15,
            "status"    => "Lebih"
        ],
        [
            "usia"      => 14,
            "berat"     => 10,
            "status"    => "Baik"
        ],
        [
            "usia"      => 24,
            "berat"     => 13,
            "status"    => "Baik"
        ],
        [
            "usia"      => 10,
            "berat"     => 7,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 18,
            "berat"     => 6.5,
            "status"    => "Buruk"
        ],
        [
            "usia"      => 12,
            "berat"     => 10,
            "status"    => "Baik"
        ],
        [
            "usia"      => 5,
            "berat"     => 5.5,
            "status"    => "Baik"
        ],
        [
            "usia"      => 4,
            "berat"     => 6,
            "status"    => "Baik"
        ],
        [
            "usia"      => 16,
            "berat"     => 12,
            "status"    => "Baik"
        ],
        [
            "usia"      => 26,
            "berat"     => 17,
            "status"    => "Lebih"
        ],
        [
            "usia"      => 30,
            "berat"     => 16,
            "status"    => "Baik"
        ],
        [
            "usia"      => 0,
            "berat"     => 3.5,
            "status"    => "Baik"
        ],
        [
            "usia"      => 8,
            "berat"     => 6,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 10,
            "berat"     => 6.5,
            "status"    => "Buruk"
        ],
        [
            "usia"      => 6,
            "berat"     => 10,
            "status"    => "Lebih"
        ],
        [
            "usia"      => 13,
            "berat"     => 15,
            "status"    => "Lebih"
        ],
        [
            "usia"      => 25,
            "berat"     => 9,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 23,
            "berat"     => 7,
            "status"    => "Buruk"
        ],
        [
            "usia"      => 30,
            "berat"     => 6,
            "status"    => "Buruk"
        ],
        [
            "usia"      => 4,
            "berat"     => 4,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 10,
            "berat"     => 8.5,
            "status"    => "Baik"
        ],
        [
            "usia"      => 6,
            "berat"     => 7,
            "status"    => "Baik"
        ],
        [
            "usia"      => 6,
            "berat"     => 5,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 18,
            "berat"     => 10,
            "status"    => "Baik"
        ],
        [
            "usia"      => 14,
            "berat"     => 8,
            "status"    => "Kurang"
        ],
    ]);

    $trainingData = json_decode(json_encode($trainingData), FALSE);

    if( function_exists('hitungJarak') == FALSE ) {
    function hitungJarak($usiaTraining, $beratTraining, $usia, $bb){ // fungsi hitung jarak
        $pangkat_usia = pow(($usiaTraining - $usia),2);
        $pangkat_berat = pow(($beratTraining - $bb),2);
        $jum_pangkat = $pangkat_usia + $pangkat_berat;
        $akar_pangkat = sqrt($jum_pangkat);
        $hasil = number_format($akar_pangkat,8,",",".");

        return $hasil;
    }
  }

?>

    
   
    
                    <?php
            $arrayHasilJarak = ([]);
            $i = 0;
            foreach($trainingData as $training){
                $i++;
                ?>
            
                <?php
                $hasilJarak = hitungJarak($training->usia, $training->berat, $pertumbuhan->usia, $pertumbuhan->berat_badan);
                ?>
                
                <?php
                array_push($arrayHasilJarak,([
                    "usia"          => $training->usia,
                    "berat"         => $training->berat,
                    "status"        => $training->status,
                    "hasil_jarak"   => $hasilJarak,
                ]));
            }
            ?>
    <?php
    usort($arrayHasilJarak, function($a, $b) { // fungsi urutkan array berdasarkan data terdekat
        return (float)$a["hasil_jarak"] - (float)$b["hasil_jarak"];
    });
    $arrayHasilJarak = json_decode(json_encode($arrayHasilJarak), FALSE);
    ?>
                    <?php
            $i = 0;
            foreach($arrayHasilJarak as $hasil){
                $i++;
                ?>
            
                <?php
            }
            ?>
        
    <?php
    if( function_exists('calculateMode') == FALSE ) {
    function calculateMode($arr) { // fungsi hitung modus
        $frequency = array_count_values($arr);
        $maxFrequency = max($frequency);
        $modes = array_keys($frequency, $maxFrequency);
        
        return $modes[0];
    }
  }
    ?>
    
                    <?php
            $i = 0;
            $arrayHasilStatus = ([]);
            foreach($arrayHasilJarak as $hasil){
                $i++;

                if($i <= 5) :
                ?>
            
                <?php
                array_push($arrayHasilStatus, $hasil->status);

                endif;
            }
            ?>

            <?php
              $hasil = (calculateMode($arrayHasilStatus));
                
              if($hasil == 'Buruk'){
                $saran = '1. Memberikan suplemen, berupa vitamin A, zat besi, dan asam folat. 2. Memberikan makanan bergizi lengkap dan seimbang sesuai kebutuhan anak. 3. Memberikan ASI eksklusif hingga usia anak 6 bulan, dilanjutkan dengan memberikan MPASI yang bergizi lengkap dan seimbang.';
              }
              else if($hasil == 'Kurang'){
                $saran = '1. Memberikan suplemen, berupa vitamin A, zat besi, dan asam folat. 2. Memberikan makanan bergizi lengkap dan seimbang sesuai kebutuhan anak. 3. Memberikan ASI eksklusif hingga usia anak 6 bulan, dilanjutkan dengan memberikan MPASI yang bergizi lengkap dan seimbang.';
              }
              else if($hasil == 'Lebih'){
                $saran = '1. Mengatur asupan karbohidrat, protein, lemak, vitamin dan mineral. 2. Susu diberikan 1-2 gelas per hari, dalam bentuk susu rendah lemak. 3. Memberikan makan secara teratur 3 kali sehari dengan 2 kali makanan selingan.';
              }
              else if($hasil == 'Baik'){
                $saran = 'Terus jaga pola makan';
              }
            ?>
       
    


               
                  
                    
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div>
                            <p class="font-semigrey"><?php echo $no++ ?></p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <?php echo $pertumbuhan->tgl_cek ?>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <?php echo $pertumbuhan->usia ?> bulan
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <?php echo $pertumbuhan->berat_badan ?> kg
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <?= calculateMode($arrayHasilStatus) ?>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <?php echo $saran ?>
                      </td>
                    </tr>

                    <?php
}
?>
                  </tbody>
                </table>
                
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>