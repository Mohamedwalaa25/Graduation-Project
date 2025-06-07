<div>


        <a class="nav-link nav-icon" href="" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">{{ $count }}</span>
        </a>

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages" style="width: 350px;">

            <li class="dropdown-header sticky-top bg-white" style="z-index: 10;">
                You have {{ $count }} new messages
                <a href="{{ route('ajax.dashboard.notifications.markAll') }}"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <div style="max-height: 350px; overflow-y: auto;">
                @foreach ($notifications as $notification)
                    <li class="message-item">
                        <a href="#">
                            <img src="{{ asset('Backend/Uploades/Users/' . $notification->data['user']['image_name']) }}"
                                alt="" class="rounded-circle">
                            <div>
                                <h4>{{ $notification->data['user']['name'] }}</h4>
                                <p>A new article has been created:
                                    <strong>{{ $notification->data['article']['title'] }}</strong>
                                </p>
                                <p>{{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                @endforeach
            </div>


        </ul>


</div>
