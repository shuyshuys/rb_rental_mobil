{{-- @extends('filament::page') --}}

<filament-panels::components.layout.base>

    @section('content')
        <div class="space-y-4">
            <h1 class="text-2xl font-bold">Custom Car Page</h1>
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Manufacture</th>
                        <th
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name</th>
                        <th
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            License Number</th>
                        <th
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Color</th>
                        <th
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Year</th>
                        <th
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Price</th>
                        <th
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Penalty</th>
                        <th
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($cars as $car)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $car->manufacture->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $car->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $car->license_number }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $car->color }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $car->year }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $car->price }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $car->penalty }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $car->status ? 'Available' : 'Unavailable' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection

</filament-panels::components.layout.base>
