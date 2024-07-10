<header>
    <nav class="navbar">
        &nbsp;
        <div class="logo" onclick="window.location.href='/'">CAREN</div>
        <ul class="menu" id="navbar-menu">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/menu">Menu</a></li>
            <li><a href="/reservation">Reservation</a></li>
        </ul>
        <button class="contact-button" onclick="window.location.href='/login'">
            Login</button>&nbsp;
    </nav>
</header>

<style scoped>
    /* Navbar Styles */
    .navbar {
        background-color: rgba(15, 40, 30, 0.9);
        /* Solid background color */
        padding: 10px 10px;
        position: fixed;
        width: 100%;
        z-index: 100;
        top: 0;
        /* Ensure the header stays at the top */
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar .logo {
        font-size: 24px;
        font-weight: 900;
        color: white;
        padding: 10px 10px;
    }

    .navbar .logo:hover {
        cursor: pointer;
    }
</style>
