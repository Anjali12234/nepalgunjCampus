@extends('student.layouts.master')
@section('title', $teacher->teacher_name)

@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Profile</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Profile
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                <div class="pd-20 card-box height-100-p">
                    <div class="profile-photo">

                        <img style="height: 150px; width:300px;" src="{{ $teacher->image }}"
                            alt="{{ $teacher->teacher_name }}" class="avatar-photo" />

                    </div>
                    <h5 class="text-center h5 mb-0">{{ $teacher->teacher_name }}</h5>
                    <div class="d-flex ml-3 ">

                        <h5 class="h5 mb-0">
                            Post :</h5>
                        <p class="text-center text-muted font-14 ml-3">
                            {{ $teacher->post }}
                        </p>

                    </div>
                    <div class="d-flex ml-3 ">

                        <h5 class="h5 mb-0">
                            Department :</h5>
                        <p class="text-center text-muted font-14 ml-3">
                            {{ $teacher->department->label() }}
                        </p>

                    </div>
                    <div class="profile-info">
                        <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                        <ul>
                            <li>
                                <span>Email Address:</span>
                                {{ $teacher->email }}
                            </li>
                            <li>
                                <span>Qualification:</span>
                                {{ $teacher->qualification }}
                            </li>
                            <li>
                                <span>Experience:</span>
                                {{ $teacher->experience }} years
                            </li>
                            <li>
                                <span>Phone Number:</span>
                                {{ $teacher->phone_number }}
                            </li>

                            <li>
                                <span>Address:</span>
                                {{ $teacher->address }}
                            </li>
                        </ul>
                    </div>
                    <div class="profile-social">
                        <h5 class="mb-20 h5 text-blue">Social Links</h5>
                        <ul class="clearfix">
                            <li>
                                <a href="{{ $teacher->facebook_url }}" class="btn" data-bgcolor="#3b5998"
                                    data-color="#ffffff"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"><i
                                        class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn" data-bgcolor="#007bb5" data-color="#ffffff"><i
                                        class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="{{ $teacher->instagram_url }}" class="btn" data-bgcolor="#f46f30"
                                    data-color="#ffffff"><i class="fa fa-instagram"></i></a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                <div class="card-box height-100-p overflow-hidden">
                    <div class="profile-tab height-100-p">
                        <div class="tab height-100-p">
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Teaching
                                        Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tasks" role="tab">Teacher
                                        Rating</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <!-- Timeline Tab start -->
                                <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                                    <div class="pd-20">
                                        <div class="profile-timeline">
                                            <div class="timeline-month">
                                                {!! $teacher->description !!}
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tasks" role="tabpanel">
                                    <div class="pd-20 profile-task-wrap">
                                        <div class="container pd-0">

                                            <div class="task-title row align-items-center">
                                                <div class="col-md-8 col-sm-12">
                                                    <h5>Your Rating</h5>
                                                </div>

                                            </div>
                                            <div class="profile-task-list pb-30">
                                                <ul>

                                                    <li>
                                                        <p>Rate Teaching Skill</p>
                                                        <div id="star-rating" class="d-flex align-items-center">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <svg data-rating="{{ $i }}"
                                                                    class="teachingSkillStar me-1" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                                    viewBox="0 0 22 20"
                                                                    style="width: 1.5rem; height: 1.5rem; cursor: pointer; color: {{ $i <= ($rating ?? 0) ? 'yellow' : '#0d6efd' }};">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                            @endfor
                                                            <form id="rating-teaching-skill-form" method="POST"
                                                                action="{{ route('student.teacher.rateTeachingSkill', $teacher->id) }}"
                                                                style="display: none;">
                                                                @csrf
                                                                <input type="hidden" name="teaching_skill"
                                                                    id="rating-teaching-skill-value">
                                                            </form>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <p>Rate Communication Skill</p>
                                                        <div id="star-rating" class="d-flex align-items-center">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <svg data-rating="{{ $i }}"
                                                                    class="communicationSkillStar me-1" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                                    viewBox="0 0 22 20"
                                                                    style="width: 1.5rem; height: 1.5rem; cursor: pointer; color: {{ $i <= ($rating ?? 0) ? 'yellow' : '#0d6efd' }};">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                            @endfor
                                                            <form id="rating-communication-skill-form" method="POST"
                                                                action="{{ route('student.teacher.rateCommunicationSkill', $teacher->id) }}"
                                                                style="display: none;">
                                                                @csrf
                                                                <input type="hidden" name="communication_skill"
                                                                    id="rating-communication-skill-value">
                                                            </form>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <p>Rate Subject Knowledge</p>
                                                        <div id="star-rating" class="d-flex align-items-center">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <svg data-rating="{{ $i }}"
                                                                    class="subjectKnowledgeStar me-1" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                                    viewBox="0 0 22 20"
                                                                    style="width: 1.5rem; height: 1.5rem; cursor: pointer; color: {{ $i <= ($rating ?? 0) ? 'yellow' : '#0d6efd' }};">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                            @endfor
                                                            <form id="rating-subject-knowledge-form" method="POST"
                                                                action="{{ route('student.teacher.rateSubjectKnowledge', $teacher->id) }}"
                                                                style="display: none;">
                                                                @csrf
                                                                <input type="hidden" name="subject_knowledge"
                                                                    id="rating-subject-knowledge-value">
                                                            </form>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <p>Rate Classroom Performance</p>
                                                        <div id="star-rating" class="d-flex align-items-center">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <svg data-rating="{{ $i }}"
                                                                    class="classPerformanceStar me-1" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                                    viewBox="0 0 22 20"
                                                                    style="width: 1.5rem; height: 1.5rem; cursor: pointer; color: {{ $i <= ($rating ?? 0) ? 'yellow' : '#0d6efd' }};">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                            @endfor
                                                            <form id="rating-class-performance-form" method="POST"
                                                                action="{{ route('student.teacher.rateClassPerformance', $teacher->id) }}"
                                                                style="display: none;">
                                                                @csrf
                                                                <input type="hidden" name="class_performance"
                                                                    id="rating-class-performance-value">
                                                            </form>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <p>Rate Interactive Teaching</p>
                                                        <div id="star-rating" class="d-flex align-items-center">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <svg data-rating="{{ $i }}"
                                                                    class="interactiveTeachingStar me-1"
                                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 22 20"
                                                                    style="width: 1.5rem; height: 1.5rem; cursor: pointer; color: {{ $i <= ($rating ?? 0) ? 'yellow' : '#0d6efd' }};">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                            @endfor
                                                            <form id="rating-interactive-teaching-form" method="POST"
                                                                action="{{ route('student.teacher.rateInteractiveTeaching', $teacher->id) }}"
                                                                style="display: none;">
                                                                @csrf
                                                                <input type="hidden" name="interactive_teaching"
                                                                    id="rating-interactive-teaching-value">
                                                            </form>
                                                        </div>
                                                    </li>


                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const skillRatings = [{
                    stars: document.querySelectorAll('.star'),
                    form: document.getElementById('rating-form'),
                    input: document.getElementById('rating-value'),
                    currentRating: {{ $rating ?? 0 }}
                },
                {
                    stars: document.querySelectorAll('.teachingSkillStar'),
                    form: document.getElementById('rating-teaching-skill-form'),
                    input: document.getElementById('rating-teaching-skill-value'),
                    currentRating: {{ $teacherSkillRating ?? 0 }}
                },
                {
                    stars: document.querySelectorAll('.communicationSkillStar'),
                    form: document.getElementById('rating-communication-skill-form'),
                    input: document.getElementById('rating-communication-skill-value'),
                    currentRating: {{ $communicationSkillRating ?? 0 }}
                },
                {
                    stars: document.querySelectorAll('.subjectKnowledgeStar'),
                    form: document.getElementById('rating-subject-knowledge-form'),
                    input: document.getElementById('rating-subject-knowledge-value'),
                    currentRating: {{ $subjectKnowledgeRating ?? 0 }}
                },
                {
                    stars: document.querySelectorAll('.classPerformanceStar'),
                    form: document.getElementById('rating-class-performance-form'),
                    input: document.getElementById('rating-class-performance-value'),
                    currentRating: {{ $classPerformaceRating ?? 0 }}
                },
                {
                    stars: document.querySelectorAll('.interactiveTeachingStar'),
                    form: document.getElementById('rating-interactive-teaching-form'),
                    input: document.getElementById('rating-interactive-teaching-value'),
                    currentRating: {{ $interactiveTeachingRating ?? 0 }}
                }
            ];

            function handleStars(skill) {
                const {
                    stars,
                    form,
                    input,
                    currentRating
                } = skill;
                let activeRating = currentRating;

                function highlightStars(rating) {
                    stars.forEach((star, index) => {
                        star.style.color = index < rating ? 'yellow' : '#0d6efd';
                    });
                }

                stars.forEach((star, index) => {
                    star.addEventListener('mouseover', () => highlightStars(index + 1));
                    star.addEventListener('mouseout', () => highlightStars(activeRating));
                    star.addEventListener('click', () => {
                        activeRating = index + 1;
                        input.value = activeRating;
                        form.submit();
                    });
                });

                // Initialize the current rating
                highlightStars(currentRating);
            }

            // Apply the logic to all skill ratings
            skillRatings.forEach(skill => handleStars(skill));
        });
    </script>

@endsection
