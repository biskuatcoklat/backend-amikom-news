<div class="leading-loose">
    @if(session()->has('message'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-green-200 dark:text-green-800" role="alert">
        <span class="font-medium">{{ session()->get('message'); }}</span>
    </div>
    @endif
    <form class="p-10 bg-white rounded shadow-xl" action="/admin/news/create" method="POST">
        @csrf
        <div class="">
            <label class="block text-sm text-gray-600" for="name"></label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="news_category" name="news_category" type="text" required placeholder="Category">
        </div>
        <div class="mt-6">
            <button style="background-color: #3490dc; color: #ffffff;" class="px-4 py-1 text-white font-light tracking-wider rounded" name="submit" type="submit">Submit</button>
        </div>
    </form>
</div>