<?php

include("messageCount.php");

?>


<?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['admin_name'])) {
    header("Location: adminlogin.php");
    exit();
}

// Get the logged-in admin's name and photo from the session
$name = isset($_SESSION['admin_name']) ? $_SESSION['admin_name'] : '';
$photo = isset($_SESSION['admin_photo']) ? $_SESSION['admin_photo'] : '';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <link rel="stylesheet" href="my res dashbrd.css">
      <link rel="stylesheet" href="display data for customer.css">
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    
      <title>RES DashBoard</title>

        <style>

            #chartGraph{
                width: 1%;
            }
    .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            display: none;
            padding: 0;
            margin-top: -150%;
            background-color: #ff6f;
            height: 15%;
            border: none;
            box-shadow: 0px 8px 5px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-item {
            padding: 10px 20px;
            color: #333;
            font-weight: 500;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            background-color: transparent;
            color: #000;
            border-radius: 50px;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

    .col-sm-12 {
        box-sizing: border-box;
    }

    .h-100 {
        height: 100%;
    }

    .bg-secondary {
        background-color: #6c757d;
    }

    .rounded {
        border-radius: 0.25rem;
    }

    .p-4 {
        padding: 1.5rem;
    }

    .d-flex {
        display: flex;
    }

    .align-items-center {
        align-items: center;
    }

    .justify-content-between {
        justify-content: space-between;
    }

    .mb-4 {
        margin-bottom: 1rem;
    }

    .mb-0 {
        margin-bottom: 0;
    }

    .calendar-container {
        height: 10%;
    }
</style>

</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
              <div class="logo">
                <img src="shop.jpg">
                <h2>RE<span class="danger">SHOP</span></h2>
              </div>
                <div class="close" id="close-btn">
                  <span class="material-icons-sharp">
                    close
                  </span>
                </div>
            </div>

    <div class="sidebar">
        <a href="my res dashbrd.php">
            <span class="material-icons-sharp">
                grid_view
                </span>
            <h3>DashBoard</h3>
        </a>
        <a href="my res dashbrd2.php">
            <span class="material-icons-sharp">
                visibility
                </span>
            <h3>all customer</h3>
        </a>
        <a href="#">
            <span class="material-icons-sharp">
                receipt_long
                </span>
            <h3>Order</h3>
        </a>
        <a href="categorydash.php">
            <span class="material-icons-sharp">
              category
            </span>
            <h3>Categories</h3>
        </a>
        <a href="messagedash.php">
            <span class="material-icons-sharp">
                email
                </span>
            <h3>Messages</h3>
            <span class="message-count"><?php echo $messageCount; ?></span>
        </a>

        <a href="allprdct.php">
            <span class="material-icons-sharp">
                visibility
                </span>
            <h3>All Product</h3>
        </a>
        <a href="add product.php">
            <span class="material-icons-sharp">
                add
                </span>
            <h3>Add Product</h3>
        </a>
        <a href="#">
            <span class="material-icons-sharp">
                report_gmailerrorred
                </span>
            <h3>Reports</h3>
        </a>
        <a href="dashtable.php">
            <span class="material-icons-sharp">
              table_view
            </span>
            <h3>tables</h3>
        </a>
         <a href="#">
            <span class="material-icons-sharp">
              assessment
            </span>
            <h3>chart</h3>
        </a>

         <div class="container">
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle">
                <span class="material-icons-sharp">
                    description
                </span>
                <h3>Pages</h3>
                <span class="material-icons-sharp">
                    arrow_drop_down
                </span>
            </a>
            <div class="dropdown-menu">
                <a href="signin.php" class="dropdown-item">Regstr</a>
                <a href="adminlogin.php" class="dropdown-item">Login</a>
            </div>
        </div>
    </div>
        <a href="#" id="logout" onclick="logout()">
            <span class="material-icons-sharp">
              logout
            </span>
            <h3>Logout</h3>
          </a>
        <script>
              function logout() {
            var result = confirm("Are you sure you want to logout?");
              if (result) {
                // Perform logout action
                alert("You have been logged out!");
                window.location.href = "adminlogin.php";
                // Redirect to another page if needed: window.location.href = "adminlog.php";
              } else {
                // Stay on the current page
                alert("Logout canceled. You're still on the page!");
                window.location.href = "my res dashbrd.php";
              }
        }        
        </script>
            </div>
            </aside>

    <main>
        <h1>DashBoard</h1>

        <div class="date">
            <input type="date">
        </div>

        <div class="insight">
            <div class="sales">
                <span class="material-icons-sharp">
                    analytics
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Products</h3>
                            <h1>$25000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
            </div>
                     <!-----------sales--------------->
            <div class="expenses">
                <span class="material-icons-sharp">
                    bar_chart
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Expenses</h3>
                            <h1>$14000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>50%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
            </div>
                    <!---------------Expenses--------------->
            <div class="incame">
                <span class="material-icons-sharp">
                    stacked_line_chart
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Incame</h3>
                            <h1>$55000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>91%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
            </div>
            <!--------------Incame------------------>
        </div>
        <!-------------End of insight--------------->
        <div class="chart">
          <div class="recent-order1">
            <h2>Chart Graph</h2>
            <canvas id="chartGraph" style="max-width: 100%;"></canvas>
          </div>
        </div>
   <script>
    // Get the canvas element
    var ctx = document.getElementById('chartGraph').getContext('2d');
    
    // Create the chart
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['messages', 'product', 'customer'],
            datasets: [{
                label: 'Level',
                data: [7, 20, 10],
                backgroundColor: ['green', 'rgba(54, 162, 235, 0.2)', 'cyan'],
                borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
                borderWidth: 1

            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
    

    </main>

    <div class="right">
        <div class="top">
            <button id="menu-btn">
                <span class="material-icons-sharp">
                    menu
                    </span>
            </button>
            <div class="theme-toggler">
                <span class="material-icons-sharp active">
                    light_mode
                </span>
                <span class="material-icons-sharp">
                        dark_mode
                </span>
            </div>
            <form action="adminlogin.php" method="POST">
            <div class="profile">
            <div class="info">
                    <p>Hey, <b><?php echo $name; ?></b></p>
                    <small class="text-muted">Admin</small>
                </div>
                <div class="profile-photo">
                    <img src="<?php echo $photo; ?>" alt="Admin Photo">
                </div>
            </div>
        </div>

          <!-----------------------Recent Update---------------------->
            <div class="recent-updates">
                <h2>Recent Update</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="cruise.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Janvier</b> received his order of Night lion GPS drone.</p>
                            <small class="text-muted"> 2 Minutes Ago</small>
                        </div>

                        <div class="update">
                            <div class="profile-photo">
                                <img src="vandrooo.jpg" alt="">
                            </div>
                            <div class="message">
                                <p><b>Vandrossi</b> received his order of Night lion GPS drone.</p>
                                <small class="text-muted"> 2 Minutes Ago</small>
                            </div>
                        </div>
                </div>
                <!-----------------end of recent updates------------------------>
                <div class="sales-analytics">
                    <h2>Sales Analytics</h2>
                    <div class="item online">
                        <div class="icon">
                            <span class="material-icons-sharp">
                                shopping_cart
                                </span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>ONLINE ORDERS</h3>
                                <small class="text-muted">Last 24Hours</small>
                            </div>
                            <h5 class="success">+39%</h5>
                            <h3>3849</h3>
                        </div>
                    </div>
                    <div class="item offline">
                        <div class="icon">
                            <span class="material-icons-sharp">
                                local_mall
                                </span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>OFF ORDERS</h3>
                                <small class="text-muted">Last 24Hours</small>
                            </div>
                            <h5 class="danger">-17%</h5>
                            <h3>2200</h3>
                        </div>
                    </div>
                    <div class="item customers">
                        <div class="icon">
                            <span class="material-icons-sharp">
                                person
                                </span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>NEW CUTOMERS</h3>
                                <small class="text-muted">Last 24Hours</small>
                            </div>
                            <h5 class="success">+25%</h5>
                            <h3>349</h3>
                        </div>
                    </div>
                    <div class="item add-product">
                        <div>
                            <span class="material-icons-sharp">
                                add
                                </span>
                                <h3>Add Product</h3>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
    <script src="my res dashbrd.js"></script>
    <script>
     document.addEventListener('DOMContentLoaded', function () {
            var dropdownToggle = document.querySelector('.dropdown-toggle');
            var dropdownMenu = document.querySelector('.dropdown-menu');

            dropdownToggle.addEventListener('click', function (event) {
                event.preventDefault();
                dropdownMenu.classList.toggle('show');
            });

            window.addEventListener('click', function (event) {
                if (!event.target.matches('.dropdown-toggle')) {
                    dropdownMenu.classList.remove('show');
                }
            });
        });
    </script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            // Configure calendar options here
            // For example:
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            initialView: 'dayGridMonth',
            events: [
                // Specify your events data here
                // For example:
                {
                    title: 'Event 1',
                    start: '2022-01-01'
                },
                {
                    title: 'Event 2',
                    start: '2024-01-01',
                    end: '2024-12-31'
                }
            ],
            dayRender: function (info) {
                var dayNumber = document.createElement('div');
                dayNumber.innerHTML = info.date.getDate();
                dayNumber.classList.add('fc-day-number');
                info.dayEl.appendChild(dayNumber);
            }
        });

        calendar.render();
    });
</script>
</body>
</html>