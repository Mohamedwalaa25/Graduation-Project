@extends('Dashboard.Layouts.Master')
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('DataTable/dataTables.bootstrap5.min.css') }}">
    <style>
        div[style="z-index:9999;width:100%;position:relative"] {
            display: none !important;
        }


        .switch-lg {
            transform: scale(1.5);
            transform-origin: left center;
        }


        .custom-toast {
            background-color: #38c172;

            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            margin-bottom: 10px;
            font-size: 15px;
            animation: slide-in 0.3s ease, fade-out 0.3s ease 2.7s forwards;
        }

        @keyframes slide-in {
            from {
                opacity: 0;
                transform: translateX(100%);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fade-out {
            to {
                opacity: 0;
                transform: translateX(100%);
            }
        }
    </style>
@endsection
@section('title_page')
 Transaction
@endsection
@section('one')
    Transaction
@endsection
@section('two')
    Transaction
@endsection

@section('content')
    <section class="section">
        <div class="row">
            <x-alerts></x-alerts>
            <div id="custom-toast-container" style="width:300px; position: fixed; top: 20px; right: 20px; z-index: 9999;"></div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="data_buttons">
                            <h5 class="card-title">Transaction Card </h5>
                        </div>
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>User Name </th>
                                    <th>Package </th>
                                    <th>Amount</th>
                                    <th>Coins</th>
                                    <th>Gateway</th>
                                    <th>Currency</th>
                                    <th>Status</th>
                                     <th>Created At</th>

                                </tr>
                            </thead>
                            <tbody>
                                {{-- _______________________________ start foreach _______________________________ --}}

                                @foreach ($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->user?->name ?? '-' }}</td>
                                        <td>{{ $transaction->package?->name ?? '-' }}</td>
                                        <td>{{ $transaction->amount }}</td>
                                        <td>{{ $transaction->coins }}</td>
                                        <td>{{ $transaction->gateway }}</td>
                                        <td>{{ $transaction->currency }}</td>
                                        <td>{{ $transaction->status }}</td>
                                          <td>{{ $transaction->created_at->format('Y-m-d H:i:s') }}</td>
                                    </tr>
                                @endforeach
                                {{-- _______________________________ end foreach _______________________________ --}}

                                </tfoot>
                        </table>
                        <div style="display: flex;justify-content: center;">
                            <div>
                                {!! $transactions->links() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

  
