<html>
<head>
  <script>
      var editor; // use a global for the submit and return data rendering in the examples

      $(document).ready(function() {
          var editor = new $.fn.dataTable.Editor( {} );

          editor = new $.fn.dataTable.Editor( {
              ajax: "<?php echo URL; ?>user/allUsers",
              table: "#example",
              fields: [ {
                  label: "User name:",
                  name: "user_name"
              }, {
                  label: "Email:",
                  name: "email"
              }
              ]
          } );

          var table = $('#example').DataTable( {
              lengthChange: false,
              ajax: "<?php echo URL; ?>user/allUsers",
              columns: [

                  { data: "id" },
                  { data: "user_name" },
                  { data: "email" }
              ],
              select: true
          } );

          // Display the buttons
        new $.fn.dataTable.Buttons( table, [
              { extend: "create", editor: editor },
              { extend: "edit",   editor: editor },
              { extend: "remove", editor: editor }
          ] );

          table.buttons().container()
              .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
      } );

  </script>

</head>
<body>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

    <thead>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
 <!--   <tfoot>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </tfoot>-->
</table>

</body>

</html>



