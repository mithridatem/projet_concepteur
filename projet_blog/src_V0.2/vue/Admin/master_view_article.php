<?php
ob_start();
?>
<main>
<article class="flex items-center mt-10 mb-10">
            <a href="addArticle">
                <button class="rounded-full bg-blue-800 text-white h-10 w-60 ">Ajouter un article</button>
                </a>
            
        </article>
<table class="border-collapse border border-slate-500 ...">
  <thead>
    <tr>
      <th class="border border-slate-600 ...">Article</th>
      <th class="border border-slate-600 ...">Auteur</th>
      <th class="border border-slate-600 ...">Catégorie</th>
      <th class="border border-slate-600 ...">Date</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border border-slate-700 ...">Sample article</td>
      <td class="border border-slate-700 ...">Ruben Navone</td>
      <td class="border border-slate-700 ...">Ruben Navone</td>
      <td class="border border-slate-700 ...">Ruben Navone</td>
    </tr>
  
  </tbody>
</table>
</main>

<?php
$content = ob_get_clean();
require './vue/template.php';
?>