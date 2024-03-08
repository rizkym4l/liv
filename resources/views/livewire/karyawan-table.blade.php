<div class=" py-20 px-10">


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tempat lahir
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal lahir
                    </th>
                    <th scope="col" class="px-6 py-3">
                        nik
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No telpon
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status nikah
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
                            {{ $item->tempat_lahir }}

                        </td>
                        <td class="px-6 py-4">
                            {{ $item->tanggal_lahir }}

                        </td>
                        <td class="px-6 py-4">
                            {{ $item->nik }}

                        </td>
                        <td>
                            {{ $item->no_telp }}

                        </td>
                        <td>
                            {{ $item->status }}

                        </td>
                        <td class="px-6 py-4">
                            <a  href="{{route('edit',$item->id)}}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline" data-modal-target="crud-modal" data-modal-toggle="crud-modal">Edit</a>
                                
                            <a href="#" wire:click='delete({{$item->id}})'
                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
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
