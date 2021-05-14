$(function() {
        $("#siteSettingsForm").on('submit', function(e) {
            e.preventDefault();

            var contactForm = $(this);

            $.ajax({
                url: contactForm.attr('action'),
                type: 'post',
                data: contactForm.serialize(),
                success: function(data){
                        Swal.fire({
                        title: data['title'],
                        text: data['msg'],
                        icon: data['icon']
                      })
                }
            });
        });
    });

    $(function() {
            $("#siteDatabaseForm").on('submit', function(e) {
                e.preventDefault();

                var contactForm = $(this);

                $.ajax({
                    url: contactForm.attr('action'),
                    type: 'post',
                    data: contactForm.serialize(),
                    success: function(data){
                            Swal.fire({
                            title: data['title'],
                            text: data['msg'],
                            icon: data['icon']
                          })
                    }
                });
            });
        });
