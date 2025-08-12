@extends('layouts.app')

@section('title', 'Tickets - MGD Tech')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-pink-900 via-purple-800 to-primary-900 text-white section-padding">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
    
    <div class="container-custom relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 text-sm mb-6">
                <i class="fas fa-ticket-alt"></i>
                <span>Available Tickets</span>
            </div>
            
            <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-8">
                <span class="bg-gradient-to-r from-white to-pink-200 bg-clip-text text-transparent">
                    Get Your Tickets
                </span>
            </h1>
            
            <p class="text-xl lg:text-2xl text-pink-100 leading-relaxed">
                Browse all available events and secure your spot at the most exciting tech gatherings.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                <a href="#events" class="btn-primary text-lg px-8 py-4">
                    <i class="fas fa-calendar mr-2"></i>
                    Browse Events
                </a>
                <a href="{{ route('contact') }}" class="btn-outline text-lg px-8 py-4">
                    <i class="fas fa-envelope mr-2"></i>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Events -->
<section id="events" class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-secondary-900 mb-6">
                Upcoming Events
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Don't miss out on these incredible opportunities to learn, network, and be inspired.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Event 1 -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative">
                    <div class="h-48 bg-gradient-to-br from-pink-500 to-purple-600 flex items-center justify-center">
                        <i class="fas fa-rocket text-6xl text-white"></i>
                    </div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-pink-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Featured
                        </span>
                    </div>
                </div>
                
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-secondary-900 mb-3">Tech Innovation Summit</h3>
                    <p class="text-secondary-600 mb-4">
                        Join industry leaders for a day of cutting-edge technology presentations and networking.
                    </p>
                    
                    <div class="space-y-2 mb-6">
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
                    </div>
                    
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-2xl font-bold text-primary-600">From $99</span>
                        <span class="text-sm text-green-600 font-semibold">Early Bird Available</span>
                    </div>
                    
                    <a href="{{ route('events.show', 'tech-innovation-summit') }}" class="btn-primary w-full text-center">
                        <i class="fas fa-ticket-alt mr-2"></i>
                        View Details
                    </a>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-blue-600 flex items-center justify-center">
                        <i class="fas fa-code text-6xl text-white"></i>
                    </div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            New
                        </span>
                    </div>
                </div>
                
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-secondary-900 mb-3">Web Development Workshop</h3>
                    <p class="text-secondary-600 mb-4">
                        Hands-on workshop covering modern web development techniques and best practices.
                    </p>
                    
                    <div class="space-y-2 mb-6">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-calendar text-primary-600 w-5"></i>
                            <span class="text-secondary-600">January 20, 2025</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-clock text-primary-600 w-5"></i>
                            <span class="text-secondary-600">10:00 AM - 4:00 PM</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-primary-600 w-5"></i>
                            <span class="text-secondary-600">Digital Hub</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-2xl font-bold text-primary-600">From $149</span>
                        <span class="text-sm text-blue-600 font-semibold">Limited Seats</span>
                    </div>
                    
                    <a href="{{ route('events.show', 'web-development-workshop') }}" class="btn-primary w-full text-center">
                        <i class="fas fa-ticket-alt mr-2"></i>
                        View Details
                    </a>
                </div>
            </div>

            <!-- Event 3 -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative">
                    <div class="h-48 bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center">
                        <i class="fas fa-cloud text-6xl text-white"></i>
                    </div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Popular
                        </span>
                    </div>
                </div>
                
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-secondary-900 mb-3">Cloud Solutions Conference</h3>
                    <p class="text-secondary-600 mb-4">
                        Explore the latest cloud technologies and strategies for business transformation.
                    </p>
                    
                    <div class="space-y-2 mb-6">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-calendar text-primary-600 w-5"></i>
                            <span class="text-secondary-600">February 10, 2025</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-clock text-primary-600 w-5"></i>
                            <span class="text-secondary-600">8:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-primary-600 w-5"></i>
                            <span class="text-secondary-600">Cloud Center</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-2xl font-bold text-primary-600">From $199</span>
                        <span class="text-sm text-red-600 font-semibold">Almost Full</span>
                    </div>
                    
                    <a href="{{ route('events.show', 'cloud-solutions-conference') }}" class="btn-primary w-full text-center">
                        <i class="fas fa-ticket-alt mr-2"></i>
                        View Details
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ticket Categories -->
<section class="section-padding bg-gradient-to-br from-gray-50 to-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-secondary-900 mb-6">
                Ticket Categories
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Choose the ticket type that best fits your needs and budget.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-pink-50 to-purple-50 border border-pink-200">
                <div class="w-20 h-20 bg-gradient-to-br from-pink-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-rocket text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary-900 mb-4">Early Bird</h3>
                <p class="text-secondary-600 mb-6">
                    Limited time offers with significant savings for early bookings.
                </p>
                <div class="text-3xl font-bold text-primary-600 mb-2">Save 20-40%</div>
                <span class="text-sm text-secondary-500">Limited availability</span>
            </div>
            
            <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-green-50 to-blue-50 border border-green-200">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-star text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary-900 mb-4">Standard</h3>
                <p class="text-secondary-600 mb-6">
                    Regular admission with all essential features included.
                </p>
                <div class="text-3xl font-bold text-primary-600 mb-2">Full Access</div>
                <span class="text-sm text-secondary-500">Most popular choice</span>
            </div>
            
            <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-orange-50 to-red-50 border border-orange-200">
                <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-crown text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary-900 mb-4">VIP</h3>
                <p class="text-secondary-600 mb-6">
                    Premium experience with exclusive perks and special treatment.
                </p>
                <div class="text-3xl font-bold text-primary-600 mb-2">Premium</div>
                <span class="text-sm text-secondary-500">Exclusive benefits</span>
            </div>
            
            <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-blue-50 to-indigo-50 border border-blue-200">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-users text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary-900 mb-4">Group</h3>
                <p class="text-secondary-600 mb-6">
                    Special pricing for teams and organizations.
                </p>
                <div class="text-3xl font-bold text-primary-600 mb-2">Save 15-25%</div>
                <span class="text-sm text-secondary-500">5+ people</span>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section-padding bg-gradient-to-br from-primary-50 to-secondary-50">
    <div class="container-custom text-center">
        <h2 class="text-4xl lg:text-5xl font-bold text-secondary-900 mb-6">
            Ready to Get Started?
        </h2>
        <p class="text-xl text-secondary-600 max-w-3xl mx-auto mb-8">
            Browse our events, choose your tickets, and get ready for an amazing experience. 
            Need help? Our team is here to assist you.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('events.index') }}" class="btn-primary text-lg px-8 py-4">
                <i class="fas fa-calendar mr-2"></i>
                View All Events
            </a>
            <a href="{{ route('contact') }}" class="btn-outline text-lg px-8 py-4">
                <i class="fas fa-envelope mr-2"></i>
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection

