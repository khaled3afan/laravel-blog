        <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col">
        <div class="mx-auto overflow-x-auto sm:-mx-6 lg:-mx-8 w-full">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                @foreach ($columns as $column)
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ ucfirst($column) }}
                                </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($collection as $item)
                                <tr>
                                    @foreach ($columns as $column)
                                    <td class="px-6 py-4">
                                                {{ $item->$column }}

                                    </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
