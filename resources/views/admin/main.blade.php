<main class="w-full flex-row p-6">
    <h1 class="text-3xl text-black pb-6">Dashboard</h1>
    <div
      class="w-full mt-5 grid grid-flow-row md:grid-cols-2 lg:grid-cols-3 gap-10"
    >
      <a
        href="#"
        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-300 dark:border-gray-700 dark:hover:bg-gray-700"
      >
        <h5
          class="mb-2 text-2xl font-bold tracking-tight text-dark"
        >
          Keuntungan
        </h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">
          {{-- Rp. {{ $keuntungan }} --}}
        </p>
      </a>
      <a
        href="/order"
        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-300 dark:border-gray-700 dark:hover:bg-gray-700"
      >
        <h5
          class="mb-2 text-2xl font-bold tracking-tight text-dark"
        >
          Order
        </h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">
          {{-- {{ $totalorder }} Orderan --}}
        </p>
      </a>
      <a
        href="/tampilproduct"
        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-300 dark:border-gray-700 dark:hover:bg-gray-700"
      >
        <h5
          class="mb-2 text-2xl font-bold tracking-tight text-dark"
        >
          Total Product
        </h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">
          {{-- {{ $totalproduct }} pcs --}}
        </p>
      </a>
      <a
        href="#"
        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-300 dark:border-gray-700 dark:hover:bg-gray-700"
      >
        <h5
          class="mb-2 text-2xl font-bold tracking-tight text-dark"
        >
          Customer
        </h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">
          {{-- {{ $totaluser }} Customer --}}
        </p>
      </a>
    </div>
</main>