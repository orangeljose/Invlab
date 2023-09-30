<!-- Table -->
<div class="flex flex-col mt-6">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="headers-invlab">

                    <tr>
                        @foreach($headers as $header)
                        <th scope="col" class="cursor-pointer px-6 py-3 text-left text-white text-xm tracking-wider" wire:click="order('{{$sort[$loop->index]}}')">
                            {{ $header }}
                        </th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    {{ $slot }}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Table -->
