   $(function () {

            var new_dialog = function (type, row) {
                var dlg = $("#dialog-form").clone();
                //var id = dlg.find(("#id")),
                var name = dlg.find(("#name")),
            phone = dlg.find(("#phone")),
            address = dlg.find(("#address")),
           // password = dlg.find(("#password"));
                type = type || 'Create';
                var config = {
                    autoOpen: true,
                    height: 300,
                    width: 350,
                    modal: true,
                    buttons: {
                       // class="btn btn-success",
                        "Create an account": save_data,
                        "Cancel": function () {
                            dlg.dialog("close");
                        }
                    },
                    close: function () {
                        dlg.remove();
                    }
                };
                 if (type === 'Edit') {
                    config.title = "Edit User";
                    get_data();
                    delete (config.buttons['Create an account']);
                    config.buttons['Edit account'] = function () {
                        row.remove();
                        save_data();

                    };

                }
              dlg.dialog(config);

                function get_data() {

                }

                function save_data() {
                    $("#users tbody").append("<tr>" + "<td>" + name.val() +"</td>" + "<td>" + phone.val() + "</td>" + "<td>" + address.val() + "</td>" + "<td><a href='' class='edit'>E</a></td>" + "<td><span class='delete'><a href=''>D</a></span></td>" + "</tr>");
                    dlg.dialog("close");
                }
            };

            $(document).on('click', 'span.delete', function () {
                $(this).closest('tr').find('td').fadeOut(500,

        function () {
            // alert($(this).text());
            $(this).parents('tr:first').remove();
        });

                return false;
            });
            $(document).on('click', 'td a.edit', function () {
                new_dialog('Edit', $(this).parents('tr'));
                return false;
            });

            $("#create-user").button().click(new_dialog);

        });
    
       