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
            class="flex items-center active-nav-link text-white  py-4 pl-6 nav-item"
          >
            <i class="fas fa-sticky-note mr-3"></i>
            Category
          </a>
          <a
            href="/admin/news"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item"
          >
            <i class="fas fa-table mr-3"></i>
            News
          </a>
          <a
            href="/admin/setting"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item"
          >
            <i class="fas fa-user mr-3"></i>
            Settings
          </a>
        </nav>
    </aside>

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
      @include('admin.dekstop')

      @include('admin.mobile')

      <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-row p-6">
            <h1 class="text-3xl text-black pb-6">Category News</h1>

            <div class="leading-loose">
                @if(session()->has('message'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-green-200 dark:text-green-800" role="alert">
                    <span class="font-medium">{{ session()->get('message'); }}</span>
                </div>
                @endif
                <form class="p-10 bg-white rounded shadow-xl" action="/admin/category/create" method="POST">
                    @csrf
                    <div class="">
                        <label class="block text-sm text-gray-600" for="name">Category</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="news_category" name="news_category" type="text" required placeholder="Category">
                    </div>
                    <div class="mt-6">
                        <button style="background-color: #3490dc; color: #ffffff;" class="px-4 py-1 text-white font-light tracking-wider rounded" name="submit" type="submit">Submit</button>
                    </div>
                </form>
            </div>

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
                            @php
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
                            @endforeach
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