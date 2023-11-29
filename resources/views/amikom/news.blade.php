<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <title>News</title>
    </head>
    <body>
        <div class="max-w-sm mx-auto bg-slate-50 px-4 min-h-screen">
            <div class="py-6 flex items-center space-x-4">
                <a href="/" class="cursor-pointer hover:text-purple-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>   
                </a>     
                <div class="relative">
                    
                    <form id="searchForm" action="/search" method="get">
                        @csrf
                        <input type="text" id="search" name="search" class="h-7 p-3 text-sm w-[316px] bg-gray-200 rounded-full focus:ring-blue-500 focus:border-blue-500 border-purple-200 border-2" autocomplete="off" placeholder="Search..">
                        <button type="submit" class="absolute right-3 top-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-slate-500 hover:text-purple-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </button>
                    </form>
                </div>      
            </div>

            <div>
                <h1 class="font-semibold mb-6 border-b-2 border-purple-300">List Berita Amikom</h1>
                {{-- <select id="sort" class="border rounded p-1">
                    <option value="asc">Oldest First</option>
                    <option value="desc">Newest First</option>
                </select>
                <button id="sortButton" class="ml-2 px-3 py-1 bg-purple-500 text-white rounded">Sort</button> --}}

                
                <!-- List Berita -->
                <div id="searchResults">
                    @foreach ($news as $newss)
                        
                    <div class="bg-white p-4 rounded-md shadow-lg mb-4" >
                        <a href="/home/news/{{ $newss->id }}">
                            <h1 class="text-sm font-semibold mb-2">{{ $newss->title }}</h1>
                            <p class="text-xs">{{Str::limit($newss->content, 200)}} selengkapnya</p>
                        </a>
                        <hr class="my-2"> <!-- Garis pemisah -->
                        <p class="text-xs">Last updated: {{ $newss->updated_at->format('d/m/Y H:i') }}</p>    
                    </div>
                    @endforeach
                    @if(count($news) === 0)
                        <p>No results found.</p>
                    @endif
                </div>
            </div>
        </div>
        
        <script>
            $(document).ready(function() {
                // Tangani event input pada kolom pencarian
                $('#search').on('input', function() {
                    // Ambil nilai dari kolom pencarian
                    var query = $(this).val();
                    var sort = $('#sort').val();
    
                    // Kirim permintaan Ajax ke endpoint pencarian
                    $.ajax({
                        url: '/search',
                        method: 'get',
                        data: { search: query, sort: sort },
                        success: function(data) {
                            // Perbarui hasil pencarian
                            $('#searchResults').empty();
    
                            if (data.length > 0) {
                                $.each(data, function(index, news) {
                                    var updatedAt = new Date(news.updated_at);
                                    var formattedUpdatedAt = updatedAt.toLocaleString('en-GB', { day: 'numeric', month: 'numeric', year: 'numeric', hour: 'numeric', minute: 'numeric', hour12: false });
                                    $('#searchResults').append('<div class="bg-white p-4 rounded-md shadow-lg mb-4"><a href="/home/news/' + news.id + '"><h1 class="text-sm font-semibold mb-2">' + news.title + '</h1><p class="text-xs">' + news.content.substring(0, 200) + '...</p></a><hr class="my-2"><p class="text-xs">Last updated: ' + formattedUpdatedAt + '</p></div>');
                                });
                            } else {
                                $('#searchResults').append('<p>No results found.</p>');
                            }
                        }
                    });
                });
            });
        </script>    
    </body>
</html>