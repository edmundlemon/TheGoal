<header>
    <nav class="navbar">
        &nbsp;


        @if (Auth::guard('admin')->check())
            <ul class="menu flex items-center justify-between p-4 text-white" id="navbar-menu">
                <div class="logo text-2xl font-bold cursor-pointer" onclick="window.location.href='/view-all-cars'">CAREN
                </div>

                <li class="ml-4"><a href="/view-all-cars" class="hover:text-gray-300">View All Cars</a></li>
                <li class="ml-4"><a href="/view-all-orders" class="hover:text-gray-300">View All Orders</a></li>
                <li class="ml-4"><a href="/view-all-customers" class="hover:text-gray-300">View All
                        Customers</a></li>
                <li class="ml-4"><a href="/view-all-feedback" class="hover:text-gray-300">View All
                        Feedback</a></li>
                <li class="ml-4"><a href="/view-all-inquiries" class="hover:text-gray-300">View All
                        Inquiries</a></li>
            </ul>
        @else
            <ul class="menu flex items-center justify-between p-4 text-white" id="navbar-menu">
                <div class="logo text-2xl font-bold cursor-pointer" onclick="window.location.href='/'">CAREN</div>
                <li class="ml-4"><a href="/" class="hover:text-gray-300">Home</a></li>
                <li class="ml-4"><a href="/about" class="hover:text-gray-300">About</a></li>
                <li class="ml-4"><a href="/menu" class="hover:text-gray-300">Menu</a></li>
                <li class="ml-4"><a href="/inquiries" class="hover:text-gray-300">Inquiries</a></li>
            </ul>
        @endif

        @if (Auth::guard('customer')->check())
            <div>
                <a href="/customer/orders" class="contact-button">Orders</a>
                <a href="/logout" class="contact-button">Logout</a>
            </div>
        @elseif (Auth::guard('admin')->check())
            <div>
                <a href="/addcar" class="contact-button">Add Car</a>
                <a href="/pending-orders" class="contact-button">Pending Orders</a>
                <a href="/admin/logout" class="contact-button">Logout</a>
            </div>
        @else
            <a href="/login" class="contact-button">Login</a>
        @endif

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

    .menu {
        list-style: none;
        display: flex;
        margin: 0;
        padding: 0;
    }

    .menu li {
        margin: 0 10px;
    }

    .menu li a {
        color: white;
        text-decoration: none;
        font-size: 16px;
    }

    .contact-button {
        background-color: white;
        color: #0f281e;
        font-weight: 700;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .hero {
        background: url('carimage/klbackgrd.jpg') no-repeat center center/cover;
        color: #fff;
        text-align: center;
        padding: 150px 20px;
        /* Increased padding for a larger hero section */
    }

    .hero h1 {
        font-size: 48px;
        margin-bottom: 20px;
    }

    .intro {
        text-align: center;
        padding: 50px 20px;
        background-color: #fff;
    }

    .intro h2 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .intro p {
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .purpose {
        display: flex;
        justify-content: center;
        gap: 20px;
        padding: 50px 20px;
        background-color: #e0f7fa;
    }

    .purpose-item {
        max-width: 500px;
        text-align: center;
    }

    .purpose-item h3 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .values {
        text-align: center;
        padding: 50px 20px;
        background-color: #fff;
    }

    .values h2 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .value-item-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 40px;
    }

    .value-item {
        width: 200px;
        text-align: center;
    }

    .value-item img {
        width: 50px;
        height: 50px;
        margin-bottom: 10px;
    }

    .value-item h3 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .leadership {
        text-align: center;
        padding: 50px 20px;
        background-color: #e0f7fa;
    }

    .leadership h2 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .leaders {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .leader-item {
        max-width: 200px;
        text-align: center;
    }

    .leader-item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 10px;
    }

    .leader-item h3 {
        font-size: 18px;
        margin-bottom: 5px;
    }

    .leader-item p {
        font-size: 16px;
    }
</style>
