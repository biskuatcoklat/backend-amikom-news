<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>News</title>
    </head>
    <body>
        <div class="max-w-sm mx-auto bg-slate-50 px-4 min-h-screen">
            <div class="py-6 flex items-center space-x-4">
                <a href="/home/news" class="cursor-pointer hover:text-purple-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>   
                </a>     
                <div class="relative">
                    <input type="text" class="h-7 p-3 text-sm w-[316px] bg-gray-200 rounded-full focus:ring-blue-500 focus:border-blue-500 border-purple-200 border-2" placeholder="Search..">
                    <button class="absolute right-3 top-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-slate-500 hover:text-purple-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </button>
                </div>      
            </div>

            <div>
                <h1 class="font-semibold mb-6 border-b-2 border-purple-300">{{ $news->title }}</h1>
                
                <!-- List Berita -->
                    
                <div class="bg-white p-4 rounded-md shadow-lg mb-4">
                    
                    <p class="text-xs">{{$news->content}}</p>
                    <hr class="my-2"> <!-- Garis pemisah -->
                    <a href="{{ $news->link }}" class="text-blue-500">Informasi lebih lanjut</a>
                    <hr class="my-2"> <!-- Garis pemisah -->
                    <p class="text-xs">Last updated: {{ $news->updated_at->format('d/m/Y H:i') }}</p>    
                </div>
            </div>
        </div>
    </body>
</html>