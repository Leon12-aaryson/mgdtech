@extends('layouts.app')

@section('title', 'Services - MGDTech')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <div class="text-center">
                    <h1 class="text-4xl font-bold uppercase tracking-wider mb-4">Our Services</h1>
                    <p class="text-lg text-primary-100">Audio-Visual Integration + Human Connection</p>
                </div>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <h2 class="text-3xl font-bold text-gray-900 leading-tight">
                    From professional audio-visual systems to unforgettable networking experiences
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    We blend cutting-edge technology with human connection to create extraordinary opportunities 
                    that bring people together in meaningful, memorable ways.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#av-integration" class="btn-primary">
                        <i class="fas fa-video mr-2"></i>
                        AV Integration
                    </a>
                    <a href="#networking" class="btn-outline">
                        <i class="fas fa-users mr-2"></i>
                        Networking Events
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Audio-Visual Integration Section -->
<section id="av-integration" class="py-20 bg-gray-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <h2 class="text-4xl font-bold uppercase tracking-wider">Audio-Visual Integration</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <h3 class="text-3xl font-bold text-gray-900 leading-tight">
                    Professional AV systems for corporate boardrooms, event halls, and venues
                </h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    We design, supply, and install cutting-edge AV systems tailored to your needs. 
                    Whether it's a small meeting room or a large auditorium, our solutions ensure 
                    professional sound, high-definition video, and user-friendly operation.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-video text-primary-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Video Conferencing</h4>
                            <p class="text-gray-600 text-sm">Crystal-clear video and audio for remote collaboration</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-tv text-primary-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Large Displays</h4>
                            <p class="text-gray-600 text-sm">High-resolution screens and projection systems</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-volume-up text-primary-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Sound Systems</h4>
                            <p class="text-gray-600 text-sm">Professional audio reinforcement and control</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-cogs text-primary-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Control Integration</h4>
                            <p class="text-gray-600 text-sm">Seamless operation and automation</p>
                        </div>
                    </div>
                </div>
                
                <div class="pt-6 border-t border-gray-200">
                    <span class="text-2xl font-bold text-primary-600">Starting from $3,000</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Networking & Events Section -->
<section id="networking" class="py-20 bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <h2 class="text-4xl font-bold uppercase tracking-wider">Networking & Events</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <h3 class="text-3xl font-bold text-gray-900 leading-tight">
                    Creating meaningful connections through interactive experiences
                </h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    We believe technology works best when it connects people. MGDTech organizes and 
                    facilitates professional networking events where individuals and businesses can 
                    build valuable relationships.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-calendar-alt text-primary-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Event Management</h4>
                            <p class="text-gray-600">Complete event planning, coordination, and execution</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-ticket-alt text-primary-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Online Ticketing</h4>
                            <p class="text-gray-600">Seamless booking and registration systems</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-users text-primary-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Networking Sessions</h4>
                            <p class="text-gray-600">Structured opportunities for meaningful connections</p>
                        </div>
                    </div>
                </div>
                
                <div class="pt-6 border-t border-gray-200">
                    <span class="text-2xl font-bold text-primary-600">Custom pricing</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-gray-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <h2 class="text-4xl font-bold uppercase tracking-wider">Our Process</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20">
                <div class="space-y-8">
                    <div class="flex items-start space-x-6">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl font-bold text-primary-600">1</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Discovery & Planning</h4>
                            <p class="text-gray-600">Understanding your requirements and creating detailed project plans</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-6">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl font-bold text-primary-600">2</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Design & Development</h4>
                            <p class="text-gray-600">Building your solution with regular updates and feedback loops</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-6">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl font-bold text-primary-600">3</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Installation & Testing</h4>
                            <p class="text-gray-600">Professional installation and thorough testing of all systems</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-6">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl font-bold text-primary-600">4</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Support & Maintenance</h4>
                            <p class="text-gray-600">Ongoing support and maintenance for your solution</p>
                        </div>
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
                Ready to Create Something Extraordinary?
            </h2>
            <p class="text-xl text-primary-100 max-w-2xl mx-auto mb-8">
                Whether you need cutting-edge technology solutions or unforgettable event experiences, 
                let's discuss how we can bring your vision to life.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="btn-secondary text-lg px-8 py-4">
                    <i class="fas fa-paper-plane mr-2"></i>
                    Get Free Quote
                </a>
                <a href="{{ route('contact') }}" class="btn-outline text-lg px-8 py-4">
                    <i class="fas fa-phone mr-2"></i>
                    Schedule Call
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
