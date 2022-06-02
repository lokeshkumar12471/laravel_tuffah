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
            {{ $data->title }}
        </x-slot>

        <!-- Blog Details -->
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
                <div class="relative rounded overflow-hidden z-20 mb-[60px] h-[300px] md:h-[400px] lg:h-[500px] wow fadeInUp"
                    data-wow-delay=".1s">
                    <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->title }}"
                        class="object-cover object-center w-full h-full" />
                    <div
                        class="absolute top-0 left-0 z-10 flex items-end w-full h-full  bg-gradient-to-t from-dark-700 to-transparent">
                        <div class="flex flex-wrap items-center p-4 pb-4 sm:p-8">
                            <div class="flex items-center mb-4 mr-5 md:mr-10">
                                <p class="text-base font-medium text-white">
                                    {{ $data->department->name }}
                                </p>
                            </div>
                            <div class="flex items-center mb-4">
                                <p class="flex items-center text-sm font-medium text-white">
                                    <span class="mr-3">
                                        <svg width="20" height="12" viewBox="0 0 20 12" class="fill-current">
                                            <path
                                                d="M10.2559 3.8125C9.03711 3.8125 8.06836 4.8125 8.06836 6C8.06836 7.1875 9.06836 8.1875 10.2559 8.1875C11.4434 8.1875 12.4434 7.1875 12.4434 6C12.4434 4.8125 11.4746 3.8125 10.2559 3.8125ZM10.2559 7.09375C9.66211 7.09375 9.16211 6.59375 9.16211 6C9.16211 5.40625 9.66211 4.90625 10.2559 4.90625C10.8496 4.90625 11.3496 5.40625 11.3496 6C11.3496 6.59375 10.8496 7.09375 10.2559 7.09375Z" />
                                            <path
                                                d="M19.7559 5.625C17.6934 2.375 14.1309 0.4375 10.2559 0.4375C6.38086 0.4375 2.81836 2.375 0.755859 5.625C0.630859 5.84375 0.630859 6.125 0.755859 6.34375C2.81836 9.59375 6.38086 11.5312 10.2559 11.5312C14.1309 11.5312 17.6934 9.59375 19.7559 6.34375C19.9121 6.125 19.9121 5.84375 19.7559 5.625ZM10.2559 10.4375C6.84961 10.4375 3.69336 8.78125 1.81836 5.96875C3.69336 3.1875 6.84961 1.53125 10.2559 1.53125C13.6621 1.53125 16.8184 3.1875 18.6934 5.96875C16.8184 8.78125 13.6621 10.4375 10.2559 10.4375Z" />
                                        </svg>
                                    </span>
                                    {{ $data->clicks }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center -mx-4">
                    <div class="w-full px-4">
                        <div>
                            <h2 class="font-bold text-dark text-[26px] sm:text-3xl md:text-4xl leading-snug sm:leading-snug md:leading-snug mb-6 wow fadeInUp"
                                data-wow-delay=".1s">
                                {{ $data->title }}
                            </h2>

                            <p class="mb-8 text-base leading-relaxed  text-body-color wow fadeInUp"
                                data-wow-delay=".1s">{{ $data->excerpt }}</p>

                            <div class="mb-8 ck-content">
                                {!! $data->description !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4 mt-14 wow fadeInUp" data-wow-delay=".2s">
                <h2 class="font-semibold text-dark text-2xl sm:text-[28px] pb-5 relative">
                    Related Services
                </h2>
                <span class="h-[2px] bg-primary w-20 mb-10 inline-block"></span>
            </div>
            <!-- First Repeater -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-1 md:gap-5 mx-auto">
                @forelse ($related as $item)
                    @include('components.frontend.service')
                @empty
                    <div class="w-full px-4">
                        <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                    </div>
                @endforelse
            </div>
        </div>

    </x-frontend.container>
</x-guest-layout>
