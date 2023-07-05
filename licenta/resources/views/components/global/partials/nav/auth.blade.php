@props([
	'frontend' => false
])
@guest
	<li class="nav-item nav-item-borders dropdown">
		<a href="{{ route('login') }}" class="{{ $frontend ? 'text-color-light' : 'text-color-dark' }} nav-link">
			<i class="fa fa-lock d-none d-sm-inline"></i>
			<b>
				{{ __('frontend/auth.login') }}
			</b>
		</a>
	</li>
@endguest

@auth
	<li class="{{ $frontend
			? 'nav-item nav-item-borders dropdown'
			: 'nav-item dropdown dropdown-user'
		}}">
		<a href="#" class="{{ $frontend
			? 'nav-link btn btn-outline'
			: 'navbar-nav-link d-flex align-items-center dropdown-toggle'
			}}"
			@if(! $frontend)
				data-toggle="dropdown"
			@elseif( $frontend)
				data-bs-toggle="dropdown"
			@endif
			aria-haspopup="true"
			aria-expanded="false">

			<i class="{{ $frontend ? 'far fa-user text-color-light d-none d-sm-inline' : 'icon-user text-color-dark' }}" ></i>
			<b class="{{ $frontend ? 'text-color-light' : 'text-color-dark' }}">
				{{ $frontend ? __('frontend/auth.my_account') : __('auth.my_account') }}
			</b>

			<i class="{{ $frontend ? 'far fa-angle-down text-color-light' : 'text-color-dark' }}" ></i>
		</a>

		<div class="dropdown-menu {{ $frontend ? 'dropdown-menu-end' : 'dropdown-menu-right' }}">
			<a href="{{ url('/') }}" class="dropdown-item">
				<i class="{{ $frontend ? 'fa fa-home' : 'icon-home2' }} mr-2"></i>
				{{ $frontend ? __('frontend/defaults.home') : __('defaults.home') }}
			</a>

			{{-- @if (auth()->user()->is_admin == true) --}}
				<a href="{{ route('admin') }}" class="dropdown-item">
					<i class="{{ $frontend ? 'fa fa-cog' : 'icon-cog5' }} mr-2"></i>
					{{ $frontend ? __('frontend/auth.admin_dashboard') : __('auth.admin_dashboard') }}
				</a>
			{{-- @endif --}}

			<a href="{{ route('email.edit') }}" class="dropdown-item">
				<i class="{{ $frontend ? 'fa fa-envelope' : 'icon-mail5' }} mr-2"></i>
				{{ $frontend ? __('frontend/auth.edit.email') : __('auth.edit.email') }}
			</a>

			<a href="{{ route('password.edit') }}" class="dropdown-item">
				<i class="{{ $frontend ? 'fa fa-lock' : 'icon-lock2' }} mr-2"></i>
				{{ $frontend ? __('frontend/auth.edit.password') : __('auth.edit.password') }}
			</a>

			<form method="POST" action="{{ route('logout') }}">
				@csrf
				<button type="submit" name="submit" value="submit" class="dropdown-item">
					<i class="{{ $frontend ? 'fa fa-power-off' : 'icon-switch2' }} mr-2"></i>
					{{ $frontend ? __('frontend/auth.logout') : __('auth.logout') }}
				</button>
			</form>
		</div>
	</li>
@endauth