<h1>Latest Exchange Rates</h1>
<table>
    <thead>
        <tr>
            <th>Currency</th>
            <th>Rate</th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach($exchangeRates as $currency => $rate)
            <tr>
                <td>{{ $currency }}</td>
                <td>{{ $rate }}</td>
            </tr>
        @endforeach --}}
        @foreach($exchangeRates as $currency => $rate)
            <tr>
                <td>{{ $currency }}</td>
                <td>{{ round($rate/$exchangeRates['JPY'],2) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>