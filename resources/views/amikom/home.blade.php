<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home | Amikom One</title>
</head>

<body>
    <div class="max-w-sm mx-auto bg-slate-50 min-h-screen px-4">
        <div class="flex items-center justify-between py-4">
            <h1 class="font-semibold">Amikom One</h1>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
            </svg>
        </div>

        <div class="bg-white shadow-xl p-4 rounded-xl mb-8 flex items-center justify-between">
            <div>
                <h1 class="text-sm font-semibold mb-2">{{ $nama }}</h1>
                <h5 class="text-xs text-slate-500">{{ $nim }}</h5>
            </div>
            <img src="pp.jpg" alt="" class="h-12 w-12 rounded-full">
        </div>

        <div class="mb-4">
            <h1 class="font-semibold mb-2">Jadwal Hari Ini</h1>
            <p class="text-center text-xs text-red-500">Tidak ada jadwal / Jadwal belum disimpan</p>
            <p class="text-center text-xs text-red-500">Klik untuk memuat jadwal</p>
        </div>

        <div>
            <h1 class="font-semibold mb-4">Menu</h1>
            <div class="grid grid-cols-3 gap-6 px-10">
                <div>
                    <div class="bg-orange-100 rounded-md p-2 flex justify-center mb-2">
                        <img src="logo/document.png" alt="" class="w-8 h-8">
                    </div>
                    <p class="text-xs text-center">Hasil Studi</p>
                </div>
                <div>
                    <div class="bg-blue-100 rounded-md p-2 flex justify-center mb-2">
                        <img src="logo/calendar.png" alt="" class="w-8 h-8">
                    </div>
                    <p class="text-xs text-center">Jadwal Kuliah</p>
                </div>
                <div>
                    <div class="bg-red-100 rounded-md p-2 flex justify-center mb-2">
                        <img src="logo/file.png" alt="" class="w-8 h-8">
                    </div>
                    <p class="text-xs text-center">Transkrip</p>
                </div>
                <div>
                    <div class="bg-purple-100 rounded-md p-2 flex justify-center mb-2">
                        <img src="logo/book.png" alt="" class="w-8 h-8">
                    </div>
                    <p class="text-xs text-center">Perpustakaan</p>
                </div>
                <div>
                    <div class="bg-green-100 rounded-md p-2 flex justify-center mb-2">
                        <img src="logo/wallet.png" alt="" class="w-8 h-8">
                    </div>
                    <p class="text-xs text-center">Pembayaran</p>
                </div>
                <div>
                    <div class="bg-cyan-100 rounded-md p-2 flex justify-center mb-2">
                        <img src="logo/credit-card.png" alt="" class="w-8 h-8">
                    </div>
                    <p class="text-xs text-center">KTM</p>
                </div>
                <div class="cursor-pointer">
                    <a href="/home/news">
                    <div class="bg-yellow-100 rounded-md p-2 flex justify-center mb-2">
                        <img src="logo/online.png" alt="" class="w-8 h-8">
                    </div></a>
                    <p class="text-xs text-center">NEWS</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Button -->
    <div class="max-w-sm mx-auto bg-slate-50">
        <div class="bottom-0 absolute z-[999] border-t-2 p-4 flex flex items-center justify-between w-[384px] shadow-inner">
            <div class="cursor-pointer hover:text-purple-800">
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                </div>
                <p class="text-xs">Home</p>                  
            </div>
            <div class="cursor-pointer hover:text-purple-800">
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                    </svg>                      
                </div>
                <p class="text-xs">Kode</p>                  
            </div>
            <div class="cursor-pointer hover:text-purple-800">
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 3.75H6A2.25 2.25 0 003.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0120.25 6v1.5m0 9V18A2.25 2.25 0 0118 20.25h-1.5m-9 0H6A2.25 2.25 0 013.75 18v-1.5M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>                                          
                </div>
                <p class="text-xs">Scan</p>                  
            </div>
            <div class="cursor-pointer hover:text-purple-800">
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>                                                                
                </div>
                <p class="text-xs">Persensi</p>                  
            </div>
            <div class="cursor-pointer hover:text-purple-800">
                <form action="/logout" method="post">
                    @csrf
                    <a href="/logout">
                    <div class="flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>                                                                  
                    </div>
                    </a>
                </form>
                <p class="text-xs">Profil</p>                  
            </div>
        </div>
    </div>
    <!-- End Menu Button -->
</body>

</html>