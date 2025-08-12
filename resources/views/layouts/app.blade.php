<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'MGDTech - Connecting People, Powering Experiences')</title>
    <meta name="description" content="MGDTech specializes in Audio-Visual Integration and Human Networking Experiences. We help businesses transform the way they connect both technologically and socially.">

    <!-- Scripts -->
    @vite(['resources/css/app.css'])
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/95 backdrop-blur-md shadow-sm z-50 border-b border-primary-100">
        <div class="container-custom">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="{{ route('home') }}" class="flex items-center space-x-2">
                            <span class="text-xl md:text-2xl font-bold bg-gradient-to-r from-primary-600 to-accent-500 bg-clip-text text-transparent">
                                MGDTech
                            </span>
                        </a>
                    </div>
                </div>
                
                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                    <a href="{{ route('services') }}" class="nav-link">Services</a>
                    <a href="{{ route('about') }}" class="nav-link">About</a>
                    <a href="{{ route('portfolio') }}" class="nav-link">Portfolio</a>
                    <a href="{{ route('events.index') }}" class="nav-link">Events</a>
                    <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </nav>

                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button id="mobile-menu-button" class="mobile-menu-button p-2 rounded-md text-gray-600 hover:text-primary-600 hover:bg-gray-100 transition-colors duration-200">
                        <i class="fas fa-bars text-xl" id="menu-icon"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="mobile-menu hidden lg:hidden pb-4 border-t border-gray-100">
                <div class="flex flex-col space-y-2 pt-4">
                    <a href="{{ route('home') }}" class="mobile-nav-link">Home</a>
                    <a href="{{ route('about') }}" class="mobile-nav-link">About</a>
                    <a href="{{ route('services') }}" class="mobile-nav-link">Services</a>
                    <a href="{{ route('portfolio') }}" class="mobile-nav-link">Portfolio</a>
                    <a href="{{ route('events.index') }}" class="mobile-nav-link">Events</a>
                    <a href="{{ route('blog') }}" class="mobile-nav-link">Blog</a>
                    <a href="{{ route('contact') }}" class="mobile-nav-link">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-100">
        <div class="container-custom py-8 md:py-12">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">
                <!-- Logo and Tagline -->
                <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-3 text-center md:text-left">
                    <span class="text-lg md:text-xl font-bold text-primary-600">MGDTech</span>
                    <span class="hidden md:inline text-gray-400">•</span>
                    <span class="text-xs md:text-sm text-gray-500 max-w-xs">Connecting People, Powering Experiences</span>
                </div>
                
                <!-- Social Links -->
                <div class="flex items-center space-x-4 md:space-x-6">
                    <a href="#" class="text-gray-400 hover:text-primary-600 transition-colors duration-200">
                        <i class="fab fa-linkedin-in text-base md:text-lg"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary-600 transition-colors duration-200">
                        <i class="fab fa-twitter text-base md:text-lg"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary-600 transition-colors duration-200">
                        <i class="fab fa-instagram text-base md:text-lg"></i>
                    </a>
                </div>
            </div>
            
            <!-- Bottom Bar -->
            <div class="mt-6 md:mt-8 pt-4 md:pt-6 border-t border-gray-100">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <p class="text-xs md:text-sm text-gray-500">&copy; {{ date('Y') }} MGDTech. All rights reserved.</p>
                    <div class="flex items-center space-x-4 md:space-x-6 text-xs md:text-sm text-gray-500">
                        <a href="{{ route('about') }}" class="hover:text-primary-600 transition-colors">About</a>
                        <a href="{{ route('services') }}" class="hover:text-primary-600 transition-colors">Services</a>
                        <a href="{{ route('contact') }}" class="hover:text-primary-600 transition-colors">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <style>
        .nav-link {
            @apply text-primary-700 hover:text-primary-600 px-3 py-2 text-sm font-medium transition-all duration-300 relative;
        }
        
        .nav-link::after {
            content: '';
            @apply absolute bottom-0 left-0 w-0 h-0.5 bg-primary-600 transition-all duration-300;
        }
        
        .nav-link:hover::after {
            @apply w-full;
        }
        
        .mobile-nav-link {
            @apply text-primary-700 hover:text-primary-600 px-4 py-3 text-base font-medium transition-all duration-300 hover:bg-gray-50 rounded-lg transform hover:scale-105;
        }
        
        /* Mobile menu transitions */
        .mobile-menu {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
        }
        
        .mobile-menu.hidden {
            opacity: 0;
            max-height: 0;
            transform: translateY(-10px);
        }
        
        .mobile-menu:not(.hidden) {
            opacity: 1;
            max-height: 24rem;
            transform: translateY(0);
        }
        
        /* Mobile menu button animation */
        .mobile-menu-button.active .fas.fa-bars {
            transform: rotate(90deg);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .mobile-menu-button .fas.fa-bars {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Responsive container adjustments */
        @media (max-width: 640px) {
            .container-custom {
                @apply px-4;
            }
        }
        
        @media (max-width: 768px) {
            .container-custom {
                @apply px-6;
            }
        }
    </style>

    <script>
        // Smooth Mobile Menu Handler
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            
            // Check if elements exist
            if (!mobileMenuButton || !mobileMenu || !menuIcon) {
                console.error('Mobile menu elements not found');
                return;
            }
            
            // Initialize menu state
            mobileMenu.classList.add('hidden');
            
            // Toggle menu function
            function toggleMenu() {
                const isHidden = mobileMenu.classList.contains('hidden');
                
                if (isHidden) {
                    // Show menu with smooth animation
                    mobileMenu.classList.remove('hidden');
                    mobileMenuButton.classList.add('active');
                    menuIcon.classList.remove('fa-bars');
                    menuIcon.classList.add('fa-times');
                    
                    // Add smooth entrance effect
                    mobileMenu.style.transform = 'translateY(0)';
                    mobileMenu.style.opacity = '1';
                    mobileMenu.style.maxHeight = '24rem';
                } else {
                    // Hide menu with smooth animation
                    mobileMenu.classList.add('hidden');
                    mobileMenuButton.classList.remove('active');
                    menuIcon.classList.remove('fa-times');
                    menuIcon.classList.add('fa-bars');
                    
                    // Add smooth exit effect
                    mobileMenu.style.transform = 'translateY(-10px)';
                    mobileMenu.style.opacity = '0';
                    mobileMenu.style.maxHeight = '0';
                }
            }
            
            // Event listeners
            mobileMenuButton.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                toggleMenu();
            });
            
            // Close menu when clicking on links
            const mobileNavLinks = mobileMenu.querySelectorAll('.mobile-nav-link');
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', function() {
                    // Small delay to allow smooth transition
                    setTimeout(() => {
                        toggleMenu();
                    }, 100);
                });
            });
            
            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInsideNav = mobileMenuButton.contains(event.target) || mobileMenu.contains(event.target);
                
                if (!isClickInsideNav && !mobileMenu.classList.contains('hidden')) {
                    toggleMenu();
                }
            });
            
            // Close menu on window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 1024) {
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        mobileMenuButton.classList.remove('active');
                        menuIcon.classList.remove('fa-times');
                        menuIcon.classList.add('fa-bars');
                        mobileMenu.style.transform = 'translateY(-10px)';
                        mobileMenu.style.opacity = '0';
                        mobileMenu.style.maxHeight = '0';
                    }
                }
            });
            
            // Add touch/swipe support for mobile
            let touchStartY = 0;
            let touchEndY = 0;
            
            mobileMenu.addEventListener('touchstart', function(e) {
                touchStartY = e.changedTouches[0].screenY;
            });
            
            mobileMenu.addEventListener('touchend', function(e) {
                touchEndY = e.changedTouches[0].screenY;
                handleSwipe();
            });
            
            function handleSwipe() {
                const swipeThreshold = 50;
                const swipeDistance = touchStartY - touchEndY;
                
                // Swipe up to close menu
                if (swipeDistance > swipeThreshold && !mobileMenu.classList.contains('hidden')) {
                    toggleMenu();
                }
            }
        });
    </script>
</body>
</html>
