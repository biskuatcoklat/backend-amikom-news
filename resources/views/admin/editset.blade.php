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
            <h1 class="text-3xl text-black pb-6">Detail News</h1>

            <div class="leading-loose">
                @if(session()->has('message'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-green-200 dark:text-green-800" role="alert">
                    <span class="font-medium">{{ session()->get('message'); }}</span>
                </div>
                @endif
                <form class="p-10 bg-white rounded shadow-xl" action="/admin/setting/detail/edit/{{ $user->id }}" method="POST">
                    @csrf
                    <div class="mb-7">
                        <label class="block text-sm text-gray-600" for="name">Nama</label>
                        <input class="w-full px-5 py-1 text-dark bg-gray-100 rounded" id="title" name="name" type="text" value="{{ $user->name }}" required placeholder="Title">
                    </div>

                    <div class="mb-7">
                        <label class="block text-sm text-gray-600" for="name">Email</label>
                        <input class="w-full px-5 py-1 text-dark bg-gray-100 rounded" id="link" name="email" type="email" value="{{ $user->email }}" required placeholder="email">
                    </div>
                    <div class="mb-7">
                        <label class="block text-sm text-gray-600" for="name">Usertype</label>
                        <input class="w-full px-5 py-1 text-dark bg-gray-100 rounded" id="link" name="usertype" type="text" value="{{ $user->usertype }}" required placeholder="usertype">
                    </div>
                    
                    <div class="mt-6">
                        <button class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800" name="submit" type="submit">Edit</button>
                    </div>
                </form>
            </div>
        </main>
      </div>
    </div>
   @include('admin.js') 
  </body>
</html>