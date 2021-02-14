<script>
  export let message = 'Welcome'
  export let technology = 'Technology'
</script>

<div
  class="h-screen w-screen flex flex-col gap-3 justify-center items-center bg-green-500">
  <div class="h-auto p-4 rounded-xl shadow-md bg-white text-4xl">
    {message}
  </div>
  <div class="h-auto p-4 rounded-xl shadow-md bg-gray-300 text-2xl">
    {technology}
  </div>
</div>
