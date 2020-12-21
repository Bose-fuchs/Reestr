<main>
    <div class="content">
        <table id="grid"></table>
        <div di="pager"></div>
    </div>

    <script>
        var mydata = <?php echo $jsonArray;?>; 
        $(document).ready(function () {
            $("#grid").jqGrid({
                datatype: "local",
				data: mydata,
                height: 550,
                autowidth: true,
                pager: "#pager",
                height: 550,
                autowidth: true,
                sortname: "Id",
                sortorder: "ASC",
                viewrecords: true,
                cellEdit: false,

                colModel: [
                    { label: '№', name: 'Id', width: 75, key:true, align: "center" },
                    { label: 'Дата', name: 'Date', width: 75, align: "center" },
                    { label: 'Проверяющий', name: 'shortname', width: 90, align: "center" },
                    { label: 'Проверяемый', name: 'ShortName', width: 100, align: "center" },
                    { label: 'Результат', name: 'Name', width: 80, align: "center" },
                ],
                viewrecords: true, // show the current page, data rang and total records on the toolbar
                caption: "План провок юридических лиц",

                onSelectRow : function(id){ 
                    console.log(id);
                }
            });
        });
    </script>
</main>
