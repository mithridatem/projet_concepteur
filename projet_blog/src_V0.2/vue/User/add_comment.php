<?php
  ob_start();
  ?>
<form action="" class="justify-center flex" method="POST">
  <div class="mt-8 w-2/5">
    <div class="grid grid-cols-1 gap-6">
      <span class="text-gray-700">Votre Commentaire</span>
      <textarea
        class="mt-0 block w-full px-0.5 border-1 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
        rows="10"
        name="commentaire"
      >
      </textarea>
      <div class="g-recaptcha" data-sitekey="6Ld-PPohAAAAAA0xJDAxS6vayI6KMIHTqwT1jovJ"></div>
      <input
        type="submit"
        value="submit"
        class="rounded-full bg-blue-800 text-white h-10"
        name="submit"
      />
    </div>
  </div>
</form>
<?php
            if(isset($_POST["submit"])){
              foreach ($entry as $key => $value) {
                  echo "$value";
              }
          }
      $content = ob_get_clean();
      require './vue/template.php';
      ?>