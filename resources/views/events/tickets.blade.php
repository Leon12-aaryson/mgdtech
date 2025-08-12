@extends('layouts.app')

@section('title', 'Event Tickets - MGD Tech')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-pink-900 via-purple-800 to-primary-900 text-white section-padding">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
    
    <div class="container-custom relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 text-sm mb-6">
                <i class="fas fa-ticket-alt"></i>
                <span>{{ $event ?? 'Event Tickets' }}</span>
            </div>
            
            <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-8">
                <span class="bg-gradient-to-r from-white to-pink-200 bg-clip-text text-transparent">
                    Get Your Tickets
                </span>
            </h1>
            
            <p class="text-xl lg:text-2xl text-pink-100 leading-relaxed">
                Secure your spot at this incredible event. Choose the perfect ticket option for your experience.
            </p>
        </div>
    </div>
</section>

<!-- Ticket Options -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-secondary-900 mb-6">
                Choose Your Experience
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Select the ticket package that best fits your needs and budget. 
                All tickets include access to the main event and networking opportunities.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Early Bird Ticket -->
            <div class="relative bg-white rounded-2xl p-8 shadow-lg border-2 border-pink-200 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <span class="bg-pink-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                        Most Popular
                    </span>
                </div>
                
                <div class="text-center mb-8">
                    <div class="w-20 h-20 bg-gradient-to-br from-pink-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-rocket text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary-900 mb-4">Early Bird</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-primary-600">$99</span>
                        <span class="text-lg text-secondary-600">/person</span>
                    </div>
                    <p class="text-secondary-600 mb-6">
                        Limited time offer! Book early and save big on this amazing event.
                    </p>
                </div>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span class="text-secondary-700">Full event access</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span class="text-secondary-700">Networking sessions</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span class="text-secondary-700">Event materials</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span class="text-secondary-700">Lunch included</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span class="text-secondary-700">Digital certificate</span>
                    </li>
                </ul>

                <button class="btn-primary w-full text-lg py-4">
                    <i class="fas fa-shopping-cart mr-2"></i>
                    Select Early Bird
                </button>
            </div>

            <!-- Regular Ticket -->
            <div class="relative bg-white rounded-2xl p-8 shadow-lg border-2 border-green-200 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="text-center mb-8">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-star text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary-900 mb-4">Regular</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-primary-600">$149</span>
                        <span class="text-lg text-secondary-600">/person</span>
                    </div>
                    <p class="text-secondary-600 mb-6">
                        Standard admission with all the essential features for a great experience.
                    </p>
                </div>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span class="text-secondary-700">Full event access</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span class="text-secondary-700">Networking sessions</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span class="text-secondary-700">Event materials</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span class="text-secondary-700">Lunch included</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span class="text-secondary-700">Digital certificate</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span class="text-secondary-700">Priority seating</span>
                    </li>
                </ul>

                <button class="btn-primary w-full text-lg py-4">
                    <i class="fas fa-shopping-cart mr-2"></i>
                    Select Regular
                </button>
            </div>

            <!-- VIP Ticket -->
            <div class="relative bg-white rounded-2xl p-8 shadow-lg border-2 border-orange-200 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <span class="bg-orange-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                        Premium
                    </span>
                </div>
                
                <div class="text-center mb-8">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-crown text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary-900 mb-4">VIP</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-primary-600">$299</span>
                        <span class="text-lg text-secondary-600">/person</span>
                    </div>
                    <p class="text-secondary-600 mb-6">
                        The ultimate experience with exclusive perks and premium treatment.
                    </p>
                </div>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span class="text-secondary-700">All Regular features</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span class="text-secondary-700">Exclusive VIP lounge</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span class="text-secondary-700">Meet & greet with speakers</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span class="text-secondary-700">Premium lunch experience</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span class="text-secondary-700">Swag bag with premium items</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span class="text-secondary-700">Post-event networking</span>
                    </li>
                </ul>

                <button class="btn-primary w-full text-lg py-4">
                    <i class="fas fa-shopping-cart mr-2"></i>
                    Select VIP
                </button>
            </div>
        </div>

        <!-- Group Discounts -->
        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 border border-blue-200">
            <div class="text-center mb-8">
                <h3 class="text-3xl font-bold text-secondary-900 mb-4">Group Discounts Available</h3>
                <p class="text-lg text-secondary-600">
                    Bring your team and save! Special pricing for groups of 5 or more.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-center p-6 bg-white rounded-xl shadow-md">
                    <div class="text-3xl font-bold text-blue-600 mb-2">5-9 People</div>
                    <div class="text-lg text-secondary-600">15% off each ticket</div>
                </div>
                <div class="text-center p-6 bg-white rounded-xl shadow-md">
                    <div class="text-3xl font-bold text-blue-600 mb-2">10-19 People</div>
                    <div class="text-lg text-secondary-600">20% off each ticket</div>
                </div>
                <div class="text-center p-6 bg-white rounded-xl shadow-md">
                    <div class="text-3xl font-bold text-blue-600 mb-2">20+ People</div>
                    <div class="text-lg text-secondary-600">25% off each ticket</div>
                </div>
            </div>
            
            <div class="text-center mt-6">
                <a href="{{ route('contact') }}" class="btn-outline text-lg px-8 py-4">
                    <i class="fas fa-envelope mr-2"></i>
                    Contact for Group Rates
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Purchase Process -->
<section class="section-padding bg-gradient-to-br from-gray-50 to-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-secondary-900 mb-6">
                How to Purchase
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Getting your tickets is quick and easy. Follow these simple steps to secure your spot.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-white">1</span>
                </div>
                <h3 class="text-xl font-semibold text-secondary-900 mb-2">Select Tickets</h3>
                <p class="text-secondary-600">Choose your preferred ticket type and quantity</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-white">2</span>
                </div>
                <h3 class="text-xl font-semibold text-secondary-900 mb-2">Fill Details</h3>
                <p class="text-secondary-600">Provide your contact and payment information</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-white">3</span>
                </div>
                <h3 class="text-xl font-semibold text-secondary-900 mb-2">Confirm Payment</h3>
                <p class="text-secondary-600">Complete your secure payment transaction</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-white">4</span>
                </div>
                <h3 class="text-xl font-semibold text-secondary-900 mb-2">Get Confirmation</h3>
                <p class="text-secondary-600">Receive your tickets via email</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-secondary-900 mb-6">
                Frequently Asked Questions
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Got questions? We've got answers. Here are the most common questions about our events.
            </p>
        </div>

        <div class="max-w-4xl mx-auto space-y-6">
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-semibold text-secondary-900 mb-3">Can I get a refund if I can't attend?</h3>
                <p class="text-secondary-600">
                    Yes, we offer full refunds up to 7 days before the event. After that, we can transfer your ticket to another person or provide a credit for future events.
                </p>
            </div>
            
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-semibold text-secondary-900 mb-3">What should I bring to the event?</h3>
                <p class="text-secondary-600">
                    Just bring yourself and a positive attitude! We'll provide all materials, refreshments, and networking opportunities. Business cards are recommended for networking.
                </p>
            </div>
            
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-semibold text-secondary-900 mb-3">Is parking available?</h3>
                <p class="text-secondary-600">
                    Yes, complimentary parking is available at the venue. We'll send detailed parking instructions with your ticket confirmation.
                </p>
            </div>
            
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-semibold text-secondary-900 mb-3">Can I upgrade my ticket later?</h3>
                <p class="text-secondary-600">
                    Absolutely! You can upgrade your ticket up to 24 hours before the event, subject to availability. Contact us for upgrade options.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section-padding bg-gradient-to-br from-primary-50 to-secondary-50">
    <div class="container-custom text-center">
        <h2 class="text-4xl lg:text-5xl font-bold text-secondary-900 mb-6">
            Ready to Secure Your Spot?
        </h2>
        <p class="text-xl text-secondary-600 max-w-3xl mx-auto mb-8">
            Don't wait too long! Early bird tickets are selling fast and group discounts are available. 
            Contact us if you have any questions about the event or ticketing.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="btn-primary text-lg px-8 py-4">
                <i class="fas fa-envelope mr-2"></i>
                Contact Us
            </a>
            <a href="{{ route('events.index') }}" class="btn-outline text-lg px-8 py-4">
                <i class="fas fa-calendar mr-2"></i>
                View All Events
            </a>
        </div>
    </div>
</section>
@endsection

