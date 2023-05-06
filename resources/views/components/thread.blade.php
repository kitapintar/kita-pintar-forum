<article class="p-10 bg-white shadow">

    <div class="relative grid grid-cols-8 gap-3">

        {{-- Avatar --}}
        <div class="col-span-1">
            <x-user.avatar :user="$thread->author()" />
        </div>

        {{-- Content --}}
        <div class="col-span-6 space-y-10">

            <a href="{{ route('threads.show', [$thread->category->slug(), $thread->slug()]) }}" class="space-y-2">
                <h2 class="text-xl tracking-wide hover:text-blue-400">
                    {{ $thread->title() }}
                </h2>
                <x-jet-section-border />
                <p class="text-gray-500">
                    {{ $thread->excerpt() }}
                </p>
            </a>

         
            <div class="flex space-x-6">
    
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-red-300" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                      </svg>
                    <span class="text-xs text-gray-500">{{ count($thread->likes()) }}</span>
                </div>

               
                <div class="flex items-center space-x-2">
                    <x-heroicon-o-chat-alt class="w-4 h-4 text-red-300" />
                    <span class="text-xs text-gray-500">{{ count($thread->replies()) }}</span>
                </div>

                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-xs text-gray-500">{{ $thread->created_at->diffForHumans() }}</span>
                </div>
            </div>
        </div>

        {{-- Tags --}}
        <div class="absolute right-2">
            <div class="flex space-x-2">
                @foreach($thread->tags() as $tag)
                <a href="{{ route('threads.tags.index', $tag->slug()) }}" class="p-1 text-xs text-white bg-green-400 rounded">
                    {{ $tag->name() }}
                </a>
                @endforeach
            </div>
        </div>
    </div>
</article>