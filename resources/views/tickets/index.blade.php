@extends('layouts.app')

@section('title', 'Events & Tickets - MGDTech')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-12 lg:p-16 xl:p-20 flex items-center justify-center">
                <div class="text-center">
                    <h1 class="text-3xl lg:text-4xl xl:text-5xl font-bold uppercase tracking-wider mb-4">Events & Tickets</h1>
                    <p class="text-base lg:text-lg text-primary-100">Secure Your Spot at Amazing Tech Gatherings</p>
                </div>
            </div>
            
            <!-- Right Content -->
            <div class="p-12 lg:p-16 xl:p-20 space-y-6 lg:space-y-8">
                <h2 class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900 leading-tight">
                    Ready to Connect and Learn?
                </h2>
                <p class="text-base lg:text-lg text-gray-600 leading-relaxed">
                    Browse all available events and secure your spot at the most exciting tech gatherings. 
                    From networking events to workshops, we have something for everyone.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#events" class="btn-primary">
                        <i class="bx bx-calendar mr-2"></i>
                        Browse Events
                    </a>
                    <a href="{{ route('contact') }}" class="btn-outline">
                        <i class="bx bx-envelope mr-2"></i>
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Events -->
<section id="events" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-12 lg:p-16 xl:p-20 flex items-center justify-center">
                <h2 class="text-3xl lg:text-4xl font-bold uppercase tracking-wider text-center">Upcoming Events</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-12 lg:p-16 xl:p-20 space-y-6 lg:space-y-8">
                <h3 class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900 leading-tight">
                    Don't Miss These Amazing Opportunities
                </h3>
                <p class="text-base lg:text-lg text-gray-600 leading-relaxed">
                    Join industry leaders for cutting-edge technology presentations, networking, and hands-on workshops. 
                    Secure your spot before tickets sell out!
                </p>
                
                <div class="grid grid-cols-1 gap-6">
                    <!-- Event 1 -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-start justify-between">
                            <div class="space-y-3 flex-1">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center">
                                        <i class="bx bx-rocket text-primary-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-900">Tech Innovation Summit</h4>
                                        <span class="inline-block bg-pink-100 text-pink-700 px-2 py-1 rounded-full text-xs font-semibold">Featured</span>
                                    </div>
                                </div>
                                <p class="text-gray-600">
                                    Join industry leaders for a day of cutting-edge technology presentations and networking.
                                </p>
                                <div class="space-y-2">
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-calendar text-primary-600"></i>
                                        <span>December 15, 2024</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-time text-primary-600"></i>
                                        <span>9:00 AM - 5:00 PM</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-map-pin text-primary-600"></i>
                                        <span>Tech Innovation Center</span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-xl font-bold text-primary-600">From $99</span>
                                    <span class="text-sm text-green-600 font-semibold">Early Bird Available</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('events.show', 'tech-innovation-summit') }}" class="btn-primary w-full mt-4 text-center">
                            <i class="bx bx-ticket mr-2"></i>
                            View Details
                        </a>
                    </div>

                    <!-- Event 2 -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-start justify-between">
                            <div class="space-y-3 flex-1">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center">
                                        <i class="bx bx-code text-primary-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-900">Web Development Workshop</h4>
                                        <span class="inline-block bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs font-semibold">New</span>
                                    </div>
                                </div>
                                <p class="text-gray-600">
                                    Hands-on workshop covering modern web development techniques and best practices.
                                </p>
                                <div class="space-y-2">
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-calendar text-primary-600"></i>
                                        <span>January 20, 2025</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-time text-primary-600"></i>
                                        <span>10:00 AM - 4:00 PM</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-map-pin text-primary-600"></i>
                                        <span>Digital Hub</span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-xl font-bold text-primary-600">From $149</span>
                                    <span class="text-sm text-blue-600 font-semibold">Limited Seats</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('events.show', 'web-development-workshop') }}" class="btn-primary w-full mt-4 text-center">
                            <i class="bx bx-ticket mr-2"></i>
                            View Details
                        </a>
                    </div>

                    <!-- Event 3 -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-start justify-between">
                            <div class="space-y-3 flex-1">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center">
                                        <i class="bx bx-cloud text-primary-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-900">Cloud Solutions Conference</h4>
                                        <span class="inline-block bg-orange-100 text-orange-700 px-2 py-1 rounded-full text-xs font-semibold">Popular</span>
                                    </div>
                                </div>
                                <p class="text-gray-600">
                                    Explore the latest cloud technologies and strategies for business transformation.
                                </p>
                                <div class="space-y-2">
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-calendar text-primary-600"></i>
                                        <span>February 10, 2025</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-sm text-gray-600">
                                        <i class="bx bx-time text-primary-600"></i>
                                        <span>8:00 AM - 6:00 PM</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="bx bx-map-pin text-primary-600"></i>
                                        <span>Cloud Center</span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-xl font-bold text-primary-600">From $199</span>
                                    <span class="text-sm text-red-600 font-semibold">Almost Full</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('events.show', 'cloud-solutions-conference') }}" class="btn-primary w-full mt-4 text-center">
                            <i class="bx bx-ticket mr-2"></i>
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ticket Categories -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-12 lg:p-16 xl:p-20 flex items-center justify-center">
                <h2 class="text-3xl lg:text-4xl font-bold uppercase tracking-wider text-center">Ticket Categories</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-12 lg:p-16 xl:p-20 space-y-6 lg:space-y-8">
                <h3 class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900 leading-tight">
                    Choose the Perfect Ticket for Your Experience
                </h3>
                <p class="text-base lg:text-lg text-gray-600 leading-relaxed">
                    We offer various ticket types to suit different needs and budgets. 
                    From early bird savings to VIP experiences, find the perfect option for you.
                </p>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                        <div class="flex items-center space-x-3 mb-3">
                            <div class="w-8 h-8 bg-pink-100 rounded-lg flex items-center justify-center">
                                <i class="bx bx-rocket text-pink-600"></i>
                            </div>
                            <h4 class="font-semibold text-gray-900">Early Bird</h4>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Limited time offers with significant savings</p>
                        <div class="text-lg font-bold text-primary-600">Save 20-40%</div>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                        <div class="flex items-center space-x-3 mb-3">
                            <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center">
                                <i class="bx bx-star text-green-600"></i>
                            </div>
                            <h4 class="font-semibold text-gray-900">Standard</h4>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Regular admission with all features</p>
                        <div class="text-lg font-bold text-primary-600">Full Access</div>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                        <div class="flex items-center space-x-3 mb-3">
                            <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center">
                                <i class="bx bx-crown text-orange-600"></i>
                            </div>
                            <h4 class="font-semibold text-gray-900">VIP</h4>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Premium experience with exclusive perks</p>
                        <div class="text-lg font-bold text-primary-600">Premium</div>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                        <div class="flex items-center space-x-3 mb-3">
                            <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="bx bx-group text-blue-600"></i>
                            </div>
                            <h4 class="font-semibold text-gray-900">Group</h4>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Special pricing for teams</p>
                        <div class="text-lg font-bold text-primary-600">Save 15-25%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-primary-600 rounded-2xl p-12 lg:p-16 text-center text-white">
            <h2 class="text-3xl lg:text-4xl font-bold mb-6">
                Ready to Get Started?
            </h2>
            <p class="text-lg lg:text-xl text-primary-100 max-w-2xl mx-auto mb-8">
                Browse our events, choose your tickets, and get ready for an amazing experience. 
                Need help? Our team is here to assist you.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('events.index') }}" class="btn-secondary text-lg px-8 py-4">
                    <i class="bx bx-calendar mr-2"></i>
                    View All Events
                    </a>
                <a href="{{ route('contact') }}" class="btn-outline text-lg px-8 py-4">
                    <i class="bx bx-envelope mr-2"></i>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

