<div class="inline-page-menu my-4">
    <ul class="list-unstyled">
        <li class="{{ Request::is('admin/report/admin-earning') ?'active':'' }}"><a href="{{route('admin.report.admin-earning')}}">{{\App\CPU\translate('Admin_Earning')}}</a></li>
        <li class="{{ Request::is('admin/report/seller-earning') ?'active':'' }}"><a href="{{route('admin.report.seller-earning')}}">{{\App\CPU\translate('Seller_Earning')}}</a></li>
    </ul>
</div>
