<br><br>
<!-- Template search-page -->
<link href="<?php echo base_url("assets/css/list.css"); ?>" rel="stylesheet">

  <div class="container" >
    <div class="text1">
        <h3>Webinar</h3>
        <p>Cari semua webinar yang ada disini sesuai yang kamu inginkan dengan mudah:</p>
    </div>

    <!-- SEARCH BAR -->
    <div class="search-bar">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Ketik Kata Kunci disini" aria-label="Recipient's username" aria-describedby="button-addon2">
          <button class="btn btn-outline-info" type="button" id="button-addon2">Enter</button>
        </div>
        <div class="category">
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <!-- <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck3">Semua</label> -->

                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck1">Gratis</label>

                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck2">Berbayar</label>

                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck3">Online</label>

                <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck4">Offline</label>

                <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck5">Sertifikat</label>

                <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck6">Minggu Ini</label>

                <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck7">Yang akan datang</label>
            </div>
        </div>
    </div>

    <!-- LIST WEBINAR -->
    <div class="list-webinar">
        <div class="card-list">
            <a href="<?php echo base_url('webinar_ctrl/webinar_page')?>">
            <article class="card">
            <figure class="card-image">
                <img src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyNDcwMTUwOQ&ixlib=rb-1.2.1&q=85" alt="An orange painted blue, cut in half laying on a blue background" />
            </figure>
                <div class="card-header">
                    <a href="#">When life gives you oranges</a>
                    <button class="icon-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" display="block" id="Heart">
                            <path d="M7 3C4.239 3 2 5.216 2 7.95c0 2.207.875 7.445 9.488 12.74a.985.985 0 0 0 1.024 0C21.125 15.395 22 10.157 22 7.95 22 5.216 19.761 3 17 3s-5 3-5 3-2.239-3-5-3z" />
                        </svg>
                    </button>
                </div>
                <div class="card-footer">
                    <div class="card-meta card-meta--views">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" display="block" id="EyeOpen">
                            <path d="M21.257 10.962c.474.62.474 1.457 0 2.076C19.764 14.987 16.182 19 12 19c-4.182 0-7.764-4.013-9.257-5.962a1.692 1.692 0 0 1 0-2.076C4.236 9.013 7.818 5 12 5c4.182 0 7.764 4.013 9.257 5.962z" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                        2,465
                    </div>
                </div>
                <div class="card-meta card-meta--date">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" display="block" id="Calendar">
                        <rect x="2" y="4" width="20" height="18" rx="4" />
                        <path d="M8 2v4" />
                        <path d="M16 2v4" />
                        <path d="M2 10h20" />
                    </svg>
                    Jul 26, 2019
                </div>
            </article>
            </a>
        </div>

        <div class="card-list">
            <article class="card">
            <figure class="card-image">
                <img src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyNDcwMTUwOQ&ixlib=rb-1.2.1&q=85" alt="An orange painted blue, cut in half laying on a blue background" />
            </figure>
                <div class="card-header">
                    <a href="#">When life gives you oranges</a>
                    <button class="icon-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" display="block" id="Heart">
                            <path d="M7 3C4.239 3 2 5.216 2 7.95c0 2.207.875 7.445 9.488 12.74a.985.985 0 0 0 1.024 0C21.125 15.395 22 10.157 22 7.95 22 5.216 19.761 3 17 3s-5 3-5 3-2.239-3-5-3z" />
                        </svg>
                    </button>
                </div>
                <div class="card-footer">
                    <div class="card-meta card-meta--views">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" display="block" id="EyeOpen">
                            <path d="M21.257 10.962c.474.62.474 1.457 0 2.076C19.764 14.987 16.182 19 12 19c-4.182 0-7.764-4.013-9.257-5.962a1.692 1.692 0 0 1 0-2.076C4.236 9.013 7.818 5 12 5c4.182 0 7.764 4.013 9.257 5.962z" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                        2,465
                    </div>
                </div>
                <div class="card-meta card-meta--date">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" display="block" id="Calendar">
                        <rect x="2" y="4" width="20" height="18" rx="4" />
                        <path d="M8 2v4" />
                        <path d="M16 2v4" />
                        <path d="M2 10h20" />
                    </svg>
                    Jul 26, 2019
                </div>
            </article>
        </div>

        <div class="card-list">
            <article class="card">
            <figure class="card-image">
                <img src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyNDcwMTUwOQ&ixlib=rb-1.2.1&q=85" alt="An orange painted blue, cut in half laying on a blue background" />
            </figure>
                <div class="card-header">
                    <a href="#">When life gives you oranges</a>
                    <button class="icon-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" display="block" id="Heart">
                            <path d="M7 3C4.239 3 2 5.216 2 7.95c0 2.207.875 7.445 9.488 12.74a.985.985 0 0 0 1.024 0C21.125 15.395 22 10.157 22 7.95 22 5.216 19.761 3 17 3s-5 3-5 3-2.239-3-5-3z" />
                        </svg>
                    </button>
                </div>
                <div class="card-footer">
                    <div class="card-meta card-meta--views">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" display="block" id="EyeOpen">
                            <path d="M21.257 10.962c.474.62.474 1.457 0 2.076C19.764 14.987 16.182 19 12 19c-4.182 0-7.764-4.013-9.257-5.962a1.692 1.692 0 0 1 0-2.076C4.236 9.013 7.818 5 12 5c4.182 0 7.764 4.013 9.257 5.962z" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                        2,465
                    </div>
                </div>
                <div class="card-meta card-meta--date">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" display="block" id="Calendar">
                        <rect x="2" y="4" width="20" height="18" rx="4" />
                        <path d="M8 2v4" />
                        <path d="M16 2v4" />
                        <path d="M2 10h20" />
                    </svg>
                    Jul 26, 2019
                </div>
            </article>
        </div>
    </div>

  </div>

