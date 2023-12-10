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
            class="flex items-center opacity-75 hover:opacity-100 text-white py-4 pl-6 nav-item"
          >
            <i class="fas fa-table mr-3"></i>
            News
          </a>
          <a
            href="/admin/setting"
            class="flex items-center text-white active-nav-link py-4 pl-6 nav-item"
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
            <h1 class="text-3xl text-black pb-6">Settings</h1>

            {{-- <a href="/admin/news/create" style="background-color: #3490dc; color: #ffffff;" class="px-6 py-2 text-white font-light tracking-wider rounded">ADD NEWS</a> --}}
            <div class="w-full mt-12">
              @if(session()->has('message'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-green-200 dark:text-green-800" role="alert">
                    <span class="font-medium">{{ session()->get('message'); }}</span>
                </div>
                @endif
                <div class="bg-white rounded shadow-xl overflow-auto">
                    <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                        <thead class="bg-white ">
                            <tr>
                                <th class="py-4 px-6 font-bold uppercase text-sm text-dark">No</th>
                                <th class="py-4 px-6 font-bold uppercase text-sm text-dark">Nama</th>
                                <th class="py-4 px-6 font-bold uppercase text-sm text-dark">Email</th>
                                <th class="py-4 px-6 font-bold uppercase text-sm text-dark">Usertype</th>
                                <th class="py-4 px-6 font-bold uppercase text-sm text-dark">Date</th>
                                <th class="py-4 px-6 font-bold uppercase text-sm text-dark">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($user as $users)
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-b border-grey-light">{{ $no++ }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $users->name }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $users->email}}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $users->usertype }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                  {{ \Carbon\Carbon::parse($users->updated_at)->format('d/m/Y H:i') }}
                                </td>
                              

                                <td>
                                    <a onclick="return confirm('anda yakin ingin menghapus {{ $users->name}}')" href="/admin/setting/{{ $users->id }}" data-id="{{ $users->id }}"  class="bg-red-500 text-white hover:bg-red-700 p-1 rounded-md">Delete</a>
                                    <a href="/admin/setting/detail/{{ $users->id }}" data-id="{{ $users->id }}"  class="bg-yellow-500 text-white hover:bg-red-700 p-1 rounded-md">Detail</a>
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