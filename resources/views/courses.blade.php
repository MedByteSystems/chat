<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeMaster - Professional JavaScript Courses</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-['Inter'] bg-gray-50">
    <!-- Support Floating Button -->
    <div class="fixed bottom-8 right-8 z-50">
        <a href="{{ route('chatify') }}" class="bg-indigo-600 text-white p-3 rounded-full shadow-xl hover:bg-indigo-700 transition-all duration-300 flex items-center gap-2 group">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
            </svg>
            <span class="hidden group-hover:inline-block pr-2 text-sm font-medium">Support</span>
        </a>
    </div>

    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <span class="text-2xl font-bold text-indigo-600">CodeMaster</span>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center space-x-4">
                    <a href="{{ route('login') }}" class="px-4 py-2 text-gray-600 hover:text-indigo-600 font-medium transition-colors">Sign In</a>
                    <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700 transition-colors font-medium">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-indigo-600 to-purple-700">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl">
                    Master JavaScript Like a Pro
                </h1>
                <p class="mt-3 max-w-md mx-auto text-lg text-indigo-100 sm:text-xl md:mt-5 md:max-w-3xl">
                    Industry-standard courses taught by senior developers. Advance your career with real-world skills.
                </p>
            </div>
        </div>
    </div>

    <!-- Course Grid -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Course Cards -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform hover:scale-105">
                <div class="p-6 bg-gradient-to-br from-blue-100 to-blue-50">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-blue-800 bg-blue-100 px-3 py-1 rounded-full text-sm font-medium">Beginner</span>
                        <span class="text-gray-500 text-sm">4 Weeks</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Core JavaScript</h3>
                    <p class="text-gray-600 mb-4">Master the fundamentals of JavaScript programming</p>
                    <a href="https://www.w3schools.com/js/" target="_blank" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-medium">
                        Start Course
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Repeat similar card structure for other courses -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform hover:scale-105">
                <div class="p-6 bg-gradient-to-br from-green-100 to-green-50">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-green-800 bg-green-100 px-3 py-1 rounded-full text-sm font-medium">Intermediate</span>
                        <span class="text-gray-500 text-sm">6 Weeks</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Modern ES6+</h3>
                    <p class="text-gray-600 mb-4">Master next-generation JavaScript features</p>
                    <a href="https://www.w3schools.com/js/js_es6.asp" target="_blank" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-medium">
                        Start Course
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Add 4 more course cards following the same pattern -->
        </div>
    </main>

    <!-- Enterprise Section -->
    <div class="bg-gray-900 text-white py-16 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold mb-4">Enterprise Solutions</h2>
                <p class="text-gray-400 max-w-2xl mx-auto mb-8">
                    Transform your team with customized training programs and dedicated support.
                </p>
                <button class="bg-indigo-600 text-white px-8 py-3 rounded-md hover:bg-indigo-700 transition-colors font-medium">
                    Contact Sales
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="space-y-4">
                    <h3 class="text-sm font-semibold text-gray-500 tracking-wider uppercase">Company</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">About</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Careers</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Contact</a></li>
                    </ul>
                </div>
                <!-- Add more footer columns -->
            </div>
            <div class="mt-8 border-t border-gray-200 pt-8 text-center text-gray-600">
                <p>&copy; 2023 CodeMaster. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>