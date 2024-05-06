<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Issue Tracker</title>
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">

    <!-- Custom CSS for heavy UI customizations -->
    <style>
        /* Add your custom styles here */
        body {
            font-family: 'Lato', sans-serif;
            background-color: #1B262C;
            color: #BBE1FA;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #0F4C75;
            padding-top: 20px;
            color: #BBE1FA;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 1.2rem;
            color: #BBE1FA;
            display: block;
            transition: background-color 0.3s;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .sidebar a:hover {
            background-color: #3282B8 !important;
            color: #BBE1FA !important;
        }

        header.masthead{
          /* margin-left: 250px; */
            /* padding: 20px; */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: hsla(210, 91%, 39%, 1);

            background: linear-gradient(90deg, hsla(210, 91%, 39%, 1) 0%, hsla(321, 55%, 50%, 1) 100%);

            background: -moz-linear-gradient(90deg, hsla(210, 91%, 39%, 1) 0%, hsla(321, 55%, 50%, 1) 100%);

            background: -webkit-linear-gradient(90deg, hsla(210, 91%, 39%, 1) 0%, hsla(321, 55%, 50%, 1) 100%);

            filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#0965C0", endColorstr="#C53A94", GradientType=1 );
        
            color: #BBE1FA;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: hsla(210, 91%, 39%, 1);

            background: linear-gradient(90deg, hsla(210, 91%, 39%, 1) 0%, hsla(321, 55%, 50%, 1) 100%);

            background: -moz-linear-gradient(90deg, hsla(210, 91%, 39%, 1) 0%, hsla(321, 55%, 50%, 1) 100%);

            background: -webkit-linear-gradient(90deg, hsla(210, 91%, 39%, 1) 0%, hsla(321, 55%, 50%, 1) 100%);

            filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#0965C0", endColorstr="#C53A94", GradientType=1 );
        
            color: #BBE1FA;
        }

        .masthead {
            padding-top: 6rem;
            padding-bottom: 6rem;
            background-color: #3282B8;
            color: #BBE1FA;
            text-align: center;
        }

        .masthead-heading {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease;
        }

        .masthead-subheading {
            font-size: 1.8rem;
            font-weight: 400;
            margin-bottom: 3rem;
            animation: fadeInUp 1s ease;
        }

        /* Additional styling */
        .features-section,
        .testimonials-section,
        .contact-section {
            padding: 80px 0;
        }

        .feature-item,
        .testimonial-item {
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            transition: transform 0.3s;
            animation: fadeIn 1s ease;
        }

        .feature-item:hover,
        .testimonial-item:hover {
            transform: translateY(-5px);
        }

        .features-section {
            background-color: #f8f9fa;
        }

        .testimonials-section {
          background: hsla(210, 91%, 39%, 1);

          background: linear-gradient(90deg, hsla(210, 91%, 39%, 1) 0%, hsla(321, 55%, 50%, 1) 100%);

          background: -moz-linear-gradient(90deg, hsla(210, 91%, 39%, 1) 0%, hsla(321, 55%, 50%, 1) 100%);

          background: -webkit-linear-gradient(90deg, hsla(210, 91%, 39%, 1) 0%, hsla(321, 55%, 50%, 1) 100%);

          filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#0965C0", endColorstr="#C53A94", GradientType=1 );
        }

        .contact-section {
            background-color: #f8f9fa;
        }

        .footer {
            padding: 50px 0;
            background-color: #000000;
            color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Remove white borders from buttons */
        .btn-primary {
            border-color: transparent;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <!-- Make the website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" style="background: linear-gradient(90deg, hsla(210, 91%, 39%, 1) 0%, hsla(321, 55%, 50%, 1) 100%);"><i
                class="fas fa-home"></i>Home</a>
        <a href="registration.php"><i class="fas fa-user-plus"></i>Sign Up</a>
        <a href="login.php"><i class="fas fa-sign-in-alt"></i>Log In</a>
        <a href="admin"><i class="fas fa-user-shield"></i>Admin</a>
    </div>

    <!-- Page content -->
    <div class="content">
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container">
                    <h1 class="masthead-heading mb-0">Issue Tracker</h1>
                    <h2 class="masthead-subheading mb-0">From issues to no issues</h2>
                    <a href="login.php" class="btn btn-primary btn-xl rounded-pill mt-5">Issue Found ?</a>
                </div>
            </div>
        </header>

        <!-- Features section -->
        <section class="features-section text-center">
            <div class="container">
                <h2 class="mb-5">Key Features</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="feature-item mb-5">
                            <i class="fas fa-ticket-alt fa-3x mb-4"></i>
                            <h3>Easy Ticket Management</h3>
                            <p class="text-muted">Effortlessly manage your tickets with our intuitive interface.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-item mb-5">
                            <i class="fas fa-cog fa-3x mb-4"></i>
                            <h3>Customizable Settings</h3>
                            <p class="text-muted">Tailor the app to your needs with customizable settings.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-item mb-5">
                            <i class="fas fa-lock fa-3x mb-4"></i>
                            <h3>Secure & Reliable</h3>
                            <p class="text-muted">Rest assured, your data is safe and secure with us.</p>
                        </div>
                    </div>
                    <!-- Additional features -->
                    <div class="col-lg-4">
                        <div class="feature-item mb-5">
                            <i class="fas fa-clock fa-3x mb-4"></i>
                            <h3>24/7 Support</h3>
                            <p class="text-muted">Get assistance anytime, day or night.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-item mb-5">
                            <i class="fas fa-globe fa-3x mb-4"></i>
                            <h3>Global Coverage</h3>
                            <p class="text-muted">Access our service from anywhere in the world.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-item mb-5">
                            <i class="fas fa-bell fa-3x mb-4"></i>
                            <h3>Real-time Notifications</h3>
                            <p class="text-muted">Stay updated with real-time notifications.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Commonly Known Issues and Their Solutions section -->
        <section class="testimonials-section text-center">
            <div class="container">
                <h2 class="mb-5">Commonly Known Issues and Their Solutions</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mb-5">
                            <i class="fas fa-database fa-3x mb-4"></i>
                            <h3>Database Connectivity Issue</h3>
                            <p class="text-muted">Issue: Slow application performance Solution: Optimize database queries and use caching mechanisms.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mb-5">
                            <i class="fas fa-server fa-3x mb-4"></i>
                            <h3>Server Downtime</h3>
                            <p class="text-muted">Issue: Application downtime Solution: Implement redundancy and failover mechanisms.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mb-5">
                            <i class="fas fa-shield-alt fa-3x mb-4"></i>
                            <h3>Security Vulnerabilities</h3>
                            <p class="text-muted">Issue: Security vulnerabilities Solution: Regularly update software and apply security patches.</p>
                        </div>
                    </div>
                    <!-- Additional issues -->
                    <div class="col-lg-4">
                        <div class="testimonial-item mb-5">
                            <i class="fas fa-globe fa-3x mb-4"></i>
                            <h3>Localization Problem</h3>
                            <p class="text-muted">Issue: Application not supporting local languages Solution: Implement localization support in the application.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mb-5">
                            <i class="fas fa-bug fa-3x mb-4"></i>
                            <h3>Software Bugs</h3>
                            <p class="text-muted">Issue: Application crashes or behaves unexpectedly Solution: Debug and fix the software bugs.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mb-5">
                            <i class="fas fa-user-secret fa-3x mb-4"></i>
                            <h3>Access Control</h3>
                            <p class="text-muted">Issue: Unauthorized access Solution: Implement strict access control measures.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact section -->
        <section class="contact-section text-center">
            <div class="container">
                <h2 class="mb-5">Contact Us</h2>
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer py-5 bg-black">
            <div class="container">
                <p class="m-0 text-center text-white small">Made with ❤</p>
            </div>
        </footer>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

