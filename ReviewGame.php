<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameRating</title>

    <link rel="stylesheet" href="css/indexStyle.css">
    <link rel="stylesheet" href="css/ReviewGame.css">
    <script src="JavaScript/ReviewGame.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100&family=Athiti:wght@200&family=Chakra+Petch:ital,wght@0,300;1,300&family=Charm&family=IBM+Plex+Sans+Thai+Looped:wght@100&family=IBM+Plex+Sans+Thai:wght@100&family=K2D:wght@100&family=Kanit:wght@100&family=Krub:wght@200&family=Maitree:wght@200&family=Mitr:wght@200&family=Noto+Sans+Thai+Looped:wght@100&family=Noto+Serif+Thai:wght@100&family=Pridi:wght@200&family=Sarabun:wght@100&family=Taviraj:wght@300&display=swap"
        rel="stylesheet">

    <html data-theme="dracula">
</head>

<body class="text-white">

    <div class="navbar bg-base-200">
        <div class="flex-1">
            <a href="index.php" class="btn btn-ghost capitalize text-2xl">GameRating</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 text-lg">
                <li><a href="index.php" class="group hover:text-white">หน้าแรก</a></li>
                <li>
                    <details id="games-menu">
                        <summary class="group hover:text-white">
                            หมวดหมู่เกม
                        </summary>
                        <ul class="p-2 bg-base-200 lg:min-w-max " id="CategoryNavbar">
                            <li><a href="Search.php">Action</a></li>
                            <li><a href="Search.php">Link 2</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details id="ratings-menu">
                        <summary class="group hover:text-white">
                            เรตติ้ง
                        </summary>
                        <ul class="menu menu-horizontal lg:min-w-max bg-base-200 rounded-box " id="rattingBox">
                            <li class="text-lg">
                                <a>Solutions</a>
                                <ul>
                                    <li><a href="Search.php">Design</a></li>
                                    <li><a href="Search.php">Development</a></li>
                                    <li><a href="Search.php">Hosting</a></li>
                                    <li><a href="Search.php">Domain register</a></li>
                                </ul>
                            </li>
                            <li class="text-lg">
                                <a>Enterprise</a>
                                <ul>
                                    <li><a href="Search.php">CRM software</a></li>
                                    <li><a href="Search.php">Marketing management</a></li>
                                    <li><a href="Search.php">Security</a></li>
                                    <li><a href="Search.php">Consulting</a></li>
                                </ul>
                            </li>
                            <li class="text-lg">
                                <a>Products</a>
                                <ul>
                                    <li><a href="Search.php">UI Kit</a></li>
                                    <li><a href="Search.php">Wordpress themes</a></li>
                                    <li><a href="Search.php">Wordpress plugins</a></li>
                                    <li>
                                        <a>Open source</a>
                                        <ul>
                                            <li><a href="Search.php">Auth management system</a></li>
                                            <li><a href="Search.php">VScode theme</a></li>
                                            <li><a href="Search.php">Color picker app</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </details>
                </li>
                <li><a href="ContactUs.php" class="group hover:text-white">ติดต่อเรา</a></li>
            </ul>
        </div>
        <div class="flex-none gap-2">
            <div class="form-control">
                <div class="input-group">
                    <input type="text" placeholder="ค้นหา" class="input input-bordered text-lg" />
                    <button class="NavbarSearch btn btn-square bg-base-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="dropdown dropdown-end" id="profile-menu">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-full rounded-full ring ring-[#fff]" id="profile-image-container">
                        <img src="images/cat 1.jpg" id="profile-image" />
                    </div>
                </label>
                <ul tabindex="0"
                    class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-200 rounded-box lg:min-w-max"
                    id="ProfileNavbar">
                    <li>
                        <a href="userProfile.php" class="justify-between text-lg mb-2 mt-2">
                            ข้อมูลผู้ใช้
                        </a>
                    </li>
                    <li><a class="text-lg mb-2" href="userProfile.php">ประวัติการรีวิวและโพสต์รีวิวเกม</a></li>
                    <li><a class="text-lg mb-2" href="indexlogout.php" id="logout">ออกจากระบบ</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>

    <div class="container-review">
        <div class="row row-1">
            <div class="col col-1">
                <p class="text-3xl" id="gameID-review">Cities: Skylines II</p>
                <img src="imagesgame/cities 2.jpg">
                <div class="label-cat-show">
                    <p class="text-2xl" id="category-review">หมวดหมู่เกม : </p>
                    <p class="text-2xl" id="rating-what-review">เรตติ้ง : </p>
                </div>
            </div>
            <div class="col col-2">
                <div class="topScore">
                    <div class="name-score-review">
                        <p class="score-n text-4xl">คะแนนเฉลี่ย</p>
                        <div class="tooltip" data-tip="การเล่น เนื้อเรื่อง ประสิทธิภาพ">
                            <img class="image-icon-index" src="images/tooltip white.png">
                        </div>
                    </div>
                </div>
                <div class="centerScore">
                    <div class="mainScore" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"
                        style="--value:37">
                    </div>
                </div>
            </div>
            <div class="col col-3">
                <div class="rowOne">
                    <p class="text-3xl">การเล่น</p>
                    <div class="Score3" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"
                        style="--value:37"></div>
                </div>
                <div class="rowTwo">
                    <p class="text-3xl">เนื้อเรื่อง</p>
                    <div class="Score3" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"
                        style="--value:37"></div>
                </div>
                <div class="rowThree">
                    <p class="text-3xl">ประสิทธิภาพ</p>
                    <div class="Score3" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"
                        style="--value:37"></div>
                </div>
            </div>
        </div>
        <div class="row row-2">
            <div class="col col-4">
                <div class="count-review-review">
                    <div class="re-cou text-2xl">
                        รีวิว : <span id="count-reviewID-review">2,145</span> ครั้ง
                        <button class="write-review-button btn text-xl" id="write-review-buttonID">เขียนรีวิว</button>
                    </div>
                    <div class="re-cou-po text-2xl">
                        <button class="write-post-review-button btn text-xl"
                            id="write-post-review-buttonID">สร้างโพสต์รีวิว</button>
                        โพสต์รีวิว : <span id="count-postreviewID-review">1,005</span> ครั้ง
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-3">
            <div class="horizontal-lines"></div>
        </div>

        <div class="row row-4">
            <div class="col col-6">
                <div class="sort-re">
                    <p class="l-re text-2xl mb-1">รีวิว เรียงจาก</p>
                    <select class="select select-info w-64 max-w-xs text-lg">
                        <option disabled selected>ล่าสุด</option>
                        <option>ล่าสุด</option>
                        <option>3 วันที่แล้ว</option>
                        <option>7 วันที่แล้ว</option>
                        <option>14 วันที่แล้ว</option>
                        <option>21 วันที่แล้ว</option>
                        <option>30 วันที่แล้ว</option>
                    </select>
                </div>
                <div class="con-review">
                    <div class="header-left-con-review">
                        <div class="circle-con-review">
                            <img id="userImage" src="images/clown.jpg" alt="รูปภาพของคุณ">
                        </div>
                        <div class="user-info-con-review">
                            <p id="user-name">ชื่อบัญชี</p>
                            <p id="postDate">วัน/เดือน/ปี</p>
                            <p id="lv">ระดับ : Gold</p>
                        </div>

                        <div class="dropdownBox dropdown dropdown-bottom ml-auto">
                            <label tabindex="0">
                                <img src="images/more.png" class="report">
                            </label>
                            <ul tabindex="0"
                                class="dropdown-content z-[1] menu p-1 shadow rounded-box -ml-5 -mt-5 bg-[#e2384f] group hover:bg-[#dd1933]">
                                <li><a>รายงาน</a></li>
                            </ul>
                        </div>

                    </div>
                    <textarea id="userReview-con-review" rows="3" cols="65" placeholder="ข้อความเขียนรีวิว....."
                        readonly></textarea>

                    <div class="container container-score-review">
                        <div class="col-content-review col-content-1-review">
                            <!-- Content of Col 1 -->
                            <p>คะแนนเกม</p>
                            <div class="ScoreShowReview" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100" style="--value:38"></div>
                        </div>
                        <div class="col-content-review col-content-2-review">
                            <!-- Content of Col 2 -->
                            <p>การเล่น</p>
                            <div class="ScoreShowReview" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100" style="--value:38"></div>
                        </div>
                        <div class="col-content-review col-content-3-review">
                            <!-- Content of Col 3 -->
                            <p>เนื้อเรื่อง</p>
                            <div class="ScoreShowReview" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100" style="--value:38"></div>
                        </div>
                        <div class="col-content-review col-content-4-review">
                            <!-- Content of Col 4 -->
                            <p>ประสิทธิภาพ</p>
                            <div class="ScoreShowReview" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100" style="--value:38"></div>
                        </div>
                    </div>
                </div>
                <button class="ShowMore btn btn-outline w-96 text-lg">ดูเพิ่มเติม</button>

            </div>
            <div class="vertical-line"></div>
            <div class="col col-8">
                <div class="sort-re">
                    <p class="l-re-r text-2xl">โพสต์รีวิว เรียงจาก</p>
                    <select class="select select-info w-64 max-w-xs text-lg">
                        <option disabled selected>ล่าสุด</option>
                        <option>ล่าสุด</option>
                        <option>3 วันที่แล้ว</option>
                        <option>7 วันที่แล้ว</option>
                        <option>14 วันที่แล้ว</option>
                        <option>21 วันที่แล้ว</option>
                        <option>30 วันที่แล้ว</option>
                    </select>
                </div>
                <div class="con-review-p">
                    <div class="header-left-con-review-p">
                        <div class="circle-con-review-p">
                            <img id="userImage" src="images/cat 1.jpg" alt="รูปภาพของคุณ">
                        </div>
                        <div class="user-info-con-review-p">
                            <p id="user-name">ชื่อบัญชี</p>
                            <p id="postDate">วัน/เดือน/ปี</p>
                            <p id="lv">ระดับ : Gold</p>
                        </div>

                        <div class="dropdownBox dropdown dropdown-bottom ml-auto">
                            <label tabindex="0">
                                <img src="images/more.png" class="report">
                            </label>
                            <ul tabindex="0"
                                class="dropdown-content z-[1] menu p-1 shadow rounded-box -ml-5 -mt-5 bg-[#e2384f] group hover:bg-[#dd1933]">
                                <li><a>รายงาน</a></li>
                            </ul>
                        </div>

                    </div>
                    <textarea id="userReview-con-review-p" rows="3" cols="65" placeholder="ข้อความเขียนรีวิว....."
                        readonly></textarea>

                    <div class="container container-score-post-review">
                        <div class="col-content-post-review col-content-1-post-review">
                            <!-- Content of Col 1 -->
                            <p>คะแนนเกม</p>
                            <div class="ScoreShowPostReview" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100" style="--value:38"></div>
                        </div>
                        <div class="col-content-post-review col-content-2-post-review">
                            <!-- Content of Col 2 -->
                            <p>การเล่น</p>
                            <div class="ScoreShowPostReview" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100" style="--value:38"></div>
                        </div>
                        <div class="col-content-post-review col-content-3-post-review">
                            <!-- Content of Col 3 -->
                            <p>เนื้อเรื่อง</p>
                            <div class="ScoreShowPostReview" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100" style="--value:38"></div>
                        </div>
                        <div class="col-content-post-review col-content-4-post-review">
                            <!-- Content of Col 4 -->
                            <p>ประสิทธิภาพ</p>
                            <div class="ScoreShowPostReview" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100" style="--value:38"></div>
                        </div>
                    </div>
                    <div class="container container-score-post-review">
                        <div class="col-content-post-review col-content-5-post-review">
                            <!-- Content of Col 5 -->
                            <p>ประเด็นที่ 1</p>
                            <div class="ScoreShowPostReview" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100" style="--value:38"></div>
                        </div>
                        <div class="col-content-post-review col-content-6-post-review">
                            <!-- Content of Col 6 -->
                            <p>ประเด็นที่ 2</p>
                            <div class="ScoreShowPostReview" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100" style="--value:38"></div>
                        </div>
                    </div>
                    <div class="horizontal-line-comment"></div>
                    <div class="comment-post-p">
                        <i class="comment-po fa-regular fa-comment fa-2xl" style="color: #1f2251;"></i>
                        <p>ความคิดเห็น (<span id="comment-p">3</span>)</p>
                    </div>

                    <div class="user-comment">
                        <div class="circle-con-review-p-user-comment">
                            <img id="userImage" src="images/peo 1.jpg" alt="รูปภาพของคุณ">
                        </div>
                        <div class="user-info-con-review-p">
                            <p id="user-name">ชื่อบัญชี</p>
                            <p id="postDate">วัน/เดือน/ปี</p>
                            <p id="lv">ระดับ : Gold</p>
                        </div>
                        <div class="dropdownBox dropdown dropdown-bottom ml-auto">
                            <label tabindex="0">
                                <img src="images/more.png" class="report">
                            </label>
                            <ul tabindex="0"
                                class="dropdown-content z-[1] menu p-1 shadow rounded-box -ml-5 -mt-5 bg-[#e2384f] group hover:bg-[#dd1933]">
                                <li><a>รายงาน</a></li>
                            </ul>
                        </div>
                    </div>
                    <textarea id="userReview-con-review-p-user-comment" rows="3" cols="65"
                        placeholder="ความคิดเห็น....." readonly></textarea>
                    <button type="button" class="view-comments btn" id="ShowComment">ดูความคิดเห็น</button>

                </div>
                <button class="ShowMore btn btn-outline w-96 text-lg">ดูเพิ่มเติม</button>
            </div>
        </div>
        <div class="row row-5">
            <div class="horizontal-lines-foot"></div>
        </div>



        <div class="row row-6">
            <div class="container-footer-rg">
                <div class="header-container">
                    <h2 class="write-text">เขียนรีวิวเกมของคุณ</h2>
                    <a class="backtotop" href="#" id="back-to-top">กลับไปด้านบนสุด</a>
                    <img src="images/right arrow 2 white top.png" alt="กลับไปด้านบน" id="back-to-top-icon">
                </div>

                <div class="main-box-rp">
                    <div class="review-input">
                        <p>เขียนรีวิว</p>
                        <textarea class="review-input-text-rp" id="review-text-rp" name="review-text"
                            placeholder="เขียนรีวิวของคุณ..."></textarea>
                    </div>
                    <div class="rating-rg">
                        <div class="conReviewScore">
                            <div class="rowReview">
                                <div class="colReview col1Review">
                                    <!-- เนื้อหาคอลัมน์ที่ 1 -->
                                    <p>การเล่น</p>
                                    <div class="playing-star-rg">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="colReview col2Review">
                                    <!-- เนื้อหาคอลัมน์ที่ 2 -->
                                    <p>เนื้อเรื่อง</p>
                                    <div class="story-star-rg">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="conReviewScore">
                            <div class="rowReview">
                                <div class="colReview col1Review">
                                    <!-- เนื้อหาคอลัมน์ที่ 1 -->
                                    <p>ประสิทธิภาพ</p>
                                    <div class="efficiency-star-rg">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="colReview col2Review">
                                    <!-- เนื้อหาคอลัมน์ที่ 2 -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="create-button-container">
                        <button class="create-review-button btn">สร้างรีวิว</button>
                    </div>
                </div>

                <div class="header-container-post">
                    <h2 class="write-text-post">เขียนโพสต์รีวิวเกมของคุณ</h2>
                    <a class="backtotop" href="#" id="back-to-top-post">กลับไปด้านบนสุด</a>
                    <img src="images/right arrow 2 white top.png" alt="กลับไปด้านบน" id="back-to-top-icon-post">
                </div>
                <div class="main-box-post">
                    <div class="review-input-post">
                        <p>เขียนโพสต์รีวิว</p>
                        <textarea class="review-input-text-post" id="review-text" name="review-text"
                            placeholder="เขียนโพสต์รีวิวของคุณ..."></textarea>
                    </div>
                    <div class="rating-post">
                        <div class="conPostScore">
                            <div class="rowPost">
                                <div class="colPost col1Post">
                                    <!-- เนื้อหาคอลัมน์ที่ 1 -->
                                    <p>การเล่น</p>
                                    <div class="playing-star-post">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    </p>
                                </div>
                                <div class="colPost col2Post">
                                    <!-- เนื้อหาคอลัมน์ที่ 2 -->
                                    <p>เนื้อเรื่อง</p>
                                    <div class="story-star-post">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="conPostScore">
                            <div class="rowPost">
                                <div class="colPost col1Post">
                                    <!-- เนื้อหาคอลัมน์ที่ 1 -->
                                    <p>ประสิทธิภาพ</p>
                                    <div class="efficiency-star-post">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="colPost col2Post">
                                    <!-- เนื้อหาคอลัมน์ที่ 2 -->
                                    <p class="add-content-one" id="review-content-one">เพิ่มประเด็นที่ 1</p>
                                    <div class="other">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="conPostScore">
                            <div class="rowPost">
                                <div class="colPost col1Post">
                                    <!-- เนื้อหาคอลัมน์ที่ 1 -->
                                    <p class="add-content-two" id="review-content-two">เพิ่มประเด็นที่ 2</p>
                                    <div class="others">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="colPost col2Post">
                                    <!-- เนื้อหาคอลัมน์ที่ 2 -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="create-button-container">
                        <button class="create-add-review-button">เพิ่มประเด็นรีวิว</button>
                        <button class="create-review-button-post btn">สร้างโพสต์รีวิว</button>
                    </div>

                    <div class="background-color-content" id="bcc1">
                        <div class="review-window-content">
                            <div class="review-text-content">
                                <p>เพิ่มประเด็นรีวิว</p>
                                <textarea id="review-input-content-one"
                                    placeholder="พิมพ์ข้อความเพื่อเพิ่มประเด็นที่ 1 (ไม่เกิน 40 ตัวอักษร)"></textarea>
                            </div>
                            <div class="review-controls-content">
                                <button class="button-clear" id="clear-button-content">ล้างข้อมูล</button>
                                <button class="button-back" id="back-button-content">ย้อนกลับ</button>
                                <button class="button-confirm" id="confirm-button-content">ยืนยัน</button>
                            </div>
                        </div>
                    </div>

                    <div class="background-color-content2" id="bcc2">
                        <div class="review-window-content2">
                            <div class="review-text-content2">
                                <p>เพิ่มประเด็นรีวิว</p>
                                <textarea id="review-input-content-two"
                                    placeholder="พิมพ์ข้อความเพื่อเพิ่มประเด็นที่ 2 (ไม่เกิน 40 ตัวอักษร)"></textarea>
                            </div>
                            <div class="review-controls-content2">
                                <button class="button-clear2" id="clear-button-content2">ล้างข้อมูล</button>
                                <button class="button-back2" id="back-button-content2">ย้อนกลับ</button>
                                <button class="button-confirm2" id="confirm-button-content2">ยืนยัน</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="overlay" id="overlay">
        <div class="popup">
            <div class="popup-content">
                <div class="con-review-comment bg-base-100">
                    <div class="rowComent">
                        <div class="colComent1 bg-base-200">
                            <p class="text-2xl">โพสต์รีวิวของ <span class="account-name">ชื่อบัญชี</span></p>
                            <button class="CloseWindowsComent btn btn-outline text-lg"
                                id="hideComments">ปิดหน้าต่าง</button>
                        </div>
                    </div>
                    <!-- <div class="rowComent">
                        <div class="colComent0">
                            <p class="text-2xl">ผู้เขียน</p>
                        </div>
                    </div> -->
                    <div class="rowComent">
                        <div class="colComent2">
                            <div class="containerAuthor">
                                <!-- Row 1 -->
                                <div class="rowAuthor">
                                    <div class="colAuthor1">
                                        <div class="circle-con-review-p-Author1">
                                            <img id="userImage" src="images/cat 1.jpg" alt="รูปภาพของคุณ">
                                        </div>
                                        <div class="user-info-con-review-p-Author1">
                                            <p id="user-name">ชื่อบัญชี</p>
                                            <p id="postDate">วัน/เดือน/ปี</p>
                                            <p id="lv">ระดับ : Gold</p>
                                        </div>

                                        <div class="dropdownBox dropdown dropdown-bottom ml-auto">
                                            <label tabindex="0">
                                                <img src="images/more.png" class="report">
                                            </label>
                                            <ul tabindex="0"
                                                class="dropdown-content z-[1] menu p-1 shadow rounded-box -ml-5 -mt-5 bg-[#e2384f] group hover:bg-[#dd1933]">
                                                <li><a>รายงาน</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row 2 -->
                                <div class="rowAuthor">
                                    <div class="colAuthor2">
                                        <textarea id="userReview-con-review-p" rows="3" cols="65"
                                            placeholder="ข้อความเขียนรีวิว....." readonly></textarea>
                                    </div>
                                </div>
                                <div class="container container-score-post-review">
                                    <div class="col-content-post-review col-content-1-post-review">
                                        <!-- Content of Col 1 -->
                                        <p>คะแนนเกม</p>
                                        <div class="ScoreShowPostReview" role="progressbar" aria-valuenow="65"
                                            aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                                    </div>
                                    <div class="col-content-post-review col-content-2-post-review">
                                        <!-- Content of Col 2 -->
                                        <p>การเล่น</p>
                                        <div class="ScoreShowPostReview" role="progressbar" aria-valuenow="65"
                                            aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                                    </div>
                                    <div class="col-content-post-review col-content-3-post-review">
                                        <!-- Content of Col 3 -->
                                        <p>เนื้อเรื่อง</p>
                                        <div class="ScoreShowPostReview" role="progressbar" aria-valuenow="65"
                                            aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                                    </div>
                                    <div class="col-content-post-review col-content-4-post-review">
                                        <!-- Content of Col 4 -->
                                        <p>ประสิทธิภาพ</p>
                                        <div class="ScoreShowPostReview" role="progressbar" aria-valuenow="65"
                                            aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                                    </div>
                                </div>
                                <div class="container container-score-post-review">
                                    <div class="col-content-post-review col-content-5-post-review">
                                        <!-- Content of Col 4 -->
                                        <p>ประเด็นที่ 1</p>
                                        <div class="ScoreShowPostReview" role="progressbar" aria-valuenow="65"
                                            aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                                    </div>
                                    <div class="col-content-post-review col-content-6-post-review">
                                        <!-- Content of Col 4 -->
                                        <p>ประเด็นที่ 2</p>
                                        <div class="ScoreShowPostReview" role="progressbar" aria-valuenow="65"
                                            aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rowComent">
                        <div class="colComent3">
                            <div class="comment-post">
                                <i class="comment-po fa-regular fa-comment fa-2xl" style="color: #fff;"></i>
                                <p>ความคิดเห็น (<span id="comment">3</span>)</p>
                            </div>
                        </div>
                    </div>

                    <div class="rowComent">
                        <div class="colComent4">
                            <div class="containerAuthor">
                                <!-- Row 1 -->
                                <div class="rowAuthor">
                                    <div class="colAuthor3">
                                        <p class="text-2xl">เขียนความคิดเห็น</p>
                                    </div>
                                </div>

                                <!-- Row 2 -->
                                <div class="rowAuthor">
                                    <div class="colAuthor4">
                                        <textarea id="userReview-con-review-p-c" rows="3" cols="65"
                                            placeholder="ข้อความเขียนรีวิว....."></textarea>
                                    </div>
                                </div>
                                <div class="CommentButton">
                                    <button class="btn text-lg w-60">แสดงความคิดเห็น</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rowComent">
                        <div class="colComent5">
                            <div class="containerAuthor">
                                <!-- Row 1 -->
                                <div class="rowAuthor">
                                    <div class="colAuthor5">
                                        <div class="circle-con-review-p-Author11">
                                            <img id="userImage" src="images/cat 1.jpg" alt="รูปภาพของคุณ">
                                        </div>
                                        <div class="user-info-con-review-p-Author1">
                                            <p id="user-name">ชื่อบัญชี</p>
                                            <p id="postDate">วัน/เดือน/ปี</p>
                                            <p id="lv">ระดับ : Gold</p>
                                        </div>

                                        <div class="dropdownBox dropdown dropdown-bottom ml-auto">
                                            <label tabindex="0">
                                                <img src="images/more.png" class="report">
                                            </label>
                                            <ul tabindex="0"
                                                class="dropdown-content z-[1] menu p-1 shadow rounded-box -ml-5 -mt-5 bg-[#e2384f] group hover:bg-[#dd1933]">
                                                <li><a>รายงาน</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row 2 -->
                                <div class="rowAuthor">
                                    <div class="colAuthor6">
                                        <textarea id="userReview-con-review-p-c" rows="3" cols="65"
                                            placeholder="ข้อความเขียนรีวิว....." readonly></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rowComent">
                        <div class="colComent6">
                            <button class="btn btn-outline w-96 text-lg">ดูเพิ่มเติม</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <button type="button" class="comment-show" id="CommentShow">เพิ่มความคิดเห็น</button> -->
            <!-- <button type="button" class="hide-button" id="hideComments">ปิดหน้าต่าง</button> -->
        </div>
    </div>

    <footer class="footer p-10 bg-base-200 text-base-content text-lg">
        <nav>
            <header class="footer-title">เกี่ยวกับเรา</header>
            <p>เว็บไซต์เกี่ยวกับ</p>
        </nav>
        <nav>
            <header class="footer-title">บริการ</header>
            <a href="" class="link link-hover">About us</a>
            <a href="" class="link link-hover">Contact</a>
            <a href="" class="link link-hover">Jobs</a>
            <a href="" class="link link-hover">Press kit</a>
        </nav>
        <nav>
            <header class="footer-title">ช่วยเหลือ</header>
            <a href="" class="link link-hover">Terms of use</a>
            <a href="" class="link link-hover">Privacy policy</a>
            <a href="" class="link link-hover">Cookie policy</a>
        </nav>
        <nav>
            <header class="footer-title">ช่องทางการติดตาม</header>
            <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg></a>
            </div>
        </nav>
    </footer>
</body>

</html>