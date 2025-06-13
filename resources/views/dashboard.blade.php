<x-app-layout>
    

    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-lg">
            <div class="flex items-center justify-center h-16 bg-gradient-to-r from-[#ff4b2b] to-[#ff416c]">
                <h1 class="text-black font-bold text-xl">AssetManager</h1>
            </div>
            <nav class="mt-6">
                <div class="px-6">
                    <p class="text-gray-500 text-xs uppercase font-bold tracking-wider">Menu Utama</p>
                </div>
                
                <!-- Dashboard -->
                <a href="#" class="flex items-center px-6 py-3 mt-2 text-gray-600 bg-gradient-to-r from-[#ff4b2b] to-[#ff416c] border-l-4 border-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="mx-3">Dashboard</span>
                </a>
                
                <!-- Manage Akun -->
                <a href="#" class="flex items-center px-6 py-3 mt-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span class="mx-3">Manage Akun</span>
                </a>
                
                <!-- Manage Aset -->
                <a href="#" class="flex items-center px-6 py-3 mt-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                    <span class="mx-3">Manage Aset</span>
                </a>
                
                <div class="px-6 mt-8">
                    <p class="text-gray-500 text-xs uppercase font-bold tracking-wider">Pengaturan</p>
                </div>
                <a href="#" class="flex items-center px-6 py-3 mt-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="mx-3">Pengaturan Sistem</span>
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Topbar -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between px-6 py-3">
                        <button class="text-gray-500 focus:outline-none lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                        
                        <div class="relative mx-4 lg:mx-0 flex items-center">
                            <span class="absolute inset-y-0 right-0 pl-3 flex items-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </span>
                            <input class="form-input w-32 sm:w-64 rounded-md pl-10 pr-4 focus:border-[#ff4b2b]" type="text" placeholder="Search">
                        </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-6 bg-gray-50">
                <!-- Dashboard Content -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Dashboard Overview</h2>
                    
                    <!-- Stat Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <!-- Total Akun -->
                        <div class="bg-white rounded-lg shadow p-6 border-l-4 border-[#ff416c]">
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm">Total Akun</p>
                                    <h3 class="text-2xl font-bold">1,248</h3>
                                    <p class="text-green-500 text-xs mt-1">↑ 12.5% from last month</p>
                                </div>
                                <div class="bg-[#ff416c]/10 p-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#ff416c]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Total Aset -->
                        <div class="bg-white rounded-lg shadow p-6 border-l-4 border-[#ff4b2b]">
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm">Total Aset</p>
                                    <h3 class="text-2xl font-bold">356</h3>
                                    <p class="text-green-500 text-xs mt-1">↑ 8.3% from last month</p>
                                </div>
                                <div class="bg-[#ff4b2b]/10 p-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#ff4b2b]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Aset Aktif -->
                        <div class="bg-white rounded-lg shadow p-6 border-l-4 border-[#ff416c]">
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm">Aset Aktif</p>
                                    <h3 class="text-2xl font-bold">298</h3>
                                    <p class="text-green-500 text-xs mt-1">↑ 5.7% from last month</p>
                                </div>
                                <div class="bg-[#ff416c]/10 p-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#ff416c]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Perlu Perbaikan -->
                        <div class="bg-white rounded-lg shadow p-6 border-l-4 border-[#ff4b2b]">
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm">Perlu Perbaikan</p>
                                    <h3 class="text-2xl font-bold">24</h3>
                                    <p class="text-red-500 text-xs mt-1">↑ 2.1% from last month</p>
                                </div>
                                <div class="bg-[#ff4b2b]/10 p-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#ff4b2b]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Charts Section -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6 ">
                        <!-- Aset Chart -->
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-lg font-semibold">Distribusi Aset</h3>
                                <div class="flex space-x-2">
                                    <button class="px-3 py-1 text-xs bg-[#ff4b2b] text-white rounded-md">Bulanan</button>
                                    <button class="px-3 py-1 text-xs bg-gray-100 text-gray-600 rounded-md">Tahunan</button>
                                </div>
                            </div>
                            <div class="h-64 bg-gray-50 rounded flex items-center justify-center">
                                <p class="text-gray-400">Visualisasi Grafik Aset</p>
                            </div>
                        </div>
                        
                        <!-- Recent Activity -->
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h3 class="text-lg font-semibold mb-4">Aktivitas Terkini</h3>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <div class="bg-[#ff416c]/10 p-2 rounded-full mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#ff416c]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium">Aset baru ditambahkan (ID: AST-2023-056)</p>
                                        <p class="text-xs text-gray-500">2 menit yang lalu</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="bg-[#ff4b2b]/10 p-2 rounded-full mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#ff4b2b]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium">Akun baru dibuat (user: johndoe)</p>
                                        <p class="text-xs text-gray-500">15 menit yang lalu</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="bg-[#ff416c]/10 p-2 rounded-full mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#ff416c]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium">Aset diperbaiki (ID: AST-2023-012)</p>
                                        <p class="text-xs text-gray-500">1 jam yang lalu</p>
                                    </div>
                                </div>
                            </div>
                            <button class="mt-4 text-sm text-[#ff416c] font-medium">Lihat Semua Aktivitas →</button>
                        </div>
                    </div>
                    </div>

                    

                    <!-- Recent Aset Table -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                            <h3 class="text-lg font-semibold">Daftar Aset Terbaru</h3>
                            <button class="px-4 py-2 bg-[#ff4b2b] text-white rounded-md hover:bg-[#ff416c] text-sm">
                                + Tambah Aset
                            </button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID Aset</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Aset</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Lokasi</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">AST-2023-056</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Laptop Dell XPS 15</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Elektronik</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Gedung A, Lantai 2</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aktif</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <button class="text-[#ff416c] hover:text-[#ff4b2b] mr-3">Edit</button>
                                            <button class="text-gray-600 hover:text-gray-900">Detail</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">AST-2023-055</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Proyektor Epson EB-985</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Elektronik</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Gedung B, Lantai 1</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Perbaikan</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <button class="text-[#ff416c] hover:text-[#ff4b2b] mr-3">Edit</button>
                                            <button class="text-gray-600 hover:text-gray-900">Detail</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex items-center justify-between">
                            <div class="text-sm text-gray-500">Menampilkan <span class="font-medium">1</span> sampai <span class="font-medium">2</span> dari <span class="font-medium">56</span> hasil</div>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 text-sm bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Sebelumnya</button>
                                <button class="px-3 py-1 text-sm bg-[#ff4b2b] text-white rounded-md hover:bg-[#ff416c]">Selanjutnya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>