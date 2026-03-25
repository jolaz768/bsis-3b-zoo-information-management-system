<div>
  <div class="max-w-7xl mx-auto px-5 py-10">
    <div class="lg:flex lg:items-start lg:gap-16">

        <!-- Hero Image -->
        <div class="lg:w-1/2 hieght-8px w-full rounded-3xl overflow-hidden shadow-lg">
            <img 
                src="{{ asset('storage/' . $animal->image) }}" 
                alt="{{ $animal->name }}" 
                class="w-full h-full object-cover rounded-3xl"
            >
        </div>

        <!-- Animal Info -->
        <div class="lg:w-1/2 w-full mt-8 lg:mt-0">
            <h1 class="text-3xl font-bold text-foreground">{{ $animal->name }}</h1>
            <p class="text-xl font-semibold text-gray-500 mt-1">
                {{ $animal->species->species_name ?? 'Unknown Species' }}
            </p>

            <div class="mt-6 space-y-4">

                <div class="flex justify-between">
                    <span class="font-medium text-foreground">Weight:</span>
                    <span class="text-foreground">{{ $animal->weight ?? 'N/A' }} kg</span>
                </div>

                <div class="flex justify-between">
                    <span class="font-medium text-foreground">Height:</span>
                    <span class="text-foreground">{{ $animal->height ?? 'N/A' }} m</span>
                </div>

                <div class="flex justify-between">
                    <span class="font-medium text-foreground">Habitat:</span>
                    <span class="text-foreground">{{ $animal->habitat->hab_name ?? 'N/A' }}</span>
                </div>

                <div class="flex justify-between">
                    <span class="font-medium text-foreground">Description:</span>
                    <span class="text-foreground">{{ $animal->description ?? 'N/A' }}</span>
                </div>

            </div>

            <a href="{{ route('home') }}"
               class="mt-8 inline-block px-6 py-3 bg-primary text-white font-medium rounded-xl hover:bg-primary-hover transition"
            >
                Go Back
            </a>
        </div>

    </div>
</div>
</div>