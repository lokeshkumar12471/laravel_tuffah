<div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4  flex flex-col">
    <div class="c-card block bg-white shadow-testimonial rounded-lg overflow-hidden flex-1">
        <a href="{{ route('team_single', ['id' => $item->id]) }}">
            <div class="relative pb-48 overflow-hidden h-96">
                <img class="absolute inset-0 h-full w-full object-cover hover:scale-125"
                    src="{{ asset('storage/' . $item->image) }}" alt="{{ ucwords(strtolower($item->name)) }}">
            </div>
        </a>
        <div class="p-4">
            <a href="{{ route('team_single', ['id' => $item->id]) }}">
                <h2 class="mt-2 mb-2 text-xl font-bold">{{ ucwords(strtolower($item->name)) }}</h2>
            </a>
            <div class="font-bold text-lg sm:leading-snug text-dark mb-3">
                Qualification:
                <p class="text-sm text-dark inline">
                    {{ $item->qualification }}
                </p>
            </div>
            <div class="font-bold text-lg sm:leading-snug text-dark mb-3">
                Department:
                <p class="text-sm text-dark inline">
                    {{ $item->department->name }}
                </p>
            </div>
            <div class="flex justify-between">
                <a href="{{ route('book_appointment', ['team_id' => $item->id]) }}"
                    class="bg-gradient-to-r from-primary via-[#D4497A] to-primary hover:from-secondary hover:to-secondary px-3 py-2 font-semibold text-white text-sm rounded-xl transition ease-in-out duration-500">Book
                    Appointment</a>
                <a href="{{ route('team_single', ['id' => $item->id]) }}"
                    class="bg-gradient-to-r from-primary via-[#D4497A] to-primary hover:from-secondary hover:to-secondary px-3 py-2 font-semibold text-white text-sm rounded-xl transition ease-in-out duration-500">Learn
                    More</a>
            </div>
        </div>
    </div>
</div>
