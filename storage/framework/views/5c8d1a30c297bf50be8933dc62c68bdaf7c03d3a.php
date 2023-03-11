<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="<?php echo e(asset('css/main/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("css/main/app-dark.css")); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset("images/logo/favicon.svg")); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset("images/logo/favicon.png")); ?>" type="image/png">

    <link rel="stylesheet" href="<?php echo e(asset('css/shared/iconly.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('extensions/simple-datatables/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/pages/simple-datatables.css')); ?>">
</head>

<body>
<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header position-relative">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="index.html"><img src="<?php echo e(asset('images/logo/logo.svg')); ?>" alt="Logo" srcset=""></a>
                    </div>
                    <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                        <div class="form-check form-switch fs-6">
                            <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                            <label class="form-check-label" ></label>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
                    </div>
                    <div class="sidebar-toggler  x">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li
                        class="sidebar-item active ">
                        <a href="<?php echo e(route("dashboard")); ?>" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>


                    <li
                        class="sidebar-item  ">
                        <a href="<?php echo e(route("users.index")); ?>" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Users</span>
                        </a>
                    </li>

                    

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Learn</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    
                                    <span>English</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('english.noun')); ?>">Noun</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('english.pronoun')); ?>">Pronoun</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('learn.english.verb')); ?>">Verb</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('learn.english.adverb')); ?>">Adverb</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="submenu-item sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    
                                    <span>Literature</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('learn.english.oldperiod')); ?>">The Old English Period</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('learn.english.middleperiod')); ?>">The Middle English Period</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('learn.english.romanticperiod')); ?>">The Romantice Period</a>
                                    </li>
                                </ul>    
                            </li>
                                
                            <li class="submenu-item sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <span>বাংলা ব্যাকরণ</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('learn.bangla.languagegrammer')); ?>">ভাষা ও ব্যাকরণ</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('learn.bangla.dhoniborno')); ?>">ধ্বনি, বর্ণ ও যুক্তবর্ণ</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="">ণ-ত্ব বিধান ও ষ-ত্ব বিধান</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="">সন্ধি</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="submenu-item sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <span>বাংলা সাহিত্য</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('bangla.prachinzug')); ?>">প্রাচীন যুগ</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('bangla.moddozug')); ?>">মধ্য যুগ</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('bangla.adhunikzug')); ?>">আধুনিক যুগ</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="submenu-item sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <span>পাটিগণিত</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('math.realnumber')); ?>">বাস্তব সংখ্যা</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('math.square')); ?>">বর্গমূল ও পূর্ণসংখ্যা</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('math.lcmgcm')); ?>">লসাগু ও গসাগু</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('math.average')); ?>">গড়</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('math.fraction')); ?>">ভগ্নাংশ</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="submenu-item sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <span>বীজগণিত</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('math.algebra1')); ?>">বীজগাণিতিক রাশি</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('math.algebra2')); ?>">বীজগানিতিক সূত্রাবলী</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('math.algebra3')); ?>">উৎপাদকে বিশ্লেষণ</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="submenu-item sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <span>আন্তর্জাতিক বিষয়াবলী</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('interaff.worldintro')); ?>">বিশ্ব পরিচিতি</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('interaff.asia')); ?>">এশিয়া</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('interaff.europe')); ?>">ইউরোপ</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('interaff.africa')); ?>">আফ্রিকা</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('interaff.australia')); ?>">অস্ট্রেলিয়া</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="submenu-item sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <span>বাংলাদেশ বিষয়াবলী</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('bangladeshaff.britishperiod')); ?>">ব্রিটিশ আমল</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('bangladeshaff.pakiperiod')); ?>">পাকিস্তান আমল</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('bangladeshaff.liberationwar')); ?>">মুক্তিযুদ্ধ</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="submenu-item sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <span>ভূগোল ও পরিবেশ</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item">
                                        <a href="">ভূগোল ও মহাবিশ্ব</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="">মানচিত্র</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="">পৃথিবীর গঠন</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="">বাংলাদেশ </a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="">আন্তর্জাতিক ভূগোল</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="submenu-item sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <span>কম্পিউটার ও তথ্য প্রযুক্তি</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item">
                                        <a href="">কম্পিউটারের ইতিহাস</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="">কম্পিউটারের অঙ্গ সংগঠন</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="">পেরিফেরাল</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="submenu-item sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <span>মানসিক দক্ষতা</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item">
                                        <a href="">ভাষাগত যৌক্তিক বিচার</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="">সমস্যা সমাধান </a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="">বানান ও ভাষা </a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="">যান্ত্রিক দক্ষতা</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="submenu-item sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <span>নৈতিকতা, মূল্যবোধ ও সুশাসন</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item">
                                        <a href="">সুশাসন</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="">মূল্যবোধ</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="">নৈতিকতা</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Bank</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="">English</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="">Math</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="">Bangla</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="">Computer</a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Question Bank</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="">QB 1</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="">QB 2</a>
                            </li>

                        </ul>
                    </li>

                    <li
                        class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Vocabulary</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="">English</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="">Bangla</a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Current Affairs</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="<?php echo e(route("courses.index")); ?>">Recent</a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>News Paper</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="https://www.prothomalo.com/" target="_blank">Prothom Alo</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="https://www.ittefaq.com.bd/" target="_blank">Ittefaq</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="https://www.jugantor.com/" target="_blank">Jugantor</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="https://www.thedailystar.net/" target="_blank">The Daily Star</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="https://thefinancialexpress.com.bd/" target="_blank">The Financial Express</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="https://bonikbarta.net/" target="_blank">Bonik Barta</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="https://thedailycampus.com/" target="_blank">The Daily Campus</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>E-Book</span>
                        </a>
                        <ul class="submenu ">
                                                            
                            <li class="submenu-item sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-hexagon-fill"></i>
                                    <span>Bangla</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item">
                                        <a href="">1st Paper</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="">2nd Paper</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="submenu-item sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-hexagon-fill"></i>
                                    <span>Math</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item">
                                        <a href="">Percant</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="">Interest Rate</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="">Algebra</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="submenu-item sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-hexagon-fill"></i>
                                    <span>Literature</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item">
                                        <a href="">Bangla</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="">English</a>
                                    </li>
                                </ul>
                            </li>
                                
                            </li>

                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-hexagon-fill"></i>
                                    <span>International</span>
                                </a>

                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-hexagon-fill"></i>
                                    <span>Bangladesh</span>
                                </a>

                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-hexagon-fill"></i>
                                    <span>Geography</span>
                                </a>

                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-hexagon-fill"></i>
                                    <span>Computer</span>
                                </a>

                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-hexagon-fill"></i>
                                    <span>Mental Ability</span>
                                </a>

                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-hexagon-fill"></i>
                                    <span>Ethics</span>
                                </a>

                            </li>
                        </ul>
                    </li>

                    <li
                        class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Subjective Exam</span>
                        </a>
                        <ul class="submenu ">

                            <li class="submenu-item ">
                                <a href="<?php echo e(route("mcq.subjects")); ?>">MCQ Subject</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?php echo e(route("mcq.topics")); ?>">MCQ Topic</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?php echo e(route("mcq.store")); ?>">Add MCQ</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?php echo e(route("mcq.index")); ?>">All MCQ</a>
                            </li>

                        </ul>
                    </li>

                    <li
                        class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Quize</span>
                        </a>
                        <ul class="submenu ">

                            <li class="submenu-item ">
                                <a href="<?php echo e(route("quiz.subjects")); ?>">Quize Subject</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?php echo e(route("quiz.topics")); ?>">Quize Topic</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?php echo e(route("quiz.store")); ?>">Add Quize</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?php echo e(route("quiz.index")); ?>">All Quize</a>
                            </li>

                        </ul>
                    </li>

                    <li
                        class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Model Test</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="<?php echo e(route("model_test.title")); ?>">Model Test Title</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?php echo e(route("model_test.subjects")); ?>">Model Test Subject</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?php echo e(route("model_test.topics")); ?>">Model Test Topic</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?php echo e(route("model_test.store")); ?>">Add Model Test</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?php echo e(route("model_test.index")); ?>">All Questions</a>
                            </li>

                        </ul>
                    </li>
                    
                    

                    <li
                        class="sidebar-item  ">
                        <a href="<?php echo e(route("notification.index")); ?>" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Notification</span>
                        </a>
                    </li>


                    <li
                        class="sidebar-item  ">
                        <a href="<?php echo e(route("users.logout")); ?>" class='sidebar-link'>
                            <i class="bi bi-cash"></i>
                            <span>Logout</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3><?php echo $__env->yieldContent("title"); ?></h3>
        </div>
        <div class="page-content">
       <?php echo $__env->yieldContent("body"); ?>
        </div>


    </div>
</div>
<script src="<?php echo e(asset("js/bootstrap.js")); ?>"></script>
<script src="<?php echo e(asset("js/app.js")); ?>"></script>

<!-- Need: Apexcharts -->
<script src="<?php echo e(asset("extensions/apexcharts/apexcharts.min.js")); ?>"></script>
<script src="<?php echo e(asset("js/pages/dashboard.js")); ?>"></script>

<script src="<?php echo e(asset("extensions/simple-datatables/umd/simple-datatables.js")); ?>"></script>
<script src="<?php echo e(asset("js/pages/simple-datatables.js")); ?>"></script>
<script src="<?php echo e(asset("extensions/chart.js/Chart.min.js")); ?>"></script>
<script src="<?php echo e(asset("js/pages/ui-chartjs.js")); ?>"></script>
<?php echo $__env->yieldContent("js"); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\office\quizeApp\resources\views/template.blade.php ENDPATH**/ ?>