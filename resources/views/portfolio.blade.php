@extends('layouts.app')

@section('title', 'Portfolio - MGDTech')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <div class="text-center">
                    <h1 class="text-4xl font-bold uppercase tracking-wider mb-4">Our Work</h1>
                    <p class="text-lg text-primary-100">Showcasing Our Success</p>
                </div>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <h2 class="text-3xl font-bold text-gray-900 leading-tight">
                    Explore our portfolio of successful projects
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Discover how we've helped businesses and organizations transform their audio-visual experiences 
                    and create meaningful human connections through technology and events.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#portfolio-grid" class="btn-primary">
                        <i class="fas fa-eye mr-2"></i>
                        View Projects
                    </a>
                    <a href="{{ route('contact') }}" class="btn-outline">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Start Project
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Filter Section -->
<section class="py-20 bg-gray-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <h2 class="text-4xl font-bold uppercase tracking-wider">Categories</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <h3 class="text-3xl font-bold text-gray-900 leading-tight">
                    Filter by Project Type
                </h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Browse our work by category to find projects similar to what you have in mind.
                </p>
                
                <div class="flex flex-wrap gap-4">
                    <button class="portfolio-filter-btn active" data-filter="all">
                        All Projects
                    </button>
                    <button class="portfolio-filter-btn" data-filter="av">
                        Audio-Visual
                    </button>
                    <button class="portfolio-filter-btn" data-filter="events">
                        Events & Networking
                    </button>
                    <button class="portfolio-filter-btn" data-filter="web">
                        Web Development
                    </button>
                    <button class="portfolio-filter-btn" data-filter="mobile">
                        Mobile Apps
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section id="portfolio-grid" class="py-20 bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
            <!-- Project 1 - Audio-Visual Integration -->
            <div class="portfolio-item" data-category="av">
                <div class="card overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <div class="w-full h-64 bg-primary-600 flex items-center justify-center">
                            <i class="fas fa-video text-6xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <div class="text-center text-white">
                                <a href="#" class="btn-primary mb-3">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    View Project
                                </a>
                                <a href="#" class="btn-outline">
                                    <i class="fas fa-info-circle mr-2"></i>
                                    Case Study
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-2 mb-3">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-primary-100 text-primary-800">
                                Audio-Visual
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Corporate Conference Center</h3>
                        <p class="text-gray-600 mb-4">
                            Complete AV system installation for a modern conference center, featuring 
                            high-definition displays, professional sound systems, and seamless control integration.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">4K Displays</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Sound Systems</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Control Panels</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Video Conferencing</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Client: TechCorp</span>
                            <span class="text-sm text-gray-500">2024</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2 - Networking Event -->
            <div class="portfolio-item" data-category="events">
                <div class="card overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <div class="w-full h-64 bg-primary-600 flex items-center justify-center">
                            <i class="fas fa-users text-6xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <div class="text-center text-white">
                                <a href="#" class="btn-primary mb-3">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    View Project
                                </a>
                                <a href="#" class="btn-outline">
                                    <i class="fas fa-info-circle mr-2"></i>
                                    Case Study
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-2 mb-3">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-primary-100 text-primary-800">
                                Events & Networking
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Business Connect Live</h3>
                        <p class="text-gray-600 mb-4">
                            A major networking event connecting 500+ business professionals with 
                            interactive sessions, live streaming, and hybrid participation options.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Event Management</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Live Streaming</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Networking</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">AV Integration</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Client: Business Network</span>
                            <span class="text-sm text-gray-500">2024</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3 - Web Development -->
            <div class="portfolio-item" data-category="web">
                <div class="card overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <div class="w-full h-64 bg-primary-600 flex items-center justify-center">
                            <i class="fas fa-laptop-code text-6xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <div class="text-center text-white">
                                <a href="#" class="btn-primary mb-3">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    View Project
                                </a>
                                <a href="#" class="btn-outline">
                                    <i class="fas fa-info-circle mr-2"></i>
                                    Case Study
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-2 mb-3">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-primary-100 text-primary-800">
                                Web Development
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Event Management Platform</h3>
                        <p class="text-gray-600 mb-4">
                            A comprehensive platform for event planning, ticketing, and management 
                            with integrated payment processing and attendee tracking.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Laravel</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Vue.js</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">MySQL</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Stripe</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Client: EventPro</span>
                            <span class="text-sm text-gray-500">2024</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 4 - Mobile App -->
            <div class="portfolio-item" data-category="mobile">
                <div class="card overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <div class="w-full h-64 bg-primary-600 flex items-center justify-center">
                            <i class="fas fa-mobile-alt text-6xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <div class="text-center text-white">
                                <a href="#" class="btn-primary mb-3">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    View Project
                                </a>
                                <a href="#" class="btn-outline">
                                    <i class="fas fa-info-circle mr-2"></i>
                                    Case Study
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-2 mb-3">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-primary-100 text-primary-800">
                                Mobile App
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Networking App</h3>
                        <p class="text-gray-600 mb-4">
                            A mobile application for professional networking with event discovery, 
                            contact management, and real-time messaging capabilities.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">React Native</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Node.js</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">MongoDB</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Socket.io</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Client: ConnectHub</span>
                            <span class="text-sm text-gray-500">2023</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 5 - Audio-Visual Integration -->
            <div class="portfolio-item" data-category="av">
                <div class="card overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <div class="w-full h-64 bg-primary-600 flex items-center justify-center">
                            <i class="fas fa-volume-up text-6xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <div class="text-center text-white">
                                <a href="#" class="btn-primary mb-3">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    View Project
                                </a>
                                <a href="#" class="btn-outline">
                                    <i class="fas fa-info-circle mr-2"></i>
                                    Case Study
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-2 mb-3">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-primary-100 text-primary-800">
                                Audio-Visual
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Concert Hall Sound System</h3>
                        <p class="text-gray-600 mb-4">
                            Professional sound reinforcement system for a 1000-seat concert hall 
                            with multi-zone audio control and wireless microphone integration.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Line Arrays</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Subwoofers</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Mixing Console</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Wireless Mics</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Client: Music Center</span>
                            <span class="text-sm text-gray-500">2023</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 6 - Events & Networking -->
            <div class="portfolio-item" data-category="events">
                <div class="card overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <div class="w-full h-64 bg-primary-600 flex items-center justify-center">
                            <i class="fas fa-calendar-alt text-6xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <div class="text-center text-white">
                                <a href="#" class="btn-primary mb-3">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    View Project
                                </a>
                                <a href="#" class="btn-outline">
                                    <i class="fas fa-info-circle mr-2"></i>
                                    Case Study
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-2 mb-3">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-primary-100 text-primary-800">
                                Events & Networking
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Tech Innovation Summit</h3>
                        <p class="text-gray-600 mb-4">
                            A three-day technology summit featuring keynote speakers, workshops, 
                            and networking sessions with hybrid participation and live streaming.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Event Planning</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Live Streaming</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Workshop Management</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Networking</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Client: Tech Summit</span>
                            <span class="text-sm text-gray-500">2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-gray-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <h2 class="text-4xl font-bold uppercase tracking-wider">Our Impact</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="text-center">
                        <div class="text-5xl font-bold text-primary-600 mb-3">150+</div>
                        <div class="text-xl text-gray-700">Projects Completed</div>
                    </div>
                    
                    <div class="text-center">
                        <div class="text-5xl font-bold text-primary-600 mb-3">98%</div>
                        <div class="text-xl text-gray-700">Client Satisfaction</div>
                    </div>
                    
                    <div class="text-center">
                        <div class="text-5xl font-bold text-primary-600 mb-3">95%</div>
                        <div class="text-xl text-gray-700">On-Time Delivery</div>
                    </div>
                    
                    <div class="text-center">
                        <div class="text-5xl font-bold text-primary-600 mb-3">25+</div>
                        <div class="text-xl text-gray-700">Industries Served</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-white">
    <div class="container-custom">
        <div class="bg-primary-600 rounded-2xl p-16 text-center text-white">
            <h2 class="text-4xl font-bold mb-6">
                Ready to Start Your Project?
            </h2>
            <p class="text-xl text-primary-100 max-w-2xl mx-auto mb-8">
                Let's add your project to our portfolio. Get in touch to discuss how we can 
                bring your vision to life.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="btn-secondary text-lg px-8 py-4">
                    <i class="fas fa-paper-plane mr-2"></i>
                    Start Project
                </a>
                <a href="{{ route('services') }}" class="btn-outline text-lg px-8 py-4">
                    <i class="fas fa-info-circle mr-2"></i>
                    View Services
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Portfolio filtering functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.portfolio-filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            portfolioItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                    item.style.animation = 'fadeIn 0.5s ease-in';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});

// Add fadeIn animation
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .portfolio-filter-btn {
        @apply px-6 py-3 rounded-lg font-medium transition-all duration-200;
    }
    
    .portfolio-filter-btn.active {
        @apply bg-primary-600 text-white;
    }
    
    .portfolio-filter-btn:not(.active) {
        @apply bg-gray-100 text-gray-700 hover:bg-gray-200;
    }
`;
document.head.appendChild(style);
</script>
@endsection
