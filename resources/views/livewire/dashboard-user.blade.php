<div>
    <div class="bg-white rounded-lg shadow-md p-4 w-full md:w-[600px]">

        <div>

            <table class="min-w-full bg-white border border-gray-300 mt-6 ">
                <thead class="bg-blue-50 ">
                    <tr>
                        <th class="px-4 py-2 border">No</th>
                        <th class="px-4 py-2 border">Name</th>
                        <th class="px-4 py-2 border">Email</th>
                        <th class="px-4 py-2 border">ID-User</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr class="bg-slate-50 text-center" wire:key="user-{{$user->id}}">
                        <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2 border">{{ $user->name }}</td>
                        <td class="px-4 py-2 border">{{ $user->email }}</td>
                        <td class="px-4 py-2 border">{{ $user->id }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>

</div>