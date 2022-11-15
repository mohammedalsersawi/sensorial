@extends('sensorial.pages.parent')

@section('title', 'about_course')

@section('styles')
    <link rel="stylesheet" href="/requirement/pages/css/bootstrap.min.css">
    <link rel="stylesheet" href="/requirement/pages/css/all.min.css">
    <link rel="stylesheet" href="/requirement/pages/css/New-8.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endsection

@section('content')
    <!-- section 1 -->
    <section class="section-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mt-5">
                    <div class="box-1">
                        <p class="p-8" lng-tag="Course Full Name">Course Full Name</p>

                        <div class="accordion">
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    <div class="content-acc">
                                        <p class="p-101 fw-bold" lng-tag="Course material">Course material </p>
                                    </div>
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <div class="body-content">
                                            <input type="checkbox" name="" id="">
                                            <p class="mb-0 ms-1" lng-tag="Week1">Week1</p>
                                        </div>
                                        <div class="body-content">
                                            <input type="checkbox" name="" id="">
                                            <p class="mb-0 ms-1" lng-tag="Week2">Week2</p>
                                        </div>
                                        <div class="body-content">
                                            <input type="checkbox" name="" id="">
                                            <p class="mb-0 ms-1" lng-tag="Week3">Week3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/sensorial/My_Profile/grade" class="a-2">
                            <p class="p-9 mt-3" lng-tag="Grade">Grade</p>
                        </a>
                        <a href="#" class="a-2">
                            <p class="p-10" lng-tag="Course info">Course info</p>
                        </a>
                    </div>


                </div>
                <div class="col-lg-9 mt-4">
                    <div class="box-2 mt-4">
                        <h6 class="h6-1 fw-bold mb-4" lng-tag="About the course">About the course</h6>
                        <p class="p-20" lng-tag="Intellectual">Intellectual Property in Augmented Reality Applications
                            In much the same way that virtual content has questions surrounding it in all media,
                            augmented reality shares those same dilemmas and problems. If you purchase a book and have
                            it on your bookshelf at home, you would be quite upset if the publisher came and removed
                            that book from your bookshelf. However, if that content was available on a website and the
                            publisher removed or altered the information, it feels much less invasive. Likewise, if one
                            procures an augmented reality application, does the model for the content follow the model
                            of a physical book or is it more like material available on a website?</p>

                        <ul class="list-unstyled mt-5">
                            <div class="basic">
                                <li class="li-1" lng-tag="Basic info">Basic info</li>
                                <p class="p-21" lng-tag="Course 1 of 4 in the ux Specialization">Course 1 of 4 in the ux
                                    Specialization</p>
                            </div>
                            <div class="basic">
                                <li class="li-1" lng-tag="Level">Level</li>
                                <p class="p-21" lng-tag="Beginner">Beginner </p>
                            </div>
                            <div class="basic">
                                <li class="li-1" lng-tag="Language">Language </li>
                                <p class="p-21" lng-tag="Arabic">Arabic</p>
                            </div>
                            <div class="basic">
                                <li class="li-1" lng-tag="How to pass">How to pass</li>
                                <p class="p-21" lng-tag="Pass all graded assignments to complete the course.">Pass all
                                    graded assignments to complete the course.</p>
                            </div>
                        </ul>

                        <h1 lng-tag="FAQ">FAQ</h1>

                        <div class="accordion">
                            <div class="accordion-item">
                                <div class="accordion-item-header" lng-tag="What is Web Development?">
                                    What is Web Development?
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content" lng-tag="Web Development">
                                        Web Development broadly refers to the tasks associated with developing
                                        functional websites and
                                        applications for the Internet. The web development process includes web design,
                                        web content
                                        development, client-side/server-side scripting and network security
                                        configuration, among other
                                        tasks.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    What is HTML?
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        HTML, aka HyperText Markup Language, is the dominant markup language for
                                        creating websites and
                                        anything that can be viewed in a web browser.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    What are some basic technical skills of a Front-End developer?
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <ul style="padding-left: 1rem;">
                                            <li>HTML, CSS, JavaScript</li>
                                            <li>Frameworks (CSS and JavaScript frameworks)</li>
                                            <li>Responsive Design</li>
                                            <li>Version Control/Git</li>
                                            <li>Testing/Debugging</li>
                                            <li>Browser Developer Tools</li>
                                            <li>Web Performance</li>
                                            <li>SEO (Search Engine Optimization)</li>
                                            <!-- <li>CSS Preprocessing</li> -->
                                            <li>Command Line</li>
                                            <li>CMS (Content Management System)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    What is HTTP?
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        HTTP, aka HyperText Transfer Protocol, is the underlying protocol used by the
                                        World Wide Web and
                                        this protocol defines how messages are formatted and transmitted, and what
                                        actions Web servers and
                                        browsers should take in response to various commands.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    What is CORS?
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        CORS, aka Cross-Origin Resource Sharing, is a mechanism that enables many
                                        resources (e.g. images,
                                        stylesheets, scripts, fonts) on a web page to be requested from another domain
                                        outside the domain
                                        from which the resource originated.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- section 1 -->
@endsection

@section('scripts')
    <script src="/requirement/pages/js/bootstrap.bundle.min.js"></script>
    <script src="/requirement/pages/js/all.min.js"></script>
    <script src="/requirement/pages/js/Script-2.js"></script>
    <script src="/requirement/pages/js/index.js"></script>
    <script src="/requirement/pages/js/translate.js"></script>
    <script src="/requirement/pages/js/Script-4.js"></script>
@endsection
