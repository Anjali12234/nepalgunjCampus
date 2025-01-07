
@props([
    'image',
    'heading',
    
])

<section>
    <div class="relative">
        <!-- Background Image -->
        <img src="{{$image}}" alt="Why Nepalgunj Campus"
            class="w-full h-96 object-cover">

        <!-- Overlay for About Us Text -->
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center">
            <div class="py-7 px-3 md:px-32 ">
                <h2 class="text-white text-4xl md:text-5xl font-bold mb-4">{{$heading}}</h2>
            </div>
        </div>
    </div>
</section>