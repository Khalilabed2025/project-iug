<script>var hostUrl = "{{asset('admin/')}}";</script>
<!--begin::Javascript-->
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<!-- Bootstrap Core JS -->
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('admin/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('admin/js/scripts.bundle.js')}}"></script>
<script src="{{asset('admin/js/scripts.js')}}"></script>
<!--end::Global Javascript Bundle-->

@yield('scripts')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    
<!--end::Page Custom Javascript-->
<!--end::Javascript-->