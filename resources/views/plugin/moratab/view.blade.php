
<div style="position: absolute; left: 20px; top: 10px; z-index: 100; font-family: 'IRMitra';">
    <button class="btn btn-default" style=" font-size: 18px;"
            onclick="window.location='/project/{{$project->id}}/module/{{$module->id}}'">
        بازگشت
    </button>
    <button class="btn btn-primary" style=" font-size: 18px;"
            onclick="window.location='/project/{{$project->id}}/module/{{$module->id}}/plugin/{{$plugin->id}}/editor'">
        ویرایش
    </button>
</div>

<?php include public_path() . '/plugins/moratab/nevise_view.php'; ?>
