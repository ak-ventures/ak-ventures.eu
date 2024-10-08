@extends('_layouts.master')

@section('body')
<div class="flex justify-center bg-gold-100 text-gray-600">
    <div class="container max-w-3xl flex flex-col items-center mx-auto py-20 px-4 text-center">
        <h2 class="text-3xl mb-12">About Us</h2>
        <p class="text-xl mb-8">A&K Ventures OÜ is a company established in July 2016 by Amadeusz Annissimo and Karol Kaczmarek. We don't have a grandiose story of creating the business out of passion or to change the world. We start ventures in markets where we see an opportunity to make a profit by serving existing customers' needs. From <a href="https://spicandspan.net/en/">home & office cleaning services</a>, <a href="https://cleanchaps.com">blog for homemakers</a> through real estate consulting, and web development to <a href="https://classification.codes/">data preparation</a> work for large enterprises nothing is below us or above our reach. Recognizing a market demand, we have also developed <a href="https://netzerocompare.com/">Net Zero Compare</a>, a portal that offers businesses comparisons of eco-friendly products like carbon credits and carbon consumption accounting software. Our philosophy is a plain and simple exchange of value: giving individuals and businesses what they need and getting paid for our work.</p>
        <p class="text-xl">If you are our customer or business partner that was wondering why out of all places are we registered in Estonia, here's the answer: we chose Estonia as a place to start our business for its friendly business environment, low administrative burden, and solid transparency principles. Even a few years after that decision we're still positively surprised from time to time how easy it is to get things done there, without unnecessary bureaucracy.</p>
    </div>
</div>
<div class="flex justify-center bg-blue-200 text-gray-600">
    <div class="container max-w-3xl flex flex-col items-center mx-auto py-20 px-4 text-center">
        <h2 class="text-3xl mb-12">Co-Founders</h2>
        <p class="text-xl mb-8">We met in 2009 during a freshman year at SGH Warsaw School Of Economics, a business school in the capital city of Poland. We were a part of a small group of students who chose to take as many courses taught in English as possible. We had similar goals and knew that one day we would start a business. A couple of years after graduating, and getting work experience at big corporations and venture-funded startups, we did just that.</p>
        <p class="text-xl mb-20">Even though we share very similar backgrounds, we have completely different personalities, skills, talents, and areas of expertise complementing each other to run strong businesses and lead globally distributed teams.</p>
        <div class="flex flex-wrap w-full">
            <div class="w-full sm:w-1/2 flex flex-col items-center mb-12 sm:mb-0">
                <div style="background-image: url('/assets/images/amadeus_desaturated_512_512.jpg');" class="relative rounded-full h-48 w-48 mb-4 bg-contain">
                    <div class="absolute inset-0 bg-blue-600 opacity-20 h-full w-full rounded-full"></div>
                </div>
                <span class="block text-xl mb-2">Amadeusz Annissimo</span>
                <ul class="flex items-between items-center">
                    <li>
                        <a href="https://annissimo.com">
                            <globe-icon class="h-4 text-blue-800 mx-1"></globe-icon>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/annissimo/">
                            <linkedin-icon class="h-4 text-blue-800 mx-1"></linkedin-icon>
                        </a>
                    </li>
                    <li>
                        <a href="https://x.com/aannissimo">
                            <twitter-icon class="h-4 text-blue-800 mx-1"></twitter-icon>
                        </a>
                    </li>
                    <li>
                        <a href="https://stackoverflow.com/users/4171578/amade">
                            <stackoverflow-icon class="h-4 text-blue-800 mx-1"></stackoverflow-icon>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/amadeann">
                            <github-icon class="h-4 text-blue-800 mx-1"></github-icon>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-full sm:w-1/2 flex flex-col items-center">
                <div style="background-image: url('/assets/images/karl_desaturated_450_450.jpg');" class="relative rounded-full h-48 w-48 mb-4 bg-contain">
                    <div class="absolute inset-0 bg-blue-600 opacity-20 h-full w-full rounded-full"></div>
                </div>
                <span class="block text-xl mb-2">Karol Kaczmarek</span>
                <ul class="flex items-between">
                    <li>
                        <a href="https://www.linkedin.com/in/karol-kaczmarek-39a29651/">
                            <linkedin-icon class="h-4 text-blue-800 mx-1"></linkedin-icon>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/KarolKaczmarek_">
                            <twitter-icon class="h-4 text-blue-800 mx-1"></twitter-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="flex justify-center bg-cyan-400 text-gray-600">
    <div class="container max-w-3xl flex flex-col items-center mx-auto py-20 px-4 text-center">
        <h2 class="text-3xl mb-12">Contact Us</h2>
        <p class="text-xl mb-12">If you want to get in touch with us, use the contact form below. We're always interested in new business opportunities. We read every email, and try to reply to all of them, even if the reply is "we're not interested". If you want our mailing address, email or a phone number, you can find them in the footer section of this website.</p>   
        <contact-form v-slot="slotProps" class="mb-20">
            <div>
                <form 
                    name="contact" 
                    method="POST" 
                    data-netlify="true" 
                    class="flex flex-wrap" 
                    ref="form" 
                    v-on:submit.prevent="slotProps.submit" 
                    v-if="slotProps.showForm"
                    data-netlify-honeypot="bot-field"
                >
                    <div class="w-full px-4 mb-6 md:mb-0">
                        <input 
                            class="appearance-none block w-full text-gray-700 bg-cyan-200 border-b-2 border-cyan-700 py-3 px-4 mb-3 leading-tight focus:outline-none text-xl rounded-none" 
                            type="text" 
                            placeholder="Full name"
                            name="full_name"
                            required
                        >
                    </div>
                    <div class="w-full px-4 mb-6 md:mb-0">
                        <input 
                            class="appearance-none block w-full text-gray-700 bg-cyan-200 border-b-2 border-cyan-700 py-3 px-4 mb-3 leading-tight focus:outline-none text-xl rounded-none" 
                            type="email" 
                            placeholder="Email"
                            name="email"
                            required
                        >
                    </div>
                    <div class="w-full px-4 mb-6 md:mb-0">
                        <input 
                            class="appearance-none block w-full text-gray-700 bg-cyan-200 border-b-2 border-cyan-700 py-3 px-4 mb-3 leading-tight focus:outline-none text-xl rounded-none" 
                            type="text" 
                            placeholder="Phone"
                            name="phone"
                            required
                        >
                    </div>
                    <div class="w-full px-4 mb-6 md:mb-8">
                        <textarea 
                            rows="1" 
                            class="autosizeable appearance-none block w-full bg-cyan-200 text-gray-700 border-b-2 border-cyan-700 py-3 px-4 mb-3 leading-tight focus:outline-none text-xl rounded-none" 
                            placeholder="What can we do for you?"
                            name="message"
                            required
                        ></textarea>
                    </div>
                    <div class="flex justify-center w-full py-3">
                        <button type="submit" class="bg-navy-500 text-white px-8 py-4 rounded-full text-black font-bold text-xl no-underline">Send</button>
                    </div>
                </form>
                <div v-else>
                    <p class="text-2xl mb-4">
                        Thank you for sumbitting the form!
                    </p>
                    <p>If you want to send another form, <span class="underline cursor-pointer" v-on:click="slotProps.reset">click here</span>.</p>
                </div>
            </div>
        </contact-form>
        <div>
            <h2 class="text-3xl mb-12">Work with us</h2>
            <div>Visit our <a href="https://ak-ventures.eu/careers" class="underline">careers page</a> to see open positions.</div>
        </div>
    </div>
</div>
@endsection

