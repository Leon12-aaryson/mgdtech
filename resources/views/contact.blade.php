@extends('layouts.app')

@section('title', 'Contact Us - MGDTech')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <div class="text-center">
                    <h1 class="text-4xl font-bold uppercase tracking-wider mb-4">Get In Touch</h1>
                    <p class="text-lg text-primary-100">Let's Build Something Amazing</p>
                </div>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <h2 class="text-3xl font-bold text-gray-900 leading-tight">
                    Ready to start a conversation?
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    We're real people who love hearing about your ideas and dreams. 
                    Whether you have a clear vision or just a feeling that something amazing could happen, let's talk.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#contact-form" class="btn-primary">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Send Message
                    </a>
                    <a href="#contact-info" class="btn-outline">
                        <i class="fas fa-info-circle mr-2"></i>
                        Contact Info
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section id="contact-form" class="py-20 bg-gray-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <h2 class="text-4xl font-bold uppercase tracking-wider">Contact Form</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <h3 class="text-3xl font-bold text-gray-900 leading-tight">
                    Let's Start a Conversation
                </h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    We're excited to hear from you! Fill out the form below and we'll get back to you within 24 hours. 
                    No pressure, no sales pitch—just a friendly chat about what you're trying to create.
                </p>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle mr-2"></i>
                            {{ session('success') }}
                        </div>
                    </div>
                @endif
                
                <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">
                                First Name *
                            </label>
                            <input type="text" id="first_name" name="first_name" required
                                class="input-field"
                                placeholder="Enter your first name">
                        </div>
                        
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">
                                Last Name *
                            </label>
                            <input type="text" id="last_name" name="last_name" required
                                class="input-field"
                                placeholder="Enter your last name">
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email Address *
                        </label>
                        <input type="email" id="email" name="email" required
                            class="input-field"
                            placeholder="Enter your email address">
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                            Phone Number
                        </label>
                        <input type="tel" id="phone" name="phone"
                            class="input-field"
                            placeholder="Enter your phone number">
                    </div>
                    
                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700 mb-2">
                            Company Name
                        </label>
                        <input type="text" id="company" name="company"
                            class="input-field"
                            placeholder="Enter your company name">
                    </div>
                    
                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-700 mb-2">
                            Service Interest *
                        </label>
                        <select id="service" name="service" required class="input-field">
                            <option value="">Select a service</option>
                            <optgroup label="Audio-Visual & Events">
                                <option value="av-integration">Audio-Visual Integration</option>
                                <option value="networking-events">Networking Events</option>
                                <option value="event-management">Event Management</option>
                                <option value="live-streaming">Live Streaming Solutions</option>
                            </optgroup>
                            <optgroup label="Technology Solutions">
                                <option value="web-development">Web Development</option>
                                <option value="mobile-apps">Mobile Applications</option>
                                <option value="cloud-solutions">Cloud Solutions</option>
                                <option value="consulting">Technology Consulting</option>
                            </optgroup>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="budget" class="block text-sm font-medium text-gray-700 mb-2">
                            Project Budget
                        </label>
                        <select id="budget" name="budget" class="input-field">
                            <option value="">Select budget range</option>
                            <option value="under-5k">Under $5,000</option>
                            <option value="5k-10k">$5,000 - $10,000</option>
                            <option value="10k-25k">$10,000 - $25,000</option>
                            <option value="25k-50k">$25,000 - $50,000</option>
                            <option value="50k-plus">$50,000+</option>
                            <option value="not-sure">Not sure yet</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                            Project Details *
                        </label>
                        <textarea id="message" name="message" rows="5" required
                            class="input-field resize-none"
                            placeholder="Tell us about your project, event, or requirements..."></textarea>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <input type="checkbox" id="newsletter" name="newsletter" class="mt-1 h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                        <label for="newsletter" class="text-sm text-gray-600">
                            Subscribe to our newsletter for updates on technology trends and event innovations
                        </label>
                    </div>
                    
                    <button type="submit" class="w-full btn-primary text-lg py-4">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section id="contact-info" class="py-20 bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <h2 class="text-4xl font-bold uppercase tracking-wider">Contact Info</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <h3 class="text-3xl font-bold text-gray-900 leading-tight">
                    Get In Touch
                </h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    We're here to help and answer any questions you might have. 
                    We look forward to hearing from you.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-primary-600"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Office Address</h4>
                            <p class="text-gray-600">
                                Kampala, Uganda<br>
                                East Africa
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-phone text-primary-600"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Phone Number</h4>
                            <p class="text-gray-600">
                                <a href="tel:+256-123-456-789" class="hover:text-primary-600 transition-colors duration-200">
                                    +256 (0) 123-456-789
                                </a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-envelope text-primary-600"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Email Address</h4>
                            <p class="text-gray-600">
                                <a href="mailto:info@mgdtech.com" class="hover:text-primary-600 transition-colors duration-200">
                                    info@mgdtech.com
                                </a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-clock text-primary-600"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Business Hours</h4>
                            <p class="text-gray-600">
                                Monday - Friday: 9:00 AM - 6:00 PM EAT<br>
                                Saturday: 10:00 AM - 2:00 PM EAT<br>
                                Sunday: Closed
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="pt-6 border-t border-gray-200">
                    <h4 class="text-lg font-semibold text-gray-900 mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center text-primary-600 hover:bg-primary-200 transition-colors duration-200">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center text-primary-600 hover:bg-primary-200 transition-colors duration-200">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center text-primary-600 hover:bg-primary-200 transition-colors duration-200">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-gray-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <h2 class="text-4xl font-bold uppercase tracking-wider">FAQ</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20">
                <div class="space-y-8">
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">
                            How long does a typical project take?
                        </h3>
                        <p class="text-gray-600">
                            Project timelines vary depending on complexity and scope. A simple AV installation might take 1-2 weeks, 
                            while a complex networking event could take 2-3 months. We'll provide a detailed timeline during our initial consultation.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">
                            What is your development process?
                        </h3>
                        <p class="text-gray-600">
                            We follow a proven 4-phase process: Discovery (requirements gathering), Planning (architecture & design), 
                            Development (building & testing), and Launch (deployment & support). We provide regular updates throughout the process.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">
                            Do you provide ongoing support after launch?
                        </h3>
                        <p class="text-gray-600">
                            Yes! We offer various support packages including maintenance, updates, hosting, and technical support. 
                            We believe in building long-term relationships with our clients.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">
                            Can you work with existing systems and technologies?
                        </h3>
                        <p class="text-gray-600">
                            Absolutely! We're experienced with integrating new solutions with existing systems. 
                            We'll assess your current technology stack and recommend the best approach for seamless integration.
                        </p>
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
                Ready to Start Your Project?
            </h2>
            <p class="text-xl text-primary-100 max-w-2xl mx-auto mb-8">
                Let's discuss your ideas and turn them into reality. 
                Schedule a free consultation call to get started.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="btn-secondary text-lg px-8 py-4">
                    <i class="fas fa-calendar mr-2"></i>
                    Schedule Free Call
                </a>
                <a href="{{ route('services') }}" class="btn-outline text-lg px-8 py-4">
                    <i class="fas fa-info-circle mr-2"></i>
                    View Services
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
