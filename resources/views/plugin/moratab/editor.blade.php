
<style type="text/css">

    #ajax-message
    {
        position: absolute;
        left: 50%;
        top: 10px;
        width: 300px;
        text-align: center;
        background-color: #0d6aad;
        font-family: IRMitra;
        font-size: 18px;
        direction: rtl;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        transform: translateX(-50%);
        padding: 10px;
        color: white;
        z-index: 200;
        transition: 0.5s;
    }

    .ajax-message-hidden
    {
        visibility: hidden;
        opacity: 0;
    }

    .ajax-message
    {
        visibility: visible;
        opacity: 1;
    }

    .ajax-message-error
    {
        color: white;
        background-color: #761c19 !important;
        visibility: visible;
        opacity: 1;
    }

</style>

<div style="position: absolute; left: 20px; top: 10px; z-index: 100; font-family: 'IRMitra';">
    <button class="btn btn-default" style=" font-size: 18px;"
            onclick="window.location='/project/{{$project->id}}/module/{{$module->id}}'">
        بازگشت
    </button>
    <button class="btn btn-primary" style=" font-size: 18px;" onclick="saveMoratab();">
 ذخیره
    </button>
</div>

<div id="ajax-message" class="ajax-message-hidden">

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
            $("#ajax-message").html( "با موفقیت ذخیره شد." );
            $("#ajax-message").removeClass( "ajax-message-hidden" ).addClass( "ajax-message" );
            setTimeout( function() {
                $("#ajax-message").addClass( "ajax-message-hidden" ).removeClass( "ajax-message" );
            } , 2000 );
        });

        request.fail(function( jqXHR, textStatus ) {
            console.log( "Error : " + textStatus );
            $("#ajax-message").html( "مشکلی در ذخیره اطلاعات بوجود آمد!" );
            $("#ajax-message").removeClass( "ajax-message-hidden" ).addClass( "ajax-message-error" );
            setTimeout( function() {
                $("#ajax-message").addClass( "ajax-message-hidden" ).removeClass( "ajax-message-error" );
            } , 2000 );
        });
    }

</script>

<?php include public_path() . '/plugins/moratab/nevise_editor.php'; ?>
