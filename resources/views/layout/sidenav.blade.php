<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Side Navigation Layout</title>
    <link rel="stylesheet" href="{{asset('css/sidenav.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body>
    <div class="sidenav">
        <div class="logo">
            <img class="img_logo" src="{{ asset('img/onway_logo.png') }}" alt="Onway Logo">

        </div>
        <hr>
        <br>
        <div class="nav">
            <div class="menu">
                {{-- ----- DASHBBOARD ----- --}}
                <div class="item">
                    <div class="item_name">
                        <i class="bi bi-speedometer menu_icon"></i>
                        <a class="menu_name" href="/dashboard">Dashboard</a>
                    </div>
                </div>
                {{-- ----- CUSTOMER ----- --}}
                <div class="item">
                    <div class="item_name">
                        <i class="bi bi-person-square menu_icon"></i>
                        <a class="menu_name"  href="/customer">Customer List</a>
                    </div>
                </div>
                {{-- ----- DRIVER ----- --}}
                <div class="item">
                    <div class="item_name">
                        <i class="bi bi-bicycle menu_icon"></i>
                        <a class="menu_name" href="/driver">Driver List</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="content_here">
        @yield('add_content')
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Toggle the "Orders" dropdown
            $("#ordersDropdownToggle").click(function() {
                $("#dropdown-content-orders").toggleClass("active");
            });
            
            // Toggle the "Users" dropdown
            $("#usersDropdownToggle").click(function() {
                $("#dropdown-content-users").toggleClass("active");
            });

            // Toggle the "Products" dropdown
            $("#productsDropdownToggle").click(function() {
                $("#dropdown-content-products").toggleClass("active");
            });

            // Toggle the "Payments & Finance" dropdown
            $("#paymentsDropdownToggle").click(function() {
                $("#dropdown-content-payments").toggleClass("active");
            });

            // Close the dropdown when the user hovers off
            $(".item").mouseleave(function() {
                $(".dropdown_content.active").removeClass("active");
            });
        }); --}}
    </script>



    
</body>
</html>