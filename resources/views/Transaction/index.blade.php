{{-- @dd($genres) --}}

{{-- @extends('Components.admin')

@section('title', 'Transaction History | Gamestore')

@section('content')

    <h3>Manage Genre</h3>
    <br>


    <div class="card" style="display: flex; justify-content: center;">
        <div class="card-header">
            Game Genre
        </div>
        <ul class="list-group list-group-flush">
            @foreach ($genres as $genre)
                <li class="list-group-item" style="display: flex; justify-content: space-between;">{{ $genre->genre_name }}
                    <a href="{{ route('manage_genre_detail', ['id' => $genre->id]) }}">
                        Edit</a>
                </li>
            @endforeach
        </ul>
    </div>

@endsection --}}

@extends('Components.admin')
@section('title', 'Transaction History | Gamestore')
@section('content')

    <div class="container">
        <h2 class="mb-4">Transaction History</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Game Name</th>
                    <th>Price</th>
                    <th>QTY</th>
                    <th>Customer</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($transactions as $transaction)
                    <tr>
                        <td>{{ $loop->iteration + ($transactions->currentPage() - 1) * $transactions->perPage() }}</td>
                        <td>{{ Str::limit($transaction->game->game_name, 30) }}</td>
                        <td>Rp {{ number_format($transaction->game->game_price, 0, ',', '.') }}</td>
                        <td>{{ $transaction->qty }}</td>
                        <td>{{ $transaction->user->name }}</td>
                        <td>{{ $transaction->transaction_date_time }}</td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">No transactions found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $transactions->links() }}
        </div>
    </div>
@endsection
