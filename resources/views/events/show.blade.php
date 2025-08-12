@extends('layouts.app')

@section('title', 'Event Details - MGD Tech')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-pink-900 via-purple-800 to-primary-900 text-white section-padding">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
    
    <div class="container-custom relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 text-sm mb-6">
                <i class="fas fa-calendar-alt"></i>
                <span>{{ $event ?? 'Event Details' }}</span>
            </div>
            
            <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-8">
                <span class="bg-gradient-to-r from-white to-pink-200 bg-clip-text text-transparent">
                    {{ $event ?? 'Event Title' }}
                </span>
            </h1>
            
            <p class="text-xl lg:text-2xl text-pink-100 leading-relaxed">
                Join us for an unforgettable experience that combines cutting-edge technology with world-class entertainment.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                <a href="{{ route('events.tickets', $event ?? 'event') }}" class="btn-primary text-lg px-8 py-4">
                    <i class="fas fa-ticket-alt mr-2"></i>
                    Get Tickets
                </a>
                <a href="{{ route('events.stream', $event ?? 'event') }}" class="btn-outline text-lg px-8 py-4">
                    <i class="fas fa-play-circle mr-2"></i>
                    Watch Live
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Event Details -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Event Description -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <h2 class="text-3xl font-bold text-secondary-900 mb-6">About This Event</h2>
                    <p class="text-lg text-secondary-600 leading-relaxed mb-6">
                        Experience the future of technology and entertainment at this groundbreaking event. 
                        Our team of experts will showcase the latest innovations while providing an engaging 
                        and interactive experience for all attendees.
                    </p>
                    <p class="text-lg text-secondary-600 leading-relaxed">
                        Whether you're a tech enthusiast, industry professional, or simply curious about 
                        what's next in the digital world, this event promises to inspire, educate, and entertain.
                    </p>
                </div>

                <!-- Event Schedule -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <h2 class="text-3xl font-bold text-secondary-900 mb-6">Event Schedule</h2>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-20 text-right">
                                <span class="text-lg font-semibold text-primary-600">9:00 AM</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-semibold text-secondary-900">Registration & Welcome</h4>
                                <p class="text-secondary-600">Check-in and receive your event materials</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-20 text-right">
                                <span class="text-lg font-semibold text-primary-600">10:00 AM</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-semibold text-secondary-900">Opening Keynote</h4>
                                <p class="text-secondary-600">The future of technology and entertainment</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-20 text-right">
                                <span class="text-lg font-semibold text-primary-600">11:30 AM</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-semibold text-secondary-900">Interactive Sessions</h4>
                                <p class="text-secondary-600">Hands-on workshops and demonstrations</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-20 text-right">
                                <span class="text-lg font-semibold text-primary-600">1:00 PM</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-semibold text-secondary-900">Networking Lunch</h4>
                                <p class="text-secondary-600">Connect with industry professionals</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-20 text-right">
                                <span class="text-lg font-semibold text-primary-600">2:30 PM</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-semibold text-secondary-900">Technology Showcase</h4>
                                <p class="text-secondary-600">Live demonstrations of cutting-edge solutions</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-20 text-right">
                                <span class="text-lg font-semibold text-primary-600">4:00 PM</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-semibold text-secondary-900">Closing & Networking</h4>
                                <p class="text-secondary-600">Wrap-up and continued networking opportunities</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Speakers -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <h2 class="text-3xl font-bold text-secondary-900 mb-6">Featured Speakers</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="text-center p-6 rounded-xl bg-gradient-to-br from-pink-50 to-purple-50">
                            <div class="w-20 h-20 bg-gradient-to-br from-pink-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-user text-2xl text-white"></i>
                            </div>
                            <h4 class="text-xl font-semibold text-secondary-900 mb-2">Dr. Sarah Johnson</h4>
                            <p class="text-secondary-600">Chief Technology Officer</p>
                        </div>
                        
                        <div class="text-center p-6 rounded-xl bg-gradient-to-br from-green-50 to-blue-50">
                            <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-user text-2xl text-white"></i>
                            </div>
                            <h4 class="text-xl font-semibold text-secondary-900 mb-2">Michael Chen</h4>
                            <p class="text-secondary-600">Innovation Director</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Event Info Card -->
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                    <h3 class="text-xl font-bold text-secondary-900 mb-4">Event Information</h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-calendar text-primary-600 w-5"></i>
                            <span class="text-secondary-600">December 15, 2024</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-clock text-primary-600 w-5"></i>
                            <span class="text-secondary-600">9:00 AM - 5:00 PM</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-primary-600 w-5"></i>
                            <span class="text-secondary-600">Tech Innovation Center</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-users text-primary-600 w-5"></i>
                            <span class="text-secondary-600">200 Attendees</span>
                        </div>
                    </div>
                </div>

                <!-- Ticket Pricing -->
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                    <h3 class="text-xl font-bold text-secondary-900 mb-4">Ticket Options</h3>
                    <div class="space-y-4">
                        <div class="p-4 rounded-xl bg-gradient-to-br from-pink-50 to-purple-50 border border-pink-200">
                            <div class="flex justify-between items-center mb-2">
                                <h4 class="font-semibold text-secondary-900">Early Bird</h4>
                                <span class="text-2xl font-bold text-primary-600">$99</span>
                            </div>
                            <p class="text-sm text-secondary-600">Limited time offer</p>
                        </div>
                        
                        <div class="p-4 rounded-xl bg-gradient-to-br from-green-50 to-blue-50 border border-green-200">
                            <div class="flex justify-between items-center mb-2">
                                <h4 class="font-semibold text-secondary-900">Regular</h4>
                                <span class="text-2xl font-bold text-primary-600">$149</span>
                            </div>
                            <p class="text-sm text-secondary-600">Standard admission</p>
                        </div>
                        
                        <div class="p-4 rounded-xl bg-gradient-to-br from-orange-50 to-red-50 border border-orange-200">
                            <div class="flex justify-between items-center mb-2">
                                <h4 class="font-semibold text-secondary-900">VIP</h4>
                                <span class="text-2xl font-bold text-primary-600">$299</span>
                            </div>
                            <p class="text-sm text-secondary-600">Premium experience</p>
                        </div>
                    </div>
                    
                    <a href="{{ route('events.tickets', $event ?? 'event') }}" class="btn-primary w-full mt-4 text-center">
                        <i class="fas fa-ticket-alt mr-2"></i>
                        Get Tickets
                    </a>
                </div>

                <!-- Share Event -->
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                    <h3 class="text-xl font-bold text-secondary-900 mb-4">Share This Event</h3>
                    <div class="flex space-x-3">
                        <a href="#" class="social-link w-10 h-10 bg-blue-600 hover:bg-blue-700">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link w-10 h-10 bg-blue-400 hover:bg-blue-500">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link w-10 h-10 bg-blue-800 hover:bg-blue-900">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-link w-10 h-10 bg-green-600 hover:bg-green-700">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section-padding bg-gradient-to-br from-primary-50 to-secondary-50">
    <div class="container-custom text-center">
        <h2 class="text-4xl lg:text-5xl font-bold text-secondary-900 mb-6">
            Ready to Join Us?
        </h2>
        <p class="text-xl text-secondary-600 max-w-3xl mx-auto mb-8">
            Don't miss out on this incredible opportunity to network, learn, and be inspired. 
            Secure your spot today!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('events.tickets', $event ?? 'event') }}" class="btn-primary text-lg px-8 py-4">
                <i class="fas fa-ticket-alt mr-2"></i>
                Get Your Tickets
            </a>
            <a href="{{ route('contact') }}" class="btn-outline text-lg px-8 py-4">
                <i class="fas fa-envelope mr-2"></i>
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection

