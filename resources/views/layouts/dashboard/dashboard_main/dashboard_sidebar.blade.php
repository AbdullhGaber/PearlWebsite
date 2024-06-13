<div class="sidebar">
    <div>
        <div>
            <img src="{{ asset('assets/Images/doctor.png') }}" alt="Profile Image" class="mt-4 sidebar-image">
        </div>
        <h6 class="sidebarH6">Dr / Osama Zaki</h6>
        <ul>
            <li><a href="{{ route('dashboard.index') }}">Summary</a></li>
            <li><a href="{{ route('dashboard.schedule') }}">Schedule</a></li>
            <li><a href="{{ route('dashboard.messages') }}">Messages</a></li>
            <li><a href="{{ route('dashboard.patients') }}">Patients</a></li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" class="nav-link" href="#collapseBranch"><i class="fas fa-plus"></i> Branches</a>
            </li>

            <ul class="collapse nav" id="collapseBranch">

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('dashboard.add_branch') }}" style="margin-left:100px"> New branch</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  " href="{{ route('dashboard.view_branches') }}" style="margin-left:100px"> view Branch</a>
                </li>

        </ul>

        <li id="profileLi"><a href="{{ route('dashboard.profile') }}">Profile</a></li>
        </ul>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script src="{{ asset('assets/js/dashboard/summary.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <script src="{{ asset('assets/js/dashboard/dashboard.js') }}"></script>
