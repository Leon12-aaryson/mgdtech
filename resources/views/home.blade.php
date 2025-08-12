@extends('layouts.app')

@section('title', 'Home - MGDTech')

@section('content')
<!-- Hero Section -->
<section class="min-h-screen bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center min-h-screen">
            <!-- Left Content -->
            <div class="space-y-6 lg:space-y-8 py-12 lg:py-20 px-4 lg:px-0">
                <h1 class="mobile-text-3xl lg:text-6xl xl:text-7xl font-bold text-gray-900 leading-tight">
                    CONNECTING PEOPLE,
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-accent-500">
                        POWERING EXPERIENCES
                    </span>
                </h1>
                <p class="mobile-text-base lg:text-xl text-gray-600 leading-relaxed max-w-2xl">
                    At your price audio-visual integration and human networking solutions.
                </p>
                <div class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="{{ route('contact') }}" class="bg-white text-primary-700 px-6 lg:px-8 py-3 lg:py-4 rounded-xl font-semibold border-2 border-primary-200 hover:bg-primary-50 transition-colors duration-300 flex items-center space-x-2 w-full sm:w-auto justify-center">
                        <i class="bx bx-send text-primary-600"></i>
                        <span>Write to us</span>
                    </a>
                </div>
            </div>
            
            <!-- Right Image -->
            <div class="relative h-full hidden lg:block">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-200 to-accent-200 rounded-l-3xl overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-400/20 to-accent-400/20"></div>
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="mobile-padding bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-8 sm:p-12 lg:p-16 xl:p-20 flex items-center justify-center">
                <h2 class="mobile-text-2xl lg:text-4xl font-bold uppercase tracking-wider text-center">About Us</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-8 sm:p-12 lg:p-16 xl:p-20 space-y-6 lg:space-y-8">
                <h3 class="mobile-text-2xl lg:text-3xl font-bold text-gray-900 leading-tight">
                    Never doubt that a small group of thoughtful, committed people can change the world.
                </h3>
                <p class="mobile-text-base lg:text-lg text-gray-600 leading-relaxed">
                    We provide world-class audio-visual integration and human networking technology solutions. 
                    Our mission is to bring people together through technology that feels invisible, 
                    letting genuine human connections take center stage.
                </p>
                <a href="{{ route('about') }}" class="inline-flex items-center space-x-2 text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300">
                    <span>Read more</span>
                    <i class="bx bx-right-arrow-alt"></i>
                </a>
            </div>
        </div>
        
        <!-- Additional Image Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6 mt-8 lg:mt-12">
            <div class="bg-gradient-to-br from-primary-200 to-accent-200 rounded-2xl h-32 sm:h-48"></div>
            <div class="bg-primary-600 rounded-2xl h-32 sm:h-48"></div>
            <div class="bg-gradient-to-br from-accent-200 to-primary-200 rounded-2xl h-32 sm:h-48"></div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="mobile-padding bg-gray-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-8 sm:p-12 lg:p-16 xl:p-20 flex items-center justify-center">
                <h2 class="mobile-text-2xl lg:text-4xl font-bold uppercase tracking-wider text-center">Services</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-8 sm:p-12 lg:p-16 xl:p-20 space-y-6 lg:space-y-8">
                <div class="grid grid-cols-1 gap-4 lg:gap-6">
                    <!-- Service Card 1 -->
                    <div class="bg-white p-4 sm:p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-start justify-between">
                            <div class="space-y-2 sm:space-y-3 flex-1">
                                <h4 class="mobile-text-lg lg:text-xl font-bold text-gray-900">Audio-Visual Integration</h4>
                                <p class="mobile-text-sm lg:text-base text-gray-600">Professional AV systems for corporate boardrooms, event halls, and venues. Crystal-clear sound and stunning visuals.</p>
                                <a href="{{ route('services') }}" class="inline-flex items-center space-x-2 text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300">
                                    <span>Book a demo</span>
                                    <i class="bx bx-play text-sm"></i>
                                </a>
                            </div>
                            <div class="w-8 h-8 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0 ml-4">
                                <i class="bx bx-video text-primary-600"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Service Card 2 -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-start justify-between">
                            <div class="space-y-3">
                                <h4 class="text-xl font-bold text-gray-900">Human Networking Events</h4>
                                <p class="text-gray-600">Professional networking events where individuals and businesses build valuable relationships and collaborations.</p>
                                <a href="{{ route('services') }}" class="inline-flex items-center space-x-2 text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300">
                                    <span>Book a demo</span>
                                    <i class="bx bx-play text-sm"></i>
                                </a>
                            </div>
                            <div class="w-8 h-8 bg-primary-100 rounded-lg flex items-center justify-center">
                                <i class="bx bx-group text-primary-600"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Service Card 3 -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-start justify-between">
                            <div class="space-y-3">
                                <h4 class="text-xl font-bold text-gray-900">Event Management & Ticketing</h4>
                                <p class="text-gray-600">Complete event planning, management, and online ticketing solutions for seamless event experiences.</p>
                                <a href="{{ route('services') }}" class="inline-flex items-center space-x-2 text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300">
                                    <span>Book a demo</span>
                                    <i class="bx bx-play text-sm"></i>
                                </a>
                            </div>
                            <div class="w-8 h-8 bg-primary-100 rounded-lg flex items-center justify-center">
                                <i class="bx bx-calendar text-primary-600"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Story Section -->
<section class="py-20 bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <h3 class="text-3xl font-bold text-gray-900 leading-tight">
                    MGDTech plans global expansion in audio-visual and networking solutions
                </h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Founded in 2020, MGDTech began with a simple yet powerful vision: to bridge the gap between 
                    technology and human connection. We recognized that while technology continues to advance, 
                    the fundamental need for meaningful human interaction remains constant.
                </p>
                <a href="{{ route('about') }}" class="inline-flex items-center space-x-2 text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300">
                    <span>Read more</span>
                    <i class="bx bx-right-arrow-alt"></i>
                </a>
            </div>
            
            <!-- Right Blue Block -->
            <div class="bg-primary-600 text-white p-8 sm:p-12 lg:p-16 xl:p-20 flex items-center justify-center">
                <h2 class="mobile-text-2xl lg:text-4xl font-bold uppercase tracking-wider text-center">Our Story</h2>
            </div>
        </div>
        
        <!-- Additional Image Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 mt-8 lg:mt-12">
            <div class="bg-gradient-to-br from-primary-200 to-accent-200 rounded-2xl h-32 sm:h-48"></div>
            <div class="bg-gradient-to-br from-accent-200 to-primary-200 rounded-2xl h-32 sm:h-48"></div>
        </div>
    </div>
</section>

<!-- Client Logos Section -->
<section class="mobile-padding bg-gray-50">
    <div class="container-custom">
        <div class="text-center mb-12 lg:mb-16">
            <h2 class="mobile-text-2xl lg:text-3xl font-bold text-gray-900 mb-4">Trusted by Industry Leaders</h2>
            <p class="mobile-text-base lg:text-lg text-gray-600">We work with companies that value human connection and quality</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-6 lg:gap-8 items-center">
            <div class="bg-white p-4 sm:p-6 rounded-xl shadow-sm border border-gray-100 flex items-center justify-center h-16 sm:h-20">
                <span class="mobile-text-sm lg:text-lg font-bold text-primary-600">Lenovo</span>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-xl shadow-sm border border-gray-100 flex items-center justify-center h-16 sm:h-20">
                <span class="mobile-text-sm lg:text-lg font-bold text-primary-600">Citrix</span>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-xl shadow-sm border border-gray-100 flex items-center justify-center h-16 sm:h-20">
                <span class="mobile-text-sm lg:text-lg font-bold text-primary-600">GitHub</span>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-xl shadow-sm border border-gray-100 flex items-center justify-center h-16 sm:h-20">
                <span class="mobile-text-sm lg:text-lg font-bold text-primary-600">Napster</span>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-xl shadow-sm border border-gray-100 flex items-center justify-center h-16 sm:h-20">
                <span class="mobile-text-sm lg:text-lg font-bold text-primary-600">Microsoft</span>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-xl shadow-sm border border-gray-100 flex items-center justify-center h-16 sm:h-20">
                <span class="mobile-text-sm lg:text-lg font-bold text-primary-600">NETDEVO</span>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="mobile-padding bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-0">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-8 sm:p-12 lg:p-16 xl:p-20 flex items-center justify-center">
                <h2 class="mobile-text-2xl lg:text-4xl font-bold uppercase tracking-wider text-center">Contact</h2>
            </div>
            
            <!-- Middle Content -->
            <div class="p-8 sm:p-12 lg:p-16 xl:p-20 space-y-6 lg:space-y-8">
                <div class="bg-gray-50 p-4 sm:p-6 rounded-xl">
                    <h4 class="mobile-text-lg lg:text-xl font-bold text-gray-900 mb-4">Support & Sales</h4>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <i class="bx bx-phone text-primary-600"></i>
                            <span class="mobile-text-sm lg:text-base text-gray-700">+256 (0) 123-456-789</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="bx bx-envelope text-primary-600"></i>
                            <span class="mobile-text-sm lg:text-base text-gray-700">info@mgdtech.com</span>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="inline-flex items-center space-x-2 text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 mt-4">
                        <span>Contact us</span>
                        <i class="bx bx-play text-sm"></i>
                    </a>
                </div>
            </div>
            
            <!-- Right Map -->
            <div class="p-8 sm:p-12 lg:p-16 xl:p-20">
                <div class="bg-gray-100 rounded-2xl h-48 sm:h-64 flex items-center justify-center">
                    <div class="text-center space-y-2">
                        <i class="bx bx-map-pin text-3xl sm:text-4xl text-primary-600"></i>
                        <p class="mobile-text-sm lg:text-base text-gray-600">Kampala, Uganda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-primary-600">
    <div class="container-custom text-center text-white">
        <h2 class="text-4xl lg:text-5xl font-bold mb-6">
            Ready to Create Something Special Together?
        </h2>
        <p class="text-xl text-primary-100 max-w-2xl mx-auto mb-8">
            We'd love to hear your story and understand what you're trying to build. 
            Let's make it unforgettable.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-primary-700 px-8 py-4 rounded-xl font-semibold hover:bg-primary-50 transition-colors duration-300">
                <i class="bx bx-send mr-2"></i>
                Start a Conversation
            </a>
            <a href="{{ route('services') }}" class="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold hover:bg-white hover:text-primary-700 transition-colors duration-300">
                <i class="bx bx-info-circle mr-2"></i>
                Learn More
            </a>
        </div>
    </div>
</section>
@endsection
