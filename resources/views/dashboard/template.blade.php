<!DOCTYPE html>
<html lang="en">

@include('dashboard\includes\head')

<body>
	<div class="wrapper">
	@include('dashboard\includes\sidebar')

		<div class="main">
            @include('dashboard\includes\navbar')


			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-12">
							<div class="card">

								<div class="card-body">
                                    @yield('main_section')
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
            @include('dashboard\includes\footer')
		</div>
	</div>

	<script src="{{ asset('dashboard/assets/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<!-- Feather Icons -->
<script>
    feather.replace()
</script>
</body>
</html>
