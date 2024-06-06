<?php require 'partials/head.php' ?>
<?php require 'partials/navbar.php'; ?>

<div class="min-h-screen flex flex-col items-center justify-center">
  <form action="/login" method="post">
    <label for="username">Username: </label>
    <input type="text" name="username" id="username" class="mb-2 px-4 py-2 mt-1 w-full rounded-md border border-gray-900 shadow-sm sm:text-sm">
    <br>
    <label for="pwd">Password: </label>
    <input type="password" name="pwd" id="pwd" class="px-4 py-2 mt-2 w-full rounded-md border border-gray-900 shadow-sm sm:text-sm">
    <br>
    <button type="submit" class="mt-8 flex justify-center items-center w-full group relative inline-block overflow-hidden border border-indigo-600 px-8 py-3 focus:outline-none focus:ring">
      <span class="absolute inset-y-0 left-0 w-[2px] bg-indigo-600 transition-all group-hover:w-full group-active:bg-indigo-500"></span>
      <span class="relative text-sm font-medium text-indigo-600 transition-colors group-hover:text-white">Submit</span>
    </button>
  </form>
</div>

<?php require 'partials/footer.php' ?>