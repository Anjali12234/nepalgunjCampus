@extends('frontend.layouts.master')
@section('title', $semester->programme->programme_full_name)
@section('content')
    <x-frontend.hero-component image="{{ asset('assets/frontend/images/background/9.jpg') }}"
        heading="{{ $semester->programme->programme_full_name }}" />


    <x-frontend.bread-crum heading="{{ $semester->programme->programme_full_name }}" />
    <section>
        <div class="py-7 px-3  md:px-28">
            <div class="block md:grid grid-cols-1 lg:grid-cols-4 gap-[8rem]">
                <div>
                    <div class="mb-4">
                        <div class=" p-2 ">
                            @foreach ($semesters as $sem)
                                <div class="flex mt-1 mb-1">
                                    <div class="bg-gray-400 hover:bg-gray-600 w-1"></div>
                                    <a href="{{ route('semester', $sem->slug) }}">
                                        <div
                                            class="text-black w-[21rem] md:w-72 font-bold tracking-wider p-4    border-gray-500 
                                    {{ request()->is('semester/' . $sem->slug) ? 'bg-[#FFC315]' : 'bg-gray-300 hover:bg-[#FFC315]' }}">
                                            {{ $sem->title }}</div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="space-y-4 ">
                        <button
                            class="flex items-center justify-between  w-[21rem] md:w-72 m-[7px] bg-black text-white px-4 py-2">
                            <span class="flex items-center gap-3 p-2 font-bold tracking-wide text-[18px]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-[#FFC315]" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-file-type-pdf">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                    <path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
                                    <path d="M17 18h2" />
                                    <path d="M20 15h-3v6" />
                                    <path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" />
                                </svg>
                                PDF. Download
                            </span>
                        </button>
                        <button
                            class="flex items-center justify-between  w-[21rem] md:w-72 m-[7px] bg-black text-white px-4 py-2">
                            <span class="flex p-2 items-center gap-2 text-[18px] tracking-wide font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-[#FFC315]" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-file-text-spark">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <path d="M12 21h-5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v3.5" />
                                    <path d="M9 9h1" />
                                    <path d="M9 13h6" />
                                    <path d="M9 17h3" />
                                    <path
                                        d="M19 22.5a4.75 4.75 0 0 1 3.5 -3.5a4.75 4.75 0 0 1 -3.5 -3.5a4.75 4.75 0 0 1 -3.5 3.5a4.75 4.75 0 0 1 3.5 3.5" />
                                </svg>
                                PDF. Download
                            </span>
                        </button>
                    </div>

                    <div class="mt-8 w-[19rem]">

                        <h2 class="text-xl font-bold text-gray-800 ">
                            For More Information
                            <span class="text-[#FFC315] font-extrabold">_____</span>
                        </h2>

                        <ul class="space-y-2 text-gray-700 mt-4">
                            <li class="flex text-[16px] gap-1 leading-6 font-semibold p-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                </svg>
                                {{ systemSetting()?->phone_number }}
                            </li>
                            <li class="flex text-[16px] leading-6 font-semibold items-center p-2 gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                </svg>
                                {{ systemSetting()?->telephone_number }}

                            </li>
                            <li class="flex items-center text-[16px] gap-1 leading-6 p-2 font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-brand-telegram">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                                </svg>
                                {{ systemSetting()?->email }}

                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-span-3 mt-10 ml-4">

                    <h1 class="text-2xl md:text-[28px] font-semibold text-gray-900 leading-0 md:leading-5 mb-4">
                        {{ $semester->programme->programme_full_name }}

                    </h1>
                    <p class="text-2xl md:text-[28px] font-semibold text-gray-900 leading-0 md:leading-5 mb-4">
                        {{ $semester->programme->programme_short_name }}· {{ $semester->programme->university }} ·
                        {{ $semester->programme->years }} years
                    </p>

                    <div class="">
                        <!-- CTA Button -->

                        <div class="">
                            <!-- CTA Button -->
                            <div class="bg-gray-200 h-24">

                            </div>
                            <div class="block md:flex pt-5 pb-12 gap-3 bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-file-type-pdf ml-[8.5rem] md:ml-0 ">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                    <path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
                                    <path d="M17 18h2" />
                                    <path d="M20 15h-3v6" />
                                    <path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" />
                                </svg>
                                <button
                                    class="bg-[#FFC315] mt-3 md:mt-0 hover:bg-transparent border hover:border-1 hover:text-[#FFC315] motion-ease-in  hover:border-[#FFC315] text-black px-10 py-3 tracking-wider rounded-full  transition-all duration-300 font-semibold">
                                    CURRICULAR STRUCTURE OF ALL SEMESTER
                                </button>
                            </div>
                            <!-- FAQ Section -->
                            <div class="pb-20">
                                <div class="">

                                    <div class="flex flex-col">
                                        <div class="-m-1.5 overflow-x-auto">
                                            <div class="p-1.5 min-w-full inline-block align-middle">
                                                <div class="overflow-hidden">
                                                    <table
                                                        class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                                        <thead class="bg-gray-200">
                                                            <tr>
                                                                <th scope="col"
                                                                    class="px-2 py-3 text-start text-base font-bold text-gray-800 uppercase dark:text-neutral-500">
                                                                    S.N. </th>
                                                                <th scope="col"
                                                                    class="px-2 py-3 text-start text-base font-bold text-gray-800 uppercase dark:text-neutral-500">
                                                                    Course Code</th>
                                                                <th scope="col"
                                                                    class="px-2 py-3 text-start text-base font-bold text-gray-800 uppercase dark:text-neutral-500">
                                                                    Course Title</th>
                                                                <th scope="col"
                                                                    class="px-2 py-3 text-end text-base font-bold text-gray-800 uppercase dark:text-neutral-500">
                                                                    Credit Hours</th>
                                                                @if ($semester->programme->programme_short_name == 'BCA')
                                                                    <th scope="col"
                                                                        class="px-2 py-3 text-end text-base font-bold text-gray-800 uppercase dark:text-neutral-500">
                                                                        Lecture Hours</th>
                                                                    <th scope="col"
                                                                        class="px-2 py-3 text-end text-base font-bold text-gray-800 uppercase dark:text-neutral-500">
                                                                        Tutorial Hours</th>
                                                                    <th scope="col"
                                                                        class="px-2 py-3 text-end text-base font-bold text-gray-800 uppercase dark:text-neutral-500">
                                                                        Lab Hours</th>
                                                                @else
                                                                    <th scope="col"
                                                                        class="px-2 py-3 text-end text-base font-bold text-gray-800 uppercase dark:text-neutral-500">
                                                                        Full Marks</th>
                                                                @endif
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse($semester->courses as $course)
                                                                <tr
                                                                    class="odd:bg-gray-100 even:bg-gray-200 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                                                    <td
                                                                        class="px-6 py-4 whitespace-nowrap text-base font-medium text-gray-800 dark:text-neutral-200">
                                                                        {{ $loop->iteration }}</td>
                                                                    <td
                                                                        class="px-6 py-4 whitespace-nowrap text-base text-gray-800 dark:text-neutral-200">
                                                                        {{ $course->course_code }}</td>
                                                                    <td
                                                                        class="px-6 py-4 whitespace-nowrap text-base font-semibold text-[#FFC315] dark:text-neutral-200">
                                                                        <a href="{{ $course->course_pdf }}">
                                                                            {{ $course->course_title }}</a>
                                                                    </td>
                                                                    <td
                                                                        class="px-6 py-4 whitespace-nowrap text-base text-gray-800 dark:text-neutral-200">
                                                                        {{ empty($course->credit_hr) ? '-' : $course->credit_hr }}
                                                                    </td>
                                                                    @if ($semester->programme->programme_short_name == 'BCA')
                                                                        <td
                                                                            class="px-6 py-4 whitespace-nowrap text-base text-gray-800 dark:text-neutral-200">
                                                                            {{ empty($course->lecture_hr) ? '-' : $course->lecture_hr }}
                                                                        </td>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-nowrap text-base text-gray-800 dark:text-neutral-200">
                                                                            {{ empty($course->tutorial_hr) ? '-' : $course->tutorial_hr }}
                                                                        </td>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-nowrap text-base text-gray-800 dark:text-neutral-200">
                                                                            {{ empty($course->lab_hr) ? '-' : $course->lab_hr }}
                                                                        </td>
                                                                    @else
                                                                        <td
                                                                            class="px-6 py-4 whitespace-nowrap text-base text-gray-800 dark:text-neutral-200">
                                                                            {{ empty($course->total_hr) ? '-' : $course->total_hr }}
                                                                        </td>
                                                                    @endif


                                                                </tr>
                                                            @empty
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                                    No data found !!</td>
                                                            @endforelse
                                                            <tr
                                                                class="odd:bg-gray-100 even:bg-gray-200 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                                                <td colspan="3"
                                                                    class="px-20 py-4 whitespace-nowrap text-base font-medium text-gray-800 dark:text-neutral-200">
                                                                    Total
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-base text-gray-800 dark:text-neutral-200">
                                                                    {{ $totalCreditHr }}</td>

                                                                @if ($semester->programme->programme_short_name == 'BCA')
                                                                    <td
                                                                        class="px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-800 dark:text-neutral-200">

                                                                        {{ $totalLectureHr }}
                                                                    </td>
                                                                    <td
                                                                        class="px-6 py-4 whitespace-nowrap text-base text-gray-800 dark:text-neutral-200">
                                                                        {{ $totalTutorialHr }}
                                                                    </td>
                                                                    <td
                                                                        class="px-6 py-4 whitespace-nowrap text-base text-gray-800 dark:text-neutral-200">
                                                                        {{ $totalLabHr }}
                                                                    </td>
                                                                @else
                                                                    <td
                                                                        class="px-6 py-4 whitespace-nowrap text-base text-gray-800 dark:text-neutral-200">
                                                                        {{ $totalHr }}
                                                                    </td>
                                                                @endif


                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Section -->


                        <div class="px-0 pb-20 md:px-8">
                            <h2 class="font-bold leading-5 text-black text-[28px] mb-8">General Questions</h2>
                            <div class="hs-accordion-group" id="accordionGroup">
                                @foreach ($generalQuestions as $key => $generalQuestion)
                                    <div class="mt-5 hs-accordion bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700"
                                        id="accordion-{{ $key }}">
                                        <button
                                            class="text-xl hs-accordion-toggle inline-flex items-center gap-x-3 w-full 
                                               font-semibold text-start text-gray-900 py-4 px-5 hover:text-gray-500 disabled:opacity-50 
                                               disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 
                                               dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400 
                                                "
                                            onclick="toggleAccordion({{ $key }})"
                                            aria-expanded="{{ $key === 0 ? 'true' : 'false' }}"
                                            aria-controls="accordion-content-{{ $key }}">
                                            <svg class="hs-accordion-active:hidden block  p-2 rounded"
                                                xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                                viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5v14"></path>
                                            </svg>
                                            <svg class="hs-accordion-active:block hidden bg-yellow-400 p-2 rounded"
                                                xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                                viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                            </svg>


                                            {{ $generalQuestion->title }}
                                        </button>

                                        <div id="accordion-content-{{ $key }}"
                                            class="hs-accordion-content text-lg text-gray-500 w-full overflow-hidden transition-[height] 
                                        duration-300 pl-[3.25rem]"
                                            role="region" aria-labelledby="accordion-{{ $key }}"
                                            style="{{ $key === 0 ? 'display: block;' : 'display: none;' }}">
                                            <div class="pb-4 px-3 ">
                                                <p class=" ml-6 ">
                                                    {!! $generalQuestion->description !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>


                </div>
            </div>
    </section>
@endsection
