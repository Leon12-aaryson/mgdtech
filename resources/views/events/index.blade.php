@extends('layouts.app')

@section('title', 'Events - MGDTech')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-12 lg:p-16 xl:p-20 flex items-center justify-center">
                <div class="text-center">
                    <h1 class="text-3xl lg:text-4xl xl:text-5xl font-bold uppercase tracking-wider mb-4">Events</h1>
                    <p class="text-base lg:text-lg text-primary-100">Unforgettable Experiences</p>
                </div>
            </div>
            
            <!-- Right Content -->
            <div class="p-12 lg:p-16 xl:p-20 space-y-6 lg:space-y-8">
                <h2 class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900 leading-tight">
                    Discover Our Curated Events
                </h2>
                <p class="text-base lg:text-lg text-gray-600 leading-relaxed">
                    We blend cutting-edge technology with world-class entertainment to create moments that inspire and engage. 
                    From corporate gatherings to tech showcases, every event is designed to bring people together.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('tickets.index') }}" class="btn-primary">
                        <i class="bx bx-ticket mr-2"></i>
                        Browse Tickets
                    </a>
                    <a href="{{ route('contact') }}" class="btn-outline">
                        <i class="bx bx-calendar-plus mr-2"></i>
                        Host Your Event
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Categories -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-12 lg:p-16 xl:p-20 flex items-center justify-center">
                <h2 class="text-3xl lg:text-4xl font-bold uppercase tracking-wider text-center">Event Categories</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-12 lg:p-16 xl:p-20 space-y-6 lg:space-y-8">
                <h3 class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900 leading-tight">
                    Explore Different Types of Events
                </h3>
                <p class="text-base lg:text-lg text-gray-600 leading-relaxed">
                    From upcoming events to live streams and past highlights, we offer a variety of experiences 
                    to suit different interests and schedules.
                </p>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="bg-white p-4 rounded-lg border border-gray-100 text-center">
                        <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                            <i class="bx bx-rocket text-pink-600"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Upcoming Events</h4>
                        <p class="text-sm text-gray-600 mb-3">Get ready for our next amazing events</p>
                        <a href="#upcoming" class="text-pink-600 hover:text-pink-700 font-semibold text-sm">
                            View All →
                        </a>
                    </div>
                    
                    <div class="bg-white p-4 rounded-lg border border-gray-100 text-center">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                            <i class="bx bx-play-circle text-green-600"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Live Now</h3>
                        <p class="text-sm text-gray-600 mb-3">Join currently happening events</p>
                        <a href="#live" class="text-green-600 hover:text-green-700 font-semibold text-sm">
                            Watch Live →
                        </a>
                    </div>
                    
                    <div class="bg-white p-4 rounded-lg border border-gray-100 text-center">
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                            <i class="bx bx-history text-orange-600"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Past Events</h4>
                        <p class="text-sm text-gray-600 mb-3">Relive the magic of previous events</p>
                        <a href="#past" class="text-orange-600 hover:text-orange-700 font-semibold text-sm">
                            Browse Archive →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Events -->
<section id="upcoming" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-12 lg:p-16 xl:p-20 flex items-center justify-center">
                <h2 class="text-3xl lg:text-4xl font-bold uppercase tracking-wider text-center">Upcoming Events</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-12 lg:p-16 xl:p-20 space-y-6 lg:space-y-8">
                <h3 class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900 leading-tight">
                    Mark Your Calendar
                </h3>
                <p class="text-base lg:text-lg text-gray-600 leading-relaxed">
                    Mark your calendar for these exciting upcoming events. Early bird tickets available now! 
                    Don't miss out on these incredible opportunities to learn, network, and be inspired.
                </p>
                
                <div class="grid grid-cols-1 gap-6">
                    <!-- Tech Innovation Summit -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-start justify-between">
                            <div class="space-y-3 flex-1">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="bx bx-chip text-blue-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-900">Tech Innovation Summit 2024</h4>
                                        <span class="inline-block bg-pink-100 text-pink-700 px-2 py-1 rounded-full text-xs font-semibold">Early Bird</span>
                                    </div>
                                </div>
                                <p class="text-gray-600">
                                    Join industry leaders for a day of innovation, networking, and cutting-edge technology demonstrations.
                                </p>
                                <div class="space-y-2">
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-calendar text-pink-600"></i>
                                        <span>December 15, 2024</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-map-pin text-pink-600"></i>
                                        <span>San Francisco Convention Center</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-pink-600 font-semibold">
                                        <i class="bx bx-dollar text-pink-600"></i>
                                        <span>$299</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-3 mt-4">
                            <a href="{{ route('events.show', 'tech-innovation-summit') }}" class="btn-primary flex-1 text-center">
                                Learn More
                            </a>
                            <a href="{{ route('events.tickets', 'tech-innovation-summit') }}" class="btn-secondary flex-1 text-center">
                                Get Tickets
                            </a>
                        </div>
                    </div>

                    <!-- Entertainment & Tech Fusion -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-start justify-between">
                            <div class="space-y-3 flex-1">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-pink-100 rounded-lg flex items-center justify-center">
                                        <i class="bx bx-star text-pink-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-900">Entertainment & Tech Fusion</h4>
                                        <span class="inline-block bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs font-semibold">Popular</span>
                                    </div>
                                </div>
                                <p class="text-gray-600">
                                    Experience the perfect blend of live entertainment and cutting-edge technology in this immersive event.
                                </p>
                                <div class="space-y-2">
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-calendar text-pink-600"></i>
                                        <span>January 20, 2025</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-map-pin text-pink-600"></i>
                                        <span>Los Angeles Tech Hub</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-pink-600 font-semibold">
                                        <i class="bx bx-dollar text-pink-600"></i>
                                        <span>$199</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-3 mt-4">
                            <a href="{{ route('events.show', 'entertainment-tech-fusion') }}" class="btn-primary flex-1 text-center">
                                Learn More
                            </a>
                            <a href="{{ route('events.tickets', 'entertainment-tech-fusion') }}" class="btn-secondary flex-1 text-center">
                                Get Tickets
                            </a>
                        </div>
                    </div>

                    <!-- Corporate Event Workshop -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-start justify-between">
                            <div class="space-y-3 flex-1">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                        <i class="bx bx-group text-green-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-900">Corporate Event Workshop</h4>
                                        <span class="inline-block bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-xs font-semibold">Limited Seats</span>
                                    </div>
                                </div>
                                <p class="text-gray-600">
                                    Learn how to create unforgettable corporate events that engage and inspire your team.
                                </p>
                                <div class="space-y-2">
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-calendar text-pink-600"></i>
                                        <span>February 8, 2025</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-map-pin text-pink-600"></i>
                                        <span>Virtual Event</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-pink-600 font-semibold">
                                        <i class="bx bx-dollar text-pink-600"></i>
                                        <span>$99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-3 mt-4">
                            <a href="{{ route('events.show', 'corporate-event-workshop') }}" class="btn-primary flex-1 text-center">
                                Learn More
                            </a>
                            <a href="{{ route('events.tickets', 'corporate-event-workshop') }}" class="btn-secondary flex-1 text-center">
                                Get Tickets
                            </a>
                        </div>
                    </div>
                </div>
    </div>
</section>

<!-- Live Events -->
<section id="live" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-12 lg:p-16 xl:p-20 flex items-center justify-center">
                <h2 class="text-3xl lg:text-4xl font-bold uppercase tracking-wider text-center">Live Now</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-12 lg:p-16 xl:p-20 space-y-6 lg:space-y-8">
                <h3 class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900 leading-tight">
                    Join Live Events in Real-Time
                </h3>
                <p class="text-base lg:text-lg text-gray-600 leading-relaxed">
                    Experience the excitement of live events happening right now! Join our interactive sessions 
                    and connect with others in real-time.
                </p>
                
                <div class="grid grid-cols-1 gap-6">
                    <!-- Live Tech Talk -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-start justify-between">
                            <div class="space-y-3 flex-1">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                        <i class="bx bx-play-circle text-green-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-900">Live Tech Talk: AI in Entertainment</h4>
                                        <span class="inline-block bg-red-100 text-red-700 px-2 py-1 rounded-full text-xs font-semibold animate-pulse">LIVE NOW</span>
                                    </div>
                                </div>
                                <p class="text-gray-600">
                                    Join us for an interactive discussion about how artificial intelligence is revolutionizing the entertainment industry.
                                </p>
                                <div class="space-y-2">
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-group text-green-600"></i>
                                        <span>1,247 watching</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-time text-green-600"></i>
                                        <span>2:30 remaining</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-3 mt-4">
                            <a href="{{ route('events.stream', 'ai-entertainment-talk') }}" class="btn-secondary flex-1 text-center">
                                <i class="bx bx-play mr-2"></i>
                                Watch Live
                            </a>
                            <a href="#" class="btn-outline flex-1 text-center">
                                <i class="bx bx-share mr-2"></i>
                                Share
                            </a>
                        </div>
                    </div>

                    <!-- Virtual Networking -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-start justify-between">
                            <div class="space-y-3 flex-1">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                        <i class="bx bx-network-chart text-purple-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-900">Virtual Networking Lounge</h4>
                                        <span class="inline-block bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs font-semibold">OPEN</span>
                                    </div>
                                </div>
                                <p class="text-gray-600">
                                    Connect with industry professionals in our virtual networking space. Drop in anytime!
                                </p>
                                <div class="space-y-2">
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-group text-purple-600"></i>
                                        <span>89 online</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-time text-purple-600"></i>
                                        <span>Open 24/7</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-3 mt-4">
                            <a href="{{ route('events.stream', 'virtual-networking') }}" class="btn-secondary flex-1 text-center">
                                <i class="bx bx-log-in mr-2"></i>
                                Join Now
                            </a>
                            <a href="#" class="btn-outline flex-1 text-center">
                                <i class="bx bx-info-circle mr-2"></i>
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Past Events -->
<section id="past" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-12 lg:p-16 xl:p-20 flex items-center justify-center">
                <h2 class="text-3xl lg:text-4xl font-bold uppercase tracking-wider text-center">Past Events</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-12 lg:p-16 xl:p-20 space-y-6 lg:space-y-8">
                <h3 class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900 leading-tight">
                    Relive the Magic of Our Previous Events
                </h3>
                <p class="text-base lg:text-lg text-gray-600 leading-relaxed">
                    Take a look back at our successful events and see what we've accomplished together. 
                    View recaps and learn from our past experiences.
                </p>
                
                <div class="grid grid-cols-1 gap-6">
                    <!-- Tech Startup Showcase -->
                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                        <div class="flex items-start justify-between">
                            <div class="space-y-3 flex-1">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center">
                                        <i class="bx bx-rocket text-orange-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-900">Tech Startup Showcase</h4>
                                        <span class="inline-block bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs font-semibold">Completed</span>
                                    </div>
                                </div>
                                <p class="text-gray-600">
                                    A successful showcase featuring 20 innovative startups and over 500 attendees.
                                </p>
                                <div class="space-y-2">
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-calendar text-orange-600"></i>
                                        <span>November 10, 2024</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-group text-orange-600"></i>
                                        <span>500+ attendees</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-green-600">
                                        <i class="bx bx-check-circle text-green-600"></i>
                                        <span>✓ Success</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('events.show', 'tech-startup-showcase') }}" class="btn-outline w-full mt-4 text-center">
                            View Recap
                        </a>
                    </div>

                    <!-- Entertainment Industry Summit -->
                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                        <div class="flex items-start justify-between">
                            <div class="space-y-3 flex-1">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-pink-100 rounded-lg flex items-center justify-center">
                                        <i class="bx bx-film text-pink-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-900">Entertainment Industry Summit</h4>
                                        <span class="inline-block bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs font-semibold">Completed</span>
                                    </div>
                                </div>
                                <p class="text-gray-600">
                                    Industry leaders discussed the future of entertainment technology and innovation.
                                </p>
                                <div class="space-y-2">
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-calendar text-pink-600"></i>
                                        <span>October 25, 2024</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-group text-pink-600"></i>
                                        <span>300+ attendees</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-green-600">
                                        <i class="bx bx-check-circle text-green-600"></i>
                                        <span>✓ Success</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('events.show', 'entertainment-industry-summit') }}" class="btn-outline w-full mt-4 text-center">
                            View Recap
                        </a>
                    </div>

                    <!-- Corporate Team Building -->
                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                        <div class="flex items-start justify-between">
                            <div class="space-y-3 flex-1">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="bx bx-handshake text-blue-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-900">Corporate Team Building</h4>
                                        <span class="inline-block bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs font-semibold">Completed</span>
                                    </div>
                                </div>
                                <p class="text-gray-600">
                                    An innovative team building event combining technology challenges with entertainment.
                                </p>
                                <div class="space-y-2">
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-calendar text-blue-600"></i>
                                        <span>September 15, 2024</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-group text-blue-600"></i>
                                        <span>150+ attendees</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-green-600">
                                        <i class="bx bx-check-circle text-green-600"></i>
                                        <span>✓ Success</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('events.show', 'corporate-team-building') }}" class="btn-outline w-full mt-4 text-center">
                            View Recap
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-primary-600 rounded-2xl p-12 lg:p-16 text-center text-white">
            <h2 class="text-3xl lg:text-4xl font-bold mb-6">
                Ready to Host Your Event?
            </h2>
            <p class="text-lg lg:text-xl text-primary-100 max-w-2xl mx-auto mb-8">
                Let MGDTech transform your vision into an unforgettable experience. 
                From intimate gatherings to large-scale productions, we've got you covered.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="btn-secondary text-lg px-8 py-4">
                    <i class="bx bx-calendar-plus mr-2"></i>
                    Start Planning
                </a>
                <a href="{{ route('tickets.index') }}" class="btn-outline text-lg px-8 py-4">
                    <i class="bx bx-ticket mr-2"></i>
                    Browse Events
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
