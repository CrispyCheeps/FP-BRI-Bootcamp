<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
            <li class="{{ set_active(['home']) }}"> <a href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i> <span>dashboard</span></a> </li>
                <li class="list-divider"></li>
                <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Order </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['form/allbooking']) }}" href="{{ route('form/allbooking') }}"> All order </a></li>
                        <li><a class="{{ request()->is('form/booking/edit/*') ? 'active' : '' }}"> Edit Booking </a></li>
                        <li><a class="{{ set_active(['form/booking/add']) }}" href="{{ route('form/booking/add') }}"> Add Booking </a></li>
                    </ul>
                </li>
                {{-- 
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['form/allcustomers/page']) }}" href="{{ route('form/allcustomers/page') }}"> All customers </a></li>
                        <li><a class="{{ request()->is('form/customer/edit/*') ? 'active' : '' }}"> Edit Customer </a></li>
                        <li><a class="{{ set_active(['form/addcustomer/page']) }}" href="{{ route('form/addcustomer/page') }}"> Add Customer </a></li>
                    </ul>
                </li>
                --}}
                <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Kategori </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['listCategories']) }}" href="{{ route('listCategories') }}">List Categories </a></li>
                        <li><a class="{{ set_active(['formAddCategory']) }}" href="{{ route('formAddCategory') }}"> Add Category </a></li>
                        
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-book"></i> <span> Products </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a  class="{{ set_active(['form/emplyee/list']) }}" href="{{ route('form/emplyee/list') }}">Product List </a></li>
                        <li><a  class="{{ set_active(['form/employee/add']) }}" href="{{ route('form/employee/add') }}">Add Product </a></li>
                        {{-- <li><a  class="{{ set_active(['form/leaves/page']) }}" href="{{ route('form/leaves/page') }}">Leaves </a></li> --}}
                </li>
                {{-- 
                <li class="submenu"> <a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="invoices.html">Invoices </a></li>
                        <li><a href="payments.html">Payments </a></li>
                        <li><a href="expenses.html">Expenses </a></li>
                        <li><a href="taxes.html">Taxes </a></li>
                        <li><a href="provident-fund.html">Provident Fund </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="salary.html">Employee Salary </a></li>
                        <li><a href="salary-veiw.html">Payslip </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#">
                        <i class="fa fa-user-plus"></i> 
                        <span> User Management </span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['users/add/new']) }}" href="{{ route('users/add/new') }}">Add User</a></li>
                        <li><a class="{{ set_active(['users/list/page']) }}" href="{{ route('users/list/page') }}">All User</a></li>
                        <li><a href="">User Log Activity </a></li>
                    </ul>
                </li>
                --}}
            </ul>
        </div>
    </div>
</div>