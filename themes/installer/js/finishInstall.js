function finishInstall() {
      $.ajax({
        url: 'finishinstall',
        type: 'post',
        dataType: "text",
        data: {},
        success: function(data) {
          let timerInterval
          Swal.fire({
            title: 'Finished!',
            html: 'You will be redirect to the front page <b></b> milliseconds.',
            timer: 5000,
            timerProgressBar: true,
            didOpen: () => {
              Swal.showLoading()
              timerInterval = setInterval(() => {
                const content = Swal.getContent()
                if (content) {
                  const b = content.querySelector('b')
                  if (b) {
                    b.textContent = Swal.getTimerLeft()
                  }
                }
              }, 100)
            },
            willClose: () => {
              clearInterval(timerInterval)
            }
          }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
              location.href = "/"
            }
          })
        }
      });
    }
