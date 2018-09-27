<textarea id="{{$id}}"  name="{{$name}}" {{$required}}>{!! $content !!}</textarea>
<script>
$('#{{$id}}').froalaEditor({
        imageUploadURL: '{{ config('froala.upload_url') }}',
        requestHeaders: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        toolbarSticky: true,
        

        imageUploadParams: {
          id: '{{$id}}'
        }
      })
        .on('froalaEditor.image.removed', function (e, editor, img) {
            $.ajax({
                method: "POST",
                url: "{{config('froala.remove_url')}}",
                data: {
                    src: img.attr('src')
                }
            })
            .done (function (data) {
                console.log ('image was deleted');
            })
            .fail (function () {
                console.log ('image delete problem');
            });
      });
      
        $('#{{$id}}').on('froalaEditor.contentChanged', function (e, editor, clickEvent) {
            $(window).trigger('resize');
        });

</script>
