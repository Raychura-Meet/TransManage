<script src="{{ url('js/bootstrap.js') }}"></script>
<script src="{{ url('js/app.js') }}"></script>
<script src="{{ url('extensions/jquery/jquery.min.js') }}"></script>
<script src="{{ url('extensions/tinymce/tinymce.min.js') }}"></script>
<script src="{{ url('js/custom/custom.js') }}"></script>
<script src="{{ url('extensions/toastify-js/src/toastify.js') }}"></script>
<script src="{{ url('extensions/parsleyjs/parsley.min.js') }}"></script>
<script src="{{ url('js/pages/parsley.js') }}"></script>
<script src="{{ url('extensions/bootstrap-table/bootstrap-table.min.js') }}"></script>
<script src="{{ url('extensions/bootstrap-table/fixed-columns/bootstrap-table-fixed-columns.min.js') }}"></script>
<script src="{{ url('extensions/bootstrap-table/mobile/bootstrap-table-mobile.min.js') }}"></script>

<script src="{{ url('extensions/choices.js/public/ scripts/choices.js') }}"></script>
@yield('script')


@if (Session::has('success'))
    <script type="text/javascript">
        Toastify({
            text: '{{ Session::get('success') }}',
            duration: 6000,
            close: !0,
            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)"
        }).showToast()
    </script>
@endif


@if (Session::has('error'))
    <script type="text/javascript">
        Toastify({
            text: '{{ Session::get('error') }}',
            duration: 6000,
            close: !0,
            backgroundColor: '#dc3545' //"linear-gradient(to right, #dc3545, #96c93d)"
        }).showToast()
    </script>
@endif
