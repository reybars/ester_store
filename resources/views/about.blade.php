  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Ester store</title>
      <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100">
      <nav class="w-full bg-white shadow-md">
          <div class="container mx-auto px-4 py-2 flex items-center justify-between">
              <div class="flex items-center">
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="50" height="50" class="mr-4">
                        <circle cx="50" cy="50" r="45" fill="#4CAF50"/>
                        <path d="M30 65 Q50 25 70 65" stroke="white" stroke-width="6" fill="none"/>
                        <circle cx="50" cy="70" r="10" fill="white"/>
                        <text x="50" y="74" font-family="Arial" font-size="12" fill="#4CAF50" text-anchor="middle">E</text>
                    </svg>
                </a>
                  <div class="space-x-4">
                      <a href="/products" class="text-gray-600 hover:text-gray-900 relative group">
                          Products
                          <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gray-900 transform scale-x-0 transition-transform duration-200 group-hover:scale-x-100"></span>
                      </a>
                      <a href="/about" class="text-gray-900 font-semibold border-b-2 border-gray-900 pb-1 relative group">
                          About
                          <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gray-900 transform scale-x-100"></span>
                      </a>
                  </div>
              </div>
              <div class="flex items-center space-x-4">
                  <a href="/admin" class="text-gray-600 hover:text-gray-900">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                      </svg>
                  </a>
                  <a href="/cart" class="text-gray-600 hover:text-gray-900">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                  </a>
              </div>
          </div>
      </nav>

      <div class="container mx-auto px-4 py-12">
          <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">About Ester Store</h1>

          <div class="bg-white shadow-lg rounded-lg p-8">
              <h2 class="text-2xl font-semibold text-gray-700 mb-4">Our Story</h2>
              <p class="text-gray-600 mb-6">Welcome to Ester Store, your trusted online and offline shopping destination. Since our establishment, we've been committed to providing high-quality products and exceptional customer service to our valued clients in Cagayan de Oro City and beyond.</p>

              <h2 class="text-2xl font-semibold text-gray-700 mb-4">Our Location</h2>
              <p class="text-gray-600 mb-6">We're proud to call Macanhan, Carmen, in the heart of Cagayan de Oro City, our home. Our physical store serves as a hub for our local community, while our online platform extends our reach to customers across the Philippines.</p>

              <h2 class="text-2xl font-semibold text-gray-700 mb-4">Our Commitment</h2>
              <p class="text-gray-600 mb-6">At Ester Store, we're dedicated to:</p>
              <ul class="list-disc list-inside text-gray-600 mb-6">
                  <li>Offering a diverse range of high-quality products</li>
                  <li>Providing exceptional customer service both online and in-store</li>
                  <li>Ensuring a seamless and enjoyable shopping experience</li>
                  <li>Building lasting relationships with our customers</li>
                  <li>Continuously improving and adapting to meet your needs</li>
              </ul>

              <h2 class="text-2xl font-semibold text-gray-700 mb-4">Why Choose Us?</h2>
              <p class="text-gray-600 mb-6">Choosing Ester Store means opting for quality, reliability, and customer-centric service. We strive to exceed your expectations with every interaction, whether you're shopping online or visiting our physical store.</p>

              <div class="text-center mt-8">
                  <p class="text-gray-700 font-semibold">Thank you for choosing Ester Store. We look forward to serving you and being a part of your shopping journey.</p>
              </div>
          </div>
      </div>
  </body>
  </html>

