@push('scripts')
    <script type="text/javascript" src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            tinymce.init({
                selector: '.editor',
                height: "{{ $height ?? 700 }}",
                theme: 'silver',
                plugins: [
                    "advlist autolink lists charmap hr pagebreak",
                    "searchreplace wordcount visualblocks visualchars insertdatetime nonbreaking",
                    "table contextmenu directionality emoticons paste textcolor code salintemplate kodeisian",
                ],
                toolbar1: "bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect | code | fontselect fontsizeselect | salintemplate | kodeisian",
                image_advtab: true,
                content_css: [
                    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                    '//www.tinymce.com/css/codepen.min.css'
                ],
                relative_urls: false,
                remove_script_host: false
            });
        });
    </script>
@endpush
