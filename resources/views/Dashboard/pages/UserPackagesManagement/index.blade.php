@extends('Dashboard.Layouts.Master')

@section('css')
    <style>
        .user-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 25px;
            color: #333;
            transition: all 0.3s ease;
            border: 1px solid #e5e7eb;
            position: relative;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .user-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(59, 130, 246, 0.05) 0%, transparent 100%);
            pointer-events: none;
        }

        .user-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            border-color: #3b82f6;
        }

        .user-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #3b82f6;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
            margin: 0 auto 15px;
            position: relative;
            z-index: 2;
        }

        .package-badge {
            background: #f1f5f9;
            border-radius: 20px;
            padding: 6px 16px;
            font-size: 0.85rem;
            font-weight: 600;
            border: 1px solid #e2e8f0;
            display: inline-block;
            margin-bottom: 15px;
            color: #475569;
        }

        .coins-display {
            background: #f8fafc;
            border-radius: 10px;
            padding: 20px;
            margin: 15px 0;
            border: 1px solid #e2e8f0;
        }

        .coin-stat {
            text-align: center;
            margin: 10px 0;
        }

        .coin-number {
            font-size: 1.8rem;
            font-weight: bold;
            display: block;
            color: #1e293b;
        }

        .coin-label {
            font-size: 0.8rem;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 500;
        }

        .progress-bar-custom {
            height: 6px;
            border-radius: 10px;
            background: #e2e8f0;
            overflow: hidden;
            margin: 15px 0;
        }

        .progress-fill {
            height: 100%;
            background: #3b82f6;
            border-radius: 10px;
            transition: width 0.8s ease;
            position: relative;
        }

        .progress-fill::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100%);
            }
        }

        .user-name {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: #1e293b;
        }

        .user-email {
            color: #64748b;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .stats-header {
            background: #ffffff;
            color: #1e293b;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
            border: 1px solid #e5e7eb;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .stats-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.05) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .stats-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            position: relative;
            z-index: 2;
        }

        .stats-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }

        .filter-section {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .filter-btn {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            color: #64748b;
            padding: 10px 20px;
            border-radius: 8px;
            margin: 3px;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .filter-btn:hover {
            background: #3b82f6;
            color: white;
            border-color: #3b82f6;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.15);
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #6c757d;
        }

        .empty-state i {
            font-size: 4rem;
            margin-bottom: 20px;
            opacity: 0.3;
        }

        @media (max-width: 768px) {
            .user-card {
                margin-bottom: 20px;
            }

            .stats-title {
                font-size: 2rem;
            }

            .coin-number {
                font-size: 1.5rem;
            }
        }
    </style>
@endsection

@section('title_page')
    User Packages Management
@endsection

@section('one')
    Users
@endsection

@section('two')
    Packages & Coins
@endsection

@section('content')
    <section class="section">
        <!-- Header Statistics -->
        <div class="stats-header">
            <div class="stats-title">📊 User Packages Management</div>
            <div class="stats-subtitle">Track subscribers, used coins and remaining balance</div>
        </div>

        <!-- Filter Section -->
        <div class="filter-section">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <h5 class="mb-3 mb-md-0">🔍 Filter Results</h5>
                </div>
                <div class="col-md-8">
                    <div class="text-md-end">

                        @foreach ($packages as $package)
                            <button class="filter-btn " data-filter="all">{{ $package->name }}</button>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <!-- Users Grid -->
        <div class="row" id="usersGrid">
            {{-- Start Row --}}
            @foreach ($transactions as $transaction)
                <div class="col-lg-4 col-md-6 mb-4" data-package="{{ strtolower($transaction->package_label) }}">
                    <div class="user-card">
                        <div class="user-avatar" style="background: {{ $transaction->avatarColor }};">
                            {{ strtoupper(substr($transaction->user->name, 0, 2)) }}
                        </div>
                        <div class="user-name">{{ $transaction->user->name }}</div>
                        <div class="user-email">{{ $transaction->user->email }}</div>

                        <div class="package-badge" style="{{ $transaction->package_style }}">
                            ⭐ {{ $transaction->package_label }}
                        </div>

                        <div class="coins-display">
                            <div class="row">
                                <div class="col-6">
                                    <div class="coin-stat">
                                        <span class="coin-number">{{ $transaction->used_coins }}</span>
                                        <div class="coin-label">🪙 Used</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="coin-stat">
                                        <span class="coin-number">{{ $transaction->remaining_coins }}</span>
                                        <div class="coin-label">💰 Remaining</div>
                                    </div>
                                </div>
                            </div>

                            <div class="progress-bar-custom">
                                <div class="progress-fill" style="width: {{ $transaction->used_percentage }}%"></div>
                            </div>
                            <div class="text-center" style="font-size: 0.85rem; color: #64748b;">
                                {{ $transaction->used_percentage }}% of coins used
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- End Row --}}



        </div>
        </div>

        </div>
        </div>
        </div>



    </section>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            // Filter functionality
            $('.filter-btn').click(function () {
                $('.filter-btn').removeClass('active');
                $(this).addClass('active');

                const filter = $(this).data('filter');
                const userCards = $('#usersGrid .col-lg-4');
                let visibleCount = 0;

                if (filter === 'all') {
                    userCards.show();
                    visibleCount = userCards.length;
                } else {
                    userCards.each(function () {
                        if ($(this).data('package') === filter) {
                            $(this).show();
                            visibleCount++;
                        } else {
                            $(this).hide();
                        }
                    });
                }

                // Show/hide empty state
                if (visibleCount === 0) {
                    $('#emptyState').show();
                } else {
                    $('#emptyState').hide();
                }
            });

            // Add hover effect to cards
            $('.user-card').hover(
                function () {
                    $(this).find('.progress-fill').css('width', function () {
                        return (parseInt($(this).css('width')) + 5) + 'px';
                    });
                },
                function () {
                    // Reset on mouse leave if needed
                }
            );

            // Animate progress bars on load
            setTimeout(function () {
                $('.progress-fill').each(function () {
                    const width = $(this).attr('style').match(/width:\s*(\d+)%/);
                    if (width) {
                        $(this).css('width', '0%').animate({
                            width: width[1] + '%'
                        }, 1000);
                    }
                });
            }, 500);
        });
    </script>
@endsection

@push('styles')
    <link href="{{ URL::asset('Backend/assets/css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
@endpush
