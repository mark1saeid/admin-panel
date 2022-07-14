<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Hosts
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                    role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif

                @if (Request::getPathInfo() == '/hosts')
                  @if(count($hosts)<3)
                    <button wire:click="create()"
                            class="inline-flex items-center px-4 py-2 my-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Create New Host
                    </button>
                  @endif
                @endif

                @if ($isOpen)
                    @include('livewire.hosts.create')
                @endif

            <div class="grid grid-flow-row grid-cols-3  gap-4">
                @foreach ($hosts as $host)
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="px-8 py-6">
                            <div class="font-bold text-xl mb-2">{{ $host->title }}</div>
                            <p class="text-gray-700 text-base">
                                {{ Str::words($host->link, 20, '...') }}
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <button wire:click="edit({{ $host->id }})"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                            <button wire:click="delete({{ $host->id }})"
                                class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-600 transition ease-in-out duration-150">
                                Delete
                            </button>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
        <div class="py-4">
            {{ $hosts->links() }}
        </div>
    </div>
</div>
