

         <!-- JSON File Reading -->
        <script type = "text/JavaScript">
        $("input#submit_button").click(function()
        {
            var login = 
            {
                username:"",password:""
            };

            $.ajax
            (

                {
                    
                    url: 'http://localhost/dhis/JSON/dataSets.json',
                    dataType: 'json',
                    // data:login,
                    contentType:'application/json;charset:utf-8',
                    crossDomain:true,
                    success: function(data)
                    {       
                        $.each(data.dataSets, function(a, values)
                        {
                          var val = "<tr>" + "<td>" + values.id + "</td>" + "<td>" + values.name + "</td>" + "</tr>";
                          $(val).appendTo("#data tbody");

                        });
                        $(document).ready( function ()
                     {
                       $('#data').dataTable();
                      } );
                    },
                    error: function(e)
                    {
                        alert("Error "+e);
                    }
                }

            );
             
              


        });

        </script>



       
        <script>
               

        </script>
    </body>
</html>






