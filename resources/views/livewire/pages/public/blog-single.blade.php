<div>
  <div class="max-w-7xl mx-auto px-5 py-10">
    <div class="lg:flex lg:items-start lg:gap-16">

        <!-- Hero Image -->
        <div class="lg:w-1/2 hieght-8px w-full rounded-3xl overflow-hidden shadow-lg">
            <img 
                src="{{ asset('storage/' . $post->image) }}" 
                alt="{{ $post->name }}" 
                class="w-full h-full object-cover rounded-3xl"
            >
            <img 
                src="{{ asset('storage/' . $post->animal->image) }}" 
                alt="{{ $post->animal->name }}" 
                class="w-full h-full object-cover rounded-3xl"
            >
        </div>

        <!-- Animal Info -->
        <div class="lg:w-1/2 w-full mt-8 lg:mt-0">
            <h1 class="text-3xl font-bold text-foreground">{{ $post->title }}</h1>

            <div class="mt-6 space-y-4">

                <div class="flex justify-between">
                    <span class="font-medium text-foreground">Content:</span>
                    <span class="text-foreground">{{ $post->content ?? 'N/A' }}</span>
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