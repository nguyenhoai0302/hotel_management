<!-- hearder -->
<style>
  body {
    margin: 0;
    padding: 0;
    /* box-sizing: border-box; */
    /* position: relative; */
    font-family: 'Roboto', sans-serif;
}

.logo {
    margin-left: 10px;
}

.section-title {
    color: #ffe53f !important;
}

.nav_text:hover {
    color:#ffe53f;
}

#logo_nav {
    width: 90px;
}

.nav {
    position: fixed;
    width: 100%;
    z-index: 1;
    left: -3px;
    top: 0px
}

.nav {
    background-color: black;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav>.nav_text {
    font-family: 'Roboto', sans-serif;
    font-size: larger;
    color: white;
}

.nav_log.nav_text {
    display: flex;
    gap: 20px;
    margin-right: 50px;
}

.nav_text>input {
    border-radius: 10px;
    width: 200px;
    /* position: relative; */
}

.nav_text>.material-symbols-outlined {
    display: inline-block;
    position: absolute;
    top: 33%;
}

.nav_text:not(:first-child):not(:nth-child(5)):not(:nth-child(6)) a:hover {
    color: #ffe53f;
}


a {
    color: #f9f5f7;
    font-family: 'Roboto', sans-serif;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    text-decoration: none;
}

a:hover {
    color: #ffe53f;
}

#nav-avata {
    height: 50px;
    border-radius: 50%;
}

#search {
    outline: none;
    background-color: black;
    border: none;
    margin-left: 2px;
}



i {
    color: #ffe53f;
    font-size: 20px;
    margin-right: 20px;
}

#navbar--user {
    padding: 20px;
}

.row--contact {
    padding: 20px;
}

.row-navbar {
    background-color: black;
    padding: 5px;
}


.navbar-search {
    padding: 8px;
}

.nav-link {
    margin-right: 100px;
}

.nav_text:hover {
    color: #ffe53f  !important;
}

.nav-text-signin {
    background-color: black;
    color: white;
    border: none;
}

.overviews {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}

.overview {
    border: 1px solid #ffe53f;
    padding: 10px;
    width: 200px;
    height: 180px;
}

.overview p {
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ffe53f;
    text-align: center;
    font-size: 20px;
}

.about-us__our_rooms {
    display: flex;
    justify-content: center;
    align-items: center;
}

#avata {
    margin-right: 40px;
}

.section-title.text-white.text-uppercase.mb-4 {
    width: 268px;
    height: 48px;
    color: #ffe53f !important;
    font-size: xx-large;
}

.fa-solid.fa-magnifying-glass {
    position: relative;
    left: -20%;
    bottom: 5px;
}
/* footer */

#footer {
    padding-left: 50px;
    width: 100%;
    background-color: #000000 !important;
}

.nav_text_footer:hover {
    color: #ffe53f;
}

.footer_contact {
    margin-bottom: 10px;
    margin-top: 10px;
}

.col-md-6.col-lg-4 {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.dropdown-toggle::after {
    content: none;
}

/* responsive */
.list-navbar {
    display: none;
}

.list_navbar_drop_signin {
    display: none;
}
.card-body{
    color: #000000;
}



</style>