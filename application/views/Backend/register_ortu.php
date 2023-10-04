<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register - Posyandu Anggrek Bulan</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    
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
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full dark:hidden"
              src="<?php echo base_url().'assets/Backend/img/mamah_.png'?>"
              alt="mamah_"
            />
            <img
              aria-hidden="true"
              class="hidden object-cover w-full h-full dark:block"
              src="<?php echo base_url().'assets/Backend/img/login-office-dark.jpeg'?>"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <?php// echo validation_errors(); ?>

              <form method="POST" action="">

              <img src="<?php echo base_url().'assets/Backend/img/logo_posyandu.png'?>" width="100px" style="margin-left: 120px;">
              <h3
                class="mb-4 text-xl text-center font-semibold text-gray-700 dark:text-gray-200"
              >
                Posyandu Anggrek Bulan
              </h3>
              <h1
                class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
              >
                Creat Account
              </h1>
              <label class="block text-sm">
                <span class="text-gray-700 font-semibold dark:text-gray-400">Nama Ayah *</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Masukkan Nama Ayah"
                  type="text"
                  name="nm_ayah"
                  value="<?php echo set_value('nm_ayah')?>"
                />
              </label>
              <span class="text-sm text-purple-600"><?=form_error('nm_ayah')?></span>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 font-semibold dark:text-gray-400">Nama Ibu *</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Masukkan Nama Ibu"
                  type="text"
                  name="nm_ibu"
                  value="<?php echo set_value('nm_ibu')?>"
                />
              </label>
              <span class="text-sm text-purple-600"><?=form_error('nm_ibu')?></span>
              <label class="block text-sm">
                <span class="text-gray-700 font-semibold dark:text-gray-400">Username *</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Masukkan Username"
                  type="text"
                  name="username"
                  value="<?php echo set_value('username')?>"
                />
              </label>
              <span class="text-sm text-purple-600"><?=form_error('username')?></span>
              <label class="block mt-4 font-semibold text-sm">
                <span class="text-gray-700 dark:text-gray-400">Password *</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Masukkan Password"
                  type="password"
                  name="password"
                />
              </label>
              <span class="text-sm text-purple-600"><?=form_error('password')?></span>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 font-semibold dark:text-gray-400">Password *</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Masukkan Password"
                  type="password"
                  name="passconf"
                />
              </label>
              <span class="text-sm text-purple-600"><?=form_error('passconf')?></span>
              <label class="block text-sm">
                <span class="text-gray-700 font-semibold dark:text-gray-400">Email *</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Masukkan Email"
                  type="text"
                  name="email"
                  value="<?php echo set_value('email')?>"
                />
              </label>
              <span class="text-sm text-purple-600"><?=form_error('email')?></span>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 font-semibold dark:text-gray-400">No.Handphone</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Masukkan No.Handphone"
                  type="text"
                  name="no_hp"
                  value="<?php echo set_value('no_hp')?>"
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 font-semibold dark:text-gray-400">Alamat</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Masukkan Alamat"
                  type="text"
                  name="alamat"
                  value="<?php echo set_value('alamat')?>"
                />
              </label>

              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                type="submit"
              >
                Creat account
              </button>

              <hr class="my-8" />

              

              
              <p class="mt-1">Already have an account?
                <a
                  class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                  href="<?php echo base_url(). 'index.php/Login/' ?>"
                >
                  Login
                </a>
              </p>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
