<div class=" border-2 shadow-lg rounded-md h-full md:w-max px-28 py-5 md:py-20 mx-auto bg-gray-800 text-white">


    <h1 class=" font-bold text-center ">Edit karyawan </h1>
    <form class="max-w-md mx-auto  " wire:submit.prevent='update'>
        <div class="relative z-0 w-full mt-5 mb-5 group">
            <input name="floating_name" id="floating_name"
                class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-white font-medium dark:border-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " wire:model.live='nama' required />
            <label for="floating_name"
                class="peer-focus:font-medium absolute text-sm text-white font-medium  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
        </div>
        {{-- <p>{{$name}}</p> --}}
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-4 md:mb-0   group">
                <input type="text" name="floating_first_name" id="floating_first_name"
                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text dark:border-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required wire:model.live='tempatLahir' />
                <label for="floating_first_name"
                    class="peer-focus:font-medium absolute text-sm text-white font-medium  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tempat
                    lahir</label>
            </div>
            <div class="relative z-0 w-full   group">
                <input type="date" name="floating_date" id="floating_date"
                    class="block py-2.5 px-0 w-full text-sm text-white font-medium bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text dark:border-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " wire:model.live='tanggalLahir' required />
                <label for="floating_date"
                    class="peer-focus:font-medium absolute text-sm text-white font-medium  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal
                    lahir</label>
            </div>
        </div>
        <div class="relative z-0 w-full mt-5 mb-5 group">
            <input name="floating_email" id="floating_email"
                class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-white font-medium dark:border-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " wire:model.live='nik' required />
            <label for="floating_email"
                class="peer-focus:font-medium absolute text-sm text-white font-medium  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nik</label>
        </div>
        <div class="relative z-0 w-full mt-5 mb-5 group">
            <input name="floating_password" id="floating_password"
                class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text dark:border-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " wire:model.live='noTelp' required />
            <label for="floating_password"
                class="peer-focus:font-medium absolute text-sm text-white font-medium  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No
                telp</label>
        </div>
        <div class="relative z-0 w-full mt-5 mb-5 group">
            <input name="repeat_password" id="floating_repeat_password"
                class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text dark:border-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " wire:model.live='agama' required />
            <label for="floating_repeat_password"
                class="peer-focus:font-medium absolute text-sm text-white font-medium  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Agama</label>
        </div>

        <div class="grid md:grid-cols-1 md:gap-6">
            <div class="relative z-0 w-full mt-2  mb-5 group">
                <select id="underline_select"
                    class="block text-white bg-gray-800 font-medium py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-200 appearance-none  dark:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-200 peer "
                    wire:model.live='status'>
                    <option selected>Status nikah </option>
                    <option value="sudah">Sudah</option>
                    <option value="belum">Belum</option>

                </select>
            </div>

        </div>
        <button type="submit"
            class="text-white mt-3  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

</div>
