<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h3 class="fw-semibold">{{ $title ?? null }}</h3>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-primary">
                <i class="bi bi-share me-1"></i> Share
            </button>
            <button type="button" class="btn btn-sm btn-outline-primary">
                <i class="bi bi-download me-1"></i> Export
            </button>
        </div>
        <div class="dropdown">
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                <i class="bi bi-calendar3 me-1"></i> This week
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item bi bi-calendar-day" href="#"> Today</a></li>
                <li><a class="dropdown-item bi bi-calendar-week" href="#"> This week</a></li>
                <li><a class="dropdown-item bi bi-calendar-month" href="#"> This month</a></li>
                <li><a class="dropdown-item bi bi-calendar3" href="#"> This year</a></li>
            </ul>
        </div>
    </div>
</div>
