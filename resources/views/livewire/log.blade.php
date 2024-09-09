<div class="mx-auto mt-8 px-20">
    <table class=" bg-white border border-gray-300 ">
        <thead class="bg-gray-100 ">
            <tr>
                <th class="px-4 py-2 border">Name</th>
                <th class="px-4 py-2 border">ID</th>
                <th class="px-4 py-2 border">Description</th>
                <th class="px-4 py-2 border">Properties</th>
                <th class="px-4 py-2 border">Created_at</th>

            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
            <tr class="bg-white">
                <td class="px-4 py-2 border text-sm ">{{ $activity->causer->name}}</td>
                <td class="px-4 py-2 border text-sm">{{ $activity->causer_id}}</td>
                <td class="px-4 py-2 border text-sm">{{ $activity->description }}</td>
                <td class="px-4 py-2 border text-sm ">{{ $activity->properties}}</td>
                <td class="px-4 py-2 border text-sm ">{{ \Carbon\Carbon::parse($activity->created_at)->locale('id')->translatedFormat('l, d F Y H:i:s') }}</td>

            </tr>
            @endforeach

        </tbody>
    </table>

</div>