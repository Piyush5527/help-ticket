<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <h1 class="text-white text-lg font-bold">Support tickets</h1>
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            @foreach ($tickets as $ticket)
                <div class="flex justify-between p-4">
                        <a class="text-white" href={{route('ticket.show',$ticket->id)}}>
                            {{ $ticket->title }}
                        </a>
                        <p class="text-white">
                            {{$ticket->created_at->diffForHumans() }}
                        </p>
                    </a>
                </div>
                <hr/>
            @endforeach
        </div>
    </div>
</x-app-layout>
