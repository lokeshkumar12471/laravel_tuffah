<section class="bg-white pb-10 mt-52">

    <div class="container max-w-screen-2xl mx-auto px-4">
        @if (!empty($banner_name))
            <!-- ====== Banner Section Start -->
            <x-frontend.banner>
                {{ $banner_name }}
            </x-frontend.banner>
            <!-- ====== Banner Section End -->
        @endif

        <section class="pt-20 lg:pt-[60px] pb-20 lg:pb-[60px]">
            <div class="container m-auto">
                {{ $slot }}
            </div>
        </section>
    </div>

</section>
