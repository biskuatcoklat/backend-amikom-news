<!DOCTYPE html>
<html lang="en">
  @include('admin.head')

  <body class="bg-gray-100 font-family-karla flex">
    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
          <a
            href="/"
            class="text-white text-3xl font-semibold uppercase hover:text-gray-300"
            >AMIKOM NEWS</a
          >
        </div>
        <nav class="text-white text-base font-semibold pt-3">
          <a
            href="/"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item"
          >
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
          </a>
          <a
            href="/admin/category"
            class="flex items-center opacity-75 hover:opacity-100 text-white  py-4 pl-6 nav-item"
          >
            <i class="fas fa-sticky-note mr-3"></i>
            Category
          </a>
          <a
            href="/admin/news"
            class="flex items-center text-white active-nav-link py-4 pl-6 nav-item"
          >
            <i class="fas fa-table mr-3"></i>
            News
          </a>
        </nav>
    </aside>

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
      @include('admin.dekstop')

      @include('admin.mobile')

      <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-row p-6">
            <h1 class="text-3xl text-black pb-6">News</h1>

            <a href="/admin/news/create" style="background-color: #3490dc; color: #ffffff;" class="px-6 py-2 text-white font-light tracking-wider rounded">ADD NEWS</a>
            <div class="w-full mt-12">
                <div class="bg-white rounded shadow-xl overflow-auto">
                    <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                        <thead class="bg-white ">
                            <tr>
                                <th class="py-4 px-6 font-bold uppercase text-sm text-dark">No</th>
                                <th class="py-4 px-6 font-bold uppercase text-sm text-dark">Category</th>
                                <th class="py-4 px-6 font-bold uppercase text-sm text-dark">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no=1;
                            @endphp
                            @foreach ($category_news as $categorys)
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-b border-grey-light">{{ $no++ }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $categorys->news_category }}</td>
                                <td>
                                    <a  onclick="return confirm('anda yakin ingin menghapus category {{ $categorys->news_category }}')" href="/admin/category/delete/{{ $categorys->id }}" data-id="{{ $categorys->id }}"  class="bg-red-500 text-white hover:bg-red-700 p-2 rounded-md">Delete</a>
                                </td>
                            </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
      </div>
    </div>
   @include('admin.js') 
  </body>
</html>