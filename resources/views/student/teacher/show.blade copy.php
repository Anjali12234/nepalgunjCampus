@extends('student.layouts.master')
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
                    <p class="text-center text-muted font-14">
                        {{ $teacher->faculty_name }}
                    </p>
                    <div class="profile-info">
                        <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                        <ul>
                            <li>
                                <span>Email Address:</span>
                                FerdinandMChilds@test.com
                            </li>
                            <li>
                                <span>Phone Number:</span>
                                619-229-0054
                            </li>
                            <li>
                                <span>Country:</span>
                                America
                            </li>
                            <li>
                                <span>Address:</span>
                                1807 Holden Street<br />
                                San Diego, CA 92115
                            </li>
                        </ul>
                    </div>
                    <div class="profile-social">
                        <h5 class="mb-20 h5 text-blue">Social Links</h5>
                        <ul class="clearfix">
                            <li>
                                <a href="#" class="btn" data-bgcolor="#3b5998" data-color="#ffffff"><i
                                        class="fa fa-facebook"></i></a>
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
                                <a href="#" class="btn" data-bgcolor="#f46f30" data-color="#ffffff"><i
                                        class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn" data-bgcolor="#c32361" data-color="#ffffff"><i
                                        class="fa fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn" data-bgcolor="#3d464d" data-color="#ffffff"><i
                                        class="fa fa-dropbox"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn" data-bgcolor="#db4437" data-color="#ffffff"><i
                                        class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn" data-bgcolor="#bd081c" data-color="#ffffff"><i
                                        class="fa fa-pinterest-p"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn" data-bgcolor="#00aff0" data-color="#ffffff"><i
                                        class="fa fa-skype"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn" data-bgcolor="#00b489" data-color="#ffffff"><i
                                        class="fa fa-vine"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="profile-skills">
                        <h5 class="mb-20 h5 text-blue">Key Skills</h5>
                        <h6 class="mb-5 font-14">HTML</h6>
                        <div class="progress mb-20" style="height: 6px">
                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6 class="mb-5 font-14">Css</h6>
                        <div class="progress mb-20" style="height: 6px">
                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6 class="mb-5 font-14">jQuery</h6>
                        <div class="progress mb-20" style="height: 6px">
                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6 class="mb-5 font-14">Bootstrap</h6>
                        <div class="progress mb-20" style="height: 6px">
                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                <div class="card-box height-100-p overflow-hidden">
                    <div class="profile-tab height-100-p">
                        <div class="tab height-100-p">
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#timeline"
                                        role="tab">Teaching Description</a>
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
                                                        <p>Rate</p>
                                                        <div id="star-rating" class="d-flex align-items-center">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <svg data-rating="{{ $i }}" class="star me-1"
                                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 22 20"
                                                                    style="width: 1.5rem; height: 1.5rem; cursor: pointer; color: {{ $i <= ($rating ?? 0) ? 'yellow' : '#0d6efd' }};">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                            @endfor
                                                            <form id="rating-form" method="POST"
                                                                action="{{ route('student.teacher.rate', $teacher->id) }}"
                                                                style="display: none;">
                                                                @csrf
                                                                <input type="hidden" name="rating" id="rating-value">
                                                            </form>
                                                        </div>
                                                    </li>
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
            const stars = document.querySelectorAll('.star');
            const teachingSkillStars = document.querySelectorAll('.teachingSkillStar');
            const communicationSkillStars = document.querySelectorAll('.communicationSkillStar');
            const subjectKnowledgeStars = document.querySelectorAll('.subjectKnowledgeStar');
            const classPerformanceStars = document.querySelectorAll('.classPerformanceStar');
            const interactiveTeachingStars = document.querySelectorAll('.interactiveTeachingStar');

            const ratingForm = document.getElementById('rating-form');
            const ratingTeachingSkillForm = document.getElementById('rating-teaching-skill-form');
            const ratingCommunicationSkillForm = document.getElementById('rating-communication-skill-form');
            const ratingSubjectKnowledgeForm = document.getElementById('rating-subject-knowledge-form');
            const ratingClassPerformanceForm = document.getElementById('rating-class-performance-form');
            const ratingInteractiveTeachingForm = document.getElementById('rating-interactive-teaching-form');

            const ratingValue = document.getElementById('rating-value');
            const ratingTeachingSkillValue = document.getElementById('rating-teaching-skill-value');
            const ratingCommunicationSkillValue = document.getElementById('rating-communication-skill-value');
            const ratingSubjectKnowledgeValue = document.getElementById('rating-subject-knowledge-value');
            const ratingClassPerformanceValue = document.getElementById('rating-class-performance-value');
            const ratingInteractiveTeachingValue = document.getElementById('rating-interactive-teaching-value');

            let currentRating = {{ $rating ?? 0 }}; // Set current rating from the backend
            let currentTeachingSkillRating = {{ $teacherSkillRating ?? 0 }}; // Set current rating from the backend
            let currentCommunicationSkillRating =
            {{ $communicationSkillRating ?? 0 }}; // Set current rating from the backend
            let currentSubjectKnowledgeRating =
            {{ $subjectKnowledgeRating ?? 0 }}; // Set current rating from the backend
            let currentClassPerformaceRating =
            {{ $classPerformaceRating ?? 0 }}; // Set current rating from the backend
            let currentInteractiveTeachingRating =
            {{ $interactiveTeachingRating ?? 0 }}; // Set current rating from the backend

            stars.forEach((star, index) => {
                star.addEventListener('mouseover', () => {
                    highlightStars(index + 1);
                });

                star.addEventListener('mouseout', () => {
                    highlightStars(currentRating);
                });

                star.addEventListener('click', () => {
                    currentRating = index + 1;
                    ratingValue.value = currentRating;
                    ratingForm.submit();
                });
            });

            function highlightStars(rating) {
                stars.forEach((star, index) => {
                    star.style.color = index < rating ? 'yellow' : '#0d6efd';
                });
            }

            // Highlight stars based on the current rating on page load
            highlightStars(currentRating);

            teachingSkillStars.forEach((teachingSkillStar, index) => {
                teachingSkillStar.addEventListener('mouseover', () => {
                    highlightteachingSkillStars(index + 1);
                });

                teachingSkillStar.addEventListener('mouseout', () => {
                    highlightteachingSkillStars(currentTeachingSkillRating);
                });

                teachingSkillStar.addEventListener('click', () => {
                    currentTeachingSkillRating = index + 1;
                    ratingTeachingSkillValue.value = currentTeachingSkillRating;
                    ratingTeachingSkillForm.submit();
                });
            });

            function highlightteachingSkillStars(teaching_skill) {
                teachingSkillStars.forEach((teachingSkillStar, index) => {
                    teachingSkillStar.style.color = index < teaching_skill ? 'yellow' : '#0d6efd';
                });
            }

            // Highlight stars based on the current rating on page load
            highlightteachingSkillStars(currentTeachingSkillRating);


            communicationSkillStars.forEach((communicationSkillStar, index) => {
                communicationSkillStar.addEventListener('mouseover', () => {
                    highlightCommunicationSkillStars(index + 1);
                });

                communicationSkillStar.addEventListener('mouseout', () => {
                    highlightCommunicationSkillStars(currentCommunicationSkillRating);
                });

                communicationSkillStar.addEventListener('click', () => {
                    currentCommunicationSkillRating = index + 1;
                    ratingCommunicationSkillValue.value = currentCommunicationSkillRating;
                    ratingCommunicationSkillForm.submit();
                });
            });

            function highlightCommunicationSkillStars(communication_skill) {
                communicationSkillStars.forEach((communicationSkillStar, index) => {
                    communicationSkillStar.style.color = index < communication_skill ? 'yellow' : '#0d6efd';
                });
            }

            // Highlight stars based on the current rating on page load
            highlightcommunicationSkillStars(currentCommunicationSkillRating);


            subjectKnowledgeStars.forEach((subjectKnowledgeStar, index) => {
                subjectKnowledgeStar.addEventListener('mouseover', () => {
                    highlightSubjectKnowledgeStars(index + 1);
                });

                subjectKnowledgeStar.addEventListener('mouseout', () => {
                    highlightSubjectKnowledgeStars(currentSubjectKnowledgeRating);
                });

                subjectKnowledgeStar.addEventListener('click', () => {
                    currentSubjectKnowledgeRating = index + 1;
                    ratingSubjectKnowledgeValue.value = currentSubjectKnowledgeRating;
                    ratingSubjectKnowledgeForm.submit();
                });
            });

            function highlightSubjectKnowledgeStars(subject_knowledge) {
                subjectKnowledgeStars.forEach((subjectKnowledgeStar, index) => {
                    subjectKnowledgeStar.style.color = index < subject_knowledge ? 'yellow' : '#0d6efd';
                });
            }

            // Highlight stars based on the current rating on page load
            highlightsubjectKnowledgeStars(currentSubjectKnowledgeRating);


            classPerformanceStars.forEach((classPerformanceStar, index) => {
                classPerformanceStar.addEventListener('mouseover', () => {
                    highlightClassPerformanceStars(index + 1);
                });

                classPerformanceStar.addEventListener('mouseout', () => {
                    highlightClassPerformanceStars(currentClassPerformaceRating);
                });

                classPerformanceStar.addEventListener('click', () => {
                    currentClassPerformaceRating = index + 1;
                    ratingClassPerformanceValue.value = currentClassPerformaceRating;
                    ratingClassPerformanceForm.submit();
                });
            });

            function highlightClassPerformanceStars(class_performance) {
                classPerformanceStars.forEach((classPerformanceStar, index) => {
                    classPerformanceStar.style.color = index < class_performance ? 'yellow' : '#0d6efd';
                });
            }

            // Highlight stars based on the current rating on page load
            highlightClassPerformanceStars(currentClassPerformaceRating);


            interactiveTeachingStars.forEach((interactiveTeachingStar, index) => {
                interactiveTeachingStar.addEventListener('mouseover', () => {
                    highlightInteractiveTeachingStars(index + 1);
                });

                interactiveTeachingStar.addEventListener('mouseout', () => {
                    highlightInteractiveTeachingStars(currentInteractiveTeachingRating);
                });

                interactiveTeachingStar.addEventListener('click', () => {
                    currentInteractiveTeachingRating = index + 1;
                    ratingInteractiveTeachingValue.value = currentInteractiveTeachingRating;
                    ratingInteractiveTeachingForm.submit();
                });
            });

            function highlightInteractiveTeachingStars(interactive_teaching) {
                interactiveTeachingStars.forEach((interactiveTeachingStar, index) => {
                    interactiveTeachingStar.style.color = index < interactive_teaching ? 'yellow' :
                        '#0d6efd';
                });
            }

            // Highlight stars based on the current rating on page load
            highlightInteractiveTeachingStars(currentInteractiveTeachingRating);


        });
    </script>
@endsection
