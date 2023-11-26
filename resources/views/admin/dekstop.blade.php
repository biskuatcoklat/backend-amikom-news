<!-- Desktop Header -->
<header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
    <div class="w-1/2"></div>
    <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
      <button
        @click="isOpen = !isOpen"
        class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none"
      ></button>
      <button
        x-show="isOpen"
        @click="isOpen = false"
        class="h-full w-full fixed inset-0 cursor-default"
      ></button>
      <div
        x-show="isOpen"
        class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16"
      >
        <x-app-layout> </x-app-layout>
      </div>
    </div>
</header>