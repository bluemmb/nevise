
<div style="position: absolute; left: 20%; top: 10px; z-index: 100; font-family: 'IRMitra';">
    <button class="btn btn-default" style=" font-size: 18px;"
            onclick="window.location='/project/{{$project->id}}/module/{{$module->id}}'">
        بازگشت
    </button>
    <button class="btn btn-primary" style=" font-size: 18px;" onclick="saveMoratab();">
 ذخیره
    </button>
</div>

<meta name="_token" content="{!! csrf_token() !!}" />

<script type="text/javascript">

    var plugin_id = <?php echo($plugin->id); ?>;

    function saveMoratab()
    {
        var content = $('#moratab').text();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })


        var request = $.ajax({
            url: "/ajax/plugin/moratab/save",
            method: "POST",
            data: { "id" : plugin_id , "content" : content },
            dataType: "json"
        });

        request.done(function( msg ) {
            console.log( msg );
        });

        request.fail(function( jqXHR, textStatus ) {
            console.log( "Request failed: " + textStatus );
        });

        this.preventDefault();
    }

</script>

<?php include public_path() . '/plugins/moratab/index.blade.php'; ?>
