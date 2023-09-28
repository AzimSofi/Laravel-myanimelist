<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>myanimelist profile</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{% static 'mal_userpage/css/styles.css' %}">
        <!-- bootstrap 5-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <!-- bootstrap 4 -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

        <!-- Our project just needs Font Awesome Free's Solid and Brand files -->
        <link href="{% static 'fontawesomefree/css/fontawesome.css' %}" rel="stylesheet" type="text/css">
        <link href="{% static 'fontawesomefree/css/brands.css' %}" rel="stylesheet" type="text/css">
        <link href="{% static 'fontawesomefree/css/solid.css' %}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="profile_container">
            @include('header');
            <h1 class="mt-2" id="profile_header-3">
                {{ $user?->name }}'s profile
            </h1>
            <div class="container">
                <div class="d-flex flex-row main-row">
                    <div class="me-2">
                        <div class="left-column d-flex flex-column">
                            <div id="profilepic-leftcolumn">
                                @if (isset($user->profile_picture))
                                <img src="{{ $user->profile_picture }}">
                                @else
                                    {{--  --}}
                                @endif
                            </div>
                            <div class="container user-function">
                                <div class="row user-function">
                                    <div class="col user-icon comment"> <i class="fa-solid fa-comment "></i> </div>
                                    <div class="col user-icon message"> <i class="fa-solid fa-envelope"></i> </div>
                                    <div class="col user-icon request"> <i class="fa-solid fa-user-plus"></i> </div>
                                    <div class="col user-icon gift"> <i class="fa-solid fa-gift"></i> </div>
                                </div>
                            </div>
                            <ul class="user-status border-top">
                                <li class="user-current bgclr12">
                                <span class="fl-l fw-b">Last Online</span><span class="fl-r">2 hours ago</span>
                                </li>
                                <li class="user-current bgclr18">
                                <span class="fl-l fw-b">Birthday</span><span class="fl-r">Aug 19, 2001</span>
                                </li>
                                <li class="user-current bgclr12">
                                <span class="fl-l fw-b">Joined</span><span class="fl-r">Aug 3, 2021</span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-evenly user-btn">
                                    <div class="user-list">
                                        <span class="">Anime List</span>
                                    </div>
                                    <div class="user-list">
                                        <span class="">Manga List</span>
                                    </div>
                            </div>
                            <ul class="user-data border-top">
                                <li class="user-current bgclr12">
                                    <a href="#" class="fl-l fw-b">Statistics</a>
                                </li>
                                <li class="user-current bgclr18">
                                    <a href="#" class="fl-l fw-b">History</a>
                                </li>
                                <li class="user-current bgclr12">
                                    <a href="#" class="fl-l fw-b">Favourites</a>
                                </li>
                            </ul>
                            <ul class="user-data border-top mt12 mb12">
                                <li class="user-current bgclr12">
                                    <a href="#" class="fw-b">Forum Posts</a><a class="fw-b fl-r">0</a>
                                </li>
                                <li class="user-current bgclr18">
                                    <a href="#" class="fw-b">Reviews</a><a class="fw-b fl-r">0</a>
                                </li>
                                <li class="user-current bgclr12">
                                    <a href="#" class="fw-b">Recommendations</a><a class="fw-b fl-r">0</a>
                                </li>
                                <li class="user-current bgclr18">
                                    <a href="#" class="fw-b">Interest Stacks</a><a class="fw-b fl-r">0</a>
                                </li>
                                <li class="user-current bgclr12">
                                    <a href="#" class="fw-b">Blog Posts</a><a class="fw-b fl-r">0</a>
                                </li>
                                <li class="user-current bgclr18">
                                    <a href="#" class="fw-b">Clubs</a><a class="fw-b fl-r">0</a>
                                </li>
                            </ul>
                            <h4>
                                <span class="fw-b">Affinity to You</span>
                            </h4>
                            <div class="user-affinity pl4 pr4 pb12">
                                <div class="dispb pt12 pb4">
                                    <div class="user-current">
                                        <span class="title fl-l">Anime</span><a href="#"class="fl-r">13 Shared</a>
                                    </div>
                                </div>
                                <div class="dispb pt12 pb4">
                                    <div class="user-current">
                                        <span class="title fl-l">Manga</span><a href="#"class="fl-r">0 Shared</a>
                                    </div>
                                </div>
                            </div>
                            <h4>
                                <span class="fw-b">Friends</span><a href="#"class="fl-r">All (0)</a>
                            </h4>
                            <div class="user-font11VA pt4 pb12">No friends yet.</div>
                            <h4>
                                <i class="fa-solid fa-square-rss" style="color: #ff8800;"></i><span class="fw-b"> RSS Feeds</span>
                            </h4>
                            <ul class="user-font11VA m0 p0">
                                <li class="user-current">
                                    <a href="#" class="mb8 fl-l">Recent Anime</a>
                                </li>
                                <li class="user-current">
                                    <a href="#" class="mb8 fl-l">Recent Anime by Episode</a>
                                </li>
                                <li class="user-current">
                                    <a href="#" class="mb8 fl-l">Recent Manga</a>
                                </li>
                                <li class="user-current">
                                    <a href="#" class="mb8 fl-l">Recent Manga by Chapter</a>
                                </li>
                                <li class="user-current">
                                    <a href="#" class="mb8 fl-l">Blog Feed</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-column flex-fill mt-4">
                        <h2 class="mt-5">Statistics</h2>
                        <div class="row ">
                            <div class="col">
                                <div class="Anime_stats mt-3">
                                    <h5>Anime Stats</h5>
                                    <div class="row">
                                        <div class="col content_item_caption font-12">
                                            Days:&nbsp;<strong class="grey_text">11.0</strong>
                                        </div>
                                        <div class="col text-right content_item_caption font-12" style="justify-content: flex-end;">
                                            Mean Score:&nbsp;<strong class="grey_text">5.35</strong>
                                        </div>
                                    </div>
                                    <div class="progress-bar mt-1 row">
                                        <div class="watching" style="width: 20%;"></div>
                                        <div class="completed" style="width: 50%;"></div>
                                        <div class="on-hold" style="width: 0%;"></div>
                                        <div class="dropped" style="width: 5%;"></div>
                                        <div class="plan-to-watch" style="width: 25%;"></div>
                                    </div>
                                    <div class="row legend">
                                        <div class="col">
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="#">
                                                        <span class="circle watching"></span>Watching
                                                    </a>
                                                </div>
                                                <span class="grey_text content_item_caption">{{ $animestats?->Watching }}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="#">
                                                        <span class="circle completed"></span>Completed
                                                    </a>
                                                </div>
                                                <span class="grey_text content_item_caption">{{ $animestats?->Completed }}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="#">
                                                        <span class="circle on-hold"></span>On-Hold
                                                    </a>
                                                </div>
                                                <span class="grey_text content_item_caption">{{ $animestats?->OnHold }}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div>
                                                <a href="#">
                                                    <span class="circle dropped"></span>Dropped
                                                </a>
                                                </div>
                                                <span class="grey_text content_item_caption">{{ $animestats?->Dropped }}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="#">
                                                        <span class="circle plan-to-watch"></span>Plan to Watch
                                                    </a>
                                                </div>
                                                <span class="grey_text content_item_caption">{{ $animestats?->PlanToWatch }}</span>
                                            </li>
                                          </div>
                                        <div class="col d-flex flex-column justify-content-start">
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div class="content_item_caption ms-5">
                                                  Total Entries
                                                </div>
                                                <span class="grey_text content_item_caption">{{ $animestats?->TotalEntries }}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div class="content_item_caption ms-5">
                                                    Rewatched
                                                </div>
                                                <span class="grey_text content_item_caption">{{ $animestats?->Rewatched }}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div class="content_item_caption ms-5">
                                                    Episodes
                                                </div>
                                                <span class="grey_text content_item_caption">{{ $animestats?->Episodes }}</span>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                                <div class="Manga_stats mt-5">
                                    <h5>Manga Stats</h5>
                                    <div class="row">
                                        <div class="col content_item_caption font-12">
                                            Days:&nbsp;<strong class="grey_text">2.0</strong>
                                        </div>
                                        <div class="col content_item_caption font-12"  style="justify-content: flex-end;">
                                            Mean Score:&nbsp;<strong class="grey_text">5.50</strong>
                                        </div>
                                    </div>
                                    <div class="progress-bar mt-1 row">
                                        <div class="watching" style="width: 85%;"></div>
                                        <div class="completed" style="width: 5%;"></div>
                                        <div class="on-hold" style="width: 10;"></div>
                                        <div class="dropped" style="width: 0%;"></div>
                                        <div class="plan-to-watch" style="width: 25%;"></div>
                                    </div>
                                    <div class="row legend">
                                        <div class="col">
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="#">
                                                        <span class="circle watching"></span>Reading
                                                    </a>
                                                </div>
                                                <span class="grey_text content_item_caption">{{ $mangastats?->Reading }}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="#">
                                                        <span class="circle completed"></span>Completed
                                                    </a>
                                                </div>
                                                <span class="grey_text content_item_caption">{{ $mangastats?->Completed }}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="#">
                                                        <span class="circle on-hold"></span>On-Hold
                                                    </a>
                                                </div>
                                                <span class="grey_text content_item_caption">{{ $mangastats?->OnHold }}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div>
                                                <a href="#">
                                                    <span class="circle dropped"></span>Dropped
                                                </a>
                                                </div>
                                                <span class="grey_text content_item_caption">{{ $mangastats?->Dropped }}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="#">
                                                        <span class="circle plan-to-watch"></span>Plan to Watch
                                                    </a>
                                                </div>
                                                <span class="grey_text content_item_caption">{{ $mangastats?->PlanToWatch }}</span>
                                            </li>
                                          </div>
                                        <div class="col d-flex flex-column justify-content-start">
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div class="content_item_caption ms-5">
                                                  Total Entries
                                                </div>
                                                <span class="grey_text content_item_caption">{{ $mangastats?->TotalEntries }}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div class="content_item_caption ms-5">
                                                    Reread
                                                </div>
                                                <span class="grey_text content_item_caption">{{ $mangastats?->Reread }}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div class="content_item_caption ms-5">
                                                    Chapters
                                                </div>
                                                <span class="grey_text content_item_caption">{{ $mangastats?->Chapters }}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div class="content_item_caption ms-5">
                                                    Volumes
                                                </div>
                                                <span class="grey_text content_item_caption">{{ $mangastats?->Volumes }}</span>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="Last_anime_updates">
                                    <div class="d-flex justify-content-between align-items-center border_mal">
                                        <h5 style="margin-bottom: 0px; border-style:none">Last Anime Updates</h5>
                                        <span><a href="#">Anime history</a></span>
                                    </div>
                                    @foreach ( $animes as $anime)
                                        <div class="mb-2 d-flex align-items-start">
                                            <img class="content_item" src="{{ $anime?->picture }}" alt="{{ $anime?->name }}">
                                            <div class="col">
                                                <a href="#">{{ $anime?->name }}</a>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="progress-bar">
                                                        <div class="progress-bar-fill" style="width: 70%;"></div>
                                                    </div>
                                                    <span class="content_item_caption">Sep 4, 10:53 AM</span>
                                                </div>
                                                <div class="content_item_caption">
                                                    Watching {{ $anime?->ep_watched }}/{{ $anime?->ep_total }} · Scored {{ $anime?->score }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="Last_manga_updates mt-4">
                                    <div class="d-flex justify-content-between align-items-center border_mal">
                                        <h5 style="margin-bottom: 0px; border-style:none">Last Manga Updates</h5>
                                    </div>
                                    @foreach ( $mangas as $manga )
                                    <div class="mb-2 d-flex align-items-start">
                                        <img class="content_item" src="{{ $anime?->picture }}" alt="{{ $anime?->name }}">
                                        <div class="col">
                                            <a href="#">{{ $anime?->name }}</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="progress-bar">
                                                    <div class="progress-bar-fill" style="width: 70%;"></div>
                                                </div>
                                                <span class="content_item_caption">Sep 4, 10:53 AM</span>
                                            </div>
                                            <div class="content_item_caption">
                                                Watching {{ $anime?->ch_read }}/{{ $anime?->ch_total }} · Scored {{ $anime?->score }}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div id="favorites" class="d-flex justify-content-between align-items-end border_mal">
                            <h2 class="">Favorites</h2>
                            <span class="mb-2"><a href="#">All Favorites</a></span>
                        </div>
                        <h5 class="mt-3">Anime (1)</h5>
                        <div id="anime-favorites container">
                            <img class="" width="72px" height="112px" src="https://cdn.myanimelist.net/r/140x220/images/anime/1146/113477.webp?s=d92ddfa7a16ca3eb93a4727818883f2f" alt="">
                        </div>
                        <h5 class="mt-3">Character (3)</h5>
                        <div id="character-favorites">
                            <img width="72px" height="112px" src="https://cdn.myanimelist.net/r/140x220/images/characters/5/486674.webp?s=fb186f58adeac6e5cc7e64273e845571" alt="">
                            <img width="72px" height="112px" src="https://cdn.myanimelist.net/r/140x220/images/characters/9/444114.webp?s=677fe548688a12432897a273bff04f39" alt="">
                            <img width="72px" height="112px" src="https://cdn.myanimelist.net/r/140x220/images/characters/8/437009.webp?s=eb60e19d9968d7d4ed5f507d620fa037" alt="">
                        </div>
                        <h5 class="mt-3">People (5)</h5>
                        <div id="character-favorites">
                            <img width="72px" height="112px" src="https://cdn.myanimelist.net/r/140x220/images/voiceactors/1/62968.jpg?s=ce03b4f5a53f865f868eab1ff44e9e59" alt="">
                            <img width="72px" height="112px" src="https://cdn.myanimelist.net/r/140x220/images/voiceactors/3/70398.jpg?s=3afb330a51b902036ac66e6c3e64a0c6" alt="">
                            <img width="72px" height="112px" src="https://cdn.myanimelist.net/r/140x220/images/voiceactors/2/62615.jpg?s=2bf2df7e1b2880b89a19655d5199df9f" alt="">
                            <img width="72px" height="112px" src="https://cdn.myanimelist.net/r/140x220/images/voiceactors/3/63662.jpg?s=c0a0e827278cc7f99c7687b02bb811b5" alt="">
                            <img width="72px" height="112px" src="https://cdn.myanimelist.net/r/140x220/images/voiceactors/2/63392.jpg?s=36e01e88b073831e9a71f74c46631c5b" alt="">
                        </div>

                        <div id="comments" class="d-flex justify-content-between align-items-end">
                            <h2 class="mt-5">Comments</h2>
                            <span class="mb-2"><a href="#">All Comments (0)</a></span>
                        </div>
                        <textarea cols="60" rows="6" style="width:786px; background-color: #333;border: none; font-size: 11px;" placeholder="Write a new comment"></textarea>
                        <div class="container text-center">
                            <button type="button" class="btn btn-primary" id="submit-comment">Submit Comment</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
