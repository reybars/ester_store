<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ester store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
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
                    <a href="/about" class="text-gray-600 hover:text-gray-900 relative group">
                        About
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gray-900 transform scale-x-0 transition-transform duration-200 group-hover:scale-x-100"></span>
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
      <div class="container mx-auto px-4 py-8">
          <h2 class="text-2xl font-bold mb-6">Shopping Cart</h2>
          <div class="bg-white shadow-md rounded-lg overflow-hidden">
              <table class="w-full">
                  <thead>
                      <tr class="bg-gray-100">
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subtotal</th>
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                      </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    
                      @foreach($cartItems as $id => $item)
                      <tr>
                          <td class="px-6 py-4 whitespace-nowrap">{{ $item['name'] }}</td>
                          <td class="px-6 py-4 whitespace-nowrap">${{ number_format($item['price'], 2) }}</td>
                          <td class="px-6 py-4 whitespace-nowrap">
                              <input type="number" value="{{ $item['quantity'] }}" min="1" class="w-16 px-2 py-1 border rounded-md" data-item-id="{{ $id }}">
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">₱{{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                          <td class="px-6 py-4 whitespace-nowrap">
                              <form action="{{ route('cart.remove', $id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="text-red-600 hover:text-red-900">Remove</button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
          <div class="mt-8 flex justify-end">
              <div class="bg-gray-100 p-6 rounded-lg">
                  <h3 class="text-lg font-semibold mb-4">Cart Total</h3>
                  <p class="text-xl font-bold">₱{{ number_format($total, 2) }}</p>
              </div>
          </div>      </div>
</body>