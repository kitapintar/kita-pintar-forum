<x-guest-layout>
    <main class="grid grid-cols-4 gap-8 mt-8 wrapper">

        <x-partials.sidenav />

        <section class="flex flex-col col-span-3 gap-y-4">
            <small class="text-sm text-gray-400">pertanyaan>buat</small>

            <article class="p-5 bg-white shadow">
                <div class="w-full">

                    {{-- Create --}}
                    <div class="space-y-6">
                        <x-form action="{{ route('threads.store') }}">
                            <div class="space-y-8">

                                
                                <div>
                                    <x-form.label for="title" value="{{ __('Judul') }}" />
                                    <x-form.input id="title" class="block w-full mt-1" type="text" name="title" :value="old('title')" autofocus />
                                    <x-form.error for="title" />
                                </div>

                                
                                <div>
                                    <x-form.label for="category" value="{{ __('Kategori') }}" />
                                    <select name="category" id="category" class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                        <option value="">Pilih kategori</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id() }}">{{ $category->name() }}</option>
                                        @endforeach
                                    </select>
                                    <x-form.error for="category" />
                                </div>

                               
                                <div>
                                    <x-form.label for="tags" value="{{ __('Tags') }}" />
                                    <select name="tags[]" id="tags" x-data="{}" x-init="function () { choices($el) }" class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" multiple>
                                        @foreach ($tags as $tag)
                                        <option value="{{ $tag->id() }}">{{ $tag->name() }}</option>
                                        @endforeach
                                    </select>
                                    <x-form.error for="tags" />
                                </div>

                               
                                <div>
                                      <x-form.label for="body" value="{{ __('Text pertanyaan') }}" />
                                    <textarea class="ckeditor form-control" name="body"></textarea>
                                  
                                    
                                    <x-form.error for="body" />
                                </div>

                                {{-- Button --}}
                                <x-buttons.primary>
                                    {{ __('Posting') }}
                                </x-buttons.primary>
                                <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
                                <script type="text/javascript">
                                $(document).ready(function () {
                                $('.ckeditor').ckeditor();
                                 });
                                </script>
                        </x-form>
                    </div>
                </div>
            </article>
        </section>
    </main>
    
</x-guest-layout>


