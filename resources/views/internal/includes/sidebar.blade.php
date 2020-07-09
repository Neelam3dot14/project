<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('img/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('img/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div><!--c-sidebar-brand-->

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('internal.internaluser.dashboard')"
                :active="activeClass(Route::is('admin.dashboard'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Dashboard')" />
        </li>

      
            <li class="c-sidebar-nav-title">@lang('System')</li>
            <li class="c-sidebar-nav-item">
                <x-utils.link
                    :href="route('internal.internaluser.profile')"
                    icon="c-sidebar-nav-icon cil-user"
                    class="c-sidebar-nav-link"
                    :text="__('My Profile')"
                    :active="activeClass(Route::is('internal.internaluser.profile'), 'c-active')" />
           </li>
           <li class="c-sidebar-nav-item">
                <x-utils.link
                    :href="route('internal.internaluser.editprofile')"
                    icon="c-sidebar-nav-icon cli-user"
                    class="c-sidebar-nav-link"
                    :text="__('Edit Profile')"
                    :active="activeClass(Route::is('internal.internaluser.editprofile'), 'c-active')" />
           </li>
           <li class="c-sidebar-nav-item">
                <x-utils.link
                    :href="route('internal.internaluser.change_password')"
                    icon="c-sidebar-nav-icon cli-user"
                    class="c-sidebar-nav-link"
                    :text="__('Change Password')"
                    :active="activeClass(Route::is('internal.internaluser.change_password'), 'c-active')" />
           </li>
           <li class="c-sidebar-nav-item">
                <x-utils.link
                    :href="route('internal.internaluser.2fauth')"
                    icon="c-sidebar-nav-icon cli-user"
                    class="c-sidebar-nav-link"
                    :text="__('Two Factor Authentication')"
                    :active="activeClass(Route::is('internal.internaluser.2fauth'), 'c-active')" />
           </li>
           
        
    </ul>

    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div><!--sidebar-->
