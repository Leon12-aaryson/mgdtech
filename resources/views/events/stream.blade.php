@extends('layouts.app')

@section('title', 'Live Stream - MGD Tech')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-pink-900 via-purple-800 to-primary-900 text-white section-padding">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
    
    <div class="container-custom relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 text-sm mb-6">
                <i class="fas fa-play-circle"></i>
                <span>{{ $event ?? 'Live Stream' }}</span>
            </div>
            
            <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-8">
                <span class="bg-gradient-to-r from-white to-pink-200 bg-clip-text text-transparent">
                    Watch Live
                </span>
            </h1>
            
            <p class="text-xl lg:text-2xl text-pink-100 leading-relaxed">
                Experience the event from anywhere in the world with our high-quality live streaming service.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                <a href="#stream" class="btn-primary text-lg px-8 py-4">
                    <i class="fas fa-play mr-2"></i>
                    Join Stream
                </a>
                <a href="{{ route('events.tickets', $event ?? 'event') }}" class="btn-outline text-lg px-8 py-4">
                    <i class="fas fa-ticket-alt mr-2"></i>
                    Get Tickets
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Live Stream Section -->
<section id="stream" class="section-padding bg-black">
    <div class="container-custom">
        <div class="text-center mb-8">
            <div class="inline-flex items-center space-x-2 bg-red-600 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                <i class="fas fa-circle animate-pulse"></i>
                <span>LIVE NOW</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
                {{ $event ?? 'Event Name' }} - Live Stream
            </h2>
            <p class="text-xl text-gray-300">
                Join thousands of viewers worldwide for this exclusive live event
            </p>
        </div>

        <!-- Video Player -->
        <div class="max-w-6xl mx-auto mb-8">
            <div class="relative bg-gray-900 rounded-2xl overflow-hidden aspect-video">
                <!-- Placeholder for video player -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center text-white">
                        <div class="w-32 h-32 bg-gradient-to-br from-pink-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-play text-5xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Live Stream Starting Soon</h3>
                        <p class="text-gray-300">The event will begin in a few minutes</p>
                    </div>
                </div>
                
                <!-- Live indicator -->
                <div class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                    <i class="fas fa-circle animate-pulse mr-2"></i>
                    LIVE
                </div>
                
                <!-- Viewer count -->
                <div class="absolute top-4 right-4 bg-black/50 backdrop-blur-sm text-white px-3 py-1 rounded-full text-sm">
                    <i class="fas fa-users mr-2"></i>
                    1,247 watching
                </div>
            </div>
        </div>

        <!-- Stream Controls -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-gray-900 rounded-2xl p-6">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="flex items-center space-x-4">
                        <button class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-semibold transition-colors">
                            <i class="fas fa-play mr-2"></i>
                            Join Stream
                        </button>
                        <button class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-3 rounded-lg font-semibold transition-colors">
                            <i class="fas fa-volume-up mr-2"></i>
                            Mute
                        </button>
                        <button class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-3 rounded-lg font-semibold transition-colors">
                            <i class="fas fa-expand mr-2"></i>
                            Fullscreen
                        </button>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <div class="text-white">
                            <span class="text-sm text-gray-400">Quality:</span>
                            <select class="bg-gray-800 text-white border border-gray-600 rounded px-3 py-2 ml-2">
                                <option>Auto</option>
                                <option>1080p</option>
                                <option>720p</option>
                                <option>480p</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stream Features -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-secondary-900 mb-6">
                Stream Features
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Enjoy a premium streaming experience with interactive features and high-quality video.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-pink-50 to-purple-50 border border-pink-200">
                <div class="w-20 h-20 bg-gradient-to-br from-pink-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-comments text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary-900 mb-4">Live Chat</h3>
                <p class="text-secondary-600">
                    Interact with other viewers and ask questions in real-time during the event.
                </p>
            </div>
            
            <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-green-50 to-blue-50 border border-green-200">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-mobile-alt text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary-900 mb-4">Multi-Device</h3>
                <p class="text-secondary-600">
                    Watch on any device - desktop, tablet, or mobile with responsive streaming.
                </p>
            </div>
            
            <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-orange-50 to-red-50 border border-orange-200">
                <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-download text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary-900 mb-4">On-Demand</h3>
                <p class="text-secondary-600">
                    Access the recorded stream after the event ends for up to 30 days.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Stream Schedule -->
<section class="section-padding bg-gradient-to-br from-gray-50 to-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-secondary-900 mb-6">
                Stream Schedule
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Here's what's coming up in today's live stream. Times are shown in your local timezone.
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="space-y-4">
                <div class="bg-white rounded-xl p-6 shadow-md border-l-4 border-green-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-secondary-900">Opening Keynote</h3>
                            <p class="text-secondary-600">Welcome and event overview</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-semibold text-green-600">10:00 AM</div>
                            <div class="text-sm text-secondary-500">30 min</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-md border-l-4 border-blue-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-secondary-900">Technology Showcase</h3>
                            <p class="text-secondary-600">Live demonstrations and presentations</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-semibold text-blue-600">11:30 AM</div>
                            <div class="text-sm text-secondary-500">45 min</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-md border-l-4 border-purple-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-secondary-900">Interactive Q&A</h3>
                            <p class="text-secondary-600">Ask questions and get live answers</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-semibold text-purple-600">2:00 PM</div>
                            <div class="text-sm text-secondary-500">30 min</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-md border-l-4 border-orange-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-secondary-900">Closing Remarks</h3>
                            <p class="text-secondary-600">Event wrap-up and next steps</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-semibold text-orange-600">4:00 PM</div>
                            <div class="text-sm text-secondary-500">20 min</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Chat Section -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <div class="bg-gray-50 rounded-2xl p-6">
                <h3 class="text-2xl font-bold text-secondary-900 mb-6">Live Chat</h3>
                
                <!-- Chat Messages -->
                <div class="bg-white rounded-xl p-4 h-96 overflow-y-auto mb-4 space-y-4">
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-gradient-to-br from-pink-500 to-purple-600 rounded-full flex items-center justify-center text-white text-sm font-semibold">
                            S
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 mb-1">
                                <span class="font-semibold text-secondary-900">Sarah Johnson</span>
                                <span class="text-xs text-secondary-500">2 min ago</span>
                            </div>
                            <p class="text-secondary-700">This is amazing! The technology showcase is incredible.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-blue-600 rounded-full flex items-center justify-center text-white text-sm font-semibold">
                            M
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 mb-1">
                                <span class="font-semibold text-secondary-900">Mike Chen</span>
                                <span class="text-xs text-secondary-500">1 min ago</span>
                            </div>
                            <p class="text-secondary-700">Can't wait for the Q&A session!</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center text-white text-sm font-semibold">
                            A
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 mb-1">
                                <span class="font-semibold text-secondary-900">Admin</span>
                                <span class="text-xs text-secondary-500">Just now</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Moderator</span>
                            </div>
                            <p class="text-secondary-700">Welcome everyone! Feel free to ask questions in the chat.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Chat Input -->
                <div class="flex space-x-3">
                    <input type="text" placeholder="Type your message..." class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    <button class="bg-primary-600 hover:bg-primary-700 text-white px-6 py-3 rounded-lg font-semibold transition-colors">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Send
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- System Requirements -->
<section class="section-padding bg-gradient-to-br from-primary-50 to-secondary-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-secondary-900 mb-6">
                System Requirements
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Ensure the best streaming experience by meeting these recommended system requirements.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <h3 class="text-2xl font-bold text-secondary-900 mb-6">Minimum Requirements</h3>
                <ul class="space-y-3 text-secondary-600">
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span>Internet: 5 Mbps download speed</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span>Browser: Chrome 80+, Firefox 75+, Safari 13+</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span>Device: Any modern computer or mobile device</span>
                    </li>
                </ul>
            </div>
            
            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <h3 class="text-2xl font-bold text-secondary-900 mb-6">Recommended</h3>
                <ul class="space-y-3 text-secondary-600">
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span>Internet: 25+ Mbps download speed</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span>Browser: Latest Chrome or Firefox</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500 w-5"></i>
                        <span>Device: Desktop or tablet for best experience</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section-padding bg-gradient-to-br from-secondary-800 to-secondary-900 text-white">
    <div class="container-custom text-center">
        <h2 class="text-4xl lg:text-5xl font-bold mb-6">
            Can't Watch Live?
        </h2>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-8">
            Don't worry! Get tickets to watch the full event on-demand or join us for the next live stream.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('events.tickets', $event ?? 'event') }}" class="btn-primary text-lg px-8 py-4">
                <i class="fas fa-ticket-alt mr-2"></i>
                Get Tickets
            </a>
            <a href="{{ route('events.index') }}" class="btn-outline text-lg px-8 py-4">
                <i class="fas fa-calendar mr-2"></i>
                View All Events
            </a>
        </div>
    </div>
</section>
@endsection

