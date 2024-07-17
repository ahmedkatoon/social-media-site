<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="icon" type="image/png">

    <!-- title and description-->
    <title>Socialite</title>
    <meta name="description" content="Socialite - Social sharing network HTML Template">

    <!-- css files -->
    <link rel="stylesheet" href="assets/css/tailwind.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- header -->

        @include('profile.partials.header')

        <!-- sidebar -->

        @include('profile.partials.sidebar')

        <!-- main contents -->
        <main id="site__main"
            class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

            <!-- timeline -->
            <div class="lg:flex 2xl:gap-16 gap-12 max-w-[1065px] mx-auto" id="js-oversized">

                <div class="max-w-[680px] mx-auto">

                    <!-- stories -->
                    <div class="mb-8">

                        <h3 class="font-extrabold text-2xl  text-black dark:text-white hidden"> Stories</h3>

                        <div class="relative" tabindex="-1" uk-slider="auto play: true;finite: true" uk-lightbox="">

                            <div class="py-5 uk-slider-container">

                                <ul class="uk-slider-items w-[calc(100%+14px)]"
                                    uk-scrollspy="target: > li; cls: uk-animation-scale-up; delay: 20;repeat:true">
                                    <li class="md:pr-3" uk-scrollspy-class="uk-animation-fade">
                                        <div class="md:w-16 md:h-16 w-12 h-12 rounded-full relative border-2 border-dashed grid place-items-center bg-slate-200 border-slate-300 dark:border-slate-700 dark:bg-dark2 shrink-0"
                                            uk-toggle="target: #create-story">
                                            <ion-icon name="camera" class="text-2xl"></ion-icon>
                                        </div>
                                    </li>
                                    @foreach ($stories as $story )

                                    <li class="md:pr-3 pr-2 hover:scale-[1.15] hover:-rotate-2 duration-300">
                                        <a href="{{asset("storage/$story->image")}}" data-caption="{{$story->description}}">
                                            <div
                                                class="md:w-16 md:h-16 w-12 h-12 relative md:border-4 border-2 shadow border-white rounded-full overflow-hidden dark:border-slate-700">
                                                <img src="{{asset("storage/$story->image")}}" alt=""
                                                    class="absolute w-full h-full object-cover">
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach

                                </ul>

                            </div>

                            <div class="max-md:hidden">

                                <button type="button"
                                    class="absolute -translate-y-1/2 bg-white shadow rounded-full top-1/2 -left-3.5 grid w-8 h-8 place-items-center dark:bg-dark3"
                                    uk-slider-item="previous"> <ion-icon name="chevron-back"
                                        class="text-2xl"></ion-icon></button>
                                <button type="button"
                                    class="absolute -right-2 -translate-y-1/2 bg-white shadow rounded-full top-1/2 grid w-8 h-8 place-items-center dark:bg-dark3"
                                    uk-slider-item="next"> <ion-icon name="chevron-forward"
                                        class="text-2xl"></ion-icon> </button>

                            </div>


                        </div>

                    </div>

                    <!-- feed story -->
                    <div class="md:max-w-[580px] mx-auto flex-1 xl:space-y-6 space-y-3">

                        <!-- add story -->
                        <div
                            class="bg-white rounded-xl shadow-sm md:p-4 p-2 space-y-4 text-sm font-medium border1 dark:bg-dark2">

                            <div class="flex items-center md:gap-3 gap-1">
                                <div class="flex-1 bg-slate-100 hover:bg-opacity-80 transition-all rounded-lg cursor-pointer dark:bg-dark3"
                                    uk-toggle="target: #create-status">
                                    <div class="py-2.5 text-center dark:text-white"> What do you have in mind? </div>
                                </div>
                                {{-- <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-xl transition-all bg-pink-100/60 hover:bg-pink-100 dark:bg-white/10 dark:hover:bg-white/20"
                                    uk-toggle="target: #create-status">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-8 h-8 stroke-pink-600 fill-pink-200/70" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M15 8h.01" />
                                        <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                                        <path d="M3.5 15.5l4.5 -4.5c.928 -.893 2.072 -.893 3 0l5 5" />
                                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l2.5 2.5" />
                                    </svg>
                                </div> --}}
                                {{-- <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-xl transition-all bg-sky-100/60 hover:bg-sky-100 dark:bg-white/10 dark:hover:bg-white/20"
                                    uk-toggle="target: #create-status">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-8 h-8 stroke-sky-600 fill-sky-200/70 " viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" />
                                        <path
                                            d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
                                    </svg>
                                </div> --}}
                            </div>

                        </div>



                        <!-- post text-->
                        @include('errors&success.success')
                        @include('errors&success.errors')
                        @if ($posts->isEmpty())
                            <p>No posts available.</p>
                        @else
                            @foreach ($posts as $post)
                                <div class="bg-white rounded-xl shadow-sm text-sm font-medium border1 dark:bg-dark2">

                                    <!-- post heading -->
                                    <div class="flex gap-3 sm:p-4 p-2.5 text-sm font-medium">
                                        <a href="timeline.html"> <img src="assets/images/avatars/avatar-5.jpg"
                                                alt="" class="w-9 h-9 rounded-full"> </a>
                                        <div class="flex-1">
                                            <a href="timeline">
                                                <h4 class="text-black dark:text-white"> {{ $post->user->first_name }}
                                                    {{ $post->user->last_name }} </h4>
                                            </a>
                                            <div class="text-xs text-gray-500 dark:text-white/80">
                                                Posted Since
                                                @if ($post->created_at->diffInHours(now()) < 24)
                                                    {{ $post->created_at->diffForHumans() }}
                                                @else
                                                    {{ $post->created_at->format('d M Y') }}
                                                @endif
                                            </div>
                                        </div>

                                        <div class="-mr-1">
                                            <button type="button" class="button__ico w-8 h-8" aria-haspopup="true"
                                                aria-expanded="false"> <ion-icon class="text-xl md hydrated"
                                                    name="ellipsis-horizontal" role="img"
                                                    aria-label="ellipsis horizontal"></ion-icon> </button>
                                            <div class="w-[245px] uk-dropdown"
                                                uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click">
                                                <nav>
                                                    <a href="#"> <ion-icon class="text-xl shrink-0 md hydrated"
                                                            name="bookmark-outline" role="img"
                                                            aria-label="bookmark outline"></ion-icon> Add to favorites
                                                    </a>
                                                    <a href="#"> <ion-icon class="text-xl shrink-0 md hydrated"
                                                            name="notifications-off-outline" role="img"
                                                            aria-label="notifications off outline"></ion-icon> Mute
                                                        Notification </a>
                                                    <a href="#"> <ion-icon class="text-xl shrink-0 md hydrated"
                                                            name="flag-outline" role="img"
                                                            aria-label="flag outline"></ion-icon> Report this post </a>
                                                    <a href="#"> <ion-icon class="text-xl shrink-0 md hydrated"
                                                            name="share-outline" role="img"
                                                            aria-label="share outline"></ion-icon> Share your profile
                                                    </a>
                                                    <hr>
                                                    <a href="#"
                                                        class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50">
                                                        <ion-icon class="text-xl shrink-0 md hydrated"
                                                            name="stop-circle-outline" role="img"
                                                            aria-label="stop circle outline"></ion-icon> Unfollow </a>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:px-4 p-2.5 pt-0">
                                        <p class="font-normal">{{ $post->description }} </p>
                                    </div>

                                    <!-- post image -->
                                    @if ($post->image == null)
                                    @else
                                        <div class="relative w-full lg:h-96 h-full sm:px-4">
                                            <img src="{{ asset("storage/$post->image") }}" alt=""
                                                class="sm:rounded-lg w-full h-full object-cover">
                                        </div>
                                    @endif

                                    <!-- post icons -->
                                    <div class="sm:p-4 p-2.5 flex items-center gap-4 text-xs font-semibold">
                                        <div>
                                            <div class="flex items-center gap-2.5">
                                                <button type="button"
                                                    class="button-icon text-red-500 bg-red-100 dark:bg-slate-700">
                                                    <ion-icon class="text-lg" name="heart"></ion-icon> </button>
                                                <a href="#">1,300</a>
                                            </div>
                                            <div class="p-1 px-2 bg-white rounded-full drop-shadow-md w-[212px] dark:bg-slate-700 text-2xl"
                                                uk-drop="offset:10;pos: top-left; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-bottom-left">

                                                <div class="flex gap-2"
                                                    uk-scrollspy="target: > button; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                                                    <button type="button"
                                                        class="text-red-600 hover:scale-125 duration-300">
                                                        <span> 👍 </span></button>
                                                    <button type="button"
                                                        class="text-red-600 hover:scale-125 duration-300">
                                                        <span> ❤️ </span></button>
                                                    <button type="button"
                                                        class="text-red-600 hover:scale-125 duration-300">
                                                        <span> 😂 </span></button>
                                                    <button type="button"
                                                        class="text-red-600 hover:scale-125 duration-300">
                                                        <span> 😯 </span></button>
                                                    <button type="button"
                                                        class="text-red-600 hover:scale-125 duration-300">
                                                        <span> 😢 </span></button>
                                                </div>

                                                <div
                                                    class="w-2.5 h-2.5 absolute -bottom-1 left-3 bg-white rotate-45 hidden">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <button type="button"
                                                class="button-icon bg-slate-200/70 dark:bg-slate-700">
                                                <ion-icon class="text-lg" name="chatbubble-ellipses"></ion-icon>
                                            </button>
                                            <span>260</span>
                                        </div>
                                        <button type="button" class="button-icon ml-auto"> <ion-icon class="text-xl"
                                                name="paper-plane-outline"></ion-icon> </button>
                                        <button type="button" class="button-icon"> <ion-icon class="text-xl"
                                                name="share-outline"></ion-icon> </button>
                                    </div>

                                    <!-- comments -->
                                    <div
                                        class="sm:p-4 p-2.5 border-t border-gray-100 font-normal space-y-3 relative dark:border-slate-700/40">

                                        <div class="flex items-start gap-3 relative">
                                            <a href="timeline.html"> <img src="assets/images/avatars/avatar-2.jpg"
                                                    alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                                            <div class="flex-1">
                                                <a href="timeline.html"
                                                    class="text-black font-medium inline-block dark:text-white"> Steeve
                                                </a>
                                                <p class="mt-0.5"> I love taking photos of nature and animals. 🌳🐶</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start gap-3 relative">
                                            <a href="timeline.html"> <img src="assets/images/avatars/avatar-3.jpg"
                                                    alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                                            <div class="flex-1">
                                                <a href="timeline.html"
                                                    class="text-black font-medium inline-block dark:text-white"> Monroe
                                                </a>
                                                <p class="mt-0.5"> I enjoy people and emotions. 😊😢 </p>
                                            </div>
                                        </div>
                                        <div class="flex items-start gap-3 relative">
                                            <a href="timeline.html"> <img src="assets/images/avatars/avatar-5.jpg"
                                                    alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                                            <div class="flex-1">
                                                <a href="timeline.html"
                                                    class="text-black font-medium inline-block dark:text-white"> Jesse
                                                </a>
                                                <p class="mt-0.5"> Photography is my passion. 🎨📸 </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- add comment -->
                                    <div
                                        class="sm:px-4 sm:py-3 p-2.5 border-t border-gray-100 flex items-center gap-1 dark:border-slate-700/40">

                                        <img src="assets/images/avatars/avatar-7.jpg" alt=""
                                            class="w-6 h-6 rounded-full">

                                        <div class="flex-1 relative overflow-hidden h-10">
                                            <textarea placeholder="Add Comment...." rows="1"
                                                class="w-full resize-none !bg-transparent px-4 py-2 focus:!border-transparent focus:!ring-transparent"
                                                aria-haspopup="true" aria-expanded="false"></textarea>

                                            <div class="!top-2 pr-2 uk-drop" uk-drop="pos: bottom-right; mode: click">
                                                <div class="flex items-center gap-2"
                                                    uk-scrollspy="target: > svg; cls: uk-animation-slide-right-small; delay: 100 ;repeat: true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" class="w-6 h-6 fill-sky-600"
                                                        style="opacity: 0;">
                                                        <path fill-rule="evenodd"
                                                            d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" class="w-5 h-5 fill-pink-600"
                                                        style="opacity: 0;">
                                                        <path
                                                            d="M3.25 4A2.25 2.25 0 001 6.25v7.5A2.25 2.25 0 003.25 16h7.5A2.25 2.25 0 0013 13.75v-7.5A2.25 2.25 0 0010.75 4h-7.5zM19 4.75a.75.75 0 00-1.28-.53l-3 3a.75.75 0 00-.22.53v4.5c0 .199.079.39.22.53l3 3a.75.75 0 001.28-.53V4.75z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>


                                        </div>


                                        <button type="submit"
                                            class="text-sm rounded-full py-1.5 px-3.5 bg-secondery">
                                            Replay</button>
                                    </div>

                                </div>
                            @endforeach
                        @endif

                        <!-- placeholder -->
                        <div
                            class="rounded-xl shadow-sm p-4 space-y-4 bg-slate-200/40 animate-pulse border1 dark:bg-dark2">

                            <div class="flex gap-3">
                                <div class="w-9 h-9 rounded-full bg-slate-300/20"></div>
                                <div class="flex-1 space-y-3">
                                    <div class="w-40 h-5 rounded-md bg-slate-300/20"></div>
                                    <div class="w-24 h-4 rounded-md bg-slate-300/20"></div>
                                </div>
                                <div class="w-6 h-6 rounded-full bg-slate-300/20"></div>
                            </div>

                            <div class="w-full h-52 rounded-lg bg-slate-300/10 my-3"> </div>

                            <div class="flex gap-3">

                                <div class="w-16 h-5 rounded-md bg-slate-300/20"></div>

                                <div class="w-14 h-5 rounded-md bg-slate-300/20"></div>

                                <div class="w-6 h-6 rounded-full bg-slate-300/20 ml-auto"></div>
                                <div class="w-6 h-6 rounded-full bg-slate-300/20  "></div>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- sidebar -->
                <div class="flex-1">

                    <div class="lg:space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6"
                        uk-sticky="media: 1024; end: #js-oversized; offset: 80">

                        <div class="box p-5 px-6">

                            <div class="flex items-baseline justify-between text-black dark:text-white">
                                <h3 class="font-bold text-base"> People you may know </h3>
                                <a href="#" class="text-sm text-blue-500">See all</a>
                            </div>

                            <div class="side-list">

                                <div class="side-list-item">
                                    <a href="timeline.html">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                            class="side-list-image rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html">
                                            <h4 class="side-list-title"> John Michael </h4>
                                        </a>
                                        <div class="side-list-info"> 125k Following </div>
                                    </div>
                                    <button class="button bg-primary-soft text-primary dark:text-white">follow</button>
                                </div>

                                <div class="side-list-item">
                                    <a href="timeline.html">
                                        <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                            class="side-list-image rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html">
                                            <h4 class="side-list-title"> Monroe Parker </h4>
                                        </a>
                                        <div class="side-list-info"> 320k Following </div>
                                    </div>
                                    <button class="button bg-primary-soft text-primary dark:text-white">follow</button>
                                </div>

                                <div class="side-list-item">
                                    <a href="timeline.html">
                                        <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                            class="side-list-image rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html">
                                            <h4 class="side-list-title"> James Lewis</h4>
                                        </a>
                                        <div class="side-list-info"> 125k Following </div>
                                    </div>
                                    <button class="button bg-primary-soft text-primary dark:text-white">follow</button>
                                </div>

                                <div class="side-list-item">
                                    <a href="timeline.html">
                                        <img src="assets/images/avatars/avatar-6.jpg" alt=""
                                            class="side-list-image rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html">
                                            <h4 class="side-list-title"> Alexa stella </h4>
                                        </a>
                                        <div class="side-list-info"> 192k Following </div>
                                    </div>
                                    <button class="button bg-primary-soft text-primary dark:text-white">follow</button>
                                </div>

                                <div class="side-list-item">
                                    <a href="timeline.html">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                            class="side-list-image rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html">
                                            <h4 class="side-list-title"> John Michael </h4>
                                        </a>
                                        <div class="side-list-info"> 320k Following </div>
                                    </div>
                                    <button class="button bg-primary-soft text-primary dark:text-white">follow</button>
                                </div>

                                <button class="bg-secondery button w-full mt-2 hidden">See all</button>

                            </div>

                        </div>

                        <!-- peaple you might know -->
                        <div class="box p-5 px-6 border1 dark:bg-dark2 hidden">

                            <div class="flex justify-between text-black dark:text-white">
                                <h3 class="font-bold text-base"> Peaple You might know </h3>
                                <button type="button"> <ion-icon name="sync-outline" class="text-xl"></ion-icon>
                                </button>
                            </div>

                            <div
                                class="space-y-4 capitalize text-xs font-normal mt-5 mb-2 text-gray-500 dark:text-white/80">

                                <div class="flex items-center gap-3">
                                    <a href="timeline.html">
                                        <img src="assets/images/avatars/avatar-7.jpg" alt=""
                                            class="bg-gray-200 rounded-full w-10 h-10">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html">
                                            <h4 class="font-semibold text-sm text-black dark:text-white"> Johnson smith
                                            </h4>
                                        </a>
                                        <div class="mt-0.5"> Suggested For You </div>
                                    </div>
                                    <button type="button"
                                        class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow
                                    </button>
                                </div>
                                <div class="flex items-center gap-3">
                                    <a href="timeline.html">
                                        <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                            class="bg-gray-200 rounded-full w-10 h-10">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html">
                                            <h4 class="font-semibold text-sm text-black dark:text-white"> James Lewis
                                            </h4>
                                        </a>
                                        <div class="mt-0.5"> Followed by Johnson </div>
                                    </div>
                                    <button type="button"
                                        class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow
                                    </button>
                                </div>
                                <div class="flex items-center gap-3">
                                    <a href="timeline.html">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                            class="bg-gray-200 rounded-full w-10 h-10">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html">
                                            <h4 class="font-semibold text-sm text-black dark:text-white"> John Michael
                                            </h4>
                                        </a>
                                        <div class="mt-0.5"> Followed by Monroe </div>
                                    </div>
                                    <button type="button"
                                        class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow
                                    </button>
                                </div>
                                <div class="flex items-center gap-3">
                                    <a href="timeline.html">
                                        <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                            class="bg-gray-200 rounded-full w-10 h-10">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html">
                                            <h4 class="font-semibold text-sm text-black dark:text-white"> Monroe Parker
                                            </h4>
                                        </a>
                                        <div class="mt-0.5"> Suggested For You </div>
                                    </div>
                                    <button type="button"
                                        class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow
                                    </button>
                                </div>
                                <div class="flex items-center gap-3">
                                    <a href="timeline.html">
                                        <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                            class="bg-gray-200 rounded-full w-10 h-10">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html">
                                            <h4 class="font-semibold text-sm text-black dark:text-white"> Martin Gray
                                            </h4>
                                        </a>
                                        <div class="mt-0.5"> Suggested For You </div>
                                    </div>
                                    <button type="button"
                                        class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow
                                    </button>
                                </div>
                            </div>

                        </div>


                        <!-- latest marketplace items -->
                        <div class="box p-5 px-6 border1 dark:bg-dark2">

                            <div class="flex justify-between text-black dark:text-white">
                                <h3 class="font-bold text-base"> Premium Photos </h3>
                                <button type="button"> <ion-icon name="sync-outline" class="text-xl"></ion-icon>
                                </button>
                            </div>

                            <div class="relative capitalize font-medium text-sm text-center mt-4 mb-2" tabindex="-1"
                                uk-slider="autoplay: true;finite: true">

                                <div class="overflow-hidden uk-slider-container">

                                    <ul class="-ml-2 uk-slider-items w-[calc(100%+0.5rem)]">

                                        <li class="w-1/2 pr-2">

                                            <a href="#">
                                                <div class="relative overflow-hidden rounded-lg">
                                                    <div class="relative w-full h-40">
                                                        <img src="assets/images/product/product-1.jpg" alt=""
                                                            class="object-cover w-full h-full inset-0">
                                                    </div>
                                                    <div
                                                        class="absolute right-0 top-0 m-2 bg-white/60 rounded-full py-0.5 px-2 text-sm font-semibold dark:bg-slate-800/60">
                                                        $12 </div>
                                                </div>
                                                <div class="mt-3 w-full"> Chill Lotion </div>
                                            </a>
                                        </li>
                                        <li class="w-1/2 pr-2">

                                            <a href="#">
                                                <div class="relative overflow-hidden rounded-lg">
                                                    <div class="relative w-full h-40">
                                                        <img src="assets/images/product/product-3.jpg" alt=""
                                                            class="object-cover w-full h-full inset-0">
                                                    </div>
                                                    <div
                                                        class="absolute right-0 top-0 m-2 bg-white/60 rounded-full py-0.5 px-2 text-sm font-semibold dark:bg-slate-800/60">
                                                        $18 </div>
                                                </div>
                                                <div class="mt-3 w-full"> Gaming mouse </div>
                                            </a>

                                        </li>
                                        <li class="w-1/2 pr-2">

                                            <a href="#">
                                                <div class="relative overflow-hidden rounded-lg">
                                                    <div class="relative w-full h-40">
                                                        <img src="assets/images/product/product-5.jpg" alt=""
                                                            class="object-cover w-full h-full inset-0">
                                                    </div>
                                                    <div
                                                        class="absolute right-0 top-0 m-2 bg-white/60 rounded-full py-0.5 px-2 text-sm font-semibold dark:bg-slate-800/60">
                                                        $12 </div>
                                                </div>
                                                <div class="mt-3 w-full"> Herbal Shampoo </div>
                                            </a>

                                        </li>

                                    </ul>

                                    <button type="button"
                                        class="absolute bg-white rounded-full top-16 -left-4 grid w-9 h-9 place-items-center shadow dark:bg-dark3"
                                        uk-slider-item="previous"> <ion-icon name="chevron-back"
                                            class="text-2xl"></ion-icon></button>
                                    <button type="button"
                                        class="absolute -right-4 bg-white rounded-full top-16 grid w-9 h-9 place-items-center shadow dark:bg-dark3"
                                        uk-slider-item="next"> <ion-icon name="chevron-forward"
                                            class="text-2xl"></ion-icon></button>

                                </div>

                            </div>


                        </div>

                        <!-- online friends -->
                        <div class="box p-5 px-6 border1 dark:bg-dark2">

                            <div class="flex justify-between text-black dark:text-white">
                                <h3 class="font-bold text-base"> Online Friends </h3>
                                <button type="button"> <ion-icon name="sync-outline" class="text-xl"></ion-icon>
                                </button>
                            </div>

                            <div class="grid grid-cols-6 gap-3 mt-4">

                                <a href="timeline.html">
                                    <div class="w-10 h-10 relative">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                            class="w-full h-full absolute inset-0 rounded-full">
                                        <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2">
                                        </div>
                                    </div>
                                </a>
                                <a href="timeline.html">
                                    <div class="w-10 h-10 relative">
                                        <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                            class="w-full h-full absolute inset-0 rounded-full">
                                        <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2">
                                        </div>
                                    </div>
                                </a>
                                <a href="timeline.html">
                                    <div class="w-10 h-10 relative">
                                        <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                            class="w-full h-full absolute inset-0 rounded-full">
                                        <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2">
                                        </div>
                                    </div>
                                </a>
                                <a href="timeline.html">
                                    <div class="w-10 h-10 relative">
                                        <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                            class="w-full h-full absolute inset-0 rounded-full">
                                        <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2">
                                        </div>
                                    </div>
                                </a>
                                <a href="timeline.html">
                                    <div class="w-10 h-10 relative">
                                        <img src="assets/images/avatars/avatar-6.jpg" alt=""
                                            class="w-full h-full absolute inset-0 rounded-full">
                                        <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2">
                                        </div>
                                    </div>
                                </a>
                                <a href="timeline.html">
                                    <div class="w-10 h-10 relative">
                                        <img src="assets/images/avatars/avatar-7.jpg" alt=""
                                            class="w-full h-full absolute inset-0 rounded-full">
                                        <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2">
                                        </div>
                                    </div>
                                </a>

                            </div>


                        </div>

                        <!-- Pro Members -->
                        <div class="box p-5 px-6 border1 dark:bg-dark2">

                            <div class="flex justify-between text-black dark:text-white">
                                <h3 class="font-bold text-base"> Pro Members </h3>
                            </div>

                            <div class="relative capitalize font-normal text-sm mt-4 mb-2" tabindex="-1"
                                uk-slider="autoplay: true;finite: true">

                                <div class="overflow-hidden uk-slider-container">

                                    <ul class="-ml-2 uk-slider-items w-[calc(100%+0.5rem)]">

                                        <li class="w-1/2 pr-2">
                                            <a href="timeline.html">
                                                <div
                                                    class="flex flex-col items-center shadow-sm p-2 rounded-xl border1">
                                                    <a href="timeline.html">
                                                        <div class="relative w-16 h-16 mx-auto mt-2">
                                                            <img src="assets/images/avatars/avatar-5.jpg"
                                                                alt=""
                                                                class="h-full object-cover rounded-full shadow w-full">
                                                        </div>
                                                    </a>
                                                    <div class="mt-5 text-center w-full">
                                                        <a href="timeline.html">
                                                            <h5 class="font-semibold"> Martin Gray</h5>
                                                        </a>
                                                        <div class="text-xs text-gray-400 mt-0.5 font-medium"> 12K
                                                            Followers</div>
                                                        <button type="button"
                                                            class="bg-secondery block font-semibold mt-4 py-1.5 rounded-lg text-sm w-full border1">
                                                            Follow </button>
                                                    </div>
                                                </div>

                                        </li>
                                        <li class="w-1/2 pr-2">
                                            <div class="flex flex-col items-center shadow-sm p-2 rounded-xl border1">
                                                <a href="timeline.html">
                                                    <div class="relative w-16 h-16 mx-auto mt-2">
                                                        <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                                            class="h-full object-cover rounded-full shadow w-full">
                                                    </div>
                                                </a>
                                                <div class="mt-5 text-center w-full">
                                                    <a href="timeline.html">
                                                        <h5 class="font-semibold"> Alexa Park</h5>
                                                    </a>
                                                    <div class="text-xs text-gray-400 mt-0.5 font-medium"> 12K
                                                        Followers</div>
                                                    <button type="button"
                                                        class="bg-secondery block font-semibold mt-4 py-1.5 rounded-lg text-sm w-full border1">
                                                        Follow </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="w-1/2 pr-2">
                                            <div class="flex flex-col items-center shadow-sm p-2 rounded-xl border1">
                                                <a href="timeline.html">
                                                    <div class="relative w-16 h-16 mx-auto mt-2">
                                                        <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                                            class="h-full object-cover rounded-full shadow w-full">
                                                    </div>
                                                </a>
                                                <div class="mt-5 text-center w-full">
                                                    <a href="timeline.html">
                                                        <h5 class="font-semibold"> James Lewis</h5>
                                                    </a>
                                                    <div class="text-xs text-gray-400 mt-0.5 font-medium"> 15K
                                                        Followers</div>
                                                    <button type="button"
                                                        class="bg-secondery block font-semibold mt-4 py-1.5 rounded-lg text-sm w-full border1">
                                                        Follow </button>
                                                </div>
                                            </div>
                                        </li>


                                    </ul>

                                    <button type="button"
                                        class="absolute -translate-y-1/2 bg-slate-100 rounded-full top-1/2 -left-4 grid w-9 h-9 place-items-center dark:bg-dark3"
                                        uk-slider-item="previous"> <ion-icon name="chevron-back"
                                            class="text-2xl"></ion-icon></button>
                                    <button type="button"
                                        class="absolute -right-4 -translate-y-1/2 bg-slate-100 rounded-full top-1/2 grid w-9 h-9 place-items-center dark:bg-dark3"
                                        uk-slider-item="next"> <ion-icon name="chevron-forward"
                                            class="text-2xl"></ion-icon></button>

                                </div>

                            </div>


                        </div>

                        <!-- Trends -->
                        <div class="box p-5 px-6 border1 dark:bg-dark2">

                            <div class="flex justify-between text-black dark:text-white">
                                <h3 class="font-bold text-base"> Trends for you </h3>
                                <button type="button"> <ion-icon name="sync-outline" class="text-xl"></ion-icon>
                                </button>
                            </div>

                            <div
                                class="space-y-3.5 capitalize text-xs font-normal mt-5 mb-2 text-gray-600 dark:text-white/80">
                                <a href="#">
                                    <div class="flex items-center gap-3 p">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 -mt-2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                                        </svg>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-black dark:text-white text-sm"> artificial
                                                intelligence </h4>
                                            <div class="mt-0.5"> 1,245,62 post </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="block">
                                    <div class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 -mt-2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                                        </svg>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-black dark:text-white text-sm"> Web
                                                developers</h4>
                                            <div class="mt-0.5"> 1,624 post </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="block">
                                    <div class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 -mt-2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                                        </svg>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-black dark:text-white text-sm"> Ui Designers
                                            </h4>
                                            <div class="mt-0.5"> 820 post </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="block">
                                    <div class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 -mt-2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                                        </svg>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-black dark:text-white text-sm"> affiliate
                                                marketing </h4>
                                            <div class="mt-0.5"> 480 post </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                        </div>

                    </div>
                </div>

            </div>

        </main>

    </div>


    <!-- open chat box -->
    <div>
        <button type="button"
            class="sm:m-10 m-5 px-4 py-2.5 rounded-2xl bg-gradient-to-tr from-blue-500 to-blue-700 text-white shadow fixed bottom-0 right-0 group flex items-center gap-2">

            <svg class="w-6 h-6 group-aria-expanded:hidden duration-500" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z">
                </path>
            </svg>

            <div class="text-base font-semibold max-sm:hidden"> Chat </div>

            <svg class="w-6 h-6 -mr-1 hidden group-aria-expanded:block" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                    clip-rule="evenodd" />
            </svg>

        </button>
        <div class="bg-white rounded-xl drop-shadow-xl  sm:w-80 w-screen border-t dark:bg-dark3 dark:border-slate-600"
            id="chat__box"
            uk-drop="offset:10;pos: bottom-right; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-bottom-right; mode: click">

            <div class="relative">
                <div class="p-5">
                    <h1 class="text-lg font-bold text-black"> Chats </h1>
                </div>

                <!-- search input defaul is hidden -->
                <div class="bg-white p-3 absolute w-full top-11 border-b flex gap-2 hidden dark:border-slate-600 dark:bg-slate-700 z-10"
                    uk-scrollspy="cls:uk-animation-slide-bottom-small ; repeat: true; duration:0" id="search__chat">

                    <div class="relative w-full">
                        <input type="text" class="w-full rounded-3xl dark:!bg-white/10" placeholder="Search">

                        <button type="button"
                            class="absolute  right-0  rounded-full shrink-0 px-2 -translate-y-1/2 top-1/2"
                            uk-toggle="target: #search__chat ; cls: hidden">

                            <ion-icon name="close-outline" class="text-xl flex"></ion-icon>
                        </button>
                    </div>

                </div>

                <!-- button actions -->
                <div class="absolute top-0 -right-1 m-5 flex gap-2 text-xl">
                    <button uk-toggle="target: #search__chat ; cls: hidden">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                    <button uk-toggle="target: #chat__box ; cls: uk-open">
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>

                <!-- tabs -->
                <div class="page-heading bg-slat e-50 ">

                    <nav class="nav__underline -mt-7 px-5">

                        <ul class="group"
                            uk-switcher="connect: #chat__tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">

                            <li> <a href="#"
                                    class="inline-block py-[18px] border-b-2 border-transparent aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white">
                                    Friends </a> </li>
                            <li> <a href="#"> Groups </a> </li>

                        </ul>

                    </nav>

                </div>

                <!-- tab 2 optional -->
                <div class="grid grid-cols-2 px-3 py-2 bg-slate-50  -mt-12 relative z-10 text-sm border-b  hidden"
                    uk-switcher="connect: #chat__tabs; toggle: * > button ; animation: uk-animation-slide-right uk-animation-slide-top">
                    <button class="bg-white shadow rounded-md py-1.5"> Friends </button>
                    <button> Groups </button>
                </div>

                <!-- chat list -->
                <div class="uk-switcher overflow-hidden rounded-xl -mt-8" id="chat__tabs">

                    <!-- tab list 1 -->
                    <div class="space-y -m t-5 p-3 text-sm font-medium h-[280px] overflow-y-auto">

                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-1.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Jesse Steeve </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> John Michael </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Monroe Parker </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> James Lewis </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Martin Gray </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-6.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Alexa stella </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-1.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Jesse Steeve </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> John Michael </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Monroe Parker </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> James Lewis </div>
                            </div>
                        </a>

                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Martin Gray </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-6.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Alexa stella </div>
                            </div>
                        </a>


                    </div>

                    <!-- tab list 2 -->
                    <div class="space-y -m t-5 p-3 text-sm font-medium h-[280px] overflow-y-auto">

                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-1.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Jesse Steeve </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> John Michael </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Monroe Parker </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> James Lewis </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Martin Gray </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-6.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Alexa stella </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-1.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Jesse Steeve </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> John Michael </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Monroe Parker </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> James Lewis </div>
                            </div>
                        </a>

                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Martin Gray </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-6.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Alexa stella </div>
                            </div>
                        </a>


                    </div>

                </div>


            </div>

            <div class="w-3.5 h-3.5 absolute -bottom-2 right-5 bg-white rotate-45 dark:bg-dark3"></div>
        </div>
    </div>


    <!-- post preview modal -->
    <div class="hidden lg:p-20 max-lg:!items-start" id="preview_modal" uk-modal="">

        <div
            class="uk-modal-dialog tt relative mx-auto overflow-hidden shadow-xl rounded-lg lg:flex items-center ax-w-[86rem] w-full lg:h-[80vh]">

            <!-- image previewer -->
            <div class="lg:h-full lg:w-[calc(100vw-400px)] w-full h-96 flex justify-center items-center relative">

                <div class="relative z-10 w-full h-full">
                    <img src="assets/images/post/post-1.jpg" alt=""
                        class="w-full h-full object-cover absolute">
                </div>

                <!-- close button -->
                <button type="button"
                    class="bg-white rounded-full p-2 absolute right-0 top-0 m-3 uk-animation-slide-right-medium z-10 dark:bg-slate-600 uk-modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>

            <!-- right sidebar -->
            <div
                class="lg:w-[400px] w-full bg-white h-full relative  overflow-y-auto shadow-xl dark:bg-dark2 flex flex-col justify-between">

                <div class="p-5 pb-0">

                    <!-- story heading -->
                    <div class="flex gap-3 text-sm font-medium">
                        <img src="assets/images/avatars/avatar-5.jpg" alt="" class="w-9 h-9 rounded-full">
                        <div class="flex-1">
                            <h4 class="text-black font-medium dark:text-white"> Steeve </h4>
                            <div class="text-gray-500 text-xs dark:text-white/80"> 2 hours ago</div>
                        </div>

                        <!-- dropdown -->
                        <div class="-m-1">
                            <button type="button" class="button__ico w-8 h-8"> <ion-icon class="text-xl"
                                    name="ellipsis-horizontal"></ion-icon> </button>
                            <div class="w-[253px]"
                                uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true">
                                <nav>
                                    <a href="#"> <ion-icon class="text-xl shrink-0"
                                            name="bookmark-outline"></ion-icon> Add to favorites </a>
                                    <a href="#"> <ion-icon class="text-xl shrink-0"
                                            name="notifications-off-outline"></ion-icon> Mute Notification </a>
                                    <a href="#"> <ion-icon class="text-xl shrink-0"
                                            name="flag-outline"></ion-icon> Report this post </a>
                                    <a href="#"> <ion-icon class="text-xl shrink-0"
                                            name="share-outline"></ion-icon> Share your profile </a>
                                    <hr>
                                    <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50">
                                        <ion-icon class="text-xl shrink-0" name="stop-circle-outline"></ion-icon>
                                        Unfollow </a>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <p class="font-normal text-sm leading-6 mt-4"> Photography is the art of capturing light with a
                        camera. it can be fun, challenging. It can also be a hobby, a passion. 📷 </p>

                    <div class="shadow relative -mx-5 px-5 py-3 mt-3">
                        <div class="flex items-center gap-4 text-xs font-semibold">
                            <div class="flex items-center gap-2.5">
                                <button type="button" class="button__ico text-red-500 bg-red-100 dark:bg-slate-700">
                                    <ion-icon class="text-lg" name="heart"></ion-icon> </button>
                                <a href="#">1,300</a>
                            </div>
                            <div class="flex items-center gap-3">
                                <button type="button" class="button__ico bg-slate-100 dark:bg-slate-700"> <ion-icon
                                        class="text-lg" name="chatbubble-ellipses"></ion-icon> </button>
                                <span>260</span>
                            </div>
                            <button type="button" class="button__ico ml-auto"> <ion-icon class="text-xl"
                                    name="share-outline"></ion-icon> </button>
                            <button type="button" class="button__ico"> <ion-icon class="text-xl"
                                    name="bookmark-outline"></ion-icon> </button>
                        </div>
                    </div>

                </div>

                <div class="p-5 h-full overflow-y-auto flex-1">

                    <!-- comment list -->
                    <div class="relative text-sm font-medium space-y-5">

                        <div class="flex items-start gap-3 relative">
                            <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                class="w-6 h-6 mt-1 rounded-full">
                            <div class="flex-1">
                                <a href="#" class="text-black font-medium inline-block dark:text-white"> Steeve
                                </a>
                                <p class="mt-0.5">What a beautiful, I love it. 😍 </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 relative">
                            <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                class="w-6 h-6 mt-1 rounded-full">
                            <div class="flex-1">
                                <a href="#" class="text-black font-medium inline-block dark:text-white"> Monroe
                                </a>
                                <p class="mt-0.5"> You captured the moment.😎 </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 relative">
                            <img src="assets/images/avatars/avatar-7.jpg" alt=""
                                class="w-6 h-6 mt-1 rounded-full">
                            <div class="flex-1">
                                <a href="#" class="text-black font-medium inline-block dark:text-white"> Alexa
                                </a>
                                <p class="mt-0.5"> This photo is amazing! </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 relative">
                            <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                class="w-6 h-6 mt-1 rounded-full">
                            <div class="flex-1">
                                <a href="#" class="text-black font-medium inline-block dark:text-white"> John
                                </a>
                                <p class="mt-0.5"> Wow, You are so talented 😍 </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 relative">
                            <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                class="w-6 h-6 mt-1 rounded-full">
                            <div class="flex-1">
                                <a href="#" class="text-black font-medium inline-block dark:text-white"> Michael
                                </a>
                                <p class="mt-0.5"> I love taking photos 🌳🐶</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 relative">
                            <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                class="w-6 h-6 mt-1 rounded-full">
                            <div class="flex-1">
                                <a href="#" class="text-black font-medium inline-block dark:text-white"> Monroe
                                </a>
                                <p class="mt-0.5"> Awesome. 😊😢 </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 relative">
                            <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                class="w-6 h-6 mt-1 rounded-full">
                            <div class="flex-1">
                                <a href="#" class="text-black font-medium inline-block dark:text-white"> Jesse
                                </a>
                                <p class="mt-0.5"> Well done 🎨📸 </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 relative">
                            <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                class="w-6 h-6 mt-1 rounded-full">
                            <div class="flex-1">
                                <a href="#" class="text-black font-medium inline-block dark:text-white"> Steeve
                                </a>
                                <p class="mt-0.5">What a beautiful, I love it. 😍 </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 relative">
                            <img src="assets/images/avatars/avatar-7.jpg" alt=""
                                class="w-6 h-6 mt-1 rounded-full">
                            <div class="flex-1">
                                <a href="#" class="text-black font-medium inline-block dark:text-white"> Alexa
                                </a>
                                <p class="mt-0.5"> This photo is amazing! </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 relative">
                            <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                class="w-6 h-6 mt-1 rounded-full">
                            <div class="flex-1">
                                <a href="#" class="text-black font-medium inline-block dark:text-white"> John
                                </a>
                                <p class="mt-0.5"> Wow, You are so talented 😍 </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 relative">
                            <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                class="w-6 h-6 mt-1 rounded-full">
                            <div class="flex-1">
                                <a href="#" class="text-black font-medium inline-block dark:text-white">
                                    Michael </a>
                                <p class="mt-0.5"> I love taking photos 🌳🐶</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 relative">
                            <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                class="w-6 h-6 mt-1 rounded-full">
                            <div class="flex-1">
                                <a href="#" class="text-black font-medium inline-block dark:text-white">
                                    Monroe </a>
                                <p class="mt-0.5"> Awesome. 😊😢 </p>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="bg-white p-3 text-sm font-medium flex items-center gap-2">

                    <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full">

                    <div class="flex-1 relative overflow-hidden ">
                        <textarea placeholder="Add Comment...." rows="1"
                            class="w-full resize-  px-4 py-2 focus:!border-transparent focus:!ring-transparent resize-y"></textarea>

                        <div class="flex items-center gap-2 absolute bottom-0.5 right-0 m-3">
                            <ion-icon class="text-xl flex text-blue-700" name="image"></ion-icon>
                            <ion-icon class="text-xl flex text-yellow-500" name="happy"></ion-icon>
                        </div>

                    </div>

                    <button type="submit"
                        class="hidden text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Replay</button>

                </div>

            </div>

        </div>

    </div>

    <!-- create status -->


    @include('profile.partials.create_status')

    <!-- create story -->

    @include("profile.partials.create_story")



    <!-- Javascript  -->
    <script src="assets/js/uikit.min.js"></script>
    <script src="assets/js/simplebar.js"></script>
    <script src="assets/js/script.js"></script>


    <!-- Ion icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>
