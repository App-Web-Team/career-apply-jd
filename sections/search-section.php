<style>
    .navbar {
        background-color: #fff;
        padding: 30px 50px;
    }

    .navbar-brand {
        height: auto;
        width: 180px;
    }

    .navbar-nav a {
        font-size: 26px;
        color: var(--primary-color) !important;
        font-weight: 700 !important;
        padding: 0px 30px !important;
        margin-top: auto;
        margin-bottom: auto;
    }

    .navbar-nav .active,
    .navbar-nav a:hover {
        color: var(--secondary-color) !important;
        text-decoration: 7px underline solid var(--secondary-color);
    }

    .navbar-nav .active {
        font-weight: 700 !important;
    }

    .fa-circle-user {
        font-size: 70px;
    }

    .navbar .form-control:focus {
        /* border-width: 2px; */
        border-color: white;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px var(--primary-color);
    }

    @media screen and (max-width: 992px) {
        .navbar-nav a {
            margin-top: 20px;
        }
    }
</style>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light pt-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="assets/images/hr-logo.png" alt="" class="img-fluid">
        </a>
        <form class="d-flex">
            <input class="form-control me-2 not-apply" type="search" placeholder="Search the Job" aria-label="Search">
            <!-- <button class="btn" type="submit">Search</button> -->
        </form>
    </div>
</nav>