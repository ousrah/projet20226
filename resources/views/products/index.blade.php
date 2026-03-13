<html>
<head>
    <title>Liste des produits</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  
</head>
<body>
    

    <div class=" ">
        <h1>Liste des produits</h1>
        <form method="GET" action="{{ route('products.index') }}" class="mb-6 flex items-center gap-4 bg-white p-4 rounded-lg shadow w-fit">

            <label for="lst_cats" class="text-sm font-medium text-gray-700">
                Catégorie
            </label>
        
            <select id="lst_cats" name="lst_cats" onchange="this.form.submit()"
                class="border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                
                <option value="0">Sélectionner une catégorie</option>
        
                @forelse ($categories as $categorie)
                    <option @if ($categorie->id ==$cat_id) selected @endif value="{{ $categorie->id }}">
                        {{ $categorie->name }}
                    </option>
                @empty
                @endforelse
        
            </select>
        
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition">
                Filtrer
            </button>
        
        </form>
    <table class="w-2/3 border border-gray-200 rounded-lg overflow-hidden">
        <thead class="bg-gray-100">    
        <tr>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">id</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Nom</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Description</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Prix</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Stock</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Active?</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Catégorie</th>

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
            <td class="px-4 py-2 text-sm">{{$product->category->name}}</td>

        </tr>
        @empty

        <tr><td colspan = 6>Aucun produit disponible</td></tr>
        @endforelse
        </tbody>
    </table>
    </div>
</body>
</html>