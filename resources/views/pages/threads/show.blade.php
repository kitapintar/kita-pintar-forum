<x-guest-layout>
    <main class="grid grid-cols-4 gap-8 mt-8 wrapper">

        <x-partials.sidenav :thread="$thread" />

        <section class="flex flex-col col-span-3 gap-y-4">

            <x-alerts.main />

            <small class="text-sm text-gray-400">Forum>{{ $category->name() }}>{{ $thread->title() }}</small>

            <article class="p-5 bg-white shadow">
                <div class="relative grid grid-cols-8">

                    
                    <div class="col-span-1">
                        <x-user.avatar :user="$thread->author()" />
                    </div>

                   
                    <div class="relative col-span-7 space-y-20">
                        <div class="space-y-3">
                            <h2 class="text-xl tracking-wide hover:text-blue-400">
                                {{ $thread->title() }}
                            </h2>
                            <div class="text-gray-500">
                                {!! $thread->body() !!}
                            </div>
                        </div>

                        <div class="flex justify-between">

                            <div class="flex space-x-5 text-gray-500">
                                {{-- Likes --}}
                                <livewire:like-thread :thread="$thread" />
                               
                                {{-- View Count --}}
                               
                            </div>

                            
                            <div class="flex items-center text-xs text-gray-500">
                                <x-heroicon-o-clock class="w-4 h-4 mr-1" />
                                Posted: {{ $thread->created_at->diffForHumans() }}
                            </div>
                        </div>


                    </div>
                    {{-- Edit Button --}}
                    <div class="absolute top-0 right-2">
                        <div class="flex space-x-2">
                            @can(App\Policies\ThreadPolicy::UPDATE, $thread)
                            <x-links.secondary href="{{ route('threads.edit', $thread->slug()) }}">
                                Edit
                            </x-links.secondary>
                            @endcan

                            @can(App\Policies\ThreadPolicy::DELETE, $thread)
                            <livewire:thread.delete :thread="$thread" :key="$thread->id()" />
                            @endcan
                        </div>
                    </div>
                </div>
            </article>

            {{-- Replies --}}
            <div class="mt-6 space-y-5">
                <h2 class="mb-0 text-sm font-bold uppercase">Jawaban</h2>
                <hr>
                @foreach($thread->replies() as $reply)
                <livewire:reply.update :reply="$reply" :wire:key="$reply->id()" />
                @endforeach
            </div>

            @auth
            <div class="p-10 space-y-10 bg-white shadow">
                <h2 class="text-gray-500 font-semibold">Tuliskan jawaban :</h2>
                <x-form action="{{ route('replies.store') }}">
                    <div>
                        <textarea class="ckeditor form-control" name="body"></textarea>
                        <x-form.error for="body" />

                        <input type="hidden" name="replyable_id" value="{{ $thread->id() }}">
                        <x-form.error for="replyable_id" />
                        <input type="hidden" name="replyable_type" value="threads">
                        <x-form.error for="replyable_type" />

                    </div>
                   
                    <div class="grid mt-4">
                        {{-- Button --}}
                        <x-buttons.primary class="justify-self-end">
                            {{ __('Post') }}
                        </x-buttons.primary>
                    </div>
                </x-form>
            </div>
            @else
            <div class="flex justify-between p-4 text-gray-700 bg-blue-200 rounded">
                <h2>Login untuk menjawab pertanyaan ini</h2>
                <a href="{{ route('login') }}">Login</a>
            </div>
            @endauth
        </section>
    </main>
</x-guest-layout>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$('.ckeditor').ckeditor();
 });
</script>