@extends('layouts.app')

@section('title', 'Blog - MGDTech')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <div class="text-center">
                    <h1 class="text-4xl font-bold uppercase tracking-wider mb-4">Our Blog</h1>
                    <p class="text-lg text-primary-100">Latest Insights & Updates</p>
                </div>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <h2 class="text-3xl font-bold text-gray-900 leading-tight">
                    Stay updated with the latest trends and insights
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Discover valuable insights about audio-visual technology, networking events, 
                    and digital innovation that can help transform your business and events.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#featured-post" class="btn-primary">
                        <i class="fas fa-star mr-2"></i>
                        Featured Article
                    </a>
                    <a href="#latest-posts" class="btn-outline">
                        <i class="fas fa-newspaper mr-2"></i>
                        Latest Posts
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Post Section -->
<section id="featured-post" class="py-20 bg-gray-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <h2 class="text-4xl font-bold uppercase tracking-wider">Featured</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <div class="flex items-center mb-4">
                    <span class="bg-primary-100 text-primary-800 text-xs font-semibold px-3 py-1 rounded-full">
                        Featured
                    </span>
                    <span class="text-gray-500 text-sm ml-4">
                        <i class="fas fa-calendar mr-1"></i>December 15, 2024
                    </span>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 leading-tight">
                    The Future of Audio-Visual Technology: AI-Powered Integration
                </h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Discover how artificial intelligence is revolutionizing audio-visual systems, from automated 
                    calibration to intelligent content management that's changing the way we experience events and presentations.
                </p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-primary-600"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">MGDTech Team</p>
                            <p class="text-sm text-gray-500">AV Specialists</p>
                        </div>
                    </div>
                    <a href="#" class="btn-primary">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Articles Section -->
<section id="latest-posts" class="py-20 bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <h2 class="text-4xl font-bold uppercase tracking-wider">Latest Articles</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <h3 class="text-3xl font-bold text-gray-900 leading-tight">
                    Explore our collection of insights and tutorials
                </h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Stay ahead of the curve with our latest articles on technology trends, 
                    event management, and audio-visual innovation.
                </p>
            </div>
        </div>
        
        <!-- Blog Posts Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
            <!-- Blog Post 1 -->
            <article class="card overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="h-48 bg-primary-600 flex items-center justify-center">
                    <i class="fas fa-video text-6xl text-white opacity-80"></i>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-primary-100 text-primary-800 text-xs font-semibold px-2 py-1 rounded-full">
                            AV Technology
                        </span>
                        <span class="text-gray-500 text-sm ml-auto">
                            <i class="fas fa-calendar mr-1"></i>Dec 12
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Mobile-First Design: Why It Matters in 2024
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Learn why mobile-first design is crucial for modern web applications and how to implement it effectively.
                    </p>
                    <a href="#" class="text-primary-600 hover:text-primary-700 font-medium inline-flex items-center">
                        Read More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </article>

            <!-- Blog Post 2 -->
            <article class="card overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="h-48 bg-primary-600 flex items-center justify-center">
                    <i class="fas fa-users text-6xl text-white opacity-80"></i>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-primary-100 text-primary-800 text-xs font-semibold px-2 py-1 rounded-full">
                            Networking
                        </span>
                        <span class="text-gray-500 text-sm ml-auto">
                            <i class="fas fa-calendar mr-1"></i>Dec 10
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Creating Meaningful Connections at Business Events
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Essential strategies for building valuable relationships and maximizing your networking opportunities.
                    </p>
                    <a href="#" class="text-primary-600 hover:text-primary-700 font-medium inline-flex items-center">
                        Read More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </article>

            <!-- Blog Post 3 -->
            <article class="card overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="h-48 bg-primary-600 flex items-center justify-center">
                    <i class="fas fa-chart-line text-6xl text-white opacity-80"></i>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-primary-100 text-primary-800 text-xs font-semibold px-2 py-1 rounded-full">
                            Analytics
                        </span>
                        <span class="text-gray-500 text-sm ml-auto">
                            <i class="fas fa-calendar mr-1"></i>Dec 8
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Measuring Event Success: Key Metrics to Track
                    </h3>
                    <p class="text-gray-600 mb-4">
                        How to use data and analytics to measure the success of your events and improve future planning.
                    </p>
                    <a href="#" class="text-primary-600 hover:text-primary-700 font-medium inline-flex items-center">
                        Read More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </article>

            <!-- Blog Post 4 -->
            <article class="card overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="h-48 bg-primary-600 flex items-center justify-center">
                    <i class="fas fa-cloud text-6xl text-white opacity-80"></i>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-primary-100 text-primary-800 text-xs font-semibold px-2 py-1 rounded-full">
                            Technology
                        </span>
                        <span class="text-gray-500 text-sm ml-auto">
                            <i class="fas fa-calendar mr-1"></i>Dec 5
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Cloud-Based AV Solutions: Benefits and Implementation
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Understanding cloud-native audio-visual architecture and how to build scalable systems.
                    </p>
                    <a href="#" class="text-primary-600 hover:text-primary-700 font-medium inline-flex items-center">
                        Read More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </article>

            <!-- Blog Post 5 -->
            <article class="card overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="h-48 bg-primary-600 flex items-center justify-center">
                    <i class="fas fa-cogs text-6xl text-white opacity-80"></i>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-primary-100 text-primary-800 text-xs font-semibold px-2 py-1 rounded-full">
                            Integration
                        </span>
                        <span class="text-gray-500 text-sm ml-auto">
                            <i class="fas fa-calendar mr-1"></i>Dec 3
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Seamless AV Integration: Best Practices and Tools
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Essential practices and tools that can accelerate your audio-visual integration workflow.
                    </p>
                    <a href="#" class="text-primary-600 hover:text-primary-700 font-medium inline-flex items-center">
                        Read More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </article>

            <!-- Blog Post 6 -->
            <article class="card overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="h-48 bg-primary-600 flex items-center justify-center">
                    <i class="fas fa-lightbulb text-6xl text-white opacity-80"></i>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-primary-100 text-primary-800 text-xs font-semibold px-2 py-1 rounded-full">
                            Innovation
                        </span>
                        <span class="text-gray-500 text-sm ml-auto">
                            <i class="fas fa-calendar mr-1"></i>Dec 1
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Emerging AV Technologies That Will Shape 2025
                    </h3>
                    <p class="text-gray-600 mb-4">
                        A look at the cutting-edge audio-visual technologies that will dominate the industry next year.
                    </p>
                    <a href="#" class="text-primary-600 hover:text-primary-700 font-medium inline-flex items-center">
                        Read More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </article>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button class="btn-primary px-8 py-4">
                <i class="fas fa-plus mr-2"></i>Load More Articles
            </button>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-20 bg-gray-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-center">
            <!-- Left Blue Block -->
            <div class="bg-primary-600 text-white p-16 lg:p-20 flex items-center justify-center">
                <h2 class="text-4xl font-bold uppercase tracking-wider">Newsletter</h2>
            </div>
            
            <!-- Right Content -->
            <div class="p-16 lg:p-20 space-y-8">
                <h3 class="text-3xl font-bold text-gray-900 leading-tight">
                    Stay Updated
                </h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Get the latest insights and updates about audio-visual technology, 
                    networking events, and digital innovation delivered directly to your inbox.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 max-w-md">
                    <input type="email" placeholder="Enter your email" 
                           class="flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                    <button class="btn-primary px-6 py-3">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

