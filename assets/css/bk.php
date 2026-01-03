<style>
    /* Reset and base styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --icon-font: "Font Awesome 6 Free";
        --primary-color: #333;
        --hover-color: #007bff;
        --bg-color: #fff;
        --dropdown-bg: #f8f9fa;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        background-color: #f5f5f5;
    }

    /* Navigation styles */
    .main-menu {
        background: var(--bg-color);
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        padding: 0 20px;
    }

    .main-menu ul {
        list-style: none;
        display: flex;
        align-items: center;
        margin: 0;
        padding: 0;
    }

    .main-menu ul li {
        position: relative;
    }

    .main-menu ul li a {
        display: block;
        padding: 20px 25px;
        text-decoration: none;
        color: var(--primary-color);
        font-weight: 500;
        transition: all 0.3s ease;
        border-bottom: 3px solid transparent;
    }

    .main-menu ul li a:hover {
        color: var(--hover-color);
        background-color: #f8f9fa;
        border-bottom-color: var(--hover-color);
    }

    /* Dropdown indicator */
    .main-menu ul li.menu-item-has-children > a:after {
        content: "\f078";
        display: inline-block;
        position: relative;
        font-family: var(--icon-font);
        margin-left: 8px;
        font-weight: 900;
        top: 0;
        font-size: 0.8em;
        color: inherit;
        transition: transform 0.3s ease;
    }

    /* Dropdown menu */
    .main-menu ul li ul.sub-menu {
        position: absolute;
        top: 100%;
        left: 0;
        background: var(--dropdown-bg);
        min-width: 220px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.3s ease;
        z-index: 1000;
        border-radius: 0 0 8px 8px;
        overflow: hidden;
    }

    .main-menu ul li ul.sub-menu li {
        width: 100%;
    }

    .main-menu ul li ul.sub-menu li a {
        padding: 15px 25px;
        border-bottom: 1px solid #e9ecef;
        border-left: 3px solid transparent;
    }

    .main-menu ul li ul.sub-menu li a:hover {
        background-color: #e9ecef;
        border-left-color: var(--hover-color);
        border-bottom-color: #e9ecef;
    }

    /* Hover effects */
    .main-menu ul li:hover > ul.sub-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .main-menu ul li.menu-item-has-children:hover > a:after {
        transform: rotate(180deg);
    }

    /* Nested dropdown */
    .main-menu ul li ul.sub-menu li.menu-item-has-children > a:after {
        content: "\f054";
        float: right;
        transform: rotate(0);
    }

    .main-menu ul li ul.sub-menu li.menu-item-has-children:hover > a:after {
        transform: rotate(90deg);
    }

    .main-menu ul li ul.sub-menu li ul.sub-menu {
        left: 100%;
        top: 0;
        transform: translateX(10px);
    }

    .main-menu ul li ul.sub-menu li:hover > ul.sub-menu {
        transform: translateX(0);
    }

    /* Mobile responsiveness */
    @media (max-width: 768px) {
        .main-menu ul {
            flex-direction: column;
        }

        .main-menu ul li {
            width: 100%;
        }

        .main-menu ul li ul.sub-menu {
            position: static;
            opacity: 1;
            visibility: visible;
            transform: none;
            box-shadow: none;
            background: #f8f9fa;
            display: none;
        }

        .main-menu ul li:hover > ul.sub-menu {
            display: block;
        }
    }


</style>