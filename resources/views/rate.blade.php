@extends('layouts.sub')

<h1 class="rateh1">Latest Exchange Rates</h1>
<table class="etd">
    <thead>
        <tr>
            <th class="rate">CurrencyRate</th>
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
                <td class="rate">{{ $currency }}</td>
                <td class="rate">{{ round($rate/$exchangeRates['JPY'],2) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('posts.index') }}"><p class="backtomain-rate">←戻る</p></a>