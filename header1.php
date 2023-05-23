<!-- mobile responsive meta -->

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">




<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="css/custom.css">

<link rel="stylesheet" href="css/responsive.css">



<link rel="apple-touch-icon" sizes="180x180" href="images/fav-icon/apple-touch-icon.png">

<link rel="icon" type="image/png" href="images/logo/title-logo.jpg" sizes="32x32">

<link rel="icon" type="image/png" href="images/logo/title-logo1616.jpg" sizes="16x16">




</head>

<body>


    <div class="boxed_wrapper">



        <div class="top-bar">

            <div class="container">

                <div class="nav_side_content">

                    <!--div class="search_option">

                <button class="search tran3s dropdown-toggle color1_bg" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>

                <form action="#" class="dropdown-menu" aria-labelledby="searchDropdown">

                    <input type="text" placeholder="Search...">

                    <button><i class="fa fa-search" aria-hidden="true"></i></button>

                </form>

            </div-->

                </div>

                <div class="topbar-info">
                    <p><i class="fa fa-phone"></i> +91 8055798679 <i class="icon-note"></i>info@soulsoftinfotech.in</p>
                </div>

            </div>

        </div>



        <section class="mainmenu-area stricky">

            <div class="container">

                <div class="row">

                    <div class="col-md-3">

                        <div class="main-logo">

                            <a href="index.php"><img src="images/logo/logo2(1).jpg" alt=""></a>

                        </div>

                    </div>

                    <div class="col-md-9 menu-column">

                        <nav class="main-menu">

                            <div class="navbar-header">

                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                </button>

                            </div>

                            <div class="navbar-collapse collapse clearfix">

                                <ul class="navigation clearfix">

                                    <li class="active"><a href="Dashboard_SKS.php">Dashboard</a></li>
                                    <li class="dropdown"><a href="#">Outstanding</a>
                                        <ul>
                                            <li><a href="SupplierOutstanding.php">Supplier</a></li>
                                            <li><a href="Outstanding.php">Customer</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="Stock.php">Stock</a></li>
                                    <li class="dropdown"><a href="#">Transactions</a>
                                        <ul>
                                            <li><a href="DailyTransaction.php">Daily Transactions</a></li>
                                            <li><a href="TransactionHistory.php">Transactions History</a></li>
                                            <li><a href="GraphicalSales.php">Graphical Sales</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>

                                <!-- <ul class="navigation clearfix">

                            <li class="active"><a href="Dashboard_SKS.php">Dashboard</a></li>                           

                            <li><a href="SupplierOutstanding.php">Supplier Outstanding</a></li>

                            <li><a href="Outstanding.php">Customer Outstanding</a></li>

                            <li><a href="Stock.php">Stock</a></li>

                            <li><a href="DailyTransaction.php">Daily Transactions</a></li>

                            <li><a href="TransactionHistory.php">Transactions History</a></li>

                            <li><a href="GraphicalSales.php">Graphical Sales</a></li>

                            <li><a href="logout.php">Logout</a></li>

                        </ul> -->

                                <ul class="mobile-menu clearfix">

                                    <li class="active"><a href="Dashboard_SKS.php">Dashboard</a></li>

                                    <!-- <li><a href="SupplierOutstanding.php">Supplier Outstanding</a></li>

                            <li><a href="Outstanding.php">Customer Outstanding</a></li> -->

                                    <li class="dropdown"><a href="#">Outstanding</a>
                                        <ul>
                                            <li><a href="SupplierOutstanding.php">Supplier</a></li>
                                            <li><a href="Outstanding.php">Customer</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="Stock.php">Stock</a></li>

                                    <li class="dropdown"><a href="#">Transactions</a>
                                        <ul>
                                            <li><a href="DailyTransaction.php">Daily Transactions</a></li>
                                            <li><a href="TransactionHistory.php">Transactions History</a></li>
                                            <li><a href="GraphicalSales.php">Graphical Sales</a></li>
                                        </ul>
                                    </li>

                                    <!-- <li><a href="DailyTransaction.php">Daily Transactions</a></li>

                            <li><a href="TransactionHistory.php">Transactions History</a></li>

                            <li><a href="GraphicalSales.php">Graphical Sales</a></li> -->

                                    <li><a href="logout.php">Logout</a></li>

                                </ul>

                            </div>

                        </nav>

                        <div style="width: 60px; height:60px; position:fixed; right:10px;top:50px;">
                        <button type="button" data-toggle="modal" data-target="#myModal">
                                <img style="filter: drop-shadow(0.35rem 0.35rem 0.4rem rgba(0, 0, 0, 0.5));" src="https://icons-for-free.com/iconfiles/png/512/chat+icon-1320184411998302345.png" alt="" style="width: 80px; height:80px;"></button>


                        </div>

                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Query Section</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <select id="dropdown" class="form-control">
                                        <!-- Options will be dynamically loaded here -->
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <!-- <div class="modal" id="exampleModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Query Section</h4>
                                        
                                    </div>
                                    <div class="modal-body">
                                        <form action="sendquery.php">
                                            <div style="margin-bottom: 12px;">
                                            <?php 
                                            // $q = "SELECT * FROM `queryheads`";
                                            // $rowcount = mysqli_num_rows($q)
                                            
                                            ?>
                                                <label for="">Select Query Subject</label>
                                                <input type="text" class="form-control" value="1">
                                            </div>
                                            <div style="margin-bottom: 12px;">
                                                <label for="">Enter your Query</label>
                                                <textarea type="text" class="form-control"></textarea>
                                            </div>
                                            <button class="btn btn-primary">Send Query</button>
                                        </form>

                                    </div>
                                </div>
                            </div>



                        </div> -->

                        <!-- <ul class="social-icon">

                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

                </ul> -->

                    </div>

                </div>



            </div>

        </section>









        <!--End rev slider wrapper-->