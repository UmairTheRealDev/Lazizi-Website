<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="" style="text-decoration: none">
            <span class="align-middle">lazizi</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">Pages</li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('website.home') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Website</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('users.table') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Users</span>
                </a>
            </li>

            <!-- Menu -->

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('category.show') }}">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Category</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('menu.show') }}">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Items List</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('menu.trashshow') }}">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Deleted Items</span>
                </a>
            </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('chief.show') }}">
                            <i class="align-middle" data-feather="list"></i> <span class="align-middle">Cheff
                                List</span>
                        </a>
                    </li>




                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('reservation.show') }}">
                            <i class="align-middle" data-feather="file-plus"></i> <span class="align-middle">Reservations</span>
                        </a>
                    </li>
                    {{-- <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('reservation.show') }}">
                            <i class="align-middle" data-feather="list"></i> <span class="align-middle">Completed
                                Reservations</span>
                        </a>
                    </li> --}}
            <!-- Messages -->
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('contact.show') }}">
                    <i class="align-middle" data-feather="mail"></i> <span class="align-middle">Messages</span>
                </a>
            </li>

            <!-- Logout -->
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('user.logout') }}">
                    <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var dropdownLinks = document.querySelectorAll('.sidebar-link[data-bs-toggle="collapse"]');

        dropdownLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                var target = document.querySelector(link.getAttribute('href'));
                var isExpanded = link.getAttribute('aria-expanded') === 'true';

                // Toggle aria-expanded
                link.setAttribute('aria-expanded', !isExpanded);

                // Toggle collapse
                if (isExpanded) {
                    target.classList.remove('show');
                } else {
                    target.classList.add('show');
                }
            });
        });
    });
</script>
