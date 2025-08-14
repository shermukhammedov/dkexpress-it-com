<div class="mt-8">
    <!-- Header Section -->
    <div class="text-center mb-8">
        <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-full mb-6 shadow-xl">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0h6M9 21v-4a2 2 0 012-2h2a2 2 0 012 2v4M5 11V9a4 4 0 014-4h6a4 4 0 014 4v2"></path>
            </svg>
        </div>
        <h1 class="text-4xl font-bold text-gray-900 mb-3">Join Our Fleet</h1>
        <p class="text-lg text-gray-600">Start your car hauling journey with DExpress</p>
    </div>

    <!-- Registration Card -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-10 max-w-4xl mx-auto">
            <!-- Session Status -->
            <x-auth-session-status class="mb-6" :status="session('status')" />

            <!-- General Error Messages -->
            @if ($errors->any())
                <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg p-4 mb-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800 dark:text-red-200">
                                There were some issues with your registration:
                            </h3>
                            <div class="mt-2 text-sm text-red-700 dark:text-red-300">
                                <ul class="list-disc list-inside space-y-1">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <form wire:submit="register" class="space-y-8">
                <!-- Name Fields Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- First Name -->
                    <div class="space-y-3">
                        <label for="first_name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span>First Name</span>
                            </div>
                        </label>
                        <div class="relative">
                            <input
                                wire:model="first_name"
                                id="first_name"
                                type="text"
                                required
                                autofocus
                                autocomplete="given-name"
                                placeholder="Enter your first name"
                                class="w-full px-5 py-4 border-2 border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 text-lg @error('first_name') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
                            />
                        </div>
                        @error('first_name') 
                            <div class="flex items-center space-x-2 text-red-600 dark:text-red-400 text-sm">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Last Name -->
                    <div class="space-y-3">
                        <label for="last_name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span>Last Name</span>
                            </div>
                        </label>
                        <div class="relative">
                            <input
                                wire:model="last_name"
                                id="last_name"
                                type="text"
                                required
                                autocomplete="family-name"
                                placeholder="Enter your last name"
                                class="w-full px-5 py-4 border-2 border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 text-lg @error('last_name') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
                            />
                        </div>
                        @error('last_name') 
                            <div class="flex items-center space-x-2 text-red-600 dark:text-red-400 text-sm">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                </div>

                <!-- Role Selection -->
                <div class="space-y-3">
                    <label for="role" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0h6M9 21v-4a2 2 0 012-2h2a2 2 0 012 2v4M5 11V9a4 4 0 014-4h6a4 4 0 014 4v2"></path>
                            </svg>
                            <span>I am joining as a</span>
                        </div>
                    </label>
                    <div class="relative">
                        <select
                            wire:model="role"
                            id="role"
                            required
                            class="w-full px-5 py-4 border-2 border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 appearance-none text-lg @error('role') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
                        >
                            <option value="customer" class="py-3">🏢 Customer - Need Car Transport Services</option>
                            <option value="driver" class="py-3">🚗 Driver - Ready to Haul Cars</option>
                            <option value="staff" class="py-3">👨‍💼 Staff Member - Company Employee</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                    @error('role') 
                        <div class="flex items-center space-x-2 text-red-600 dark:text-red-400 text-sm">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="space-y-3">
                    <label for="email" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                            </svg>
                            <span>Email Address</span>
                        </div>
                    </label>
                    <div class="relative">
                        <input
                            wire:model="email"
                            id="email"
                            type="email"
                            required
                            autocomplete="email"
                            placeholder="your.email@company.com"
                            class="w-full px-5 py-4 border-2 border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 text-lg @error('email') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
                        />
                    </div>
                    @error('email') 
                        <div class="flex items-center space-x-2 text-red-600 dark:text-red-400 text-sm">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <!-- Password Fields Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Password -->
                    <div class="space-y-3">
                        <label for="password" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                <span>Password</span>
                            </div>
                        </label>
                        <div class="relative">
                            <input
                                wire:model="password"
                                id="password"
                                type="password"
                                required
                                autocomplete="new-password"
                                placeholder="Create a strong password"
                                class="w-full px-5 py-4 border-2 border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 text-lg @error('password') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
                            />
                        </div>
                        @error('password') 
                            <div class="flex items-center space-x-2 text-red-600 dark:text-red-400 text-sm">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="space-y-3">
                        <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Confirm Password</span>
                            </div>
                        </label>
                        <div class="relative">
                            <input
                                wire:model="password_confirmation"
                                id="password_confirmation"
                                type="password"
                                required
                                autocomplete="new-password"
                                placeholder="Confirm your password"
                                class="w-full px-5 py-4 border-2 border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 text-lg @error('password_confirmation') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
                            />
                        </div>
                        @error('password_confirmation') 
                            <div class="flex items-center space-x-2 text-red-600 dark:text-red-400 text-sm">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <button
                    type="submit"
                    class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 hover:from-blue-700 hover:to-indigo-800 text-white font-bold py-5 px-8 rounded-xl transition-all duration-200 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 shadow-xl text-lg"
                >
                    <div class="flex items-center justify-center space-x-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0h6M9 21v-4a2 2 0 012-2h2a2 2 0 012 2v4M5 11V9a4 4 0 014-4h6a4 4 0 014 4v2"></path>
                        </svg>
                        <span>Join DExpress Fleet</span>
                    </div>
                </button>
            </form>

            <!-- Login Link -->
            <div class="mt-10 text-center">
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="font-bold text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300 transition-colors duration-200">
                        Sign in here
                    </a>
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-8">
            <p class="text-sm text-gray-500">
                Secure access to your car hauling dashboard
            </p>
        </div>
</div>