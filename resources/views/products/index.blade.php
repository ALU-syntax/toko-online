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
            <td>
                <a href="/products/{{ $product->id }}/edit">Edit</a>
                <form action="/products/{{ $product->id }}" method="post" style="display: flex">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

