@props([
    'image',
    'heading',
    
])

<section class="">
    <div class="bg-gray-200 border-t-1 py-5 px-6">
        <div class="max-w-7xl mx-auto flex items-center space-x-2 text-sm">

            <a href="#" class="text-yellow-500 font-bold hover:underline">Home</a>

            <span class="text-gray-400 font-bold">></span>

            <span class="text-gray-500 font-bold">{{ $heading }}</span>
        </div>
    </div>

</section>