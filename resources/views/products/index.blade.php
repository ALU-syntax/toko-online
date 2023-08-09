<h1>List Kategori Produk</h1>

<a href="/products/create">Create</a>
<table>
    <thead>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>Rp. {{ $product->price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

