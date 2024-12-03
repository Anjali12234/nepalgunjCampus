@props(['about'])

<div class="bg-gray-100 py-12 px-8">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
      <!-- Text Section -->
      <div>
        <h2 class="text-3xl font-bold text-gray-800 mb-4">About Us <span class="text-[#FFC315] font-bold">____</span></h2>
        <h3 class="text-xl font-semibold text-gray-600 mb-6">{{$about->title}}</h3>
        <p class="text-gray-700 leading-relaxed mb-6 text-justify">
          {!!$about->description!!}
        </p>
        <button
          class="bg-[#FFC315] hover:text-[#FFC315] text-black py-3 px-6 rounded-full font-semibold  hover:border-[#FFC315] hover:bg-transparent border hover:border-1 transition duration-300">
          Know more about us
        </button>

      </div>

      <!-- Video Section -->
      <div class="relative flex justify-center">
        <img src="{{$about->image}}" alt="About Us Video" class="rounded-lg shadow-md cursor-pointer" id="video-img">

        <!-- Play Button -->
        <button
          class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-4 rounded-full shadow-lg"
          id="play-btn">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-8 h-8 text-gray-800">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
          </svg>
        </button>
      </div>
    </div>
  </div>


  <div id="video-modal"
  class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
  <div class="bg-white rounded-lg overflow-hidden shadow-lg">
      <div class="relative">
          <!-- Close Button -->
          <button id="close-video"
              class="absolute top-2 right-2 bg-gray-200 rounded-full p-2 hover:bg-gray-300">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
          </button>
          <!-- YouTube Video -->
          <div>
            <video controls="controls" id="myVideo" autoplay></video>
        </div>
      </div>
  </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const playButton = document.getElementById('play-btn');
        const videoModal = document.getElementById('video-modal');
        const closeModal = document.getElementById('close-video');

        // Show the modal
        playButton.addEventListener('click', () => {
            videoModal.classList.remove('hidden');
        });

        // Close the modal
        closeModal.addEventListener('click', () => {
            videoModal.classList.add('hidden');
        });
    });
</script>

