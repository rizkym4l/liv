<div class="w-full mx-auto bg-white shadow-md rounded-md p-6">
  



    <h2 class="text-xl font-semibold mb-4">Add karyawan</h2>
    <form wire:submit='store'>
      <div class="mb-4">
        <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
        <input type="text"  class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model.live='nama' placeholder="asep"  >
      </div>
      @error('nama') <span class="error text-red-500">{{ $message }}</span>  @enderror

      <div class="mb-4">
        <label for="jabatan" class="block text-sm mb-1 font-medium text-gray-700">Jabatan</label>
        <select id="countries" wire:model.live='jabatan' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
          <option selected>Pilih jabatan</option>
          <option value="Direksi">Direksi</option>
          <option value="DirekturUtama">Direktur Utama</option>
          <option value="Direktur">Direktur</option>
          <option value="Manajer">Manajer</option>
          <option value="Adminnistrasi">Adminnistrasi</option>
        </select>
      </div>
      @error('jabatan') <span class="error text-red-500">{{ $message }}</span>  @enderror

      <div class="mb-4">
        <label for="departemen" class="block mb-1 text-sm font-medium text-gray-700">Departemen</label>
        <select id="countries" wire:model.live='departement' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
          <option selected>Pilih departemen</option>
          <option value="Keuangan">Keuangan</option>
          <option value="HRD">HRD</option>
          <option value="Marketing">Marketing</option>
          <option value="Produksi">Produksi</option>
          <option value="IT">IT</option>
        </select>
      </div>
      @error('departement') <span class="error text-red-500">{{ $message }}</span>  @enderror

      <div class="mb-4">
        <label for="tanggal_bergabung" class="block text-sm font-medium text-gray-700">Tanggal Bergabung</label>
        <input type="date" id="tanggal_bergabung" name="tanggal_bergabung" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model.live='tanggalBergabung' placeholder=" 1 april 2020" >
      </div>
      @error('tanggalBergabung') <span class="error text-red-500">{{ $message }}</span>  @enderror

      <!-- Data Detail -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Informasi Kontak:</label>
        <textarea class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model.live='informasiKontak' >
           
  Alamatmu ,  Nomor teleponmu ,  Emailmu
        </textarea>
      </div>

      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Informasi Pekerjaan:</label>
        <textarea class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"  wire:model.live='informasiPekerjaan' >
          Status Karyawan:(tetap/tidak) , Gajimu , Atasanmu Langsung
        </textarea>
      </div>
      @error('informasiPekerjaan') <span class="error text-red-500">{{ $message }}</span>  @enderror

      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Informasi Performa:</label>
        <textarea class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"  wire:model.live='informasiPerforma' >
  Evaluasi Kinerja: (Tahun: 20.. : 4,5/5) , Penghargaan: (Karyawan Terbaik Juni 2023,karyawan sabeb)
        </textarea>
      </div>
      @error('informasiPerforma') <span class="error text-red-500">{{ $message }}</span> @enderror

      
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Informasi Tambahan:</label>
        <textarea class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"  wire:model.live='informasiTambahan' >
  Asuransi Kesehatanmu ,Dana Pensiunmu
        </textarea>
      </div>
      @error('informasiTambahan') <span class="error text-red-500">{{ $message }}</span> @enderror

      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Data Keluarga:</label>
        <textarea class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"  wire:model.live='dataKeluarga' >
  Status Perkawinan:(menikah,belum) , Jumlah Anakmu
        </textarea>
        
      </div>
      @error('dataKeluarga') <span class="error text-red-500">{{ $message }}</span> @enderror
      <div class="flex justify-end">
        <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Simpan</button>

      </div>


    </form>
    

<hr class=" fill-white mt-10 mb-10">
Contoh :

<img class=" mt-5" src="{{asset('image.png')}}" alt="">
  </div>
  