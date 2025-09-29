@section('title', 'Kategori > Edit Kategori')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Kategori') }}
        </h2>
        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
            Ubah rincian kategori pada formulir di bawah ini.
        </p>
    </x-slot>

    <div class="max-w-4xl mx-auto">
        {{-- Card konten utama disamakan dengan halaman lain (floating, rounded-3xl) --}}
        <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-lg shadow-xl rounded-3xl p-8 border border-white/20">
            
            <form action="{{ route('kategori.update', $kategori->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                {{-- ID Kategori (Disabled) --}}
                <div>
                    <label for="id" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">ID Kategori</label>
                    <input type="text" id="id" name="id" value="{{ $kategori->id }}" 
                           class="w-full bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 rounded-lg px-4 py-2 cursor-not-allowed" 
                           disabled>
                </div>

                {{-- Nama Kategori --}}
                <div>
                    <label for="nama_kategori" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Nama Kategori</label>
                    <input type="text" id="nama_kategori" name="nama_kategori" 
                           value="{{ old('nama_kategori', $kategori->nama_kategori) }}" 
                           class="w-full border-gray-300 dark:border-gray-600 dark:bg-white/50 dark:text-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-500 transition"
                           required>
                    @error('nama_kategori')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Keterangan --}}
                <div>
                    <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Keterangan</label>
                    <textarea id="keterangan" name="keterangan" rows="4"
                              class="w-full border-gray-300 dark:border-gray-600 dark:bg-white/50 dark:text-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-500 transition"
                              required>{{ old('keterangan', $kategori->keterangan) }}</textarea>
                    @error('keterangan')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Tombol Aksi (Update & Batal) --}}
                <div class="flex items-center justify-end pt-4 gap-4">
                    <a href="{{ route('kategori.index') }}" 
                       class="border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 px-6 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition font-semibold">
                       Batal
                    </a>
                    <button type="submit" 
                            class="bg-purple-600 text-white px-6 py-2 rounded-lg hover:bg-purple-700 transition shadow-md font-semibold">
                        Update Kategori
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
