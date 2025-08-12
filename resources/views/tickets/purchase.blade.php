@extends('layouts.app')

@section('title', 'Purchase Tickets - MGD Tech')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-pink-900 via-purple-800 to-primary-900 text-white section-padding">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
    
    <div class="container-custom relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 text-sm mb-6">
                <i class="fas fa-shopping-cart"></i>
                <span>Purchase Tickets</span>
            </div>
            
            <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-8">
                <span class="bg-gradient-to-r from-white to-pink-200 bg-clip-text text-transparent">
                    Complete Your Purchase
                </span>
            </h1>
            
            <p class="text-xl lg:text-2xl text-pink-100 leading-relaxed">
                Secure your spot by completing your ticket purchase. Quick, easy, and secure.
            </p>
        </div>
    </div>
</section>

<!-- Purchase Form -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Form -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                        <h2 class="text-3xl font-bold text-secondary-900 mb-8">Ticket Information</h2>
                        
                        <form class="space-y-6">
                            <!-- Event Selection -->
                            <div>
                                <label class="block text-lg font-semibold text-secondary-900 mb-3">Select Event</label>
                                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent text-lg">
                                    <option>Choose an event...</option>
                                    <option>Tech Innovation Summit - December 15, 2024</option>
                                    <option>Web Development Workshop - January 20, 2025</option>
                                    <option>Cloud Solutions Conference - February 10, 2025</option>
                                </select>
                            </div>

                            <!-- Ticket Type Selection -->
                            <div>
                                <label class="block text-lg font-semibold text-secondary-900 mb-3">Ticket Type</label>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <label class="relative cursor-pointer">
                                        <input type="radio" name="ticket_type" value="early_bird" class="sr-only">
                                        <div class="border-2 border-gray-200 rounded-xl p-4 hover:border-primary-500 transition-colors">
                                            <div class="text-center">
                                                <div class="text-2xl font-bold text-secondary-900 mb-2">Early Bird</div>
                                                <div class="text-3xl font-bold text-primary-600 mb-2">$99</div>
                                                <div class="text-sm text-secondary-600">Limited time offer</div>
                                            </div>
                                        </div>
                                        <div class="absolute top-2 right-2 w-5 h-5 border-2 border-gray-300 rounded-full"></div>
                                    </label>
                                    
                                    <label class="relative cursor-pointer">
                                        <input type="radio" name="ticket_type" value="regular" class="sr-only" checked>
                                        <div class="border-2 border-primary-500 rounded-xl p-4 bg-primary-50">
                                            <div class="text-center">
                                                <div class="text-2xl font-bold text-secondary-900 mb-2">Regular</div>
                                                <div class="text-3xl font-bold text-primary-600 mb-2">$149</div>
                                                <div class="text-sm text-secondary-600">Standard admission</div>
                                            </div>
                                        </div>
                                        <div class="absolute top-2 right-2 w-5 h-5 border-2 border-primary-500 rounded-full bg-primary-500"></div>
                                    </label>
                                    
                                    <label class="relative cursor-pointer">
                                        <input type="radio" name="ticket_type" value="vip" class="sr-only">
                                        <div class="border-2 border-gray-200 rounded-xl p-4 hover:border-primary-500 transition-colors">
                                            <div class="text-center">
                                                <div class="text-2xl font-bold text-secondary-900 mb-2">VIP</div>
                                                <div class="text-3xl font-bold text-primary-600 mb-2">$299</div>
                                                <div class="text-sm text-secondary-600">Premium experience</div>
                                            </div>
                                        </div>
                                        <div class="absolute top-2 right-2 w-5 h-5 border-2 border-gray-300 rounded-full"></div>
                                    </label>
                                </div>
                            </div>

                            <!-- Quantity -->
                            <div>
                                <label class="block text-lg font-semibold text-secondary-900 mb-3">Quantity</label>
                                <div class="flex items-center space-x-4">
                                    <button type="button" class="w-12 h-12 bg-gray-100 hover:bg-gray-200 rounded-lg flex items-center justify-center text-2xl font-bold text-secondary-700 transition-colors">
                                        -
                                    </button>
                                    <input type="number" value="1" min="1" max="10" class="w-20 h-12 text-center border border-gray-300 rounded-lg text-xl font-bold">
                                    <button type="button" class="w-12 h-12 bg-gray-100 hover:bg-gray-200 rounded-lg flex items-center justify-center text-2xl font-bold text-secondary-700 transition-colors">
                                        +
                                    </button>
                                    <span class="text-secondary-600">tickets</span>
                                </div>
                            </div>

                            <!-- Personal Information -->
                            <div class="border-t pt-6">
                                <h3 class="text-2xl font-bold text-secondary-900 mb-6">Personal Information</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-lg font-semibold text-secondary-900 mb-2">First Name *</label>
                                        <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-lg font-semibold text-secondary-900 mb-2">Last Name *</label>
                                        <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-lg font-semibold text-secondary-900 mb-2">Email *</label>
                                        <input type="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-lg font-semibold text-secondary-900 mb-2">Phone</label>
                                        <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                                    </div>
                                    <div class="md:col-span-2">
                                        <label class="block text-lg font-semibold text-secondary-900 mb-2">Company</label>
                                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Options -->
                            <div class="border-t pt-6">
                                <h3 class="text-2xl font-bold text-secondary-900 mb-6">Additional Options</h3>
                                <div class="space-y-4">
                                    <label class="flex items-center space-x-3 cursor-pointer">
                                        <input type="checkbox" class="w-5 h-5 text-primary-600 border-gray-300 rounded focus:ring-primary-500">
                                        <span class="text-lg text-secondary-700">Subscribe to our newsletter for event updates</span>
                                    </label>
                                    <label class="flex items-center space-x-3 cursor-pointer">
                                        <input type="checkbox" class="w-5 h-5 text-primary-600 border-gray-300 rounded focus:ring-primary-500">
                                        <span class="text-lg text-secondary-700">Receive special offers and discounts</span>
                                    </label>
                                    <label class="flex items-center space-x-3 cursor-pointer">
                                        <input type="checkbox" class="w-5 h-5 text-primary-600 border-gray-300 rounded focus:ring-primary-500">
                                        <span class="text-lg text-secondary-700">Share my information with event partners</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="border-t pt-6">
                                <button type="submit" class="w-full btn-primary text-xl py-4">
                                    <i class="fas fa-lock mr-2"></i>
                                    Proceed to Secure Payment
                                </button>
                                <p class="text-center text-sm text-secondary-500 mt-3">
                                    Your payment information is encrypted and secure
                                </p>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="space-y-6">
                    <!-- Order Summary Card -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <h3 class="text-2xl font-bold text-secondary-900 mb-6">Order Summary</h3>
                        
                        <div class="space-y-4 mb-6">
                            <div class="flex justify-between items-center">
                                <span class="text-secondary-600">Regular Ticket</span>
                                <span class="font-semibold">$149.00</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-secondary-600">Quantity</span>
                                <span class="font-semibold">1</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-secondary-600">Processing Fee</span>
                                <span class="font-semibold">$5.00</span>
                            </div>
                        </div>
                        
                        <div class="border-t pt-4">
                            <div class="flex justify-between items-center text-xl font-bold text-secondary-900">
                                <span>Total</span>
                                <span>$154.00</span>
                            </div>
                        </div>
                    </div>

                    <!-- Event Details -->
                    <div class="bg-gradient-to-br from-primary-50 to-secondary-50 rounded-2xl p-6 border border-primary-200">
                        <h4 class="text-lg font-semibold text-secondary-900 mb-4">Event Details</h4>
                        <div class="space-y-3 text-secondary-600">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-calendar text-primary-600 w-5"></i>
                                <span>December 15, 2024</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-clock text-primary-600 w-5"></i>
                                <span>9:00 AM - 5:00 PM</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-map-marker-alt text-primary-600 w-5"></i>
                                <span>Tech Innovation Center</span>
                            </div>
                        </div>
                    </div>

                    <!-- Security Info -->
                    <div class="bg-green-50 rounded-2xl p-6 border border-green-200">
                        <div class="flex items-center space-x-3 mb-3">
                            <i class="fas fa-shield-alt text-green-600 text-xl"></i>
                            <h4 class="text-lg font-semibold text-green-800">Secure Payment</h4>
                        </div>
                        <p class="text-green-700 text-sm">
                            Your payment information is protected with bank-level security and encryption.
                        </p>
                    </div>

                    <!-- Need Help -->
                    <div class="bg-blue-50 rounded-2xl p-6 border border-blue-200">
                        <div class="flex items-center space-x-3 mb-3">
                            <i class="fas fa-question-circle text-blue-600 text-xl"></i>
                            <h4 class="text-lg font-semibold text-blue-800">Need Help?</h4>
                        </div>
                        <p class="text-blue-700 text-sm mb-4">
                            Have questions about your purchase? Our support team is here to help.
                        </p>
                        <a href="{{ route('contact') }}" class="text-blue-600 hover:text-blue-700 font-semibold text-sm">
                            Contact Support →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust Indicators -->
<section class="section-padding bg-gradient-to-br from-gray-50 to-white">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-secondary-900 mb-4">Trusted by Thousands</h2>
            <p class="text-lg text-secondary-600">Secure, reliable, and trusted ticketing platform</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-lock text-2xl text-green-600"></i>
                </div>
                <h3 class="text-lg font-semibold text-secondary-900 mb-2">Secure Payments</h3>
                <p class="text-secondary-600 text-sm">Bank-level encryption</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-headset text-2xl text-blue-600"></i>
                </div>
                <h3 class="text-lg font-semibold text-secondary-900 mb-2">24/7 Support</h3>
                <p class="text-secondary-600 text-sm">Always here to help</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-undo text-2xl text-purple-600"></i>
                </div>
                <h3 class="text-lg font-semibold text-secondary-900 mb-2">Easy Refunds</h3>
                <p class="text-secondary-600 text-sm">Hassle-free process</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-mobile-alt text-2xl text-orange-600"></i>
                </div>
                <h3 class="text-lg font-semibold text-secondary-900 mb-2">Mobile Friendly</h3>
                <p class="text-secondary-600 text-sm">Purchase anywhere</p>
            </div>
        </div>
    </div>
</section>
@endsection

