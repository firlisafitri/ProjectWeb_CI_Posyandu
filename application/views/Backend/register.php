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
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div
        class="flex-1 h-full max-w-xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
      >
        
          
          
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <form method="POST" action="" enctype="multipart/form-data">

              <img src="<?php echo base_url().'assets/Backend/img/logo_posyandu.png'?>" width="100px" style="margin-left: 220px;">
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

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Ayah *</label>
                                <input type="text" name="nm_ayah" value="<?php echo set_value('nm_ayah')?>" class="form-control" placeholder="Masukkan Nama Ayah">
                            </div>
                            <span class="text-sm text-red-600"><?=form_error('nm_ayah')?></span>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Ibu *</label>
                                <input type="text" name="nm_ibu" value="<?php echo set_value('nm_ibu')?>" class="form-control" placeholder="Masukkan Nama Ibu">
                            </div>
                            <span class="text-sm text-red-600"><?=form_error('nm_ibu')?></span>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Username *</label>
                                <input type="text" name="username" value="<?php echo set_value('username')?>" class="form-control" placeholder="Masukkan Username">
                            </div>
                            <span class="text-sm text-red-600"><?=form_error('username')?></span>
                        </div>
                    </div>

                    <div class="form-row">
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Password * (minimal 5 karakter)</label>
                                <input type="password" name="password" value="<?php echo set_value('password')?>" class="form-control" placeholder="Masukkan Password">
                            </div>
                            <span class="text-sm text-red-600"><?=form_error('password')?></span>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Konfirmasi Password *</label>
                                <input type="password" name="passconf" value="<?php echo set_value('passconf')?>" class="form-control" placeholder="Masukkan Password">
                            </div>
                            <span class="text-sm text-red-600"><?=form_error('passconf')?></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="text" name="email" value="<?php echo set_value('email')?>" class="form-control" placeholder="Masukkan Email">
                            </div>
                            <span class="text-sm text-red-600"><?=form_error('email')?></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>No.Handphone</label>
                                <input type="text" name="no_hp" value="<?php echo set_value('no_hp')?>" class="form-control" placeholder="Masukkan No.Handphone">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat"><?php echo set_value('alamat')?></textarea>  
                            </div>
                        </div>
                    </div>




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
  </body>
</html>
