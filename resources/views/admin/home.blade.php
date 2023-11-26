<!DOCTYPE html>
<html lang="en">
  @include('admin.head')

  <body class="bg-gray-100 font-family-karla flex">
    @include('admin.aside')

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
      @include('admin.dekstop')

      @include('admin.mobile')

      <div class="w-full overflow-x-hidden border-t flex flex-col">
        @include('admin.main')
      </div>
    </div>
   @include('admin.js') 
  </body>
</html>