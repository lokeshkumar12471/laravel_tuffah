@push('styles')
    @include('components.backend.ckeditor_style')
@endpush
@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script>
        window.addEventListener('load', function() {
            document.querySelectorAll('oembed[url]').forEach(element => {
                // get just the code for this youtube video from the url
                let vCode = element.attributes.url.value.split('?v=')[1];
                // paste some BS5 embed code in place of the Figure tag
                element.parentElement.outerHTML = `
    <div class="aspect-w-16 aspect-h-9">
        <iframe src="https://www.youtube.com/embed/${vCode}?rel=0" width="800" height="450" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>`;
            });
        })
    </script>
    <script>
        window.addEventListener('load', function() {
            document.querySelectorAll('p > a').forEach(element => {
                // get just the code for this youtube video from the url
                let href = element.attributes.href.value;
                let text = element.innerHTML;
                // paste some BS5 embed code in place of the Figure tag
                element.parentElement.outerHTML =
                    `
                <p class="m-2 text-center"><a class="ml-6 text-white capitalize bg-blue-500 btn-sm hover:bg-blue-300" href="${href}">${text}</a></p>`;
            });
        })
    </script>
@endpush
<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Terms') }}
        </x-slot>

        <div class="flex flex-wrap -mx-4">
            <div class="text-lg text-gray-600 dark:text-gray-400 ck-content" data-aos="fade-up" data-aos-delay="450">
                {!! $data !!}
            </div>
        </div>

    </x-frontend.container>
</x-guest-layout>
