@extends('layouts.app')

@section('title', 'About Us - MGDTech')

@section('content')
<!-- Hero Section -->
<section class="min-h-screen bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center min-h-screen">
            <!-- Left Content -->
            <div class="space-y-8 py-20">
                <h1 class="text-6xl lg:text-7xl font-bold text-gray-900 leading-tight">
                    ABOUT
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-accent-500">
                        MGDTECH
                    </span>
                </h1>
                <p class="text-xl text-gray-600 leading-relaxed max-w-2xl">
                    We're a team of real people who believe that technology should bring us closer together, not drive us apart.
                </p>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('contact') }}" class="bg-white text-primary-700 px-8 py-4 rounded-xl font-semibold border-2 border-primary-200 hover:bg-primary-50 transition-colors duration-300 flex items-center space-x-2">
                        <i class="fas fa-paper-plane text-primary-600"></i>
                        <span>Get in touch</span>
                    </a>
                </div>
            </div>
            
            <!-- Right Image -->
            <div class="relative h-full">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-200 to-accent-200 rounded-l-3xl overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-400/20 to-accent-400/20"></div>
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-20 bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <h2 class="text-4xl font-bold uppercase tracking-wider">Our Story</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <h3 class="text-3xl font-bold text-gray-900 leading-tight">
                    From Technology to Human Connection
                </h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Founded in 2020, MGDTech began with a simple yet powerful vision: to bridge the gap between 
                    technology and human connection. We recognized that while technology continues to advance, 
                    the fundamental need for meaningful human interaction remains constant.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    What started as a small audio-visual installation company has evolved into a comprehensive partner that 
                    combines cutting-edge AV technology with world-class networking events and human connection experiences. 
                    We've helped over 100 businesses and organizations create unforgettable experiences that drive 
                    engagement, build relationships, and deliver measurable results.
                </p>
            </div>
        </div>
        
        <!-- Additional Image Grid -->
        <div class="grid grid-cols-3 gap-6 mt-12">
            <div class="bg-gradient-to-br from-primary-200 to-accent-200 rounded-2xl h-48"></div>
            <div class="bg-primary-600 rounded-2xl h-48"></div>
            <div class="bg-gradient-to-br from-accent-200 to-primary-200 rounded-2xl h-48"></div>
        </div>
    </div>
</section>

<!-- Mission & Values Section -->
<section class="py-20 bg-gray-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <h3 class="text-3xl font-bold text-gray-900 leading-tight">
                    Our Mission & Values
                </h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    We're driven by a clear mission and guided by core values that shape everything we do. 
                    Every decision we make, every project we take on, is guided by our commitment to human connection.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="space-y-3">
                        <h4 class="text-xl font-bold text-primary-600">Our Mission</h4>
                        <p class="text-gray-600">To connect people through innovative audio-visual technology and create meaningful networking experiences.</p>
                    </div>
                    <div class="space-y-3">
                        <h4 class="text-xl font-bold text-primary-600">Our Vision</h4>
                        <p class="text-gray-600">To be the leading provider of audio-visual integration and human networking experiences.</p>
                    </div>
                </div>
            </div>
            
            <!-- Right Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <h2 class="text-4xl font-bold uppercase tracking-wider">Mission</h2>
            </div>
        </div>
    </div>
</section>

<!-- What We Do Section -->
<section class="py-20 bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <h2 class="text-4xl font-bold uppercase tracking-wider">What We Do</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <h3 class="text-3xl font-bold text-gray-900 leading-tight">
                    Audio-Visual Integration
                </h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    We design, supply, and install cutting-edge AV systems tailored to your needs. Whether it's a small meeting room 
                    or a large auditorium, our solutions ensure professional sound, high-definition video, and user-friendly operation.
                </p>
                
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-primary-500 rounded-full"></div>
                        <span class="text-gray-700">Video conferencing systems</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-primary-500 rounded-full"></div>
                        <span class="text-gray-700">Large display and projection setups</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-primary-500 rounded-full"></div>
                        <span class="text-gray-700">Sound reinforcement systems</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-primary-500 rounded-full"></div>
                        <span class="text-gray-700">Control system integration</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-primary-500 rounded-full"></div>
                        <span class="text-gray-700">Digital signage solutions</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Networking Section -->
<section class="py-20 bg-gray-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <h3 class="text-3xl font-bold text-gray-900 leading-tight">
                    Networking & Human Connection Events
                </h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    We believe technology works best when it connects people. MGDTech organizes and facilitates professional 
                    networking events where individuals and businesses can build valuable relationships.
                </p>
                
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-accent-500 rounded-full"></div>
                        <span class="text-gray-700">Industry-specific networking opportunities</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-accent-500 rounded-full"></div>
                        <span class="text-gray-700">Guest speakers and panel discussions</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-accent-500 rounded-full"></div>
                        <span class="text-gray-700">Interactive activities for collaboration</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-accent-500 rounded-full"></div>
                        <span class="text-gray-700">Live audio-visual setups for hybrid participation</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-accent-500 rounded-full"></div>
                        <span class="text-gray-700">Event management and online ticketing</span>
                    </div>
                </div>
            </div>
            
            <!-- Right Blue Block -->
            <div class="bg-accent-500 text-white p-16 lg:p-20 flex items-center justify-center">
                <h2 class="text-4xl font-bold uppercase tracking-wider">Networking</h2>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <h2 class="text-4xl font-bold uppercase tracking-wider">Our Team</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <h3 class="text-3xl font-bold text-gray-900 leading-tight">
                    Meet the People Behind MGDTech
                </h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Talented professionals passionate about audio-visual technology and committed to creating meaningful human connections.
                </p>
                
                <div class="grid grid-cols-1 gap-6">
                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="text-xl font-bold text-gray-900">David Muwonge</h4>
                        <p class="text-primary-600 font-semibold mb-2">CEO & Founder</p>
                        <p class="text-gray-600">Audio-visual expert with 10+ years of experience in professional AV installation and event production.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="text-xl font-bold text-gray-900">Sarah Nalukenge</h4>
                        <p class="text-primary-600 font-semibold mb-2">Event Director</p>
                        <p class="text-gray-600">Event management specialist with expertise in creating engaging networking experiences and community building.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="text-xl font-bold text-gray-900">Michael Ssebowa</h4>
                        <p class="text-primary-600 font-semibold mb-2">Technical Director</p>
                        <p class="text-gray-600">AV systems engineer specializing in complex installations and technical integration solutions.</p>
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
            Ready to Work With MGDTech?
        </h2>
        <p class="text-xl text-primary-100 max-w-2xl mx-auto mb-8">
            Join the hundreds of businesses that trust us with their audio-visual needs and networking events. 
            Let's create something amazing together.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-primary-700 px-8 py-4 rounded-xl font-semibold hover:bg-primary-50 transition-colors duration-300">
                <i class="fas fa-paper-plane mr-2"></i>
                Start Project
            </a>
            <a href="{{ route('services') }}" class="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold hover:bg-white hover:text-primary-700 transition-colors duration-300">
                <i class="fas fa-info-circle mr-2"></i>
                View Services
            </a>
        </div>
    </div>
</section>
@endsection
