<x-layouts.landing title="Terms & Conditions">
    <div class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-blue-50 py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-500 to-indigo-700 rounded-full mb-6 shadow-xl">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Terms & Conditions</h1>
                <p class="text-lg text-gray-600">Last updated: {{ date('F j, Y') }}</p>
            </div>

            <!-- Terms & Conditions Content -->
            <div class="bg-white rounded-2xl shadow-xl border border-gray-200 p-8 lg:p-12">
                <div class="prose prose-lg max-w-none">
                    
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <div class="w-1 h-6 bg-gradient-to-b from-blue-400 to-blue-600 rounded-full mr-3"></div>
                        Acceptance of Terms
                    </h2>
                    
                    <div class="space-y-4 mb-8">
                        <p class="text-gray-700 leading-relaxed">
                            By accessing and using the services provided by DK Express LLC ("we," "our," or "us"), you agree to be bound by these Terms & Conditions. If you do not agree to these terms, please do not use our services.
                        </p>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <div class="w-1 h-6 bg-gradient-to-b from-blue-400 to-blue-600 rounded-full mr-3"></div>
                        Services Description
                    </h2>
                    
                    <div class="space-y-4 mb-8">
                        <p class="text-gray-700 leading-relaxed">
                            DK Express LLC provides car hauling and transportation services, including but not limited to:
                        </p>
                        
                        <ul class="list-disc list-inside space-y-2 text-gray-700 ml-4">
                            <li>Enclosed car transport services</li>
                            <li>Open car transport services</li>
                            <li>Classic and vintage car transportation</li>
                            <li>Luxury vehicle transport</li>
                            <li>Dealer-to-dealer vehicle transport</li>
                            <li>Route planning and vehicle tracking</li>
                            <li>Communication and notification services</li>
                            <li>Payment processing and invoicing</li>
                            <li>Safety and compliance monitoring</li>
                        </ul>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <div class="w-1 h-6 bg-gradient-to-b from-blue-400 to-blue-600 rounded-full mr-3"></div>
                        SMS Terms of Service
                    </h2>
                    
                    <div class="space-y-4 mb-8">
                        <div class="bg-blue-50 border-l-4 border-blue-400 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">SMS Communication Terms</h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                By opting into SMS from a web form or other medium, you are agreeing to receive SMS messages from DK Express LLC. This includes SMS messages for conversations (external).
                            </p>
                            
                            <h4 class="text-lg font-semibold text-gray-900 mb-3">Types of Messages You May Receive:</h4>
                            <ul class="list-disc list-inside space-y-2 text-gray-700 ml-4 mb-4">
                                <li>Vehicle pickup and delivery scheduling updates</li>
                                <li>Route updates and tracking information</li>
                                <li>Account notifications and status updates</li>
                                <li>Safety alerts and compliance reminders</li>
                                <li>Payment confirmations and billing notifications</li>
                                <li>Emergency communications and weather alerts</li>
                                <li>Service updates and maintenance notifications</li>
                                <li>Vehicle condition reports and inspection updates</li>
                            </ul>
                            
                            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mt-4">
                                <h4 class="text-lg font-semibold text-gray-900 mb-2">Important Information:</h4>
                                <ul class="space-y-2 text-gray-700">
                                    <li><strong>Message frequency may vary.</strong></li>
                                    <li><strong>Message and data rates may apply.</strong></li>
                                    <li><strong>To opt out at any time, text STOP.</strong></li>
                                    <li><strong>For assistance, text HELP or visit our website at <a href="{{ route('home') }}" class="text-blue-600 hover:text-blue-700 underline">{{ config('app.url') }}</a>.</strong></li>
                                    <li><strong>Visit <a href="{{ route('privacy.policy') }}" class="text-blue-600 hover:text-blue-700 underline">Privacy Policy</a> for privacy policy and <a href="{{ route('terms.conditions') }}" class="text-blue-600 hover:text-blue-700 underline">Terms & Conditions</a> for Terms of Service.</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <div class="w-1 h-6 bg-gradient-to-b from-blue-400 to-blue-600 rounded-full mr-3"></div>
                        User Responsibilities
                    </h2>
                    
                    <div class="space-y-4 mb-8">
                        <p class="text-gray-700 leading-relaxed">
                            As a user of our services, you agree to:
                        </p>
                        
                        <ul class="list-disc list-inside space-y-2 text-gray-700 ml-4">
                            <li>Provide accurate and complete vehicle information</li>
                            <li>Ensure vehicles are properly prepared for transport</li>
                            <li>Maintain the security of your account credentials</li>
                            <li>Comply with all applicable laws and regulations</li>
                            <li>Use our services only for lawful purposes</li>
                            <li>Notify us immediately of any unauthorized use</li>
                            <li>Ensure vehicles are free of hazardous materials</li>
                            <li>Provide accurate pickup and delivery addresses</li>
                            <li>Be available for vehicle pickup and delivery as scheduled</li>
                        </ul>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <div class="w-1 h-6 bg-gradient-to-b from-blue-400 to-blue-600 rounded-full mr-3"></div>
                        Payment Terms
                    </h2>
                    
                    <div class="space-y-4 mb-8">
                        <p class="text-gray-700 leading-relaxed">
                            Payment terms and conditions for our services:
                        </p>
                        
                        <ul class="list-disc list-inside space-y-2 text-gray-700 ml-4">
                            <li>All fees are due upon receipt of invoice</li>
                            <li>Late payments may result in service suspension</li>
                            <li>We reserve the right to modify pricing with notice</li>
                            <li>Refunds are subject to our refund policy</li>
                            <li>Payment methods accepted: credit cards, bank transfers, and approved payment plans</li>
                            <li>Additional fees may apply for special handling or expedited services</li>
                        </ul>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <div class="w-1 h-6 bg-gradient-to-b from-blue-400 to-blue-600 rounded-full mr-3"></div>
                        Vehicle Transport Terms
                    </h2>
                    
                    <div class="space-y-4 mb-8">
                        <p class="text-gray-700 leading-relaxed">
                            Specific terms for vehicle transportation services:
                        </p>
                        
                        <ul class="list-disc list-inside space-y-2 text-gray-700 ml-4">
                            <li>Vehicles must be in drivable condition unless otherwise arranged</li>
                            <li>Personal items must be removed from vehicles prior to transport</li>
                            <li>We are not responsible for damage to personal items left in vehicles</li>
                            <li>Vehicle condition will be documented before and after transport</li>
                            <li>Claims must be reported within 24 hours of delivery</li>
                            <li>Weather delays may affect delivery schedules</li>
                            <li>Additional fees may apply for oversized or overweight vehicles</li>
                        </ul>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <div class="w-1 h-6 bg-gradient-to-b from-blue-400 to-blue-600 rounded-full mr-3"></div>
                        Limitation of Liability
                    </h2>
                    
                    <div class="space-y-4 mb-8">
                        <p class="text-gray-700 leading-relaxed">
                            DK Express LLC shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including but not limited to loss of profits, data, or use, arising out of or relating to these terms or your use of our services. Our liability is limited to the actual value of the vehicle being transported.
                        </p>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <div class="w-1 h-6 bg-gradient-to-b from-blue-400 to-blue-600 rounded-full mr-3"></div>
                        Termination
                    </h2>
                    
                    <div class="space-y-4 mb-8">
                        <p class="text-gray-700 leading-relaxed">
                            We may terminate or suspend your access to our services immediately, without prior notice, for any reason, including breach of these Terms & Conditions.
                        </p>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <div class="w-1 h-6 bg-gradient-to-b from-blue-400 to-blue-600 rounded-full mr-3"></div>
                        Changes to Terms
                    </h2>
                    
                    <div class="space-y-4 mb-8">
                        <p class="text-gray-700 leading-relaxed">
                            We reserve the right to modify these Terms & Conditions at any time. Changes will be effective immediately upon posting. Your continued use of our services constitutes acceptance of the modified terms.
                        </p>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <div class="w-1 h-6 bg-gradient-to-b from-blue-400 to-blue-600 rounded-full mr-3"></div>
                        Contact Information
                    </h2>
                    
                    <div class="space-y-4 mb-8">
                        <p class="text-gray-700 leading-relaxed">
                            If you have any questions about these Terms & Conditions, please contact us:
                        </p>
                        
                        <div class="bg-gray-50 rounded-lg p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">DK Express LLC</h4>
<p class="text-gray-700">Email: dkxpressllc@gmail.com</p>
                                    <p class="text-gray-700">Phone: (630) 242-2090</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">SMS Support</h4>
                                    <p class="text-gray-700">Text HELP for assistance</p>
                                    <p class="text-gray-700">Text STOP to opt out</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 pt-8 mt-12">
                        <p class="text-sm text-gray-500 text-center">
                            © {{ date('Y') }} DK Express LLC. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.landing>
