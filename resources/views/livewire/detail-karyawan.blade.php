<div>
   
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-900 uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Karyawan ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Karyawan Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Position
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Departement
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Join Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Karyawan Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Salary
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Direct Supervisor
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Married Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total Children
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Performance Evaluation
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Award
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white dark:bg-gray-800">
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$karyawan['employee']['id']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$karyawan['employee']['name']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$karyawan['employee']['position']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$karyawan['employee']['departement']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$karyawan['employee']['join_date']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$karyawan['karyawan_status']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$karyawan['salary']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$karyawan['direct_supervisor']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$kesehatanKaryawan['married_status']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$kesehatanKaryawan['total_children']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$kinerjaKaryawan['performance_evaluation']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$kinerjaKaryawan['award']}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
