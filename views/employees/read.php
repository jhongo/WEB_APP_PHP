<div class="flex space-x-2 justify-start p-1.5">
<a href="?controller=employees&&action=create" class="text-white bg-green-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 ">
    Add Employees
</a>
</div>

<div class="relative overflow-x-auto shadow-md p-1.5">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Employee Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Lastname
                </th>
                <th scope="col" class="px-6 py-3">
                    Cell phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>

            </tr>
        </thead>
        <tbody>

        <?php foreach ($employees as $employee) { ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $employee->id; ?>
                </th>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $employee->name; ?>
                </td>
                <td class="px-6 py-4">
                    <?php echo $employee->lastname; ?>
                </td>
                <td class="px-6 py-4">
                    <?php echo $employee->phone; ?>
                </td>
                <td class="px-6 py-4">
                    <?php echo $employee->email; ?>
                </td>
                <td class="flex items-center px-6 py-4 space-x-3">
                    <a href="?controller=employees&&action=edit&id=<?php echo $employee->id ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="?controller=employees&&action=delete&id=<?php echo $employee->id ?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                </td>
            </tr>
           <?php } ?>
            
        
        </tbody>
    </table>
</div>
