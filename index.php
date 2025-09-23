<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuION Nigeria Limited - Engineering & Technology Solutions</title>
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.globe.min.js"></script>
    <style>
        .hero-bg {
            background: linear-gradient(135deg, rgba(0, 87, 184, 0.9) 0%, rgba(0, 87, 184, 0.7) 100%);
        }

        .nav-link:hover {
            color: #0057b8;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .project-year {
            position: relative;
        }

        .project-year::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 50px;
            height: 3px;
            background: #0057b8;
        }
    </style>
</head>

<body class="font-sans antialiased text-gray-800">
    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <img src="/img/logo.png" alt="QuION Logo" class="h-12 mr-4">
                    <span class="text-xl font-bold text-blue-900">QuION</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="nav-link text-gray-700 hover:text-blue-900 transition">Home</a>
                    <a href="#about" class="nav-link text-gray-700 hover:text-blue-900 transition">About</a>
                    <a href="#services" class="nav-link text-gray-700 hover:text-blue-900 transition">Services</a>
                    <a href="#projects" class="nav-link text-gray-700 hover:text-blue-900 transition">Projects</a>
                    <a href="#contact" class="nav-link text-gray-700 hover:text-blue-900 transition">Contact</a>
                </div>
                <button class="md:hidden focus:outline-none">
                    <i data-feather="menu"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-bg text-white py-20 md:py-32 relative overflow-hidden">
        <div id="vanta-globe" class="absolute inset-0"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl" data-aos="fade-right">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Engineering Excellence in Nigeria</h1>
                <p class="text-xl md:text-2xl mb-8">Providing top-tier consultancy services and specialized engineering
                    solutions since our inception.</p>
                <a href="#contact"
                    class="bg-white text-blue-900 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition inline-block">Get
                    In Touch</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-blue-900">About QuION</h2>
                <div class="w-20 h-1 bg-blue-900 mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <h3 class="text-2xl font-bold mb-6 text-blue-900">Introduction</h3>
                    <p class="mb-6 text-gray-700 leading-relaxed text-justify">QuION Nigeria Limited was incorporated as a Limited Liability Company under the Companies and Allied Matters Decree. We are dedicated to providing top-tier consultancy services, research and development, and specialized engineering solutions in areas such as computer engineering, electrical engineering, communications, instrumentation engineering, project management, and supply chain management, mobile solution, I.T audit, renewable Energy solution, Digitization services and Automation.</p>

                    <h3 class="text-2xl font-bold mb-6 text-blue-900 mt-10">Our Mission</h3>
                    <p class="mb-6 text-gray-700 leading-relaxed text-justify">Our mission is to deliver cutting-edge IT solutions that drive digital transformation, enhance operational efficiency, and provide exceptional value. We are committed to quality, innovation, and customer success through expert consultation, agile development, and 24/7 support. </p>
                </div>

                <div data-aos="fade-left">
                    <div class="bg-white p-8 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold mb-6 text-blue-900">Our Vision</h3>
                        <p class="mb-6 text-gray-700 leading-relaxed text-justify">To empower businesses and communities through innovative, reliable, and sustainable technology solutions that shape a smarter, more connected future.</p>

                        <h3 class="text-2xl font-bold mb-6 text-blue-900 mt-10">Our Team</h3>
                        <p class="mb-6 text-gray-700 leading-relaxed text-justify">We have dynamic professionals who have served in various capacities in both the public and private sectors run the management of the company. The staff strength is made of qualified Information Technology and Communications professionals with over 35 years’ experience in technology and management. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-blue-900">Our Services</h2>
                <div class="w-20 h-1 bg-blue-900 mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8">
                <!-- Service 1 -->
                <div class="service-card bg-white p-8 rounded-lg shadow-md border border-gray-100 transition duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="text-blue-900 mb-4">
                        <i data-feather="smartphone" class="w-10 h-10"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-blue-900">Mobile Solutions</h3>
                    <p class="text-gray-700 text-justify">Specialized technology and software solutions for mobile devices, including mobile applications, payment solutions, enterprise solutions, and device management (MDM) to enhance mobility and efficiency.</p>
                </div>

                <!-- Service 2 -->
                <div class="service-card bg-white p-8 rounded-lg shadow-md border border-gray-100 transition duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="text-blue-900 mb-4">
                        <i data-feather="shield" class="w-10 h-10"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-blue-900">I.T Audit</h3>
                    <p class="text-gray-700 text-justify">Comprehensive evaluation of information systems, management controls, policies, and infrastructure to ensure system security and data reliability for organizations.</p>
                </div>

                <!-- Service 3 -->
                <div class="service-card bg-white p-8 rounded-lg shadow-md border border-gray-100 transition duration-300"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="text-blue-900 mb-4">
                        <i data-feather="sun" class="w-10 h-10"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-blue-900">Renewable Energy Solutions</h3>
                    <p class="text-gray-700 text-justify">Sustainable energy solutions including solar powered streetlights, hydropower plants, renewable energy microgrids, and solar power systems (inverters, batteries, panels) for eco-friendly power generation.</p>
                </div>

                <!-- Service 4 -->
                <div class="service-card bg-white p-8 rounded-lg shadow-md border border-gray-100 transition duration-300"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="text-blue-900 mb-4">
                        <i data-feather="hard-drive" class="w-10 h-10"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-blue-900">Digitization Services</h3>
                    <p class="text-gray-700 text-justify">Converting physical information to digital formats, enabling improved accessibility, searchability, automation, and remote work capabilities while reducing storage space and enhancing productivity.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-blue-900">Our Projects</h2>
                <div class="w-20 h-1 bg-blue-900 mx-auto"></div>
                <p class="max-w-2xl mx-auto mt-6 text-gray-700">We've successfully completed numerous projects across
                    various sectors, demonstrating our expertise and commitment to excellence.</p>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-lg overflow-hidden">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="py-4 px-6 text-left">Year</th>
                            <th class="py-4 px-6 text-left">Name Of Works</th>
                            <th class="py-4 px-6 text-left">Name of Employer</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="py-4 px-6 project-year">2024</td>
                            <td class="py-4 px-6">Supply and Installation of Solar Powered Street Light in Various
                                Locations Within Bade Emirate Council Gashua, Yobe State</td>
                            <td class="py-4 px-6">Federal Ministry of Power</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 project-year">2024</td>
                            <td class="py-4 px-6">Supply and Installation of Solar Powered Street Light in Various
                                Locations Within Buni Gari, Gujba Local Government Area, Yobe State</td>
                            <td class="py-4 px-6">Federal Ministry of Power</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 project-year">2024</td>
                            <td class="py-4 px-6">Supply of 650 Samsung A94 Tables</td>
                            <td class="py-4 px-6">National Primary Healthcare Development Agency</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 project-year">2024</td>
                            <td class="py-4 px-6">Licensed Service Provider for the Enrolment of Nigerian Citizens in
                                The Diaspora for the Issuance of the National Identification Number (NIN)</td>
                            <td class="py-4 px-6">National Identity Management Commission</td>
                        </tr>


                    </tbody>
                </table>
            </div>

            <div class="text-center mt-12">
                <a href="/project.html"
                    class="inline-block px-8 py-3 bg-blue-900 text-white rounded-full font-semibold hover:bg-blue-800 transition">View
                    All Projects</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-blue-900">Contact Us</h2>
                <div class="w-20 h-1 bg-blue-900 mx-auto"></div>
                <p class="max-w-2xl mx-auto mt-6 text-gray-700">Get in touch with our team to discuss your project
                    requirements or learn more about our services.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div data-aos="fade-right">

                    <form class="space-y-6 contact-form" action="send_email.php" method="post">
                        <?php
                        // Check if there is a message in the URL
                        if (isset($_GET['message'])) {
                            $message = $_GET['message'];
                            echo "<p>$message</p>";
                        }
                        ?>
                        <div>
                            <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                        </div>
                        <div>
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                            <input type="text" id="subject" name="subject"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                            <textarea id="message" rows="5" accesskey="m" name="message"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900 focus:border-transparent"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-blue-900 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-800 transition">Send
                            Message</button>
                    </form>
                </div>

                <div data-aos="fade-left">
                    <div class="bg-gray-50 p-8 rounded-lg h-full">
                        <h3 class="text-xl font-bold mb-6 text-blue-900">Contact Information</h3>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="text-blue-900 mr-4 mt-1">
                                    <i data-feather="map-pin" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Head Office</h4>
                                    <p class="text-gray-700"> 35 Lusaka Street Wuse Zone 6, Abuja.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="text-blue-900 mr-4 mt-1">
                                    <i data-feather="mail" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Email Us</h4>
                                    <p class="text-gray-700">info@quionltd.com</p>
                                    <!-- <p class="text-gray-700">support@quionnigeria.com</p> -->
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="text-blue-900 mr-4 mt-1">
                                    <i data-feather="phone" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Call Us</h4>
                                    <p class="text-gray-700"></p>
                                    <p class="text-gray-700"></p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="text-blue-900 mr-4 mt-1">
                                    <i data-feather="clock" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Working Hours</h4>
                                    <p class="text-gray-700">Monday - Friday: 8:00 AM - 5:00 PM</p>
                                    <!-- <p class="text-gray-700">Saturday: 9:00 AM - 1:00 PM</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <img src="/img/logo.png" alt="QuION Logo" class="h-12 mb-4">
                    <p class="mb-4">Engineering excellence and technology solutions for a better Nigeria.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-blue-300 transition"><i data-feather="facebook"></i></a>
                        <a href="#" class="hover:text-blue-300 transition"><i data-feather="twitter"></i></a>
                        <a href="#" class="hover:text-blue-300 transition"><i data-feather="linkedin"></i></a>
                        <a href="#" class="hover:text-blue-300 transition"><i data-feather="instagram"></i></a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="hover:text-blue-300 transition">Home</a></li>
                        <li><a href="#about" class="hover:text-blue-300 transition">About Us</a></li>
                        <li><a href="#services" class="hover:text-blue-300 transition">Services</a></li>
                        <li><a href="#projects" class="hover:text-blue-300 transition">Projects</a></li>
                        <li><a href="#contact" class="hover:text-blue-300 transition">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-blue-300 transition">Mobile Solutions</a></li>
                        <li><a href="#" class="hover:text-blue-300 transition">I.T audit </a></li>
                        <li><a href="#" class="hover:text-blue-300 transition">Renewable Energy Solution</a></li>
                        <li><a href="#" class="hover:text-blue-300 transition">Digitization services</a></li>

                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">Newsletter</h3>
                    <p class="mb-4">Subscribe to our newsletter for the latest updates and insights.</p>
                    <form class="flex">
                        <input type="email" placeholder="Your email"
                            class="px-4 py-2 w-full rounded-l-lg focus:outline-none text-gray-900">
                        <button type="submit" class="bg-blue-700 px-4 py-2 rounded-r-lg hover:bg-blue-600 transition">
                            <i data-feather="send"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="border-t border-blue-800 mt-12 pt-8 text-center">
                <p>&copy; 2025 QuION Nigeria Limited. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        feather.replace();

        VANTA.GLOBE({
            el: "#vanta-globe",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0x3a7bd5,
            backgroundColor: 0x0
        });
    </script>
</body>

</html>