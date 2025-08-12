@extends('layouts.app')

@section('title', 'Events - MGD Tech')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-pink-900 via-purple-800 to-primary-900 text-white section-padding">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
    
    <div class="container-custom relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 text-sm mb-6">
                <i class="fas fa-calendar-alt"></i>
                <span>MGD Tech Events</span>
            </div>
            
            <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-8">
                <span class="bg-gradient-to-r from-white to-pink-200 bg-clip-text text-transparent">
                    Unforgettable
                </span>
                <br>
                <span class="text-pink-200">Experiences</span>
            </h1>
            
            <p class="text-xl lg:text-2xl text-pink-100 leading-relaxed">
                Discover our curated events that blend cutting-edge technology with world-class entertainment. 
                From corporate gatherings to tech showcases, we create moments that inspire and engage.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                <a href="{{ route('tickets.index') }}" class="btn-primary text-lg px-8 py-4">
                    <i class="fas fa-ticket-alt mr-2"></i>
                    Browse Tickets
                </a>
                <a href="{{ route('contact') }}" class="btn-outline text-lg px-8 py-4">
                    <i class="fas fa-calendar-plus mr-2"></i>
                    Host Your Event
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Event Categories -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-pink-50 to-purple-50 border border-pink-200">
                <div class="w-20 h-20 bg-gradient-to-br from-pink-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-rocket text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary-900 mb-4">Upcoming Events</h3>
                <p class="text-secondary-600 mb-6">
                    Get ready for our next amazing events. Book early to secure your spot!
                </p>
                <a href="#upcoming" class="text-pink-600 hover:text-pink-700 font-semibold">
                    View All →
                </a>
            </div>
            
            <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-green-50 to-blue-50 border border-green-200">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-play-circle text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary-900 mb-4">Live Now</h3>
                <p class="text-secondary-600 mb-6">
                    Join our currently happening events and be part of the action in real-time.
                </p>
                <a href="#live" class="text-green-600 hover:text-green-700 font-semibold">
                    Watch Live →
                </a>
            </div>
            
            <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-orange-50 to-red-50 border border-orange-200">
                <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-history text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary-900 mb-4">Past Events</h3>
                <p class="text-secondary-600 mb-6">
                    Relive the magic of our previous events and see what we've accomplished.
                </p>
                <a href="#past" class="text-orange-600 hover:text-orange-700 font-semibold">
                    Browse Archive →
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Events -->
<section id="upcoming" class="section-padding bg-gradient-to-br from-pink-50 to-purple-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-secondary-900 mb-6">
                Upcoming Events
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Mark your calendar for these exciting upcoming events. Early bird tickets available now!
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Tech Innovation Summit -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <div class="relative">
                    <div class="h-48 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                        <i class="fas fa-microchip text-6xl text-white opacity-80"></i>
                    </div>
                    <div class="absolute top-4 right-4 bg-pink-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        Early Bird
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-2 text-sm text-secondary-500 mb-3">
                        <i class="fas fa-calendar text-pink-500"></i>
                        <span>December 15, 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-secondary-900 mb-3">Tech Innovation Summit 2024</h3>
                    <p class="text-secondary-600 mb-4">
                        Join industry leaders for a day of innovation, networking, and cutting-edge technology demonstrations.
                    </p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2 text-sm text-secondary-500">
                            <i class="fas fa-map-marker-alt text-pink-500"></i>
                            <span>San Francisco Convention Center</span>
                        </div>
                        <div class="text-lg font-bold text-pink-600">$299</div>
                    </div>
                    <div class="flex space-x-3">
                        <a href="{{ route('events.show', 'tech-innovation-summit') }}" class="flex-1 btn-primary text-center py-2">
                            Learn More
                        </a>
                        <a href="{{ route('events.tickets', 'tech-innovation-summit') }}" class="flex-1 btn-secondary text-center py-2">
                            Get Tickets
                        </a>
                    </div>
                </div>
            </div>

            <!-- Entertainment & Tech Fusion -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <div class="relative">
                    <div class="h-48 bg-gradient-to-br from-pink-500 to-purple-600 flex items-center justify-center">
                        <i class="fas fa-star text-6xl text-white opacity-80"></i>
                    </div>
                    <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        Popular
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-2 text-sm text-secondary-500 mb-3">
                        <i class="fas fa-calendar text-pink-500"></i>
                        <span>January 20, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold text-secondary-900 mb-3">Entertainment & Tech Fusion</h3>
                    <p class="text-secondary-600 mb-4">
                        Experience the perfect blend of live entertainment and cutting-edge technology in this immersive event.
                    </p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2 text-sm text-secondary-500">
                            <i class="fas fa-map-marker-alt text-pink-500"></i>
                            <span>Los Angeles Tech Hub</span>
                        </div>
                        <div class="text-lg font-bold text-pink-600">$199</div>
                    </div>
                    <div class="flex space-x-3">
                        <a href="{{ route('events.show', 'entertainment-tech-fusion') }}" class="flex-1 btn-primary text-center py-2">
                            Learn More
                        </a>
                        <a href="{{ route('events.tickets', 'entertainment-tech-fusion') }}" class="flex-1 btn-secondary text-center py-2">
                            Get Tickets
                        </a>
                    </div>
                </div>
            </div>

            <!-- Corporate Event Workshop -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <div class="relative">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-blue-600 flex items-center justify-center">
                        <i class="fas fa-users text-6xl text-white opacity-80"></i>
                    </div>
                    <div class="absolute top-4 right-4 bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        Limited Seats
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-2 text-sm text-secondary-500 mb-3">
                        <i class="fas fa-calendar text-pink-500"></i>
                        <span>February 8, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold text-secondary-900 mb-3">Corporate Event Workshop</h3>
                    <p class="text-secondary-600 mb-4">
                        Learn how to create unforgettable corporate events that engage and inspire your team.
                    </p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2 text-sm text-secondary-500">
                            <i class="fas fa-map-marker-alt text-pink-500"></i>
                            <span>Virtual Event</span>
                        </div>
                        <div class="text-lg font-bold text-pink-600">$99</div>
                    </div>
                    <div class="flex space-x-3">
                        <a href="{{ route('events.show', 'corporate-event-workshop') }}" class="flex-1 btn-primary text-center py-2">
                            Learn More
                        </a>
                        <a href="{{ route('events.tickets', 'corporate-event-workshop') }}" class="flex-1 btn-secondary text-center py-2">
                            Get Tickets
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Live Events -->
<section id="live" class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-secondary-900 mb-6">
                Live Now
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Join our currently happening events and be part of the action in real-time!
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Live Tech Talk -->
            <div class="bg-gradient-to-br from-green-500 to-blue-600 rounded-2xl p-8 text-white relative overflow-hidden">
                <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold animate-pulse">
                    LIVE NOW
                </div>
                <div class="relative z-10">
                    <h3 class="text-2xl font-bold mb-4">Live Tech Talk: AI in Entertainment</h3>
                    <p class="text-green-100 mb-6">
                        Join us for an interactive discussion about how artificial intelligence is revolutionizing the entertainment industry.
                    </p>
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-users text-green-300"></i>
                            <span>1,247 watching</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-clock text-green-300"></i>
                            <span>2:30 remaining</span>
                        </div>
                    </div>
                    <div class="flex space-x-3">
                        <a href="{{ route('events.stream', 'ai-entertainment-talk') }}" class="btn-secondary text-center py-3 px-6">
                            <i class="fas fa-play mr-2"></i>
                            Watch Live
                        </a>
                        <a href="#" class="btn-outline text-center py-3 px-6">
                            <i class="fas fa-share mr-2"></i>
                            Share
                        </a>
                    </div>
                </div>
                <div class="absolute inset-0 bg-black/20"></div>
            </div>

            <!-- Virtual Networking -->
            <div class="bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl p-8 text-white relative overflow-hidden">
                <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                    OPEN
                </div>
                <div class="relative z-10">
                    <h3 class="text-2xl font-bold mb-4">Virtual Networking Lounge</h3>
                    <p class="text-purple-100 mb-6">
                        Connect with industry professionals in our virtual networking space. Drop in anytime!
                    </p>
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-users text-purple-300"></i>
                            <span>89 online</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-clock text-purple-300"></i>
                            <span>Open 24/7</span>
                        </div>
                    </div>
                    <div class="flex space-x-3">
                        <a href="{{ route('events.stream', 'virtual-networking') }}" class="btn-secondary text-center py-3 px-6">
                            <i class="fas fa-sign-in-alt mr-2"></i>
                            Join Now
                        </a>
                        <a href="#" class="btn-outline text-center py-3 px-6">
                            <i class="fas fa-info-circle mr-2"></i>
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="absolute inset-0 bg-black/20"></div>
            </div>
        </div>
    </div>
</section>

<!-- Past Events -->
<section id="past" class="section-padding bg-gradient-to-br from-gray-50 to-secondary-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-secondary-900 mb-6">
                Past Events
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Relive the magic of our previous events and see what we've accomplished together.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Tech Startup Showcase -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <div class="relative">
                    <div class="h-48 bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center">
                        <i class="fas fa-rocket text-6xl text-white opacity-80"></i>
                    </div>
                    <div class="absolute top-4 right-4 bg-gray-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        Completed
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-2 text-sm text-secondary-500 mb-3">
                        <i class="fas fa-calendar text-orange-500"></i>
                        <span>November 10, 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-secondary-900 mb-3">Tech Startup Showcase</h3>
                    <p class="text-secondary-600 mb-4">
                        A successful showcase featuring 20 innovative startups and over 500 attendees.
                    </p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2 text-sm text-secondary-500">
                            <i class="fas fa-users text-orange-500"></i>
                            <span>500+ attendees</span>
                        </div>
                        <div class="text-sm text-green-600 font-semibold">✓ Success</div>
                    </div>
                    <a href="{{ route('events.show', 'tech-startup-showcase') }}" class="w-full btn-outline text-center py-2">
                        View Recap
                    </a>
                </div>
            </div>

            <!-- Entertainment Industry Summit -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <div class="relative">
                    <div class="h-48 bg-gradient-to-br from-pink-500 to-purple-600 flex items-center justify-center">
                        <i class="fas fa-film text-6xl text-white opacity-80"></i>
                    </div>
                    <div class="absolute top-4 right-4 bg-gray-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        Completed
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-2 text-sm text-secondary-500 mb-3">
                        <i class="fas fa-calendar text-pink-500"></i>
                        <span>October 25, 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-secondary-900 mb-3">Entertainment Industry Summit</h3>
                    <p class="text-secondary-600 mb-4">
                        Industry leaders discussed the future of entertainment technology and innovation.
                    </p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2 text-sm text-secondary-500">
                            <i class="fas fa-users text-pink-500"></i>
                            <span>300+ attendees</span>
                        </div>
                        <div class="text-sm text-green-600 font-semibold">✓ Success</div>
                    </div>
                    <a href="{{ route('events.show', 'entertainment-industry-summit') }}" class="w-full btn-outline text-center py-2">
                        View Recap
                    </a>
                </div>
            </div>

            <!-- Corporate Team Building -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <div class="relative">
                    <div class="h-48 bg-gradient-to-br from-blue-500 to-green-600 flex items-center justify-center">
                        <i class="fas fa-handshake text-6xl text-white opacity-80"></i>
                    </div>
                    <div class="absolute top-4 right-4 bg-gray-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        Completed
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-2 text-sm text-secondary-500 mb-3">
                        <i class="fas fa-calendar text-blue-500"></i>
                        <span>September 15, 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-secondary-900 mb-3">Corporate Team Building</h3>
                    <p class="text-secondary-600 mb-4">
                        An innovative team building event combining technology challenges with entertainment.
                    </p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2 text-sm text-secondary-500">
                            <i class="fas fa-users text-blue-500"></i>
                            <span>150+ attendees</span>
                        </div>
                        <div class="text-sm text-green-600 font-semibold">✓ Success</div>
                    </div>
                    <a href="{{ route('events.show', 'corporate-team-building') }}" class="w-full btn-outline text-center py-2">
                        View Recap
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="bg-gradient-to-r from-pink-600 to-purple-600 rounded-3xl p-12 text-center text-white relative overflow-hidden">
            <div class="absolute inset-0 bg-black/10"></div>
            <div class="relative z-10 space-y-8">
                <h2 class="text-4xl lg:text-5xl font-bold">
                    Ready to Host Your Event?
                </h2>
                <p class="text-xl text-pink-100 max-w-2xl mx-auto">
                    Let MGD Tech transform your vision into an unforgettable experience. 
                    From intimate gatherings to large-scale productions, we've got you covered.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="btn-secondary text-lg px-8 py-4">
                        <i class="fas fa-calendar-plus mr-2"></i>
                        Start Planning
                    </a>
                    <a href="{{ route('tickets.index') }}" class="btn-outline text-lg px-8 py-4">
                        <i class="fas fa-ticket-alt mr-2"></i>
                        Browse Events
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
