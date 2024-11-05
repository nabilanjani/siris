<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review IRS Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gradient-to-b from-gray-800 to-blue-900 text-white font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-1/5 bg-gradient-to-b from-gray-900 to-gray-800 p-6">
            <div class="text-2xl font-bold mb-8">SIRIS UNDIP</div>
            <nav class="space-y-4">
                <a href="/pembimbingakademik/dashboardpa" class="flex items-center space-x-2 text-gray-400 hover:text-white py-2 px-4">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
                <a href="/pembimbingakademik/perwalian" class="flex items-center space-x-2 text-gray-400 hover:text-white py-2 px-4">
                    <i class="fas fa-user-friends"></i>
                    <span>Perwalian</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-400 hover:text-white py-2 px-4">
                    <i class="fas fa-edit"></i>
                    <span>Input Nilai</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-400 hover:text-white py-2 px-4">
                    <i class="fas fa-book"></i>
                    <span>Bimbingan & Ujian</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-400 hover:text-white py-2 px-4">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-400 hover:text-white py-2 px-4">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Log Out</span>
                </a>
            </nav>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-6 overflow-y-auto">
            <!-- Top Bar -->
            <div class="flex justify-between items-center mb-6">
                <div class="relative w-1/3">
                    <input type="text" placeholder="Search..." class="w-full p-2 rounded-full bg-gray-700 text-gray-300 placeholder-gray-400 focus:outline-none">
                    <i class="fas fa-search absolute top-2 right-4 text-gray-400"></i>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-user"></i>
                        <span>SUTIKNO</span>
                    </div>
                    <i class="fas fa-cog"></i>
                    <i class="fas fa-bell"></i>
                </div>
            </div>
            <!-- Breadcrumb -->
            <div class="text-gray-400 mb-6">HOME / IRS</div>
            <!-- Content -->
            <div>
                <h1 class="text-2xl font-bold mb-4">Review IRS Mahasiswa</h1>
                <div class="flex space-x-8 mb-4">
                <a href="/pembimbingakademik/halamanirsmhs" id="link-irs" class="text-gray-400" onclick="setActiveLink('irs')">IRS</a>
                <a href="/pembimbingakademik/halamankhsmhs" id="link-khs" class="text-gray-400" onclick="setActiveLink('khs')">KHS</a>
                <a href="/pembimbingakademik/halamantranskripmhs" id="link-transkrip" class="text-gray-400" onclick="setActiveLink('transkrip')">Transkrip</a>
                </div>
                <div>
                    <h2 class="text-xl font-semibold mb-4">Isian Rencana Semester (IRS)</h2>
                    <ul class="space-y-4">
                        <!-- Accordion Item 1 -->
                        <li class="border-b border-gray-600 pb-2">
                            <button class="accordion-toggle flex justify-between w-full text-left" onclick="toggleAccordion(this)">
                                <span>Semester-1 | Tahun Ajaran 2022/2023 Ganjil <br> 
                                <span class="text-gray-400 text-sm">Jumlah SKS: 24</span></span>
                                <span class="accordion-icon">+</span> <!-- Ikon di sini -->
                            </button>
                            <div class="accordion-content mt-2 hidden text-gray-400">
                                <p>Detail mata kuliah:</p>
                                <ul class="pl-4 list-disc">
                                    <li>Dasar Pemrograman - 3 SKS</li>
                                    <li>Matematika I - 2 SKS</li>
                                    <li>Olahraga - 1 SKS</li>
                                </ul>
                            </div>
                        </li>
                        <!-- Accordion Item 2 -->
                        <li class="border-b border-gray-600 pb-2">
                            <button class="accordion-toggle flex justify-between w-full text-left" onclick="toggleAccordion(this)">
                                <span>Semester-2 | Tahun Ajaran 2022/2023 Genap <br> 
                                <span class="text-gray-400 text-sm">Jumlah SKS: 24</span></span>
                                <span class="accordion-icon">+</span> <!-- Ikon di sini -->
                            </button>
                            <div class="accordion-content mt-2 hidden text-gray-400">
                                <p>Detail mata kuliah:</p>
                                <ul class="pl-4 list-disc">
                                    <li>Fisika Dasar - 3 SKS</li>
                                    <li>Bahasa Inggris - 2 SKS</li>
                                    <li>Matematika II - 3 SKS</li>
                                </ul>
                            </div>
                        </li>
                        <!-- Tambahkan semester lainnya dengan struktur yang sama -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript untuk Accordion -->
    <script>
        function toggleAccordion(element) {
            const content = element.nextElementSibling;
            const icon = element.querySelector('.accordion-icon');
            content.classList.toggle('hidden');

            // Mengubah ikon
            icon.textContent = content.classList.contains('hidden') ? '+' : '-';
        }
        function setActiveLink(active) {
        const links = [
            { id: 'link-irs', name: 'irs' },
            { id: 'link-khs', name: 'khs' },
            { id: 'link-transkrip', name: 'transkrip' }
        ];

        links.forEach(link => {
            const element = document.getElementById(link.id);
            if (link.name === active) {
                element.classList.add('border-b-2', 'border-white', 'pb-2', 'font-bold');
                element.classList.remove('text-gray-400');
            } else {
                element.classList.remove('border-b-2', 'border-white', 'pb-2', 'font-bold');
                element.classList.add('text-gray-400');
            }
        });
    }
    </script>
</body>
</html>