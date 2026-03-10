<html>
<head>
    <title>Liste des produits</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  
</head>
<body>
    <h1>Liste des produits</h1>


    <div class="overflow-x-auto flex justify-center">
    <table class="w-2/3 border border-gray-200 rounded-lg overflow-hidden">
        <thead class="bg-gray-100">    
        <tr>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">id</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Nom</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Description</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Prix</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Stock</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Active?</th>
        </tr>
        <tbody class="divide-y divide-gray-200 bg-white">
        @forelse ($products as $product)
        <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 text-sm">{{$product->id}}</td>
            <td class="px-4 py-2 text-sm">{{$product->name}}</td>
            <td class="px-4 py-2 text-sm">{{$product->description}}</td>
            <td class="px-4 py-2 text-sm">{{$product->price}}</td>
            <td class="px-4 py-2 text-sm">{{$product->stocke}}</td>
            <td class="px-4 py-2 text-sm">{{$product->is_active}}</td>
        </tr>
        @empty

        <tr><td colspan = 6>Aucun produit disponible</td></tr>
        @endforelse
        </tbody>
    </table>
    </div>
</body>
</html>