<form action="{{route('display')}}" method="post">
    @csrf
    <table border="1">
        <tr>
            <td>Product Description</td>
            <td><input type="text" name="description" placeholder="Product Description"></td>
<tr>
            <td>List Price</td>
            <td><input type="text" name="price" placeholder="List Price"></td>
<tr>
            <td>Discount Percent</td>
            <td><input type="text" name="percent" placeholder="Discount Percent"></td>
            <tr>
            <td>
                <button type="submit">CACULATE DISCOUNT</button>
            </td>
        </tr>
    </table>
</form>
