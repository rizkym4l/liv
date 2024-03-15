<div class="">
    <div class="  mb-10    flex">
        <button type="button" id="as"
            class="mr-4 w-1/6 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 ms-5 mr-3">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
            </svg>

            Add employee
        </button>

        <form class=" w-5/6  ">
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input wire:model.live='search' id="default-search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Seach Employee..." required />
            </div>
        </form>


    </div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jabatan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Departemen
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal_bergabung
                    </th>


                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawan as $item)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->nama }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->jabatan }}

                        </td>
                        <td class="px-6 py-4">
                            {{ $item->departemen }}

                        </td>

                        <td>
                            {{ $item->tanggal_bergabung }}

                        </td>

                        <td class="px-6 py-4">
                            <a href="{{ route('edit', $item->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                data-modal-target="crud-modal" data-modal-toggle="crud-modal">Edit</a>

                            <a href="#" wire:click='delete({{ $item->id }})'
                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>

                            <a href="#" wire:click='deatil({{ $item->id }})'
                                class="font-medium text-green-600 dark:text-green-500 hover:underline">Detail</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class=" mt-5">

            {{ $karyawan->links() }}
        </div>
    </div>

</div>

<script>
    const button = document.getElementById('as')
    button.addEventListener('click', function() {
        window.location.href = '/'
    })
</script>
