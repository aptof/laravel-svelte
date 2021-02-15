<script>
  export let message = 'Welcome'
</script>

<div
  class="h-screen w-screen flex flex-col gap-3 justify-center items-center bg-gray-100">
  <div class="uppercase font-bold text-6xl">{message}</div>
  <div class="md:mt-10">Technology used...</div>
  <div
    class="flex flex-col md:flex-row w-full p-2 items-stretch md:justify-evenly gap-4 md:h-48">
    <div
      class="bg-red-500 h-auto md:w-full p-2 rounded shadow hover:bg-red-700 hover:shadow-md transition duration-500">
      <a
        target="_blank"
        href="https://laravel.com/"
        class="block text-3xl text-white text-center md:h-full">Laravel</a>
    </div>
    <div
      class="bg-gray-600 h-auto md:w-full  p-2 rounded shadow hover:bg-gray-800 hover:shadow-md transition duration-500">
      <a
        target="_blank"
        href="https://svelte.dev/"
        class="block text-3xl text-white text-center md:h-full">SVELTE</a>
    </div>
    <div
      class="bg-teal-500 h-auto md:w-full  p-2 rounded shadow hover:bg-teal-700 hover:shadow-md transition duration-500">
      <a
        target="_blank"
        href="https://tailwindcss.com/"
        class="block text-3xl text-white text-center md:h-full">tailwindcss</a>
    </div>
    <div
      class="bg-purple-600 h-auto md:w-full p-2 rounded shadow hover:bg-purple-800 hover:shadow-md transition duration-500">
      <a
        target="_blank"
        href="https://inertiajs.com/"
        class="block text-3xl text-white text-center md:h-full">inertiajs</a>
    </div>
  </div>
</div>
