@section('title', 'About')

<x-app-layout>
    <div class="max-w-7xl mx-auto">
        {{-- 
            Kita gunakan satu card utama yang "melayang" agar serasi dengan desain dashboard.
            Semua elemen dibuat terpusat (text-center) untuk tampilan yang bersih dan fokus.
        --}}
        <div class="bg-white/80 backdrop-blur-lg shadow-xl rounded-3xl p-8 md:p-12 border border-white/20">
            
            <div class="max-w-md mx-auto text-center">
                
                <!-- 1. Foto Profil -->
                <img src="{{ asset('images/2141720061.jpg') }}" alt="Foto Profil Tri Jagad Ariyani" 
                     class="w-40 h-40 rounded-full mx-auto mb-6 shadow-lg border-4 border-purple-300">

                <!-- 2. Nama Lengkap -->
                <h1 class="text-4xl font-extrabold text-purple-900">
                    Mellyana Tundjung
                </h1>

                {{-- Garis pemisah sederhana --}}
                <hr class="my-4 border-purple-200">

                <!-- 3. NIM & Tanggal Pembuatan -->
                <div class="text-lg text-purple-700 space-y-2">
                    <p>
                        <span class="font-semibold text-purple-800">NIM:</span> 
                        2141720061
                    </p>
                    <p>
                        <span class="font-semibold text-purple-800">Tanggal Pembuatan Aplikasi:</span> 
                        29 September 2025
                    </p>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
